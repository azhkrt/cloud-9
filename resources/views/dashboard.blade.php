<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cloud 9 -
    </title>
    <link rel="icon" type="image/png" href="/images/01.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <section
        class="bg-black bg-[url('/public/images/background-nav.png')] bg-[position:center_1rem] no-repeat bg-cover sticky top-0 z-50">
        <nav class="bg-slate-100/20 backdrop-blur-sm p-4">
            <div class="container flex items-center justify-between">
                <a href="/"
                    class="inline-block text-slate-900 text-3xl font-bold ml-80 rounded-md transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Cloud
                    9</a>
                <div>
                    <a href="/"
                        class="inline-block text-gray-700 hover:text-slate-900 px-6 py-2 rounded-md text-xl font-medium transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Home</a>
                    <a href="{{ route('reservasi') }}"
                        class=" inline-block text-gray-700 hover:text-slate-900 px-6 py-2 rounded-md text-xl font-medium transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Reservasi</a>
                    <a href="{{ route('login') }}"
                        class=" inline-block text-gray-700 hover:text-slate-900 px-6 py-2 rounded-md text-xl font-medium transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Login</a>
                    <a href="{{ route('register') }}"
                        class=" inline-block text-gray-700 hover:text-slate-900 px-6 py-2 rounded-md text-xl font-medium transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">
                        Register
                    </a>
                </div>
            </div>
        </nav>
    </section>
    <section>
        <div class="container mx-auto py-8">
            <h1 class="text-4xl font-bold text-center mb-6">Dashboard</h1>
            <p class="text-center text-lg mb-4">Selamat datang di dashboard Cloud 9!</p>
            <p class="text-center text-lg">Di sini Anda dapat mengelola reservasi, melihat laporan, dan melakukan banyak
                hal lainnya.</p>
        </div>
    </section>
</body>

</html>
