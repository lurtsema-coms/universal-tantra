<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;
use App\Models\User;


new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Admin Users')] 
class extends Component {
    public function with(): array
    {
        return [
            'users'=> $this->loadUser()
        ];
    }
    public function loadUser()
    {
        return User::where('id', '!=', Auth::id())->get(); 
        // return User::all();
    }
    public function deleteUser($id)
    {
        $deleteUser = User::findOrFail($id);
        $deleteUser->delete();
    }
}; ?>

<div x-data="{ modal: false, deletedId: null }">
    <x-frontend.c-header-md
        :message="'Users'" 
    />
    <x-backend.c-paragraph
        :class="'max-w-3xl'"
        :message="
            '
                The User Account Settings Dashboard provides a centralized view of all user accounts, allowing admins to easily create new accounts, edit details, and deactivate users for better management and security.
            '
        " 
    />
    <div class="mt-4 flex items-center gap-4">
        <x-frontend.c-input 
            :class="'w-full max-w-sm shadow-sm outline-1 outline-black/5 focus:outline-slate-800/40'"
            :placeholder="'Search account...'"
            type="search"
            wire:model.live.debounce.250ms="search"
        />
        <x-backend.c-button
            :class="'bg-black text-white shrink-0'"
            :text="'Add Account'"
            :link="'/admin-users/add'"
        />
    </div>
    <div class="mt-2 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle px-4 sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-sm outline-1 outline-black/5 rounded-md">
                    <table class="relative min-w-full divide-y divide-gray-300">
                        <thead class="bg-gray-50">
                            <tr>
                                <x-table.th class="py-3.5 pr-3 pl-4 sm:pl-6" :text="'Email'" />
                                <x-table.th :text="'Name'" />
                                <x-table.th :text="'Role'" />
                                <x-table.th :text="'Created At'" />
                                <x-table.th :text="'Action'" />
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($users as $user)
                                <tr>
                                    <x-table.td  :text="$user->email"/>
                                    <x-table.td  :text="$user->name"/>
                                    <x-table.td  :text="$user->role" />
                                    <x-table.td  :text="$user->created_at" />
                                    <x-table.td>
                                        <a wire:navigate href="/admin-users/edit/{{$user->id}}" class=" text-slate-600 hover:text-slate-900">Edit</a>
                                        <button
                                            x-on:click="modal=true; deleteId = $event.target.getAttribute('delete-id')"
                                            :delete-id="{{$user->id}}"
                                            class="ml-4 text-red-600 hover:text-red-900 cursor-pointer"
                                        >
                                            Delete
                                        </button>
                                    </x-table.td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <x-frontend.c-modal
        x-show="modal"
        :maxWidth="'xl'"
        :title="'Delete User'" 
        :descriptions="[
            'Are you sure you want to delete this user? This action cannot be undone',
        ]"
        :confirmed="'
            $wire.deleteUser(deleteId);
        '"
        :src="asset('img-icon/bin.png')"
        :alt="'Delete Icon'"
        :textConfirm="'Confirm'"
    />
</div>
