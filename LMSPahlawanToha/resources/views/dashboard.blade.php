<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Silahkan Kerjakan ') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        {{-- <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <!-- Container untuk iframe yang responsif -->
                
            </div>
        </div> --}}
        <div class="relative pb-[125%] h-0 overflow-hidden">
            <iframe 
                src="https://docs.google.com/forms/d/e/1FAIpQLSdUTmt7eTrSQ2g4lclEC85u8JF7IiNFL0LC-F_pW7SyfThnSQ/viewform?embedded=true" 
                class="absolute top-0 left-0 w-full h-full border-0"
                frameborder="0" 
                marginheight="0" 
                marginwidth="0">
                Memuat…
            </iframe>
        </div>
    </div>
</x-app-layout>