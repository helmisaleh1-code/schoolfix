<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SchoolFix</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-100 min-h-screen">
    <div class="flex min-h-screen">
        <aside class="w-72 bg-slate-900 text-white p-6 shadow-2xl">
            <div class="mb-10">
                <h1 class="text-3xl font-extrabold tracking-wide">SchoolFix</h1>
                <p class="text-slate-300 text-sm mt-2">School Facility Report System</p>
            </div>

            <nav class="space-y-3">
                <a href="{{ route('dashboard') }}" class="block px-4 py-3 rounded-xl bg-slate-800 hover:bg-slate-700 transition">
                    Dashboard
                </a>

                <a href="{{ route('reports.index') }}" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Data Laporan
                </a>

                <a href="{{ route('reports.create') }}" class="block px-4 py-3 rounded-xl hover:bg-slate-800 transition">
                    Tambah Laporan
                </a>
            </nav>

            <div class="mt-12 p-4 rounded-2xl bg-slate-800">
                <p class="text-sm text-slate-300">Startup Project</p>
                <h3 class="text-lg font-bold mt-1">Pelaporan Kerusakan Sekolah</h3>
                <p class="text-sm text-slate-400 mt-2">
                    Membantu sekolah mengelola laporan fasilitas rusak secara digital.
                </p>
            </div>
        </aside>

        <main class="flex-1 p-8">
            <div class="flex justify-between items-center mb-8">
                <div>
                    <h2 class="text-3xl font-bold text-slate-800">@yield('title')</h2>
                    <p class="text-slate-500 mt-1">Kelola laporan kerusakan sekolah dengan cepat dan efisien.</p>
                </div>
                <div>
                    <a href="{{ route('reports.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-xl shadow">
                        + Buat Laporan
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="mb-6 bg-green-100 border border-green-200 text-green-700 px-4 py-3 rounded-xl">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
</body>
</html>