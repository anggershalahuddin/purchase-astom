<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="icon" type="image/png" href="{{ asset('/img/omron-icon.png') }}?v={{ time() }}">
    <title>Login</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.3/flowbite.min.js"></script>

</head>

<body class="bg-login bg-cover font-poppins">
    <div class="min-h-screen flex flex-col items-center py-32">
        <img src="{{ asset('/img/logo-astom.png') }}" alt="Astom-Logo" class="w-40 mb-5">
        <section class="flex flex-col justify-center items-center w-[25%]">

            {{-- Ini bagian Alert SUCCES & ERROR --}}
            @if (session()->has('success'))
                @include('login.partials.alert-success')
            @endif
            @if (session()->has('loginError'))
                @include('login.partials.alert-error')
            @endif

            <div>
                <form action="/" method="POST" class="w-full space-y-5 mb-3">
                    @csrf
                    <input type="text" name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                        autofocus @error('email') is-invalid @enderror
                        class="w-full h-14 border-none rounded-full px-7 shadow-sm shadow-gray-500 focus:outline-none">
                    @error('email')
                        <div class="invalid-feedback text-red-700 text-sm mt-1">
                            {{ $message }}
                        </div>
                    @enderror
                    <input type="password" name="password" id="password" placeholder="Password"
                        class="w-full h-14 border-none rounded-full px-7 mb-10 shadow-sm shadow-gray-500 focus:outline-none">
                    <br>
                    <br>
                    <button type="submit"
                        class="bg-blue-800 text-white font-medium w-full h-14 mt-20 border-none rounded-full hover:bg-blue-900 transition duration-200 shadow-sm shadow-gray-500 focus:outline-none">Login</button>
                </form>
            </div>

            <p class="text-sm mt-5 font-semibold">Need Help? Call Your Administrator</p>
        </section>
    </div>
</body>

</html>
