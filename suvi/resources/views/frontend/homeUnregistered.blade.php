@extends('layouts.front')


@section('content')
    <div style="z-index: -2" class="bg-[#FF7E00] mt-[-8.5rem] mb-[64px] relative pb-[22px]">
        <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] top-[37px] left-[0px] "
            src="{{ asset('images/left-bub-main.png') }}" alt="">
        <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] right-[80px] bottom-[35px]"
            src="{{ asset('images/right-bub-main.png') }}" alt="">
        <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[88px]">
            <h1 class="ops text-[30px] font-[700] text-center text-white pt-[53px] mb-[32px]">Apa yang ingin anda pelajari
            </h1>


            <div
                class="grid grid-cols-1 gap-7 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4  mt-[22px]  pb-[56px] sm:px-[5%] md:px-[10%]  xl:px-[20%] pb-[56px]">
                <div class="w-full h-[172px] mr-[10px] bg-white rounded-[5px]">

                </div>
                <div class="w-full mr-[100px] h-[172px] bg-white rounded-[5px]">

                </div>
                <div class="w-full mr-[10px] h-[172px] bg-white rounded-[5px]">

                </div>
                <div class="w-full mr-[10px] h-[172px] bg-white rounded-[5px]">

                </div>
            </div>
        </div>
    </div>
    <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[0px]">




        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">Kelas Populer </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')

        </div>

        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">Direkomendasikan Untuk Anda </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">

            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')


        </div>
    </div>
@endsection
