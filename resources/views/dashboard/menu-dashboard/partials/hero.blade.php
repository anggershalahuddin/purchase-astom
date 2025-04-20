<div
    class="w-full max-w-full bg-gradient-to-r from-blue-400 to-green-400 border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-row px-10 gap-10 items-center py-5">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="../img/bg-login.png" alt="Bonnie image" />
        <div class="flex flex-col">
            <h5 class="mb-1 text-2xl font-medium text-gray-900 dark:text-white">Selamat Datang Kembali
                <b>{{ old('name', Auth::user()->name) }}</b>
            </h5>
            <span class="text-md text-gray-800 dark:text-gray-400">Jangan Lupa Semangat Hari Ini</span>
        </div>

    </div>
</div>
