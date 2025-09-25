<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Illuminate\Http\Request;

new #[Layout('components.layouts.app-backend')]
#[Title('Universal Tantra | Profile')] 
class extends Component {
    
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
    </div>
</div>

