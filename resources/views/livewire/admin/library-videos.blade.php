<?php

use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\LibraryVideo;
use Illuminate\Support\Facades\Storage;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Videos')]
class extends Component
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function with(): array
    {
        return [
            'videos' => $this->loadVideos(),
        ];
    }

    public function updatedSearch()
    {
        $this->resetPage();
    }

    public function loadVideos()
    {
        return LibraryVideo::query()
            ->when($this->search, function ($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%")
                    ->orWhereRaw("DATE_FORMAT(created_at, '%a, %M %Y') like ?", ["%{$this->search}%"]);
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
    }

    public function delete($id)
    {
        $video = LibraryVideo::find($id);
        if (! $video) return;

        // you store full URL in DB: url('storage/lib-video/xxx.mp4')
        if ($video->video_path) {
            Storage::disk('public')->delete('lib-video/' . basename($video->video_path));
        }

        $video->delete();
    }
};
?>

<div x-data="{ modal: false, deleteId: null }">
    <x-frontend.c-header-md :message="'Videos'" />

    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="'Easily add new Video, view details, and delete those no longer needed.'"
    />

    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search videos...'"
            type="search"
            wire:model.live.debounce.250ms="search"
        />

        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Video'"
            :link="'/admin-library-videos/add'"
        />
    </div>

    <div class="mt-2 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm outline-1 outline-black/5 rounded-md">
                    <table class="relative min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <x-table.th class="py-3.5 pr-3 pl-4 sm:pl-6" :text="'Title'" />
                                <x-table.th :text="'Description'" />
                                <x-table.th :text="'Created At'" />
                                <x-table.th :text="'Action'" />
                            </tr>
                        </thead>

                        <tbody class="divide-y divide-gray-200 bg-white">
                            @if ($videos->isEmpty())
                                <tr>
                                    <td colspan="4" class="py-4 text-sm text-center">
                                        @if ($search)
                                            No videos match your search.
                                        @else
                                            No videos have been created yet.
                                        @endif
                                    </td>
                                </tr>
                            @else
                                @foreach ($videos as $video)
                                    <tr>
                                        <x-table.td :first="true" :text="$video->title" />
                                        <x-table.td :text="$video->description" />
                                        <x-table.td :text="$video->created_at->format('D, F Y')" />

                                        <x-table.td>
                                            <a
                                                wire:navigate
                                                href="/admin-library-videos/edit/{{ $video->id }}"
                                                class="text-slate-600 hover:text-slate-900"
                                            >
                                                Edit
                                            </a>

                                            <button
                                                type="button"
                                                x-on:click="modal = true; deleteId = {{ $video->id }}"
                                                class="ml-4 text-red-600 hover:text-red-900 cursor-pointer"
                                            >
                                                Delete
                                            </button>
                                        </x-table.td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>

                <div class="mt-4">
                    {{ $videos->links() }}
                </div>
            </div>
        </div>
    </div>

    <x-frontend.c-modal
        x-show="modal"
        :maxWidth="'xl'"
        :title="'Delete Video'"
        :descriptions="[
            'Are you sure you want to delete this video? This action cannot be undone',
        ]"
        :confirmed="'$wire.delete(deleteId);'"
        :src="asset('img-icon/bin.png')"
        :alt="'Delete Icon'"
        :textConfirm="'Confirm'"
    />
</div>
