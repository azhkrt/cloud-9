<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="canonical" href="https://on-0354.up.railway.app/">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>Cloud 9
    </title>
    <link rel="icon" type="image/png" href="/images/01.png">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <!--navbar-->
    <section class=" bg-[position:center_1rem] no-repeat bg-cover sticky top-0 z-50">
        <nav class="bg-slate-100/20 backdrop-blur-sm p-4">
            <div class="container flex items-center justify-between">
                <a href="/"
                    class="inline-block text-slate-900 text-3xl font-bold ml-auto rounded-md transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Cloud
                    9</a>
                <div class="justify-center items-center ml-auto">
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

    <!--hero-->
    <section>
        <div class=" bg-slate-50/50 bg-[url('/public/images/background-atas.gif')] bg-cover bg-center bg-fixed">
            <div class="justify-center items-center text-center px-60 py-48 backdrop-blur-sm bg-fixed">
                <p class="text-2xl font-light font-sans text-slate-950">
                    Selamat datang di Cloud 9, tempat di mana cita rasa manis dan kelezatan bertemu untuk
                    menciptakan pengalaman kuliner yang tak terlupakan.</p>
                <br><br>
                <p class="text-xl font-light font-serif text-slate-950">
                    Cloud 9 adalah sebuah restoran yang menyajikan beragam makanan <i>dessert</i> yang manis dan
                    tentunya lezat.</p>
                <br>
                <p class="text-lg font-extralight underline text-slate-950">
                    "Where Every Bite Feels Like Heaven"</p>
            </div>
    </section>

    <!--carrousel-->
    <section class="mb-14">
        <div>
            <div class="mt-20 mb-10">
                <p class="text-lg font-bold text-slate-950 text-center">Menu Makanan</p>
                <p class="text-center text-slate-600">Lihat beberapa gambar dari hidangan kami</p>
            </div>
            <!--button section-->
            <div class="bg-gray-50 p-4 rounded-lg shadow-md">
                <div class="h-10 mb-10 text-center">
                    <button class="mx-4 p-4 border-4 py-2 rounded-3xl transition-all hover:scale-105"
                        onclick="foodFilter('All Menus')">
                        <p class="text-lg transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">All
                            Menus</p>
                    </button>
                    <button class="mx-4 p-4 border-4 py-2 rounded-3xl transition-all hover:scale-105"
                        onclick="foodFilter('Cakes')">
                        <p class="text-lg transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Cakes
                        </p>
                    </button>
                    <button class="mx-4 p-4 border-4 py-2 rounded-3xl transition-all hover:scale-105"
                        onclick="foodFilter('Drinks')">
                        <p class="text-lg transition-all ease-in-out duration-200 hover:scale-125 active:scale-95  ">
                            Drinks</p>
                    </button>
                    <button class="mx-4 p-4 border-4 py-2 rounded-3xl transition-all hover:scale-110"
                        onclick="foodFilter('IceCream')">
                        <p class="text-lg transition-all ease-in-out duration-200 hover:scale-125 active:scale-95">Ice
                            Cream</p>
                    </button>

                </div>
                <div class="flex justify-end mb-4">
                    <button class="bg-slate-900 text-white px-4 mx-2 py-2
                    rounded-md"
                        onclick="geser('kanan')"> <- </button>
                            <button class="bg-slate-900 text-white px-4 py-2 rounded-md" onclick="geser('kiri')"> ->
                            </button>
                </div>
                <!--menu kali-->
                <div id="slider" class="flex space-x-4 overflow-x-auto">
                    <div class="item-Cakes w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food1.jpg" alt="Food 1" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Chocolate Lava Cake</h3>
                            <p class="text-gray-600">A decadent chocolate cake with a gooey molten center.</p>
                        </div>
                    </div>
                    <div class="item-Cakes w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food2.jpg" alt="Food 2" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="item-Cakes text-lg font-bold text-slate-950">Strawberry Cheesecake</h3>
                            <p class="text-gray-600">A creamy cheesecake topped with fresh strawberries and a strawberry
                                glaze.</p>
                        </div>
                    </div>
                    <div class="item-IceCream w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food3.jpg" alt="Food 3" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Matcha Green Tea Ice Cream</h3>
                            <p class="text-gray-600">A refreshing ice cream made with high-quality matcha green tea
                                powder.</p>
                        </div>
                    </div>
                    <div class="item-Drinks w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food4.jpg" alt="Food 4" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Vanilla Milkshake</h3>
                            <p class="text-gray-600">A classic milkshake made with creamy vanilla ice cream and
                                milk.
                            </p>
                        </div>
                    </div>
                    <div class="item-Drinks w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food4.jpg" alt="Food 4" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Vanilla Milkshake</h3>
                            <p class="text-gray-600">A classic milkshake made with creamy vanilla ice cream and milk.
                            </p>
                        </div>
                    </div>
                    <div class="item-Drinks w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food4.jpg" alt="Food 4" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Vanilla Milkshake</h3>
                            <p class="text-gray-600">A classic milkshake made with creamy vanilla ice cream and milk.
                            </p>
                        </div>
                    </div>
                    <div class="item-Drinks w-80 shrink-0 bg-white rounded-lg shadow-md">
                        <img src="images/food4.jpg" alt="Food 4" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h3 class="text-lg font-bold text-slate-950">Vanilla Milkshake</h3>
                            <p class="text-gray-600">A classic milkshake made with creamy vanilla ice cream and milk.
                            </p>
                        </div>
                    </div>
                </div>
    </section>

    <!--tentang-->
    <section>
        <div class="py-8 bg-slate-400/50">
            <p class="text-4xl font-bold text-slate-950 text-left px-6 my-10">Tentang Cloud 9: Sebuah Perjalanan ke
                Atas
                Awan</p>
            <div class="flex justify-center">
                <img src="images/bg-fil.jpg" alt="imgmid" class="h-96 object-cover rounded-lg opacity-80">
            </div>
            <div>
                <p class="text-gray-900 text-xl pt-14 px-56 my-10 justify-center text-center">
                    Cloud 9 lahir dari sebuah mimpi sederhana: menghadirkan kebahagiaan murni yang bisa dirasakan
                    melalui
                    indra perasa. Di sini, kami percaya bahwa setiap suapan dessert haruslah terasa seperti pelukan
                    hangat
                    atau hembusan angin yang menenangkan—seperti saat kamu sedang berada di "Cloud Nine" (puncak
                    kebahagiaan).
                </p>
            </div>
        </div>
        <div>
            <p class="text-4xl font-bold text-slate-950 text-left px-6 mt-16 mb-9">
                Apa yang Kami Sajikan?
            </p>
        </div>
        <div class="flex justify-center shadow-xl py-4">
            <img src="images/bg-saji.jpg" alt="imgmid" class="h-96 object-cover rounded-lg border-4 ">
            <img src="images/bg-saji2.jpg" alt="imgmid2" class="h-96 object-cover rounded-lg border-4 ml-4">
            <img src="images/bg-saji3.jpg" alt="imgmid3" class="h-96 object-cover rounded-lg border-4 ml-4">
        </div>
        <div class="px-40 my-10">
            <p class="text-center py-10 text-gray-900 text-xl">
                -> Kami bukan sekadar restoran dessert. <u>Kami adalah kurator rasa bagi para pencinta manis.</u> <-
                    </p>
                    <p class="text-center font-light text-gray-900 text-lg">
                        <u>Artisanal Cakes:</u> Dari Chocolate Lava yang meleleh hingga Strawberry Cheesecake yang
                        lembut,
                        setiap kue
                        kami dibuat secara handmade dengan bahan premium.
                        <br>
                        <u>Signature Ice Cream:</u> Es krim kami diproses secara perlahan untuk mendapatkan tekstur
                        sehalus
                        awan,
                        tersedia dalam berbagai rasa unik yang menyegarkan.
                        <br>
                        <u>Cloud Drinks:</u> Pilihan minuman mulai dari milkshake kental hingga teh artisan yang diracik
                        khusus
                        untuk
                        melengkapi momen manismu.
                    </p>
        </div>
        <section class="bg-stone-600/70 px-6 py-8">
            <div>
                <p class="text-4xl font-bold text-slate-950 text-left px-6 mt-16 mb-9">
                    Mengapa Memilih Cloud 9?
                </p>
            </div>
            <div class="flex justify-center py-4">
                <img src="images/bg-why.jpg" alt="imgmid" class="h-96 object-cover rounded-lg border-4 ">
                <img src="images/bg-why2.jpg" alt="imgmid2" class="h-96 object-cover rounded-lg border-4 ml-4">
                <img src="images/bg-why3.jpg" alt="imgmid3" class="h-96 object-cover rounded-lg border-4 ml-4">
            </div>
            <div class="px-40 my-10 flex justify-center text-center">
                <p class="text-4xl -mt-2">K</p>
                <p class="text-center font-light text-2xl text-gray-900 mr-9">ami menggabungkan teknik pembuatan kue
                    klasik
                    dengan sentuhan modern.
                    Kami
                    tidak
                    hanya mementingkan
                    rasa, tapi juga visual yang estetik dan suasana restoran yang nyaman. Bagi kami, Cloud 9 adalah
                    tempat
                    di mana kamu bisa sejenak melarikan diri dari hiruk-pikuk dunia dan memanjakan diri dalam kemewahan
                    rasa.
                </p>
            </div>
            </div>
        </section>

        <!--reservasi-->
        <section class="flex bg-orange-200/50 items-center">
            <div class=" flex-col justify-center pl-40 py-20">
                <p class="text-4xl font-bold text-slate-950 pb-4">
                    Reservasi
                </p>
                <p class="text-2xl pr-16">Anda bisa memesan meja di Cloud 9 untuk menikmati
                    kue-kue
                    lezat kami
                    dalam suasana yang nyaman dengan meng-klik tombol pesan meja di samping kanan.</p>
            </div>
            <div class="relative pr-16">
                <img src="images/man-cake.jpg" alt="imgmid"
                    class=" pl-11 my-12 shadow-xl shadow-black rounded-2xl">
            </div>
            <div>
                <button class="bg-orange-500 hover:bg-orange-600 text-white font-bold py-2 px-4 rounded"
                    onclick="window.location.href='{{ route('reservasi') }}'">
                    Pesan Meja
                </button>
            </div>
        </section>
        <section>

        </section>
        <script>
            function foodFilter(category) {
                const items = document.querySelectorAll('#slider > div');
                items.forEach(item => {
                    if (category === 'All Menus' || item.classList.contains(`item-${category.replace(' ', '-')}`)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }

            function geser(direction) {
                const slider = document.getElementById('slider');
                const scrollAmount = 300; // Adjust this value to control how much to scroll
                if (direction === 'kiri') {
                    slider.scrollBy({
                        left: scrollAmount,
                        behavior: 'smooth'
                    });
                } else {
                    slider.scrollBy({
                        left: -scrollAmount,
                        behavior: 'smooth'
                    });
                }
            }
        </script>
</body>

</html>
