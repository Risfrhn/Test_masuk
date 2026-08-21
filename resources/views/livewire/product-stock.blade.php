<div class="p-6 bg-white rounded-lg shadow-md border border-gray-200">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-xl font-bold text-gray-800">Informasi Stok Produk</h2>
        <button wire:click="$refresh" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded hover:bg-indigo-700 transition">
            Refresh Data
        </button>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="p-4 bg-gray-50 rounded-lg border border-gray-100">
            <p class="text-sm text-gray-500 font-medium">Total Product</p>
            <p class="text-3xl font-bold text-gray-900 mt-1">{{ $totalProduct }}</p>
        </div>
        
        <div class="p-4 bg-gray-50 rounded-lg border border-gray-100">
            <p class="text-sm text-gray-500 font-medium">Total Stock</p>
            <p class="text-3xl font-bold text-blue-600 mt-1">{{ $totalStock ?? 0 }}</p>
        </div>
        
        <div class="p-4 bg-red-50 rounded-lg border border-red-100">
            <p class="text-sm text-red-500 font-medium">Stock Habis</p>
            <p class="text-3xl font-bold text-red-600 mt-1">{{ $stockHabis }}</p>
        </div>
    </div>
</div>
