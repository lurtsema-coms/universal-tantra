@props([
    'label' => '',
    'labelClass' => '',
    'id' => null,
    'isRequired' => false,
    'error' => null,
])

<div 
    class="group {{ $imageSectionClass ?? '' }}"
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
        :class="{ 
            'outline-1 bg-slate-100/10 outline-slate-800/40': isDragging 
        }"
    >
        <div class="text-center pointer-events-none">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="mx-auto size-12 text-gray-300">
                <path d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" />
            </svg>

            <div class="mt-4 flex text-sm/6 text-gray-600 justify-center">
                <span class="font-bold text-neutral-600 group-hover:text-neutral-900">Upload a file</span>
                <p class="pl-1">or drag and drop</p>
            </div>

            <p class="text-xs/5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
        </div>

        <!-- hidden input -->
        <input 
            x-ref="fileInput"
            id="{{ $id ?? 'file-upload' }}" 
            type="file" 
            {{ $attributes->merge(['class' => 'hidden']) }} 
        />
    </div>

    {{-- Display error message --}}
    @if ($error)
        <p class="mt-2 text-red-500 text-sm">{{ $error }}</p>
    @endif
</div>
