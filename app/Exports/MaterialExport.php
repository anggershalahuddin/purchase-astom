<?php

namespace App\Exports;

use App\Models\Material;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class MaterialExport implements FromCollection, WithHeadings, WithMapping
{
    private $no = 1;
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return Material::select('cust_code', 'ai_code', 'cust_name', 'stock')->get();
    }

    public function map($Material): array
    {
        return [
            $this->no++, // nomor urut
            $Material->cust_code,
            $Material->ai_code,
            $Material->cust_name,
            $Material->stock,
        ];
    }

    public function headings(): array
    {
        return [
            'No',
            'CUST_CODE',
            'AI_CODE',
            'CUST_NAME',
            'STOCK',
        ];
    }
}
