<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        hr.nav {
            border-top: 1px solid grey
        }

        hr.card {
            background: linear-gradient(to right, #FF0000, #CB14E8, #00FFF0);
            height: 5px;
            border-top-width: 0px;
        }

        hr.visi_misi {
            background: #00FFF0;
            height: 3px;
            border-top-width: 0px;
            width: 7%;
            align-items: center;
            justify-content: center;
        }

        .card_visi_misi {
            margin: auto;
            width: 50%;
        }
    </style>


</head>

<body>
    <header>
        <nav class="bg-biru border-gray-200 dark:bg-gray-900 dark:border-gray-700">
            <div class="max-w-screen-xl  flex flex-wrap items-center justify-between mx-auto p-3">
                <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                    <img src={{ Vite::asset('resources/images/jakarta.png') }} class="h-12" alt="Flowbite Logo" />
                    <span class="self-start text-2xl font-poppins whitespace-nowrap text-white mt-1.5">Website
                        Pelayanan</span>
                </a>
                <div class="hidden w-full md:block md:w-auto" id="navbar-multi-level">
                    <ul
                        class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-biru-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-biru dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                        <li>
                            <a href="/"
                                class="block m-4 py-2 px-3 font-poppins text-white md:hover:text-blue-700 rounded md:bg-transparent md:text-white md:p-0 md:dark:text-blue-500 dark:bg-blue-600 md:dark:bg-transparent"
                                aria-current="page">Beranda</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar1"
                                class="m-4 flex  font-poppins items-center justify-between w-full py-2 px-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Profil
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar1"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="/struktur-organisasi"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Struktur
                                            Organisasi</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Pelayanan
                                            Kerja</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="#"
                                class="m-4 font-poppins block py-2 px-3 text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Berita</a>
                        </li>
                        <li>
                            <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2"
                                class="m-4 flex  font-poppins items-center justify-between w-full py-2 px-3 text-white hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 md:w-auto dark:text-white md:dark:hover:text-blue-500 dark:focus:text-white dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Informasi
                                Publik
                                <svg class="w-2.5 h-2.5 ms-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg></button>
                            <!-- Dropdown menu -->
                            <div id="dropdownNavbar2"
                                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
                                    aria-labelledby="dropdownLargeButton">
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                            SKCK</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                            SKTM</a>
                                    </li>
                                    <li>
                                        <a href="#"
                                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Layanan
                                            Lapor RW</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                            <a class="text-white font-poppins border border-white bg-biru hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-2"
                                href="{{ route('login') }}">{{ __('Masuk') }}</a>
                            <a class="text-white font-poppins bg-kuning hover:bg-mustard focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 m-2"
                                href="{{ route('register') }}">{{ __('Register') }}</a>
                        </div>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <hr class="nav">
    <main>
        <section class="bg-biru dark:bg-gray-900 md:flex-row">
            <div class="items-center grid py-8 px-4 mx-auto max-w-screen-lg lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12">
                <div class="bg-biru/50 rounded-md absolute ml-16 place-self-center mr-96 lg:col-span-7" id="about"
                    role="tabpanel" aria-labelledby="about-tab">
                    <p class="mb-3 text-mustard">Selamat datang di Web Pelayanan RW. 09</p>
                    <div class="mb-3 text-3xl font-extrabold tracking-tight">
                        <p class="text-white text-5xl">Platform Digital untuk <span
                                class="text-biru_laut">Komunikasi</span></p>
                        <p class="text-white text-5xl"> & <span class="text-mustard">Kerjasama</span> di Lingkungan Kita
                        </p>
                    </div>
                    <p class="mb-3 text-lg w-full text-white">Kami adalah platform digital yang
                        dikhususkan
                        untuk meningkatkan komunikasi, transparansi, dan kerjasama di lingkungan Rukun Warga. Di sini,
                        Anda
                        dapat menemukan berbagai informasi penting, pengumuman, dan kegiatan yang berlangsung di
                        lingkungan
                        kita.
                        Mari bersama-sama menciptakan komunitas yang harmonis dan saling mendukung!</p>
                    <a href="#"
                        class="bg-merah_muda font-medium tracking-widest rounded-lg py-2 px-3 inline-flex items-center font-poppins text-white">
                        LIHAT SELENGKAPNYA
                    </a>
                </div>
                <div class="ml-96 h-96 w-100 lg:mt-0 lg:col-span-5 lg:flex">
                    <img src={{ Vite::asset('resources/images/carousel_1.png') }} alt="mockup">
                </div>
            </div>
            <hr class="card">
        </section>
        <section class="flex bg-biru dark:bg-gray-900">
            <div>
                <img src={{ Vite::asset('resources/images/icon_jaki.png') }} class="py-8" alt="">
            </div>
            <div class="pl-10">
                <p class="text-3xl text-white pt-5 font-bold">WEBSITE PELAYANAN RW. 09 KELURAHAN RAGUNAN</p class="text-2xl">
                <p class="w-8/12 text-white">SEKRETARIAT : JL. AMPERA RAYA. Gg. KANCIL, RT. 003/09 No. 6 
                    KELURAHAN RAGUNAN. KECAMATAN PASAR MINGGU, JAKARTA SELATAN
                    DKI JAKARTA</p>
            </div>
        </section>
        <section>
            <div
                class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="flex flex-col justify-between p-4 mr-20 ml-10 mt-20 mb-20 leading-normal">
                    <h5 class="mb-10 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">KETUA RUKUN WARGA
                        09
                    </h5>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Assalamu'alaikum Wr. Wb.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Puji syukur kehadirat Allah SWT atas
                        limpahan rahmat dan karunia-Nya, sehingga Website RW 09 dapat hadir di hadapan Anda. Website ini
                        merupakan salah satu bentuk upaya pengurus RW 09 dalam meningkatkan akses informasi dan
                        pelayanan
                        bagi masyarakat RW 09.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kemajuan teknologi informasi dan
                        komunikasi (TIK) telah membuka peluang baru untuk meningkatkan kualitas kehidupan masyarakat.
                    </p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Pengurus RW 09 berharap Website ini
                        dapat
                        menjadi sumber informasi yang bermanfaat bagi masyarakat RW 09. Kami juga berharap Website ini
                        dapat
                        menjadi wadah bagi masyarakat RW 09 untuk berpartisipasi dalam berbagai kegiatan RW.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Kritik dan saran dari Anda sangat kami
                        harapkan untuk meningkatkan kualitas Website ini.</p>
                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Wassalamu'alaikum Wr. Wb.</p>
                </div>
                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-80 md:rounded-none md:rounded-s-lg mr-20"
                    src={{ Vite::asset('resources/images/person.png') }} alt="">
            </div>
        </section>
        <div class=" w-full bg-biru shadow dark:bg-gray-800 dark:border-gray-700 ">
            <h2 class="text-white font-poppins text-3xl font-semibold text-center pt-20">VISI & MISI</h2>
            <div class="flex justify-center items-center">
                <hr class="visi_misi mt-2">
            </div>
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select tab</label>
                <select id="tabs"
                    class="bg-gray-50 border-0 border-b border-gray-200 text-gray-900 text-sm rounded-t-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 ">
                    <option>VISI</option>
                    <option>MISI</option>
                </select>
            </div>
            <div class="card_visi_misi p-10">
                <ul class="bg-white hidden text-sm font-medium text-center text-gray-500 divide-x divide-gray-200 rounded-lg sm:flex dark:divide-gray-600 dark:text-gray-400 rtl:divide-x-reverse"
                    data-tabs-active-classes="text-biru_awan hover:text-biru_awan"
                    data-tabs-inactive-classes="text-white hover:text-white" id="fullWidthTab"
                    data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full m-2">
                        <button id="visi-tab" data-tabs-target="#visi" type="button" role="tab"
                            aria-controls="visi" aria-selected="true"
                            class="inline-block w-full p-4  bg-biru font-poppins font-bold text-xl tracking-widest ">VISI
                            KAMI</button>
                    </li>
                    <li class="w-full m-2">
                        <button id="misi-tab" data-tabs-target="#misi" type="button" role="tab"
                            aria-controls="misi" aria-selected="false"
                            class="inline-block w-full p-4 bg-merah_muda font-poppins font-bold text-xl tracking-widest">MISI
                            KAMI</button>
                    </li>
                </ul>
            </div>
            <div id="fullWidthTabContent" class="border-t border-biru dark:border-gray-600">
                <div class="hidden p-4 bg-biru md:p-8 dark:bg-gray-800" id="visi" role="tabpanel"
                    aria-labelledby="visi-tab">
                    <h2 class="text-white">
                        Terwujudnya RW 09 yang aman, nyaman, sejahtera, dan bermasyarakat.
                    </h2>
                </div>
                <div class="hidden p-4 bg-biru rounded-lg md:p-8 dark:bg-gray-800" id="misi" role="tabpanel"
                    aria-labelledby="misi-tab">
                    <h2 class="text-white">
                        RW 09 berkomitmen untuk mewujudkan lingkungan yang aman, nyaman, dan
                        sejahtera bagi seluruh warganya. Hal ini diwujudkan melalui berbagai upaya, seperti meningkatkan
                        keamanan dan ketertiban lingkungan melalui ronda malam, pemasangan CCTV, dan kerja sama dengan
                        pihak kepolisian. Di samping itu, RW 09 juga fokus pada penciptaan lingkungan yang bersih,
                        sehat, dan asri dengan program kebersihan rutin, pengelolaan sampah yang efektif, dan penanaman
                        pohon secara berkala. Untuk mempererat tali persaudaraan dan rasa kekeluargaan antar warga, RW
                        09 aktif mengembangkan berbagai kegiatan sosial dan kemasyarakatan.
                    </h2>
                </div>
            </div>
        </div>
        <section>
            <div class="bg-khaki mb-20">
                <h2 class="text-black font-poppins text-3xl font-bold text-center pt-10 pb-10">
                    BERITA
                </h2>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-2 px-5 mb-24">
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/fogging.png') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">FOGGING CEGAH DBD</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/senam_rw.png') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">SENAM RW</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/kerja_bakti.png') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">KERJA BAKTI</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/posyandu.jpg') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">POSYANDU</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/karang_taruna.jpg') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">KARANG TARUNA</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
                <div class="p-5">
                    <img class="h-52 w-96 rounded-lg" src={{ Vite::asset('resources/images/jentik.jpeg') }}
                        alt="">
                    <p class="text-abu_abu text-2xl font-bold pt-3">PROGRAM JENTIK</p>
                    <p class="text-abu_abu">Lorem ipsumNeque porro quisquam est qui do lorem ipsum quia dolor sit amet,
                        Neque porro elit NeDque porro Lorem ipsum Neque porro Neque porro </p>
                </div>
            </div>
        </section>

        <div class="relative w-full h-96">
            <iframe class="absolute top-0 left-0 w-full h-full"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31726.56886516508!2d106.79797753476562!3d-6.2872304999999935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f21d657641cd%3A0x8fcb459156fb3841!2sJl.%20Ampera%20Raya%20No.3%2006%2C%20RT.12%2FRW.2%2C%20Ragunan%2C%20Ps.%20Minggu%2C%20Kota%20Jakarta%20Selatan%2C%20Daerah%20Khusus%20Ibukota%20Jakarta%2012560!5e0!3m2!1sen!2sid!4v1718003613027!5m2!1sen!2sid"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>
    <footer class="bg-biru dark:bg-gray-900">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="https://flowbite.com/" class="flex items-center">
                        <img src="https://flowbite.com/docs/images/logo.svg" class="h-8 me-3" alt="FlowBite Logo" />
                        <span
                            class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Resources</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://flowbite.com/" class="hover:underline">Flowbite</a>
                            </li>
                            <li>
                                <a href="https://tailwindcss.com/" class="hover:underline">Tailwind CSS</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Follow us</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="https://github.com/themesberg/flowbite" class="hover:underline ">Github</a>
                            </li>
                            <li>
                                <a href="https://discord.gg/4eeurUVvTy" class="hover:underline">Discord</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Legal</h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 Kelurahan Ragunan.
                </span>
                <div class="flex mt-4 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 8 19">
                            <path fill-rule="evenodd"
                                d="M6.135 3H8V0H6.135a4.147 4.147 0 0 0-4.142 4.142V6H0v3h2v9.938h3V9h2.021l.592-3H5V3.591A.6.6 0 0 1 5.592 3h.543Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Facebook page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 21 16">
                            <path
                                d="M16.942 1.556a16.3 16.3 0 0 0-4.126-1.3 12.04 12.04 0 0 0-.529 1.1 15.175 15.175 0 0 0-4.573 0 11.585 11.585 0 0 0-.535-1.1 16.274 16.274 0 0 0-4.129 1.3A17.392 17.392 0 0 0 .182 13.218a15.785 15.785 0 0 0 4.963 2.521c.41-.564.773-1.16 1.084-1.785a10.63 10.63 0 0 1-1.706-.83c.143-.106.283-.217.418-.33a11.664 11.664 0 0 0 10.118 0c.137.113.277.224.418.33-.544.328-1.116.606-1.71.832a12.52 12.52 0 0 0 1.084 1.785 16.46 16.46 0 0 0 5.064-2.595 17.286 17.286 0 0 0-2.973-11.59ZM6.678 10.813a1.941 1.941 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.919 1.919 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Zm6.644 0a1.94 1.94 0 0 1-1.8-2.045 1.93 1.93 0 0 1 1.8-2.047 1.918 1.918 0 0 1 1.8 2.047 1.93 1.93 0 0 1-1.8 2.045Z" />
                        </svg>
                        <span class="sr-only">Discord community</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 17">
                            <path fill-rule="evenodd"
                                d="M20 1.892a8.178 8.178 0 0 1-2.355.635 4.074 4.074 0 0 0 1.8-2.235 8.344 8.344 0 0 1-2.605.98A4.13 4.13 0 0 0 13.85 0a4.068 4.068 0 0 0-4.1 4.038 4 4 0 0 0 .105.919A11.705 11.705 0 0 1 1.4.734a4.006 4.006 0 0 0 1.268 5.392 4.165 4.165 0 0 1-1.859-.5v.05A4.057 4.057 0 0 0 4.1 9.635a4.19 4.19 0 0 1-1.856.07 4.108 4.108 0 0 0 3.831 2.807A8.36 8.36 0 0 1 0 14.184 11.732 11.732 0 0 0 6.291 16 11.502 11.502 0 0 0 17.964 4.5c0-.177 0-.35-.012-.523A8.143 8.143 0 0 0 20 1.892Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Twitter page</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 .333A9.911 9.911 0 0 0 6.866 19.65c.5.092.678-.215.678-.477 0-.237-.01-1.017-.014-1.845-2.757.6-3.338-1.169-3.338-1.169a2.627 2.627 0 0 0-1.1-1.451c-.9-.615.07-.6.07-.6a2.084 2.084 0 0 1 1.518 1.021 2.11 2.11 0 0 0 2.884.823c.044-.503.268-.973.63-1.325-2.2-.25-4.516-1.1-4.516-4.9A3.832 3.832 0 0 1 4.7 7.068a3.56 3.56 0 0 1 .095-2.623s.832-.266 2.726 1.016a9.409 9.409 0 0 1 4.962 0c1.89-1.282 2.717-1.016 2.717-1.016.366.83.402 1.768.1 2.623a3.827 3.827 0 0 1 1.02 2.659c0 3.807-2.319 4.644-4.525 4.889a2.366 2.366 0 0 1 .673 1.834c0 1.326-.012 2.394-.012 2.72 0 .263.18.572.681.475A9.911 9.911 0 0 0 10 .333Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">GitHub account</span>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M10 0a10 10 0 1 0 10 10A10.009 10.009 0 0 0 10 0Zm6.613 4.614a8.523 8.523 0 0 1 1.93 5.32 20.094 20.094 0 0 0-5.949-.274c-.059-.149-.122-.292-.184-.441a23.879 23.879 0 0 0-.566-1.239 11.41 11.41 0 0 0 4.769-3.366ZM8 1.707a8.821 8.821 0 0 1 2-.238 8.5 8.5 0 0 1 5.664 2.152 9.608 9.608 0 0 1-4.476 3.087A45.758 45.758 0 0 0 8 1.707ZM1.642 8.262a8.57 8.57 0 0 1 4.73-5.981A53.998 53.998 0 0 1 9.54 7.222a32.078 32.078 0 0 1-7.9 1.04h.002Zm2.01 7.46a8.51 8.51 0 0 1-2.2-5.707v-.262a31.64 31.64 0 0 0 8.777-1.219c.243.477.477.964.692 1.449-.114.032-.227.067-.336.1a13.569 13.569 0 0 0-6.942 5.636l.009.003ZM10 18.556a8.508 8.508 0 0 1-5.243-1.8 11.717 11.717 0 0 1 6.7-5.332.509.509 0 0 1 .055-.02 35.65 35.65 0 0 1 1.819 6.476 8.476 8.476 0 0 1-3.331.676Zm4.772-1.462A37.232 37.232 0 0 0 13.113 11a12.513 12.513 0 0 1 5.321.364 8.56 8.56 0 0 1-3.66 5.73h-.002Z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="sr-only">Dribbble account</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
