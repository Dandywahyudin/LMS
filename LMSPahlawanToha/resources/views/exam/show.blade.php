<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">{{ $exam->title }}</h2>
    </x-slot>

    <div class="relative pb-[125%] h-0 overflow-hidden mt-4">
        <iframe src="{{ $exam->gform_link }}" class="absolute top-0 left-0 w-full h-full border-0" frameborder="0" allowfullscreen></iframe>
    </div>
</x-app-layout>
