{{-- table Section --}}
<div class="w-full overflow-x-auto">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs bg-slate-300 text-gray-700 uppercase">
            <tr>
                <th scope="col" class="px-6 py-2 text-nowrap">
                    No
                </th>
                <th scope="col" class="px-6 py-2">
                    FK
                </th>
                <th scope="col" class="px-6 py-2">
                    CUST Code
                </th>
                <th scope="col" class="px-6 py-2">
                    AI Code
                </th>
                <th scope="col" class="px-6 py-2">
                    CUST Name
                </th>
                <th scope="col" class="px-6 py-2 flex flex-col">
                    <span>Conversion</span>
                    <span class="lowercase text-red-700">gr/pcs</span>
                </th>
                <th scope="col" class="px-6 py-2">
                    Stock
                </th>
                <th scope="col" class="px-6 py-2">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $product)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-slate-100">
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $products->firstItem() + $loop->index }}
                    </th>
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->fk }}
                    </th>
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->cust_code }}
                    </th>
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->ai_code }}
                    </th>
                    <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $product->cust_name }}
                    </th>
                    <td class="px-6 py-2">
                        {{ $product->conversion }}
                    </td>
                    <td class="px-6 py-2">
                        {{ $product->stock }}
                    </td>
                    <td class="px-6 py-2 flex flex-row">
                        <a href="/products/{{ $product->id }}/edit"
                            class="text-white bg-blue-700 hover:bg-blue-800 rounded-lg text-xs px-4 py-2 me-2">Edit</a>
                        <button type="button" onclick="openDeleteProductModal({{ $product->id }})"
                            class="focus:outline-none text-white bg-red-700 hover:bg-red-800 rounded-lg text-xs px-2 py-2">Delete</button>
                    </td>
                </tr>
            @empty
                <tr class="bg-white border-b text-gray-900">
                    <td colspan="9" class="px-3 py-4 text-center text-gray-500">
                        Tidak ada data product ditemukan.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
    <span
        class="text-xs font-normal text-gray-900 flex items-center justify-center px-3 h-8 rounded-md leading-tight gap-2">
        Showing {{ $products->firstItem() }} to {{ $products->lastItem() }} of {{ $products->total() }} entries
    </span>
    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
        {{-- First Page Link --}}
        @if ($products->onFirstPage())
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-l-lg">First</span>
            </li>
        @else
            <li>
                <a href="{{ $products->url(1) }}"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-800 bg-white border border-gray-300 rounded-l-lg hover:bg-blue-50 hover:text-gray-900">First</a>
            </li>
        @endif

        {{-- Previous Page Link --}}
        @if ($products->onFirstPage())
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300">Previous</span>
            </li>
        @else
            <li>
                <a href="{{ $products->previousPageUrl() }}"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-blue-50 hover:text-gray-900">Previous</a>
            </li>
        @endif

        {{-- Pagination Elements --}}
        @foreach ($products->getUrlRange(max(1, $products->currentPage() - 1), min($products->lastPage(), $products->currentPage() + 1)) as $page => $url)
            @if ($page == $products->currentPage())
                <li>
                    <span
                        class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-100">{{ $page }}</span>
                </li>
            @else
                <li>
                    <a href="{{ $url }}"
                        class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">{{ $page }}</a>
                </li>
            @endif
        @endforeach

        {{-- Next Page Link --}}
        @if ($products->hasMorePages())
            <li>
                <a href="{{ $products->nextPageUrl() }}"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-800 bg-white border border-gray-300 hover:bg-blue-50 hover:text-gray-900">Next</a>
            </li>
        @else
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300">Next</span>
            </li>
        @endif

        {{-- Last Page Link --}}
        @if ($products->currentPage() == $products->lastPage())
            <li>
                <span
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-r-lg">Last</span>
            </li>
        @else
            <li>
                <a href="{{ $products->url($products->lastPage()) }}"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-800 bg-white border border-gray-300 rounded-r-lg hover:bg-blue-50 hover:text-gray-900">Last</a>
            </li>
        @endif
    </ul>
</nav>

@include('dashboard.menu-products.partials.delete-modal')
