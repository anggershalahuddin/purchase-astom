<?php

namespace App\Imports;

use App\Models\Material;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsFailures;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class MaterialsImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Material([
            'cust_code' => $row['cust_code'],
            'ai_code' => $row['ai_code'],
            'cust_name' => $row['cust_name'],
            'stock' => $row['stock'],
        ]);
    }

    public function rules(): array
    {
        return [
            'cust_code' => 'required|unique:materials,cust_code',
            'ai_code' => 'required|unique:materials,ai_code',
            'cust_name' => 'required',
            'stock' => 'required|integer',
        ];
    }

    public function customValidationMessages()
    {
        return [
            'cust_code.required' => 'Kolom cust_code wajib diisi.',
            'ai_code.required'    => 'Kolom ai_code wajib diisi.',
            'cust_name.required' => 'Kolom nama customer wajib diisi.',
            'stock.required'      => 'Stok tidak boleh kosong.',
            'stock.integer'       => 'Stok harus berupa angka.',
        ];
    }
}
