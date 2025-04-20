<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ProductsImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Product([
            'fk' => $row['fk'],
            'cust_code' => $row['cust_code'],
            'ai_code' => $row['ai_code'],
            'cust_name' => $row['cust_name'],
            'conversion' => $row['conversion'],
            'stock' => $row['stock'],
        ]);
    }

    public function rules(): array
    {
        return [
            'fk' => 'required',
            'cust_code' => 'required|unique:products,cust_code',
            'ai_code' => 'required|unique:products,ai_code',
            'cust_name' => 'required',
            'conversion' => 'required',
            'stock' => 'required|integer',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'fk.required' => 'Kolom fk wajib diisi.',
            'cust_code.required' => 'Kolom cust_code wajib diisi.',
            'ai_code.required'    => 'Kolom ai_code wajib diisi.',
            'cust_name.required' => 'Kolom nama wajib diisi.',
            'conversion.required' => 'Conversion tidak boleh kosong.',
            'conversion.integer'  => 'Conversion harus berupa angka.',
            'stock.required'      => 'Stok tidak boleh kosong.',
            'stock.integer'       => 'Stok harus berupa angka.',
        ];
    }
}
