<?php

use Livewire\WithFileUploads;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Models\LibraryRead;
use App\Livewire\Forms\ReadForm;
use Illuminate\Support\Str;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Texts')]
class extends Component
{
    use WithFileUploads;

    public ReadForm $form;

    public $read;
    public $new_img_path = null;
    public $db_img_path = '';

    public function mount($id)
    {
        $this->read = LibraryRead::findOrFail($id);
        
        $this->form->title = $this->read->title;
        $this->form->description = $this->read->description;
        $this->form->img_path = $this->read->img_path;
        
        $this->db_img_path = $this->read->img_path;
    }

    public function save()
    {
        $this->validate();

        // if no existing image and no new image, require one
        if (! $this->db_img_path && ! $this->new_img_path) {
            $this->validate(['form.img_path' => 'required']);
        }

        // if a new image is uploaded, validate + replace
        if ($this->new_img_path) {
            $this->validate([
                'new_img_path' => 'required|image|max:2048',
            ]);

            // delete old public file (Option B)
            if ($this->db_img_path) {
                $old = public_path(parse_url($this->db_img_path, PHP_URL_PATH));
                if (file_exists($old)) @unlink($old);
            }

            // move new file to /public/lib-img-read
            $uuid = substr(Str::uuid()->toString(), 0, 8);
            $file_name = $uuid . '.' . $this->new_img_path->getClientOriginalExtension();

            $this->new_img_path->move(public_path('lib-img-read'), $file_name);

            // save URL (Option B)
            $this->form->img_path = url('lib-img-read/' . $file_name);
        }

        $this->read->update([
            'title' => $this->form->title,
            'description' => $this->form->description,
            'img_path' => $this->form->img_path,
        ]);

        $this->db_img_path = $this->read->img_path;

        $this->reset('new_img_path');

        session()->flash('message', 'Text updated successfully!');
    }

    public function removeImage()
    {
        if ($this->new_img_path) {
            $this->reset('new_img_path');
        } else {
            // remove existing img_path from form (optional behavior)
            $this->reset('form.img_path');
            $this->db_img_path = '';
        }
    }
};
?>

<div class="relative sm:py-12">
    <x-backend.c-back :href="'/admin-library-read'" />

    <div class="w-full max-w-xl rounded-md sm:outline-black/5 sm:outline-1 sm:shadow-sm mx-auto p-6">
        <x-backend.c-paragraph
            :class="'font-bold'"
            :message="'Edit Read'"
        />

        <form wire:submit="save">
            <div class="space-y-4 mt-4">
                <div class="grid md:grid-cols-1 gap-4">
                    <x-frontend.c-input
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Text Title'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter text title'"
                        :id="'text-title'"
                        :isRequired="true"
                        type="text"
                        wire:model="form.title"
                        :error="$errors->first('form.title')"
                    />
                </div>

                <x-frontend.c-textarea
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40 h-52'"
                    :label="'Text Description'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter text description'"
                    :isRequired="true"
                    :id="'text-description'"
                    wire:model="form.description"
                    :error="$errors->first('form.description')"
                />

                <x-frontend.c-single-img
                    :label="'Replace Text Image (optional)'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :isRequired="true"
                    wire:model="new_img_path"
                    :error="$errors->first('new_img_path') ?: $errors->first('form.img_path')"
                />

                @if ($new_img_path)
                    <div class="relative inline-block rounded outline-1 outline-black/5 shadow-sm p-1 overflow-hidden hover:outline-slate-800/40">
                        <img
                            class="h-36 w-36 object-cover rounded-xs"
                            src="{{ $new_img_path->temporaryUrl() }}"
                            alt="New Text Image Preview"
                        />
                        <button
                            wire:click="removeImage"
                            type="button"
                            class="cursor-pointer absolute top-0 right-0"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-nuetral-600 p-2 rounded-bl-md bg-white hover:text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                @elseif ($form->img_path)
                    <div class="relative inline-block rounded outline-1 outline-black/5 shadow-sm p-1 overflow-hidden hover:outline-slate-800/40">
                        <img
                            class="h-36 w-36 object-cover rounded-xs"
                            src="{{ $form->img_path }}"
                            alt="Text Image Preview"
                        />
                        <button
                            wire:click="removeImage"
                            type="button"
                            class="cursor-pointer absolute top-0 right-0"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-nuetral-600 p-2 rounded-bl-md bg-white hover:text-red-600">
                                <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 0 0 0-7.5 0" />
                            </svg>
                        </button>
                    </div>
                @endif

                <div class="flex">
                    <x-backend.c-button
                        :class="'bg-black mt-2 text-white ml-auto'"
                        :text="'Update'"
                        type="submit"
                    />
                </div>

                <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
            </div>
        </form>
    </div>
</div>
