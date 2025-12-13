@props([
    'label' => '',
    'labelClass' => '',
    'id' => null,
    'isRequired' => false,
    'error' => null,
])

<div
    class="group {{ $videoSectionClass ?? '' }}"
    x-data="{ isDragging: false }"
    @dragover.prevent="isDragging = true"
    @dragleave.prevent="isDragging = false"
    @drop.prevent="$refs.fileInput.files = $event.dataTransfer.files; $refs.fileInput.dispatchEvent(new Event('change')); isDragging = false"
    @click="$refs.fileInput.click()"
>
    <label class="text-white {{ $labelClass }}">
        {{ $label }}
        @if($isRequired)
            <x-frontend.c-required />
        @endif
    </label>

    <div
        class="mt-2 flex justify-center outline outline-black/5 shadow-sm rounded-md px-6 py-10 cursor-pointer transition
            group-hover:outline group-hover:bg-slate-100/10 group-hover:outline-slate-800/40
            bg-white/50
            {{ $error ? 'border-2 border-red-500' : '' }}"
        :class="{ 'outline-1 bg-slate-100/10 outline-slate-800/40': isDragging }"
    >
        <div class="text-center pointer-events-none">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="mx-auto size-12 text-gray-300">
                <path d="M15.75 6.75h1.5a2.25 2.25 0 0 1 2.25 2.25v9a2.25 2.25 0 0 1-2.25 2.25h-10.5A2.25 2.25 0 0 1 4.5 18v-9A2.25 2.25 0 0 1 6.75 6.75h1.5V6A2.25 2.25 0 0 1 10.5 3.75h3A2.25 2.25 0 0 1 15.75 6v.75Zm-6 0h4.5V6a.75.75 0 0 0-.75-.75h-3a.75.75 0 0 0-.75.75v.75Z"/>
            </svg>

            <div class="mt-4 flex text-sm/6 text-gray-600 justify-center">
                <span class="font-bold text-neutral-600 group-hover:text-neutral-900">Upload a video</span>
                <p class="pl-1">or drag and drop</p>
            </div>

            <p class="text-xs/5 text-gray-600">MP4, MOV, AVI, WMV up to 50MB</p>
        </div>

        <input
            x-ref="fileInput"
            id="{{ $id ?? 'video-upload' }}"
            type="file"
            {{ $attributes->merge(['class' => 'hidden', 'accept' => 'video/*']) }}
        />
    </div>

    @if ($error)
        <p class="mt-2 text-red-500 text-sm">{{ $error }}</p>
    @endif
</div>
