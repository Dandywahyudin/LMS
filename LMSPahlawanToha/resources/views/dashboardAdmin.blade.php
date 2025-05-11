<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Daftar Ujian') }}
            </h2>
            <a href="{{ route('exam.create') }}" 
            class="inline-block bg-blue-600 hover:bg-blue-700 text-black font-semibold py-2 px-4 rounded">
                + Tambah Ujian
            </a>
        </div>
    </x-slot>


    <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <table class="w-full table-auto">
                <thead>
                    <tr>
                        <th class="border px-4 py-2">Mata Pelajaran</th>
                        <th class="border px-4 py-2">Link Form</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($exams as $exam)
                        <tr>
                            <td class="border px-4 py-2">{{ $exam->mata_pelajaran }}</td>
                            <td class="border px-4 py-2">
                                <a href="{{ $exam->link_form }}" class="text-blue-600 underline" target="_blank">Lihat Form</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="text-center py-4">Belum ada ujian.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
