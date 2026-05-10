@extends('layouts.app')

@section('title', 'Edit Laporan')

@section('content')
<form action="{{ route('reports.update', $report->id) }}" method="POST" class="space-y-4">
    @csrf
    @method('PUT')

    <div>
        <label class="block mb-1 font-medium">Nama Pelapor</label>
        <input type="text" name="reporter_name" class="w-full border rounded-lg p-3" value="{{ old('reporter_name', $report->reporter_name) }}">
    </div>

    <div>
        <label class="block mb-1 font-medium">Lokasi</label>
        <input type="text" name="location" class="w-full border rounded-lg p-3" value="{{ old('location', $report->location) }}">
    </div>

    <div>
        <label class="block mb-1 font-medium">Jenis Kerusakan</label>
        <input type="text" name="damage_type" class="w-full border rounded-lg p-3" value="{{ old('damage_type', $report->damage_type) }}">
    </div>

    <div>
        <label class="block mb-1 font-medium">Deskripsi</label>
        <textarea name="description" class="w-full border rounded-lg p-3">{{ old('description', $report->description) }}</textarea>
    </div>

    <div>
        <label class="block mb-1 font-medium">Status</label>
        <select name="status" class="w-full border rounded-lg p-3">
            <option value="Menunggu" {{ $report->status == 'Menunggu' ? 'selected' : '' }}>Menunggu</option>
            <option value="Diproses" {{ $report->status == 'Diproses' ? 'selected' : '' }}>Diproses</option>
            <option value="Selesai" {{ $report->status == 'Selesai' ? 'selected' : '' }}>Selesai</option>
        </select>
    </div>

    <div>
        <label class="block mb-1 font-medium">Tanggal Laporan</label>
        <input type="date" name="report_date" class="w-full border rounded-lg p-3" value="{{ old('report_date', $report->report_date) }}">
    </div>

    <button class="bg-yellow-500 text-white px-5 py-3 rounded-lg">Update</button>
</form>
@endsection