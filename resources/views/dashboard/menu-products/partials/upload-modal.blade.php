<div id="UploadModal"
    class="fixed z-50 right-0 inset-0 bg-black bg-opacity-50 flex justify-center items-center shadow-lg shadow-black hidden opacity-0 transition-opacity duration-300">
    <div
        class="bg-white text-gray-800 rounded-lg shadow-lg p-6 w-2/5 transform scale-95 transition-transform duration-300 relative">

        <button onclick="closeUploadModal()"
            class="text-gray-600 hover:text-gray-900 hover hover:bg-gray-300 rounded-md absolute right-2 top-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                class="size-5 m-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Konten modal -->
        <form action="{{ route('products.import') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="flex flex-col gap-4">
                <label for="file"
                    class="flex flex-col items-center justify-center w-full h-64 mt-5 border-2 border-gray-300 border-dashed rounded-lg curs7or-pointer bg-gray-50 hover:bg-gray-100">
                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                        <svg id="uploadIcon" class="w-8 h-8 mb-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M13 13h3a3 3 0 0 0 0-6h-.025A5.56 5.56 0 0 0 16 6.5 5.5 5.5 0 0 0 5.207 5.021C5.137 5.017 5.071 5 5 5a4 4 0 0 0 0 8h2.167M10 15V6m0 0L8 8m2-2 2 2" />
                        </svg>
                        <p id="uploadText" class="mb-2 text-sm text-gray-500 dark:text-gray-400">Click to upload or drag
                            and drop<br>XLS, XLSX, or CSV (MAX. 200kb)</br></p>
                    </div>
                    <input id="file" name="file" type="file" class="hidden" required />
                    <a href="{{ route('download.template') }}"
                        class="my-3 text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        Download Template Excel
                    </a>
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white text-sm py-2 px-4 rounded-md">
                        Upload
                    </button>
                </label>
            </div>
        </form>
    </div>
</div>
