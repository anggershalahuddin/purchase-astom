<?php

namespace App\Http\Controllers;

use App\Exports\MaterialExport;
use App\Imports\MaterialsImport;
use App\Models\Material;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        // dd($query);
        if ($query) {


            $materials = Material::where('cust_name', 'like', "%{$query}%")
                ->orWhere('cust_code', 'like', "%{$query}%")
                ->orWhere('ai_code', 'like', "%{$query}%")
                ->orderBy('cust_code', 'asc')
                ->orderBy('cust_name', 'asc')
                ->paginate(10);
        } else {
            $materials = Material::orderBy('cust_code', 'desc')->paginate(20);
        }

        if ($request->ajax()) {
            return view('dashboard.menu-materials.partials.table', compact('materials'))->render();
        }

        return view('dashboard.menu-materials.index', ['materials' => $materials]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.menu-materials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cust_code' => 'required|unique:materials,cust_code',
            'ai_code' => 'required|unique:materials,ai_code',
            'cust_name' => 'required',
            'stock' => 'required',
        ]);
        // dd($validatedData);

        Material::create($validatedData);

        return redirect()->route('dashboard.menu-materials.index')->with('success', 'Material berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //Untuk menampilkan view
        return view(
            'dashboard.menu-materials.edit',
            ['material' => $material]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //untuk proses editnya
        $rules = [
            'cust_code' => 'required',
            'ai_code' => 'required',
            'cust_name' => 'required',
            'stock' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Material::where('id', $material->id)
            ->update($validatedData);


        return redirect('/materials')->with('success', 'Data berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        Material::destroy($material->id);
        // $material->delete(); // Menghapus material langsung

        return redirect('/materials')->with('success', 'Data material berhasil dihapus');
    }

    public function downloadTemplate()
    {
        $filePath = public_path('files/Template-Material.xlsx');
        return response()->download($filePath, 'Template-Material.xlsx');
    }

    // public function export()
    // {
    //     return Excel::download(new MaterialExport, 'Materials.xlsx');
    // }

    public function dropAll()
    {
        Material::truncate(); // atau ->delete()
        return redirect('/materials')->with('success', 'Semua data berhasil dihapus.');
    }

    public function import(Request $request)
    {
        $import = new MaterialsImport;

        Excel::import($import, $request->file('file')); // <-- proses import dulu

        $failures = $import->failures(); // <-- lalu ambil failure-nya setelah import

        if ($failures->isNotEmpty()) {
            return back()->with([
                'importError' => 'Data Gagal Diimport! Cek kembali data Anda.',
                'failures' => $failures
            ]);
        }

        return back()->with('success', 'Import berhasil!');
    }
}
