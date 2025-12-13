<?php

use Livewire\WithFileUploads;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\LibraryVideo;        // ✅ use your Video model
use App\Livewire\Forms\VideoForm;
use Illuminate\Support\Str;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Video')]
class extends Component
{
    use WithFileUploads;

    public VideoForm $form;

    public function save()
    {
        $this->validate();


        // ✅ Handle video upload
        if ($this->form->video) {
            $uuid = substr(Str::uuid()->toString(), 0, 8);
            $file_name = $uuid . '.' . $this->form->video->getClientOriginalExtension();

            $this->form->video->storePubliclyAs('lib-video', $file_name, 'public');
            $this->form->video = url('storage/lib-video/' . $file_name);
        }

        // ✅ Create DB record
        LibraryVideo::create([
            'title'       => $this->form->title,
            'video_path'  => $this->form->video,      
            'description' => $this->form->description,
            'created_by'  => auth()->user()->id,
        ]);

        $this->form->reset();
        session()->flash('message', 'Video added successfully!');
    }

    public function removeImage()
    {
        $this->reset('form.img_path');
    }
};
?>

<div class="relative sm:py-12">
    <x-backend.c-back :href="'/admin-library-videos'" />

    <div class="w-full max-w-xl rounded-md sm:outline-black/5 sm:outline-1 sm:shadow-sm mx-auto p-6">
        <x-backend.c-paragraph :class="'font-bold'" :message="'Add Video'" />

        <form wire:submit="save">
            <div class="space-y-4 mt-4">
                <div class="grid md:grid-cols-1 gap-4">
                    <x-frontend.c-input
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Video Title'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter video title'"
                        :id="'video-title'"
                        :isRequired="true"
                        type="text"
                        wire:model="form.title"
                        :error="$errors->first('form.title')"
                    />
                </div>

                <x-frontend.c-textarea
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40 h-32'"
                    :label="'Video Description'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter video description'"
                    :isRequired="true"
                    :id="'video-description'"
                    wire:model="form.description"
                    :error="$errors->first('form.description')"
                />

                <x-frontend.c-single-video
                    :label="'Upload Video'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :id="'video-file'"
                    :isRequired="true"
                    wire:model="form.video"
                    :error="$errors->first('form.video')"
                />

                @if ($form->video)
                <video class="mt-3 w-full rounded-md shadow-sm" controls>
                    <source src="{{ $form->video->temporaryUrl() }}">
                </video>
                @endif

                <div class="flex">
                    <x-backend.c-button
                        :class="'bg-black mt-2 text-white ml-auto'"
                        :text="'Add Video'"   {{-- ✅ fix button text --}}
                        type="submit"
                    />
                </div>

                <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
            </div>
        </form>
    </div>
</div>
