<x-filament-widgets::widget>
    <x-filament::section>
        <div class="flex items-center justify-between mb-4">
            <h2 class="text-lg font-bold text-gray-800 dark:text-white">Informasi Stok Produk</h2>
            <x-filament::button wire:click="$refresh" color="primary">
                Refresh Data
            </x-filament::button>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">Total Product</p>
                <p class="text-3xl font-bold text-gray-900 dark:text-white mt-1">{{ $totalProduct }}</p>
            </div>
            
            <div class="p-4 bg-gray-50 dark:bg-gray-800 rounded-lg border border-gray-100 dark:border-gray-700">
                <p class="text-sm text-gray-500 dark:text-gray-400 font-medium">Total Stock</p>
                <p class="text-3xl font-bold text-blue-600 dark:text-blue-400 mt-1">{{ $totalStock ?? 0 }}</p>
            </div>
            
            <div class="p-4 bg-red-50 dark:bg-red-900/30 rounded-lg border border-red-100 dark:border-red-800">
                <p class="text-sm text-red-500 dark:text-red-400 font-medium">Stock Habis</p>
                <p class="text-3xl font-bold text-red-600 dark:text-red-500 mt-1">{{ $stockHabis }}</p>
            </div>
        </div>
    </x-filament::section>
</x-filament-widgets::widget>
