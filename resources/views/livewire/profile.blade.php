<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\User;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Profile')] 
class extends Component {
    public $user;
    public $form = [
        'firstname' => '',
        'lastname' => '',
        'email' => '',
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
        // dd($this->form['email']);
    }

    public function saveName()
    {
        $this->validate([
            'form.firstname'
        ]);
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
        <hr class=" border-neutral-300">
        <x-frontend.c-header-md
            :message="'Full Name'"
            class="py-5"
        />
        <div class="flex items-center gap-5">
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
        <div class="flex items-center">
            <x-backend.c-button
                :class="'bg-black mt-2 text-white ml-auto'"
                :text="'Save'"
            />
        </div>
        <hr class=" border-neutral-300 mt-5">
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
        </div>
        <div class="flex items-center">
            <x-backend.c-button
                :class="'bg-black mt-2 text-white ml-auto'"
                :text="'Save'"
            />
        </div>
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
        <div class="flex items-center gap-5">
            <x-frontend.c-input 
                :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                :label="'Current Password'"
                :labelClass="'!text-neutral-600 font-bold'"
                :placeholder="'Enter current password'"
                :id="'user-currentpassword'"
                :isRequired="true"
                type="text"
                wire:model="form.currentpassword"
                :error="$errors->first('form.currentpassword')"
            />
            <x-frontend.c-input 
                :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                :label="'New Password'"
                :labelClass="'!text-neutral-600 font-bold'"
                :placeholder="'Enter new password'"
                :id="'user-newpassword'"
                :isRequired="true"
                type="text"
                wire:model="form.newpassword"
                :error="$errors->first('form.newpassword')"
            />
            <x-frontend.c-input 
                :class="'w-full shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
                :label="'Confirm New Password'"
                :labelClass="'!text-neutral-600 font-bold'"
                :placeholder="'Re-type new password'"
                :id="'user-confirmpassword'"
                :isRequired="true"
                type="text"
                wire:model="form.confirmpassword"
                :error="$errors->first('form.confirmpassword')"
            />
        </div>
        <div class="flex items-center">
            <x-backend.c-button
                :class="'bg-black mt-2 text-white ml-auto'"
                :text="'Save'"
            />
        </div>
    </div>
</div>

