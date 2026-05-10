@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="space-y-8">
    <div class="bg-gradient-to-r from-blue-600 to-cyan-500 text-white rounded-3xl p-8 shadow-lg">
        <h3 class="text-3xl font-bold">Welcome to SchoolFix Dashboard Punya Helmi</h3>
        <p class="mt-3 text-blue-100 max-w-2xl">
            Pantau seluruh laporan kerusakan fasilitas sekolah, cek status perbaikan,
            dan kelola data laporan dengan tampilan yang modern dan terstruktur.
        </p>

        <div class="mt-6 flex gap-3">
            <a href="{{ route('reports.index') }}" class="bg-white text-blue-700 font-semibold px-5 py-3 rounded-xl shadow">
                Lihat Semua Laporan
            </a>
            <a href="{{ route('reports.create') }}" class="bg-blue-800/40 border border-white/30 text-white px-5 py-3 rounded-xl">
                Tambah Laporan Baru
            </a>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">
        <div class="bg-white rounded-2xl shadow p-6 border-l-8 border-blue-500">
            <p class="text-slate-500 text-sm">Total Laporan</p>
            <h3 class="text-4xl font-bold text-slate-800 mt-2">{{ $totalReports }}</h3>
            <p class="text-sm text-slate-400 mt-2">Semua laporan yang masuk</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 border-l-8 border-yellow-500">
            <p class="text-slate-500 text-sm">Menunggu</p>
            <h3 class="text-4xl font-bold text-slate-800 mt-2">{{ $waitingReports }}</h3>
            <p class="text-sm text-slate-400 mt-2">Belum diproses teknisi</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 border-l-8 border-orange-500">
            <p class="text-slate-500 text-sm">Diproses</p>
            <h3 class="text-4xl font-bold text-slate-800 mt-2">{{ $processReports }}</h3>
            <p class="text-sm text-slate-400 mt-2">Sedang dikerjakan</p>
        </div>

        <div class="bg-white rounded-2xl shadow p-6 border-l-8 border-green-500">
            <p class="text-slate-500 text-sm">Selesai</p>
            <h3 class="text-4xl font-bold text-slate-800 mt-2">{{ $doneReports }}</h3>
            <p class="text-sm text-slate-400 mt-2">Sudah diperbaiki</p>
        </div>
    </div>

    <div class="grid grid-cols-1 xl:grid-cols-3 gap-6">
        <div class="xl:col-span-2 bg-white rounded-2xl shadow p-6">
            <div class="flex justify-between items-center mb-5">
                <h3 class="text-xl font-bold text-slate-800">Laporan Terbaru</h3>
                <a href="{{ route('reports.index') }}" class="text-blue-600 font-semibold hover:underline">
                    Lihat semua
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full">
                    <thead>
                        <tr class="border-b text-slate-500 text-sm">
                            <th class="text-left py-3">Pelapor</th>
                            <th class="text-left py-3">Lokasi</th>
                            <th class="text-left py-3">Kerusakan</th>
                            <th class="text-left py-3">Status</th>
                            <th class="text-left py-3">Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($latestReports as $report)
                            <tr class="border-b hover:bg-slate-50 transition">
                                <td class="py-4 font-medium text-slate-700">{{ $report->reporter_name }}</td>
                                <td class="py-4">{{ $report->location }}</td>
                                <td class="py-4">{{ $report->damage_type }}</td>
                                <td class="py-4">
                                    @if($report->status == 'Menunggu')
                                        <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $report->status }}
                                        </span>
                                    @elseif($report->status == 'Diproses')
                                        <span class="bg-orange-100 text-orange-700 px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $report->status }}
                                        </span>
                                    @else
                                        <span class="bg-green-100 text-green-700 px-3 py-1 rounded-full text-sm font-medium">
                                            {{ $report->status }}
                                        </span>
                                    @endif
                                </td>
                                <td class="py-4">{{ $report->report_date }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-6 text-center text-slate-500">
                                    Belum ada data laporan.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="bg-white rounded-2xl shadow p-6">
            <h3 class="text-xl font-bold text-slate-800 mb-5">Ringkasan Sistem</h3>

            <div class="space-y-4">
                <div class="p-4 rounded-2xl bg-blue-50">
                    <p class="text-sm text-slate-500">Fokus Startup</p>
                    <h4 class="font-bold text-slate-800 mt-1">Digitalisasi Laporan Kerusakan</h4>
                </div>

                <div class="p-4 rounded-2xl bg-yellow-50">
                    <p class="text-sm text-slate-500">Target Pengguna</p>
                    <h4 class="font-bold text-slate-800 mt-1">Sekolah, Guru, Siswa, Teknisi</h4>
                </div>

                <div class="p-4 rounded-2xl bg-green-50">
                    <p class="text-sm text-slate-500">Tujuan</p>
                    <h4 class="font-bold text-slate-800 mt-1">Laporan cepat, penanganan terpantau</h4>
                </div>

                <div class="pt-4">
                    <a href="{{ route('reports.create') }}" class="block text-center bg-slate-900 text-white py-3 rounded-xl hover:bg-slate-800 transition">
                        Tambah Laporan Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection