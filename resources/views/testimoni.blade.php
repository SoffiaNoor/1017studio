@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="container px-6 py-12 mx-auto">
            <div class="grid items-center gap-4 xl:grid-cols-5">
                <div class="max-w-2xl mx-auto my-8 space-y-4 text-center xl:col-span-2 xl:text-left"
                    data-aos="zoom-out-up" data-aos-duration="1000">
                    <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12">Testimoni</h2>
                    <p class="paragraph text-white lg:text-xl text-justify ">Impresi mereka terhadap kami</p>
                    <div
                        class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                        <blockquote data-aos="zoom-out-up" data-aos-duration="1000"
                            class="text-2xl font-semibold italic text-center text-white">
                            <a href="https://g.page/r/Cae-3h94_K8JEBM/review"
                                target="_blank"
                                class="before:block before:absolute before:-inset-2 before:-skew-y-3 before:bg-[#FFE200] relative inline-block">
                                <span class="relative text-black font-extrabold">Baca Selengkapnya..</span>
                            </a>
                        </blockquote>
                    </div>
                </div>
                <div class="p-6 xl:col-span-3">
                    <div class="grid gap-4 md:grid-cols-2">
                        @foreach($testimoni as $testimonial)
                        <div class="grid content-center gap-4">
                            <div class="p-6 rounded shadow-md bg-[#FFE200] text-black font-semibold"
                                data-aos="zoom-out-up" data-aos-duration="1000">
                                <p>{{ $testimonial->description }}</p>
                                <div class="flex items-center mt-4 space-x-4">
                                    <img src="{{ asset('assets/img/testimoni.png') }}" alt=""
                                        class="w-12 h-12 bg-center bg-cover rounded-full dark:bg-gray-500">
                                    <div>
                                        <p class="text-lg font-semibold">{{ $testimonial->name }}</p>
                                        <div class="flex items-center space-x-1">
                                            @for($i = 0; $i < $testimonial->rate; $i++)
                                                <svg class="w-4 h-4 text-black-300" aria-hidden="true"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    viewBox="0 0 22 20">
                                                    <path
                                                        d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                                </svg>
                                                @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
            <a class="lg:text-2xl duration-300 hover:scale-105 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                href="{{url('/kontak')}}">
                SAYA MAU PESAN !!
            </a>
        </div>
    </div>
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection