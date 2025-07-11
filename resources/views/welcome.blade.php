<html>

<head>
    <!--SEO-->
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PBGGNT2Z');
    </script>
    <!-- End Google Tag Manager -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta property="og:site_name" content="">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:url" content="">
    <meta name="keywords" content="">
    <link rel='icon' type="image/x-icon" href='{{env('APP_URL')}}{{$information->logo_favicon}}'>
    <title>1017 Studios</title>

    <!--CSS-->
    {{-- @vite('resources/css/app.css') --}}

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!--Font-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
    <!-- Di <head> -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" />

    <!-- Sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/js/function.js') }}"></script>

    <style>
        /* width */
        ::-webkit-scrollbar {
            width: 10px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #2d2c2c;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #FFE200;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #ffe100ee;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .animate-spin-slow {
            animation: spin 4s linear infinite;
            background-image: url("assets/img/favicon.png");
            background-size: contain;
            /* Adjust the size as per your preference */
            background-repeat: no-repeat;
            background-position: center;
        }

        @keyframes rock-boat {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(5deg);
            }
        }

        .boat {
            animation: rock-boat 3s ease-in-out infinite;
        }

        .portfolio-item {
            display: block;
            opacity: 1;
            transition: opacity 0.3s ease-in-out;
        }

        .fade-in {
            opacity: 1;
        }

        .fade-out {
            opacity: 0;
        }

        .scrolled {
            opacity: 0.8;
            /* Set the desired opacity value when scrolling */
        }

        .loader {
            border-top-color: #FFE200;
            -webkit-animation: spinner 1.5s linear infinite;
            animation: spinner 1.5s linear infinite;
        }

        @-webkit-keyframes spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spinner {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .swing-animation {
            animation: swing 2s infinite ease-in-out;
            max-width: 150px;
        }

        @keyframes swing {
            0% {
                transform: rotate(0deg);
            }

            50% {
                transform: rotate(15deg);
            }

            100% {
                transform: rotate(0deg);
            }
        }

        @layer utilities {
            @keyframes fadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(1rem);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .animate-fade-in-up {
                animation: fadeInUp 0.5s ease-out forwards;
            }
        }
    </style>
</head>

<body class="bg-white">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PBGGNT2Z" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div id="loader" wire:loading class="fixed top-0 left-0 right-0 bottom-0 w-full h-screen z-50 overflow-hidden bg-black flex flex-col items-center justify-center">
        <img src="{{env('APP_URL')}}{{$information->logo_header}}" class="swing-animation" />
    </div>
    <div id="__layout">
        <div class="min-h-screen font-sans antialiased relative">
            <div class="relative">
                <div class="absolute top-0 left-0 w-full h-[130vh] sm:h-[225vh] md:h-[100vh] lg:h-[100vh] bg-cover" style="background-image: url({{env('APP_URL')}}{{$information->image}});">
                </div>
                <nav class="hover:shadow-xl sticky z-10 w-full text-neutral-800 hover:bg-[#1c1c1c] duration-500">
                    <div class="flex flex-col max-w-screen-xl px-8 mx-auto lg:items-center lg:justify-between lg:flex-row py-4">
                        <div class="flex flex-col lg:flex-row items-center space-x-4 xl:space-x-8">
                            <div class="w-full flex flex-row items-center justify-between py-6">
                                <div><a href="{{url('/')}}"><img src="{{env('APP_URL')}}{{$information->logo_header}}" alt="Nefa Logo" class="w-24 xl:w-28"></a>
                                </div>
                                <div class="lg:hidden">
                                    <button class="navbar-burger rounded-lg focus:outline-none focus:shadow-outline"><span aria-hidden="true" role="img" class="material-design-icon segment-icon"><svg fill="white" width="24" height="24" viewBox="0 0 24 24" class="material-design-icon__svg">
                                                <path d="M21,8H3V6H21M9,13H21V11H9M9,18H21V16H9">
                                                    <!---->
                                                </path>
                                            </svg>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="space-x-3 hidden lg:flex">
                            <ul class="w-full h-auto flex flex-col flex-grow lg:items-center pb-4 lg:pb-0 lg:justify-end lg:flex-row origin-top duration-300 xl:space-x-2 space-y-3 lg:space-y-0 hidden lg:flex">
                                <li class="w-25"><a href="{{url('/')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Home
                                    </a></li>
                                <li class="w-25"><a href="{{url('/portofolio')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Portofolio
                                    </a></li>
                                <li class="w-25"><a href="{{url('/about_us')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Tentang Kami
                                    </a></li>
                                <li class="w-25"><a href="{{url('/testimoni')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Testimoni
                                    </a></li>
                                <li class="w-25"><a href="{{url('/kontak')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Kontak
                                    </a></li>
                                <li class="w-25"><a href="{{url('/berita')}}" class="md:px-2 py-2 font-light text-xl bg-transparent rounded-lg text-white hover:text-[#FFE200] duration-500 focus:outline-none focus:shadow-outline">
                                        Berita
                                    </a></li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <div class="navbar-menu relative z-50 hidden">
                    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
                    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-[#FFE200] overflow-y-auto">
                        <div class="flex items-center mb-8">
                            <a href="{{url('/')}}" class="mr-auto text-3xl font-bold leading-none"><img src="{{ asset('assets/img/favicon.png') }}" alt="Nefa Logo" class="w-24 xl:w-28"></a>
                            <button class="navbar-close">
                                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="black">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                </svg>
                            </button>
                        </div>
                        <div>
                            <ul>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/')}}">Home</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/portofolio')}}">Portofolio</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/about_us')}}">Tentang Kami</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/testimoni')}}">Testimoni</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/kontak')}}">Kontak</a>
                                </li>
                                <li class="mb-1">
                                    <a class="block p-4 text-sm font-bold text-black hover:bg-black hover:text-white hover:shadow-md rounded duration-300" href="{{url('/berita')}}">Berita</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>

                <div class="text-neutral-800">
                    <div class="w-full"="">
                        <section id="hero" class="w-full pb-24"="">
                            <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid grid-cols-12 gap-x-6 overflow-hidden"="">
                                <div data-aos="fade-right" data-aos-duration="1000" class="col-span-12 lg:col-span-6 md:col-span-6 mt-12 lg:mt-20 space-y-4 sm:space-y-6 px-6 text-center sm:text-left"="">
                                    <span data-aos="fade-right" data-aos-once="true" class="lg:text-3xl text-2xl text-white font-semibold aos-init aos-animate"="">Mengapa
                                        Memilih
                                        Kami?</span>
                                    <h1 data-aos="fade-right" data-aos-once="true" class="text-4xl lg:text-6xl font-extrabold leading-tight capitalize sm:pr-8 xl:pr-10 aos-init aos-animate text-white"="">
                                        KAMI AHLINYA
                                    </h1>
                                    <p data-aos="fade-down" data-aos-once="true" data-aos-delay="300" class="lg:text-3xl text-3xl font-bold text-[#FFE200] paragraph sm:block aos-init aos-animate"="">
                                        Jasa Desain Logo <br> dan Website <br> Sejak 2014
                                    </p>
                                    <div class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-1 pb-1 mt-2 aos-init aos-animate">
                                        <a data-aos="fade-down" data-aos-once="true" data-aos-delay="300" href="{{url('/about_us')}}" class="lg:text-sm text-sm font-light text-white paragraph sm:block aos-init aos-animate hover:text-[#FFE200] duration-500">
                                            Baca Selengkapnya...
                                        </a>
                                    </div>
                                    <div data-aos="fade-up" data-aos-once="true" data-aos-delay="700" class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                        <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black" href="{{$information->link_wa}}" target="_blank">
                                            SAYA MAU PESAN !!
                                        </a>
                                    </div>
                                </div>
                                <div class="hidden sm:block col-span-12 mt-12 lg:mt-20 md:col-span-6 lg:col-span-6 place-self-center boat"="">
                                    <div class="lg:w-full lg:place-self-center boat"=""><img data-aos="fade-up" data-aos-once="true" src="{{ asset('assets/img/logo.png') }}" alt="" class="-mt-30 aos-init aos-animate"="">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-0 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12">
                            <div id="portfolio-home" class="flex flex-col flex-wrap md:py-6 sm:flex-row items-center justify-center space-y-6 sm:space-y-0 -mx-4">
                                <div id="portfolio-container" class="flex flex-wrap -mx-4">
                                    {{-- Data awal ditampilkan via script --}}
                                </div>

                                <div class="text-center">
                                    <button id="load-more" class="filter-btn sm:text-sm duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full sm:w-[200px] px-6 py-4 bg-[#FFE200] text-black my-10">Load More</button>
                                </div>
                            </div>
                            <div class="flex flex-col sm:flex-row mt-7 items-center justify-center space-y-6 sm:space-y-0 hidden">
                                <div class="flex flex-wrap justify-center space-y-6 sm:space-y-0 sm:space-x-6 pt-3 pb-3 mt-2 aos-init aos-animate">
                                    <button type="button" class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black" data-filter="all">
                                        ALL
                                    </button>
                                    <button type="button" class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black" data-filter="logo">
                                        LOGO
                                    </button>
                                    <button type="button" class="filter-btn lg:text-lg duration-300 font-extrabold shadow-md hover:shadow-xl text-center rounded-full lg:w-[200px] px-6 py-4 bg-[#FFE200] text-black" data-filter="website">
                                        WEBSITE
                                    </button>
                                </div>
                            </div>
                        </section>

                        <section class="w-full" style="background-image: url({{env('APP_URL')}}{{$information->image}});background-size: cover;">
                            <div class="relative max-w-screen-xl px-4 sm:px-8 pb-20 mx-auto grid gap-x-6 overflow-hidden"="">
                                <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
                                    <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
                                    <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                                        Tentang Kami
                                    </h2>
                                    <div class="text-white" style="font-size:14pt;text-align:justify">
                                        <p class="paragraph text-white lg:text-xl text-justify ">{!!
                                            $information->description !!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="w-full my-24">
                            <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-0 py-6 sm:py-8 rounded-[2.25rem] transform lg:-translate-y-12">
                                <div class="flex flex-col flex-wrap sm:flex-row items-center justify-center space-y-6 mt-50 sm:space-y-0 -mx-4">
                                    <div data-aos="fade-down-right" data-aos-duration="1000" class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-superior-1.png') }}" class="img-fluid" alt="">
                                        <h3 class="text-4xl font-bold text-center">Desainer dan Developer</h3>
                                        <p class="font-extrabold text-2xl text-center">Senior & Profesional</p>
                                    </div>
                                    <div data-aos="fade-down-right" data-aos-duration="1000" class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-superior-2.png') }}" class="img-fluid" alt="">
                                        <h3 class="text-4xl font-bold text-center">Proses Pengerjaan</h3>
                                        <p class="font-extrabold text-2xl text-center">Cepat & Tepat Waktu</p>
                                    </div>
                                    <div data-aos="fade-up-right" data-aos-duration="1000" class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-superior-3.png') }}" class="img-fluid" alt="">
                                        <h3 class="text-4xl font-bold text-center">Konsultasi</h3>
                                        <p class="font-extrabold text-2xl text-center">Gratis & Solutif</p>
                                    </div>
                                    <div data-aos="fade-up-right" data-aos-duration="1000" class="relative sm:w-1/2 overflow-hidden space-y-6 lg:px-8 px-6 lg:py-8 aos-init">
                                        <img src="{{ asset('assets/img/default-superior-4.png') }}" class="img-fluid" alt="">
                                        <h3 class="text-4xl font-bold text-center">Output</h3>
                                        <p class="font-extrabold text-2xl text-center">Master File / Akses (Website)
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <section class="w-full lg:my-24"="" style="background-image: url({{ asset('assets/img/default-background.jpg') }});background-size: cover;">
                            <div class="relative max-w-screen-xl px-4 sm:px-8 pb-20 mx-auto grid gap-x-6 overflow-hidden">
                                <div class="col-span-12 lg:col-span-6 sm:hidden mb-8">
                                    <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
                                </div>
                                <div data-aos="fade-up" data-aos-duration="1000" class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init">
                                    <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12">FAQ
                                    </h2>
                                    <h2 class="lg:text-4xl text-2xl text-white font-extrabold sm:pr-8 xl:pr-12">
                                        Pertanyaan yang sering diajukan</h2>
                                    <table class="w-full">
                                        @foreach($qanda as $q)
                                        <tr>
                                            <td class="lg:text-xl font-bold pr-1 text-white">+</td>
                                            <td class="lg:text-xl font-bold text-white">{{ $q->question }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold"></td>
                                            <td class="lg:text-xl font-bold text-[#FFE200]">{{ $q->answer }}</td>
                                        </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </section>


                        <section class="w-full lg:my-24"="">
                            <div class="flex flex-col flex-wrap sm:flex-row items-center justify-center space-y-6 mt-50 sm:space-y-0">
                                <div data-aos="zoom-out-up" data-aos-duration="2000" class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center p-10 sm:space-x-6 lg:pt-3 lg:pb-3 mt-2 aos-init aos-animate">
                                    <a class="lg:text-2xl duration-300 hover:scale-125 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black" href="{{$information->link_wa}}" target="_blank">
                                        SAYA MAU PESAN !!
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="fixed bottom-20 left-10 z-10">
                    <button id="to-top-button" onclick="goToTop()" title="Go To Top" class="hidden fixed z-90 border-0 w-16 h-16 rounded-full drop-shadow-md bg-[#FFE200] text-black text-3xl font-bold">&uarr;</button>
                </div>

                <div class="fixed bottom-10 right-10 z-10">
                    <a title="Chat Whatsapp" href="{{$information->link_wa}}" target="_blank" class="block rounded-full transition-all shadow transform hover:scale-110 hover:rotate-12">
                        <img class="object-cover object-center lg:w-36 lg:h-36 w-24 h-24" src="{{ asset('assets/img/order.png') }}" alt="Saya mau pesan">
                    </a>
                </div>

                <footer class="relative bg-black pt-8 pb-6">
                    <div class="container mx-auto px-4">
                        <div class="flex flex-wrap text-left lg:text-left place-content-center">
                            <div class="w-full lg:w-3/12 px-4">
                                <div class="hidden sm:block col-span-12 mt-12 mb-12 lg:mt-20 lg:col-span-6 place-self-center"="">
                                    <div class="w-full place-self-center"=""><img data-aos="fade-up" data-aos-once="true" src="{{env('APP_URL')}}{{$information->logo_header}}" alt="" class="-mt-30 aos-init aos-animate"="">
                                    </div>
                                    <div class="mt-7">
                                        <h3 class="text-xl font-bold text-white text-center">berdiri sejak
                                            2014<br>lebih dari 2000 klien</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full lg:w-6/12 px-4 place-self-center">
                                <div class="flex flex-wrap items-top mb-6">
                                    <div class="w-full lg:w-4/12 px-4 ml-auto">
                                        <ul class="list-unstyled">
                                            <li>
                                                <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl" href="{{url('/berita')}}">Berita</a>
                                            </li>
                                            <li>
                                                <a class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl" href="{{url('/portofolio')}}">Portofolio</a>
                                            </li>
                                            <li>
                                                <a class="font-bold block pb-2 text-xl" style="color:#FFE200" href="{{$information->link_wa}}" target="_blank">Saya mau pesan</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <hr class="lg:hidden color-white">
                                    <div class="w-full lg:w-6/12 px-4">
                                        <ul class="list-unstyled">
                                            <li class="flex items-center lg:justify-end">
                                                <i class="fab fa-whatsapp text-white text-2xl mr-2" aria-hidden="true"></i>
                                                <a target="_blank" class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right" href="{{$information->link_wa}}">{{$information->phone}}</a>
                                            </li>
                                            <li class="flex items-center lg:justify-end">
                                                <i class="fab fa-instagram text-white text-2xl mr-2"></i>
                                                <a target="_blank" class="text-white hover:text-blueGray-800 font-bold block pb-2 text-xl lg:text-right" href="{{$information->instagram}}" target="_blank">studiodesign1017</a>
                                            </li>
                                            <li class="flex items-center lg:justify-end lg:mt-20">
                                                <a class="font-bold text-white block pb-2 text-xl lg:text-right" href="{{$information->google_map}}" target="_blank">
                                                    {{$information->address}}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-wrap items-center md:justify-between justify-center">
                            <div class="w-full md:w-4/12 px-4 mx-auto text-center">
                                <div class="text-sm text-white font-semibold py-1">
                                    © {{ date('Y') }} Copyright 1017studios All Right reserved
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const portfolioItems = document.querySelectorAll('.portfolio-item');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    const filterValue = button.getAttribute('data-filter');

                    portfolioItems.forEach(item => {
                        if (filterValue === 'all') {
                            item.style.display = 'flex';
                        } else {
                            if (item.classList.contains(filterValue)) {
                                item.style.display = 'flex';
                            } else {
                                item.style.display = 'none';
                            }
                        }
                    });
                });
            });
        });
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        // Burger menus
        document.addEventListener('DOMContentLoaded', function() {
            // open
            const burger = document.querySelectorAll('.navbar-burger');
            const menu = document.querySelectorAll('.navbar-menu');

            if (burger.length && menu.length) {
                for (var i = 0; i < burger.length; i++) {
                    burger[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            // close
            const close = document.querySelectorAll('.navbar-close');
            const backdrop = document.querySelectorAll('.navbar-backdrop');

            if (close.length) {
                for (var i = 0; i < close.length; i++) {
                    close[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }

            if (backdrop.length) {
                for (var i = 0; i < backdrop.length; i++) {
                    backdrop[i].addEventListener('click', function() {
                        for (var j = 0; j < menu.length; j++) {
                            menu[j].classList.toggle('hidden');
                        }
                    });
                }
            }
        });
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(this).scrollTop() > 0) {
                    $('#navbar').addClass('scrolled');
                } else {
                    $('#navbar').removeClass('scrolled');
                }
            });
        });
    </script>

    <script>
        const filterButtons = document.querySelectorAll('.filter-btn');
        const portfolioItems = document.querySelectorAll('.portfolio-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filterValue = button.dataset.filter;

                portfolioItems.forEach(item => {
                    if (filterValue === 'all' || item.classList.contains(filterValue)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            const content = document.getElementById('content');

            loader.style.display = 'none';
            content.style.display = 'block';
        });
    </script>
    <script>
        var toTopButton = document.getElementById("to-top-button");
        window.onscroll = function() {
            if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
                toTopButton.classList.remove("hidden");
            } else {
                toTopButton.classList.add("hidden");
            }
        }

        function goToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }
    </script>

    <script>
        let offset = 0;
        const limit = 6;

        function renderSkeleton() {
            let skeleton = '';
            for (let i = 0; i < limit; i++) {
                skeleton += `
        <div class="sm:w-1/3 px-4 mb-6 animate-pulse">
            <div class="bg-gray-200 h-48 w-full rounded"></div>
        </div>`;
            }
            return skeleton;
        }

        function loadPortfolio() {
            $('#load-more').prop('disabled', true).text('Loading...');
            $('#portfolio-container').append(renderSkeleton());

            $.get('{{ route("portfolio.load") }}', {
                offset,
                limit
            }, function(data) {
                $('.animate-pulse').remove();

                data.forEach(item => {
                    const jenis = item.jenis_tag_id == 1 ? 'logo' : (item.jenis_tag_id == 2 ? 'website' : '');
                    const html = `
                <a href="{{ env('APP_URL') }}${item.image}" class="glightbox group portfolio-item ${jenis} relative sm:w-1/3 overflow-hidden px-4 mb-6" data-gallery="portfolio-gallery">
                    <img src="{{ env('APP_URL') }}${item.image}" class="img-fluid object-cover w-full rounded" alt="">
                    <div class="absolute top-0 left-0 w-full h-0 flex flex-col justify-center items-center bg-[#FFE200] font-extrabold lg:text-4xl opacity-0 group-hover:opacity-100 duration-500 group-hover:h-full">
                        <img src="{{ env('APP_URL') }}{{ $information->logo_company }}" style="width:40%" />
                    </div>
                </a>
            `;
                    $('#portfolio-container').append(html);
                });

                offset += limit;
                $('#load-more').prop('disabled', false).text('Load More');
                if (data.length < limit) $('#load-more').hide();

                // ✅ Re-init GLightbox untuk gambar baru
                GLightbox({
                    selector: '.glightbox'
                });
            });
        }

        $(document).ready(function() {
            loadPortfolio();

            $('#load-more').on('click', function() {
                loadPortfolio();
            });
        });

        function openModal(imageUrl) {
            $('#modalImage').attr('src', imageUrl);
            $('#imageModal').removeClass('hidden').addClass('flex');
        }

        function closeModal() {
            $('#imageModal').addClass('hidden').removeClass('flex');
        }

        $(document).on('click', '#imageModal', function(e) {
            if (e.target.id === 'imageModal') {
                closeModal();
            }
        });
    </script>

    <script>
        const lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
            zoomable: true,
            draggable: true
        });
    </script>

</body>

</html>