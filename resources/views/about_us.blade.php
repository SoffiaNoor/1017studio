@extends('layouts/header_footer')
@section('content')
<section class="w-full min-h-screen py-24 bg-black">
    <div class="relative max-w-screen-xl px-4 sm:px-8 mx-auto grid gap-x-6 overflow-hidden"="">
        <div class="col-span-12 lg:col-span-6 sm:hidden mb-8"="">
            <div class="w-full"><img src="/_nuxt/img/buy-and-trade.69b9f7b.webp" alt="" class="mt-4 sm:-mt-4"></div>
        </div>
        <div data-aos="zoom-out-up" data-aos-duration="1000"
            class="col-span-12 lg:col-span-6 mt-4 xl:mt-20 space-y-6 px-4 aos-init"="">
            <h2 class="lg:text-5xl text-2xl text-[#FFE200] font-extrabold sm:pr-8 xl:pr-12"="">
                Tentang Kami
            </h2>
            <div class="text-white" style="text-align: justify;font-size:14pt">
                <p class="paragraph text-white text-justify">
                    {!! $information->description !!}</p>
            </div>
            <div
                class="flex flex-col sm:flex-row space-y-6 sm:space-y-0 place-content-center sm:space-x-6 pt-3 mt-2 aos-init aos-animate">
                <a class="lg:text-2xl duration-300 hover:scale-105 ease-in-out font-extrabold text-center rounded-full transition max-w-full px-6 py-4 bg-[#FFE200] text-black"
                    href="{{$information->link_wa}}" target="_blank">
                    SAYA MAU PESAN !!
                </a>
            </div>
        </div>

    </div>
</section>
@endsection

@section('jquery')
<script>

</script>
@endsection