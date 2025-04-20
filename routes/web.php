<?php

use App\Exports\MaterialExport;
use App\Exports\ProductExport;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DownloadTemplateMaterialController;
use App\Http\Controllers\ForecastController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProducttController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseOrderController;
use Maatwebsite\Excel\Facades\Excel;

// Route::get('/', function () {
//     return view('welcome');
// });

//------------- Login Route
Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);



//------------- Dashboard Route
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');



//------------- Materials Route
// 1. Drop All Data Material
Route::delete('/materials/drop-all', [MaterialController::class, 'dropAll'])->name('materials.dropAll'); //

// 2. Download Template Material
Route::get('/download/template', [MaterialController::class, 'downloadTemplate'])->name('download.template');

// 3. Export Material
Route::get('/export-materials', function () {
    return Excel::download(new MaterialExport, 'Materials.xlsx');
})->name('export.materials');

// 4. Import Material
Route::post('/materials/import', [MaterialController::class, 'import'])->name('materials.import');

// 5. Material Route Resource
Route::resource('/materials', MaterialController::class)
    ->middleware('auth')
    ->names([
        'index' => 'dashboard.menu-materials.index',
        'create' => 'dashboard.menu-materials.create',
        'store' => 'dashboard.menu-materials.store',
        'show' => 'dashboard.menu-materials.show',
        'edit' => 'dashboard.menu-materials.edit',
        'update' => 'dashboard.menu-materials.update',
        'destroy' => 'dashboard.menu-materials.destroy'
    ]);




//------------- Products Route

// 1. Drop All Data Products
Route::delete('/products/drop-all', [ProducttController::class, 'dropAll'])->name('products.dropAll'); //

// 2. Download Template Products
Route::get('/download/template', [ProducttController::class, 'downloadTemplate'])->name('download.template');

// 3. Export Products
Route::get('/export-products', function () {
    return Excel::download(new ProductExport, 'Products.xlsx');
})->name('export.products');

// 4. Import Products
Route::post('/products/import', [ProducttController::class, 'import'])->name('products.import');

// 5. Product Route Resource
Route::resource('/products', ProducttController::class)
    ->middleware('auth')
    ->names([
        'index' => 'dashboard.menu-products.index',
        'create' => 'dashboard.menu-products.create',
        'store' => 'dashboard.menu-products.store',
        'show' => 'dashboard.menu-products.show',
        'edit' => 'dashboard.menu-products.edit',
        'update' => 'dashboard.menu-products.update',
        'destroy' => 'dashboard.menu-products.destroy'
    ]);

//------------- Forecast Route

Route::get('/forecast', [ForecastController::class, 'index'])->middleware('auth');

//------------- PO Material Route

Route::get('/pomaterial', [PurchaseOrderController::class, 'index'])->middleware('auth');

//------------- Profile Route

Route::resource('/dashboard/profile', ProfileController::class)
    ->middleware('auth')
    ->names(['index' => 'dashboard.menu-profile.index']);
