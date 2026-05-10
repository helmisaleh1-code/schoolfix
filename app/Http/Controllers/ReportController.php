<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {
        $reports = Report::latest()->get();
        return view('reports.index', compact('reports'));
    }

    public function create()
    {
        return view('reports.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'reporter_name' => 'required',
            'location' => 'required',
            'damage_type' => 'required',
            'description' => 'required',
            'status' => 'required',
            'report_date' => 'required|date',
        ]);

        Report::create($request->all());

        return redirect()->route('reports.index')->with('success', 'Laporan berhasil ditambahkan');
    }

    public function show(Report $report)
    {
        //
    }

    public function edit(Report $report)
    {
        return view('reports.edit', compact('report'));
    }

    public function update(Request $request, Report $report)
    {
        $request->validate([
            'reporter_name' => 'required',
            'location' => 'required',
            'damage_type' => 'required',
            'description' => 'required',
            'status' => 'required',
            'report_date' => 'required|date',
        ]);

        $report->update($request->all());

        return redirect()->route('reports.index')->with('success', 'Laporan berhasil diupdate');
    }

    public function destroy(Report $report)
    {
        $report->delete();

        return redirect()->route('reports.index')->with('success', 'Laporan berhasil dihapus');
    }
}