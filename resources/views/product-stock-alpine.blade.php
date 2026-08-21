@php
    $totalStock = \App\Models\Product::sum('stock') ?? 0;
    $stockHabis = \App\Models\Product::where('stock', '<=', 0)->count();
@endphp

<div x-data="{ show: false }" class="mt-2 mb-4 p-4 bg-white dark:bg-gray-800 rounded-lg shadow-sm border border-gray-200 dark:border-gray-700">
    <!-- Tombol Toggle (Alpine.js) -->
    <button @click="show = !show" type="button" class="px-4 py-2 bg-indigo-600 text-white text-sm font-semibold rounded hover:bg-indigo-700 transition">
        <span x-show="!show">Show Stock Information</span>
        <span x-show="show">Hide Stock Information</span>
    </button>

    <!-- Konten Informasi (Muncul/Hilang secara reaktif tanpa AJAX) -->
    <div x-show="show" x-transition class="mt-4 flex gap-6 text-gray-700 dark:text-gray-300">
        <div class="px-4 py-2 bg-gray-50 dark:bg-gray-900 rounded border border-gray-100 dark:border-gray-700">
            <span class="font-semibold text-sm text-gray-500 dark:text-gray-400">Total Stock :</span>
            <span class="text-xl font-bold ml-2 text-indigo-600 dark:text-indigo-400">{{ $totalStock }}</span>
        </div>
        <div class="px-4 py-2 bg-red-50 dark:bg-red-900/30 rounded border border-red-100 dark:border-red-800">
            <span class="font-semibold text-sm text-red-500 dark:text-red-400">Stock Habis :</span>
            <span class="text-xl font-bold ml-2 text-red-600 dark:text-red-500">{{ $stockHabis }}</span>
        </div>
    </div>
</div>
