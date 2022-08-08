<?php

namespace App\Exports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class ProductsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Product::select('name',
        'category_id',
        'supplier_id',
        'product_code',
        'product_warehouse',
        'product_route',
        'product_image',
        'selling_price')->get();
    }

    public function headings(): array
    {
        return ['Product name',
        'Category',
        'Supplier',
        'ProductCode',
        'Product warehouse',
        'Product route',
        'Product image',
        'Selling price'];
    }
}
