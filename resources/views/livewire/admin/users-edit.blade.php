<?php

use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Livewire\Forms\AddUserForm;
use App\Models\User;


new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Users')] 
class extends Component 
{
    public AddUserForm $form;
    public $user;
    public function mount($id)
    {
        $this->user = User::findOrFail($id);
        $this->form->firstname = $this->user->first_name;
        $this->form->lastname = $this->user->last_name;
        $this->form->email = $this->user->email;
        $this->form->role = $this->user->role;

    }

    public function save()
    {
        $this->validate([
            'form.firstname' => 'required|string|max:255',
            'form.lastname' => 'required|string|max:255',
            'form.email' => 'required|email|unique:users,email,' . $this->user->id,
            'form.role' => 'required|string|max:255',
        ]);

        $this->user->update([
            'first_name' => $this->form->firstname,
            'last_name' => $this->form->lastname,
            'email' => $this->form->email,
            'role' => $this->form->role,
        ]);


        session()->flash('message', 'Event updated successfully!');
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
                    Edit User
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
                        wire:model="form.firstname"
                        :error="$errors->first('form.firstname')"
                    />
                    <x-frontend.c-input 
                        :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                        :label="'Last Name'"
                        :labelClass="'!text-neutral-600 font-bold'"
                        :placeholder="'Enter last name'"
                        :id="'user-lastname'"
                        :isRequired="true"
                        type="text"
                        wire:model="form.lastname"
                        :error="$errors->first('form.lastname')"
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
                        wire:model="form.email"
                        :error="$errors->first('form.email')"
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
                        :error="$errors->first('form.role')"
                    />
                </div>

                <div class="flex">
                    <x-backend.c-button
                        :class="'bg-black mt-2 text-white ml-auto'"
                        :text="'Edit User'"
                        type="submit"
                    />
                </div>
                <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
            </div>
        </form>
    </div>
</div>