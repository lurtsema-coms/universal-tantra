<?php

use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\Event;
use App\Livewire\Forms\EventForm;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Events')] 
class extends Component 
{



}; ?>

<div class="relative sm:py-12">
    <x-backend.c-back 
        :href="'/admin-library-read'"
    />
    <div class="w-full max-w-xl rounded-md sm:outline-black/5 sm:outline-1 sm:shadow-sm mx-auto p-6">
        <x-backend.c-paragraph
            :class="'font-bold'"
            :message="
                '
                    Add Read
                '
            " 
        />
        <div class="space-y-4 mt-4">
            <div class="grid md:grid-cols-2 gap-4">
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Event Title'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter event title'"
                    :id="'event-title'"
                    :isRequired="true"
                    type="text"
                    wire:model="form.title"
                    :error="$errors->first('form.title')"
                />
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Event Date'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter event date'"
                    :id="'event-title'"
                    :isRequired="true"
                    type="date"
                    wire:model="form.date"
                    :error="$errors->first('form.date')"
                />
            </div>
            <x-frontend.c-textarea 
                :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40 h-32'"
                :label="'Event Description'"
                :labelClass="'!text-neutral-600 font-bold'"
                :placeholder="'Enter event description'"
                :isRequired="true"
                :id="'event-description'"
                wire:model="form.description"
                :error="$errors->first('form.description')"
            >
            </x-frontend.c-textarea>
            <x-frontend.c-single-img 
                :label="'Upload Event Image'"
                :labelClass="'!text-neutral-600 font-bold'"
                :isRequired="true"
                wire:model="form.img_path"
                :error="$errors->first('form.img_path')"
            />
            <div class="relative inline-block rounded outline-1 outline-black/5 shadow-sm p-1 overflow-hidden hover:outline-slate-800/40">
                <img 
                    class="h-36 w-36 object-cover rounded-xs" 
                    {{-- src="{{ $form->img_path->temporaryUrl() }}"  --}}
                    alt="Event Image Preview"
                />
                <button
                    wire:click="removeImage"
                    type="button"
                    class="cursor-pointer absolute top-0 right-0"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-8 text-nuetral-600 p-2 rounded-bl-md bg-white hover:text-red-600">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                    </svg>
                </button>
                </div>

            <div class="flex">
                <x-backend.c-button
                    :class="'bg-black mt-2 text-white ml-auto'"
                    :text="'Add Read'"
                    type="submit"
                />
            </div>
            <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
        </div>
    </div>
</div>
