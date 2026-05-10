@extends('layouts.app')

@section('title', 'Data Laporan')

@section('content')
<div class="flex justify-between items-center mb-5">
    <h3 class="text-xl font-semibold">Daftar Laporan Kerusakan</h3>
    <a href="{{ route('reports.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-lg">Tambah Laporan</a>
</div>

<table class="w-full border border-slate-200">
    <thead class="bg-slate-100">
        <tr>
            <th class="p-3 text-left">No</th>
            <th class="p-3 text-left">Pelapor</th>
            <th class="p-3 text-left">Lokasi</th>
            <th class="p-3 text-left">Jenis Kerusakan</th>
            <th class="p-3 text-left">Status</th>
            <th class="p-3 text-left">Tanggal</th>
            <th class="p-3 text-left">Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse($reports as $report)
        <tr class="border-t">
            <td class="p-3">{{ $loop->iteration }}</td>
            <td class="p-3">{{ $report->reporter_name }}</td>
            <td class="p-3">{{ $report->location }}</td>
            <td class="p-3">{{ $report->damage_type }}</td>
            <td class="p-3">{{ $report->status }}</td>
            <td class="p-3">{{ $report->report_date }}</td>
            <td class="p-3 flex gap-2">
                <a href="{{ route('reports.edit', $report->id) }}" class="bg-yellow-500 text-white px-3 py-1 rounded">Edit</a>
                <form action="{{ route('reports.destroy', $report->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button onclick="return confirm('Hapus laporan ini?')" class="bg-red-600 text-white px-3 py-1 rounded">Hapus</button>
                </form>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="7" class="p-4 text-center">Belum ada laporan.</td>
        </tr>
        @endforelse
    </tbody>
</table>
@endsection