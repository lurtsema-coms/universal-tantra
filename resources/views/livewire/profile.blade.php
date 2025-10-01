<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;


new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Profile')] 
class extends Component {
    public $user;
    public $form = [
        'firstname' => '',
        'lastname' => '',
        'email' => '',
        'role' => '',
        'currentpassword' => '',
        'newpassword' => '',
        'confirmpassword' => '',

    ];

    public function mount ($id)
    {
        $this->user = User::findOrFail($id);

        $this->form['firstname'] = $this->user->first_name;
        $this->form['lastname'] = $this->user->last_name;
        $this->form['email'] = $this->user->email;
        $this->form['role'] = $this->user->role;
    }

    public function saveInfo()
    {
        $this->validate([
            'form.firstname' => 'required|string|max:255',
            'form.lastname' => 'required|string|max:255',
            'form.email' => 'required|email|unique:users,email,' . $this->user->id,
        ]);

        $this->user->update([
            'first_name' => $this->form['firstname'],
            'last_name' => $this->form['lastname'],
            'email' => $this->form['email'],
        ]);

        session()->flash('message', 'Account Name updated successfully!');
    }

    public function updatePassword()
    {
    $this->validate([
        'form.currentpassword' => 'required|string',
        'form.newpassword' => 'required|string|min:8', 
        'form.confirmpassword' => 'required|string|same:form.newpassword',
    ], [
        'form.confirmpassword.same' => 'The new password confirmation does not match.',
    ]);

    if (!Hash::check($this->form['currentpassword'], $this->user->password)) {
        throw ValidationException::withMessages([
            'form.currentpassword' => 'Your current password is incorrect.',
        ]);
    }

    // Update password
    $this->user->update([
        'password' => Hash::make($this->form['newpassword']),
    ]);

    // Reset password fields
    $this->form['currentpassword'] = '';
    $this->form['newpassword'] = '';
    $this->form['confirmpassword'] = '';

    session()->flash('message', 'Password updated successfully!');
    
    }

}; ?>

<div>
    <x-frontend.c-header-md
        :message="'Profile'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                Real-time information and activities of your property
            '
        " 
    />
    <div>
        <div class="flex items-center py-10 flex-col lg:flex-row justify-start lg:justify-between gap-5">
            <div class=" flex items-center gap-5">
                <img src="{{ asset('img-icon/admin.png') }}" alt="profile_pic" class="size-32 rounded-full bg-gray-50 -outline-offset-1 outline-black/5">
                <div>
                    <x-backend.c-paragraph
                        :class="'font-bold'"
                        :message="
                            '
                                Profile picture
                            '
                        " 
                    />
                    <x-backend.c-paragraph
                        :message="
                            '
                                PNG, JPEG under 15Megabytes
                            '
                        " 
                    />
                </div>
            </div>
            <div class="flex items-center gap-3">
                <x-backend.c-button
                    :class="'bg-black mt-2 text-white ml-auto'"
                    :text="'Upload new picture'"
                />
                <x-backend.c-button
                    :class="'bg-black mt-2 text-white ml-auto'"
                    :text="'Delete'"
                />
            </div>
        </div>
        <hr class=" border-neutral-300 mb-5">
        <form wire:submit="saveInfo">
            <x-frontend.c-header-md
                :message="'Full Name'"
            />
            <x-backend.c-paragraph
                :class="'max-w-3xl'"
                :message="
                    '
                        Manage your accounts email address for the invoices
                    '
                "
                class="mb-5"
            />
            <div class="flex items-center flex-col lg:flex-row gap-5">
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'First Name'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter first name'"
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
            <x-frontend.c-header-md
                :message="'Contact Email'"
                class="mt-5"
            />
            <x-backend.c-paragraph
                :class="'max-w-3xl'"
                :message="
                    '
                        Manage your accounts email address for the invoices
                    '
                "
                class="mb-5"
            />
            <div class="flex items-center flex-col lg:flex-row justify-start lg:justify-between gap-5">
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Email'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter email'"
                    :id="'user-email'"
                    :isRequired="true"
                    type="text"
                    wire:model="form.email"
                    :error="$errors->first('form.email')"
                />
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Role'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    type="text"
                    disabled
                    wire:model="form.role"
                    :error="$errors->first('form.role')"
                />
            </div>
            <div class="flex items-center">
                <x-backend.c-button
                    type="submit"
                    :class="'bg-black mt-2 text-white ml-auto'"
                    :text="'Save'"
                />
            </div>
            <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
        </form>
        <hr class=" border-neutral-300 mt-5">
        <x-frontend.c-header-md
            :message="'Password'"
            class="mt-5" 
        />
        <x-backend.c-paragraph
            :class="'max-w-3xl'"
            :message="
                '
                    Modify your current password
                '
            "
            class="mb-5"
        />
        <form wire:submit="updatePassword">
            <div class="flex items-center flex-col lg:flex-row  gap-5">
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Current Password'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter current password'"
                    :isRequired="true"
                    type="password"
                    wire:model="form.currentpassword"
                    :error="$errors->first('form.currentpassword')"
                />
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'New Password'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Enter new password'"
                    :isRequired="true"
                    type="password"
                    wire:model="form.newpassword"
                    :error="$errors->first('form.newpassword')"
                />
                <x-frontend.c-input 
                    :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                    :label="'Confirm New Password'"
                    :labelClass="'!text-neutral-600 font-bold'"
                    :placeholder="'Re-type new password'"
                    :isRequired="true"
                    type="password"
                    wire:model="form.confirmpassword"
                    :error="$errors->first('form.confirmpassword')"
                />
            </div>
            <div class="flex items-center">
                <x-backend.c-button
                    :class="'bg-black mt-2 text-white ml-auto'"
                    :text="'Save'"
                    type="submit"
                />
            </div>
            <x-frontend.c-success-message class="mt-2 text-right !text-green-600 font-semibold" />
        </form>
    </div>
</div>

