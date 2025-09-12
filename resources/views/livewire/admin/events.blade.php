<?php

use Livewire\Attributes\Url;
use Livewire\WithPagination;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Storage;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Events')] 
class extends Component 
{
    use WithPagination;

    #[Url]
    public string $search = '';

    public function with() : array
    {
        return [
            'events' => $this->loadEvent()
        ];
    }
    
    public function loadEvent() 
    {
        return Event::query()
            ->when($this->search, function($query) {
                $query->where('title', 'like', "%{$this->search}%")
                    ->orWhere('description', 'like', "%{$this->search}%")
                    ->orWhereRaw("DATE_FORMAT(date, '%a, %M %Y') like ?", ["%{$this->search}%"])
                    ->orWhereRaw("DATE_FORMAT(created_at, '%a, %M %Y') like ?", ["%{$this->search}%"]);
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
    }


    public function delete($id)
    {
        $event = Event::find($id);
        Storage::disk('public')->delete('img-events/' . basename($event->img_path));
        $event->delete();
    }
}; ?>


<div x-data="{ modal: false, deletedId: null }">
    <x-frontend.c-header-md
        :message="'Events'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Easily add new events, view details, and delete those no longer needed.
            '
        " 
    />
    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input 
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search events...'"
            :id="'donate-amount'"
            type="search"
            wire:model.live.debounce.250ms="search"
        />
        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Event'"
            :link="'/admin-events/add'"
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
                            <x-table.th :text="'Event Date'" />
                            <x-table.th :text="'Created At'" />
                            <x-table.th :text="'Action'" />
                            {{-- <th scope="col" class="py-3.5 pr-4 pl-3 sm:pr-6">
                                <span class="sr-only">Edit</span>
                            </th> --}}
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white">
                        @if ($events->isEmpty())
                            <tr>
                                <td colspan="5" class="py-4 text-sm text-center">
                                    @if ($search)
                                        No events match your search.
                                    @else
                                        No events have been created yet.
                                    @endif
                                </td>
                            </tr>
                        @else
                            @foreach ($events as $event)                        
                                <tr>
                                    <x-table.td :first="true" :text="$event->title" />
                                    <x-table.td :text="$event->description" />
                                    <x-table.td :text="\Carbon\Carbon::parse($event->date)->format('D, F Y')" />
                                    <x-table.td :text="$event->created_at->format('D, F Y')" />
                                    <x-table.td>
                                        <a wire:navigate href="/admin-events/edit/{{ $event->id }}" class="text-slate-600 hover:text-slate-900">Edit</a>
                                        <button
                                            x-on:click="modal=true; deleteId = $event.target.getAttribute('delete-id')"
                                            :delete-id="{{ $event->id }}"
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
                {{ $events->links() }}
            </div>
        </div>
        </div>
    </div>
        <x-frontend.c-modal
        x-show="modal"
        :maxWidth="'xl'"
        :title="'Delete Event'" 
        :descriptions="[
            'Are you sure you want to delete this event? This action cannot be undone',
        ]"
        :confirmed="'
            $wire.delete(deleteId);
        '"
        :src="asset('img-icon/bin.png')"
        :alt="'Delete Icon'"
        :textConfirm="'Confirm'"
    />
</div>
