<x-app-layout>
@section('content')
<div class="max-w-xl mx-auto mt-10">
    <h2 class="text-xl font-bold mb-4">Tambah Ujian</h2>
    <form action="{{ route('exam.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="mata_pelajaran" class="block font-semibold">Mata Pelajaran</label>
            <input type="text" name="mata_pelajaran" id="mata_pelajaran" class="w-full border px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="link_form" class="block font-semibold">Link Google Form</label>
            <input type="url" name="link_form" id="link_form" class="w-full border px-3 py-2" required>
        </div>
        <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded">Simpan</button>
    </form>
</div>
@endsection
</x-app-layout>