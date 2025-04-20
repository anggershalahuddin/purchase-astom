<div id="alert-error"
    class="fixed z-50 right-0 inset-0 flex justify-center items-center w-full h-full bg-black bg-opacity-50 opacity-100 transition-opacity duration-300">
    <div class="relative p-4 w-full max-w-md h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <div class="w-12 h-12 rounded-full bg-red-100 p-2 flex items-center justify-center mx-auto mb-3.5">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                    stroke="currentColor" class="size-8 text-red-500">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M18.364 18.364A9 9 0 0 0 5.636 5.636m12.728 12.728A9 9 0 0 1 5.636 5.636m12.728 12.728L5.636 5.636" />
                </svg>
                <span class="sr-only">Error</span>
            </div>

            <!-- Pesan error utama -->
            <p class="mb-4 text-lg font-semibold text-gray-900 dark:text-white">
                {{ session('importError') }}
            </p>

            <!-- List kesalahan jika ada -->
            @if (session()->has('failures'))
                <div class="text-left text-sm bg-red-50 p-3 rounded mt-2 text-red-700 max-h-60 overflow-y-auto">
                    <h4 class="font-semibold mb-2">Detail kesalahan:</h4>
                    <ul class="space-y-2">
                        @php
                            $groupedFailures = collect(session()->get('failures'))->groupBy(
                                fn($failure) => $failure->row(),
                            );
                        @endphp

                        @foreach ($groupedFailures as $row => $failures)
                            <li class="border border-red-200 rounded">
                                <!-- Trigger Accordion -->
                                <button type="button"
                                    class="w-full text-left font-semibold text-gray-900 bg-red-100 p-2 rounded-t hover:bg-red-200 focus:outline-none"
                                    onclick="toggleAccordion('accordion-{{ $row }}')">
                                    Baris {{ $row - 1 }}
                                </button>

                                <!-- Accordion Content -->
                                <div id="accordion-{{ $row }}"
                                    class="max-h-0 overflow-hidden transition-all duration-500 ease-in-out bg-white p-2 rounded-b">
                                    <ul class="list-disc list-inside ml-4 text-sm text-red-800">
                                        @foreach ($failures as $failure)
                                            @foreach ($failure->errors() as $error)
                                                <li>Kolom <strong>{{ $failure->attribute() }}</strong> -
                                                    {{ $error }}</li>
                                            @endforeach
                                        @endforeach
                                    </ul>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Tombol tutup -->
            <button onclick="closeAlertErrorModal()" type="button"
                class="mt-4 py-2 px-3 text-sm font-medium text-center text-white rounded-lg bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none">
                Tutup
            </button>
        </div>
    </div>
</div>
