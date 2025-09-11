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
    use WithFileUploads;

    // public EventForm $form;

    public function save()
    {

        session()->flash('message', 'Event created successfully!');
    }


}; ?>

<div class="relative sm:py-12">
    <x-backend.c-back 
        :href="'/admin-users'"
    />
    <div class="w-full max-w-xl rounded-md sm:outline-black/5 sm:outline-1 sm:shadow-sm mx-auto p-6">
        <x-backend.c-paragraph
            :class="'font-bold'"
            :message="
                '
                    Add User
                '
            " 
        />
        <form wire:submit="save">
            <div class="space-y-4 mt-4">
                <div class="grid md:grid-cols-2 gap-4">
                    <x-frontend.c-input 
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'First Name'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter first name'"
                        :id="'user-firstname'"
                        :isRequired="true"
                        type="text"
                        {{-- wire:model="form.title" --}}
                        {{-- :error="$errors->first('form.title')" --}}
                    />
                    <x-frontend.c-input 
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Last Name'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter last name'"
                        :id="'user-lastname'"
                        :isRequired="true"
                        type="text"
                        {{-- wire:model="form.title" --}}
                        {{-- :error="$errors->first('form.title')" --}}
                    />
                </div>
                <div class="grid md:grid-cols-2 gap-4">
                    <x-frontend.c-input 
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Email'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter email'"
                        :id="'user-email'"
                        :isRequired="true"
                        type="email"
                        {{-- wire:model="form.title"
                        :error="$errors->first('form.title')" --}}
                    />
                    <x-frontend.c-select 
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Role'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Select Role'"
                        :id="'user-role'"
                        :isRequired="true"
                        :options="['Admin', 'User']"
                        wire:model="form.role"
                    />
                </div>
                <div class="grid md:grid-cols-1 gap-4">
                    <span class=" text-xs italic text-neutral-600  ">Note: Default password is qwerty123</span>
                </div>
                <div class="flex">
                    <x-backend.c-button
                        :class="'bg-black mt-2 text-white ml-auto'"
                        :text="'Add User'"
                        type="submit"
                    />
                </div>
                <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
            </div>
        </form>
    </div>
</div>
