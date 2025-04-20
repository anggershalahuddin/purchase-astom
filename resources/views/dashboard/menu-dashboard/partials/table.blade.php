<div class="relative overflow-x-auto shadow-md sm:rounded-lg bg-white p-4">

    {{-- Caption Section --}}
    <div
        class="p-5 mb-5 rounded-md text-xl font-semibold text-left rtl:text-right bg-slate-400 dark:text-white dark:bg-gray-800">
        Report Material
        <p class="mt-1 text-sm font-normal dark:text-gray-400">Report ini adalah visualisasi material yang dimiliki oleh
            perusahaan, dengan ini pegawai bis amelihat
            kekurangan material di bulan tertentu.</p>
    </div>



    <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4 ">

        {{-- Search Section --}}
        <label for="table-search" class="sr-only">Search</label>
        <div class="relative">
            <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor"
                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                        clip-rule="evenodd"></path>
                </svg>
            </div>
            <input type="text" id="table-search"
                class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500"
                placeholder="Search for items">
        </div>

        {{-- Paging Section --}}
        <div class="flex items-center justify-end space-x-3">

            <div class="relative w-16">
                <select
                    class="block w-full appearance-none bg-white text-xs px-2 py-2 rounded-md border border-gray-300 focus:ring-2 focus:ring-blue-500">
                    <option value="5">5</option>
                    <option value="10" selected>10</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="25">25</option>
                </select>
                <div class="absolute inset-y-0 right-2 flex items-center pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
            </div>
            <span class="text-xs text-slate-600">entires per page</span>


            {{-- Action Section --}}
            <div class="relative">
                <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                    class="inline-flex items-center text-gray-500 bg-white border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-2 focus:ring-blue-500 font-medium rounded-lg text-sm px-3 py-1.5"
                    type="button">
                    <span>Action</span>
                    <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <!-- Dropdown menu -->
                <div id="dropdownAction"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44  start-0 absolute">
                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownActionButton">
                        <li>
                            <a href="#" class="flex flex-row items-center space-x-3 px-4 py-2 hover:bg-gray-100">
                                <svg class="w-4 h-4 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2 2 2 0 0 0 2 2h12a2 2 0 0 0 2-2 2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V4a2 2 0 0 0-2-2h-7Zm1.018 8.828a2.34 2.34 0 0 0-2.373 2.13v.008a2.32 2.32 0 0 0 2.06 2.497l.535.059a.993.993 0 0 0 .136.006.272.272 0 0 1 .263.367l-.008.02a.377.377 0 0 1-.018.044.49.49 0 0 1-.078.02 1.689 1.689 0 0 1-.297.021h-1.13a1 1 0 1 0 0 2h1.13c.417 0 .892-.05 1.324-.279.47-.248.78-.648.953-1.134a2.272 2.272 0 0 0-2.115-3.06l-.478-.052a.32.32 0 0 1-.285-.341.34.34 0 0 1 .344-.306l.94.02a1 1 0 1 0 .043-2l-.943-.02h-.003Zm7.933 1.482a1 1 0 1 0-1.902-.62l-.57 1.747-.522-1.726a1 1 0 0 0-1.914.578l1.443 4.773a1 1 0 0 0 1.908.021l1.557-4.773Zm-13.762.88a.647.647 0 0 1 .458-.19h1.018a1 1 0 1 0 0-2H6.647A2.647 2.647 0 0 0 4 13.647v1.706A2.647 2.647 0 0 0 6.647 18h1.018a1 1 0 1 0 0-2H6.647A.647.647 0 0 1 6 15.353v-1.706c0-.172.068-.336.19-.457Z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span>
                                    Export CSV
                                </span>
                            </a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

    </div>

    {{-- table Section --}}
    <div class="w-full overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs bg-slate-300 text-gray-700 uppercase">
                <tr>
                    <th scope="col" class="px-6 py-3 text-nowrap">
                        Material Code
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Material Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jan
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Feb
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mar
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Apr
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Mei
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jun
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Jul
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Agu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Sep
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Oct
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nov
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Des
                    </th>
                    {{-- <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th> --}}
                </tr>
            </thead>
            <tbody>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-slate-100">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        11231245
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>
                    <td class="px-6 py-4">
                        200
                    </td>

                    {{-- <td class="px-6 py-4 text-right">
                        <a href="#"
                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td> --}}
                </tr>
            </tbody>
        </table>
    </div>

    <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4"
        aria-label="Table navigation">
        <span
            class="text-xs font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing
            <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span
                class="font-semibold text-gray-900 dark:text-white">1000</span></span>
        <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
            </li>
            <li>
                <a href="#" aria-current="page"
                    class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
            </li>
            <li>
                <a href="#"
                    class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
            </li>

        </ul>
    </nav>
</div>
