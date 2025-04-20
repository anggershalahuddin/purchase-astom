@extends('layouts.master')
@section('title', 'Products | Add Product')
@section('container')

    <!-- Breadcrumb -->
    <nav class="mb-2 flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-white dark:bg-gray-800 dark:border-gray-700"
        aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
            <li class="inline-flex items-center">
                <a href="/dashboard"
                    class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                    <svg class="w-5 h-5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                        height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                            d="M11.293 3.293a1 1 0 0 1 1.414 0l6 6 2 2a1 1 0 0 1-1.414 1.414L19 12.414V19a2 2 0 0 1-2 2h-3a1 1 0 0 1-1-1v-3h-2v3a1 1 0 0 1-1 1H7a2 2 0 0 1-2-2v-6.586l-.293.293a1 1 0 0 1-1.414-1.414l2-2 6-6Z"
                            clip-rule="evenodd" />
                    </svg>
                    Home
                </a>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="/products"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Products</a>
                </div>
            </li>
            <li>
                <div class="flex items-center">
                    <svg class="rtl:rotate-180 block w-3 h-3 mx-1 text-gray-400 " aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 9 4-4-4-4" />
                    </svg>
                    <a href="#"
                        class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">Edit
                        Product</a>
                </div>
            </li>
        </ol>
    </nav>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-5">
        <h1 class="font-semibold text-slate-700 text-xl mt-3 mb-7">Edit Material
        </h1>
        <form method="post" action="/products/{{ $product->id }}">
            @method('put')
            @csrf
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="fk" class="block mb-2 text-sm font-medium text-gray-900">FK</label>
                    <input type="text" id="fk" name="fk"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('fk') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('fk', $product->fk) }}">
                    @error('fk')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="cust_code" class="block mb-2 text-sm font-medium text-gray-900">CUST Code</label>
                    <input type="text" id="cust_code" name="cust_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('cust_code') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('cust_code', $product->cust_code) }}">
                    @error('cust_code')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="ai_code" class="block mb-2 text-sm font-medium text-gray-900">
                        AI Code</label>
                    <input type="text" id="ai_code" name="ai_code"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('ai_code') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('ai_code', $product->ai_code) }}">
                    @error('ai_code')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="cust_name" class="block mb-2 text-sm font-medium text-gray-900">CUST Name</label>
                    <input type="text" id="cust_name" name="cust_name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('cust_name') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('cust_name', $product->cust_name) }}">
                    @error('cust_name')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="conversion" class="block mb-2 text-sm font-medium text-gray-900">Conversion</label>
                    <input type="text" id="conversion" name="conversion"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('conversion') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('conversion', $product->conversion) }}">
                    @error('conversion')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div>
                    <label for="stock" class="block mb-2 text-sm font-medium text-gray-900">Stock</label>
                    <input type="text" id="stock" name="stock"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 @error('stock') is_invalid @enderror"
                        placeholder="" autofocus value="{{ old('stock', $product->stock) }}">
                    @error('stock')
                        <div class="text-red-700 mt-1 text-xs">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="flex justify-end">
                <button type="submit"
                    class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                    Update
                </button>
            </div>
        </form>
    </div>


@endsection
