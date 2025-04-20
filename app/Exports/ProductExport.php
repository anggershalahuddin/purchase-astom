<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProductExport implements FromCollection, WithHeadings, WithMapping
{
    private $no = 1;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Product::select('fk', 'cust_code', 'ai_code', 'cust_name', 'conversion', 'stock')->get();
    }

    public function map($Product): array
    {
        return [
            $this->no++, // nomor urut
            $Product->fk,
            $Product->cust_code,
            $Product->ai_code,
            $Product->cust_name,
            $Product->conversion,
            $Product->stock,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'FK',
            'CUST_CODE',
            'AI_CODE',
            'CUST_NAME',
            'CONVERSION',
            'STOCK',
        ];
    }
}
