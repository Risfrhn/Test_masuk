<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use App\Models\Product;

class ProductStockOverview extends Widget
{
    protected static string $view = 'filament.widgets.product-stock-overview';
    
    // Agar widget menggunakan lebar penuh (full width) di dashboard
    protected int | string | array $columnSpan = 'full';

    public function render(): \Illuminate\Contracts\View\View
    {
        $totalProduct = Product::count();
        $totalStock = Product::sum('stock');
        $stockHabis = Product::where('stock', '<=', 0)->count();

        return view(static::$view, [
            'totalProduct' => $totalProduct,
            'totalStock' => $totalStock,
            'stockHabis' => $stockHabis,
        ]);
    }
}
