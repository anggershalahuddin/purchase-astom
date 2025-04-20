<?php

namespace App\Http\Controllers;

use App\Exports\ProductExport;
use App\Imports\ProductsImport;
use App\Models\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ProducttController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = $request->input('search');
        // dd($query);
        if ($query) {


            $product = Product::where('cust_name', 'like', "%{$query}%")
                ->orWhere('cust_code', 'like', "%{$query}%")
                ->orWhere('ai_code', 'like', "%{$query}%")
                ->orderBy('cust_code', 'asc')
                ->orderBy('cust_name', 'asc')
                ->paginate(10);
        } else {
            $product = Product::orderBy('id', 'desc')->paginate(20);
        }

        if ($request->ajax()) {
            return view('dashboard.menu-products.partials.table', compact('products'))->render();
        }

        return view('dashboard.menu-products.index', ['products' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.menu-products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fk' => 'required',
            'cust_code' => 'required|unique:products,cust_code',
            'ai_code' => 'required|unique:products,ai_code',
            'cust_name' => 'required',
            'conversion' => 'required',
            'stock' => 'required',
        ]);
        // dd($validatedData);

        Product::create($validatedData);

        return redirect()->route('dashboard.menu-products.index')->with('success', 'Product berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //Untuk menampilkan view
        return view(
            'dashboard.menu-products.edit',
            ['product' => $product]
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //untuk proses editnya
        $rules = [
            'fk' => 'required',
            'cust_code' => 'required',
            'ai_code' => 'required',
            'cust_name' => 'required',
            'conversion' => 'required',
            'stock' => 'required',
        ];

        $validatedData = $request->validate($rules);

        Product::where('id', $product->id)
            ->update($validatedData);


        return redirect('/products')->with('success', 'Data product berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        // $product->delete(); // Menghapus material langsung

        return redirect('/products')->with('success', 'Data product berhasil dihapus');
    }

    public function downloadTemplate()
    {
        $filePath = public_path('files/Template-Product.xlsx');
        return response()->download($filePath, 'Template-Product.xlsx');
    }

    // public function export()
    // {
    //     return Excel::download(new ProductExport, 'Products.xlsx');
    // }

    public function dropAll()
    {
        Product::truncate(); // atau ->delete()
        return redirect('/products')->with('success', 'Semua data produk berhasil dihapus.');
    }

    public function import(Request $request)
    {
        $import = new ProductsImport;

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
