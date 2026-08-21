<?php

namespace App\Livewire;

use Livewire\Component;

class ProductStock extends Component
{
    public function render()
    {
        $totalProduct = \App\Models\Product::count();
        $totalStock = \App\Models\Product::sum('stock');
        $stockHabis = \App\Models\Product::where('stock', '<=', 0)->count();

        return view('livewire.product-stock', [
            'totalProduct' => $totalProduct,
            'totalStock' => $totalStock,
            'stockHabis' => $stockHabis,
        ]);
    }
}
