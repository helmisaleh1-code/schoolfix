@extends('layouts.app')

@section('title', 'Tambah Laporan')

@section('content')
<form action="{{ route('reports.store') }}" method="POST" class="space-y-4">
    @csrf

    <div>
        <label class="block mb-1 font-medium">Nama Pelapor</label>
        <input type="text" name="reporter_name" class="w-full border rounded-lg p-3">
    </div>

    <div>
        <label class="block mb-1 font-medium">Lokasi</label>
        <input type="text" name="location" class="w-full border rounded-lg p-3">
    </div>

    <div>
        <label class="block mb-1 font-medium">Jenis Kerusakan</label>
        <input type="text" name="damage_type" class="w-full border rounded-lg p-3">
    </div>

    <div>
        <label class="block mb-1 font-medium">Deskripsi</label>
        <textarea name="description" class="w-full border rounded-lg p-3"></textarea>
    </div>

    <div>
        <label class="block mb-1 font-medium">Status</label>
        <select name="status" class="w-full border rounded-lg p-3">
            <option value="Menunggu">Menunggu</option>
            <option value="Diproses">Diproses</option>
            <option value="Selesai">Selesai</option>
        </select>
    </div>

    <div>
        <label class="block mb-1 font-medium">Tanggal Laporan</label>
        <input type="date" name="report_date" class="w-full border rounded-lg p-3">
    </div>

    <button class="bg-blue-600 text-white px-5 py-3 rounded-lg">Simpan</button>
</form>
@endsection