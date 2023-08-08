@extends('layouts.app')


@section('content')
    <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[88px] mt-[136px]">
        <div class="flex justify-between mb-[24px]">
            <h1 class=" text-[#1F1F1F] text-[30px] font-[600] ops">Selamat Siang, Abdur Razaq</h1>
            <p class="text-[#FF7E00] text-[18px] font-[400]">Kelas saya</p>
        </div>

        <div class="py-[24px] border rounded-[4px]">
            <div class="relative">
                <img class="w-[80px] m-auto h-[80px] " src="{{ asset('images/sedih.png') }}" alt="">
            </div>

            <p class="text-[24px] font-[600] text-[#1F1F1F] text-center ops my-[10px]">Anda belum memiliki kelas</p>
            <div class="   flex justify-center ">
                <p class=" ops font-[700] py-[10px] px-[33px] rounded-[3.5px] bg-[#FF7E00] text-[14px] text-white">Edit Profil</p>
            </div>
        </div>

    </div>
    <div class="bg-[#FF7E00] mb-[64px] ">
        <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[88px]">
            <h1 class="ops text-[30px] font-[700] text-center text-white pt-[53px] mb-[32px]">Apa yang ingin anda pelajari
            </h1>


            <div class="grid grid-cols-1  md:grid-cols-3 lg:grid-cols-4 gap-4 mt-[22px] justify-items-center pb-[56px]">
                <div class="w-[172px] h-[172px] bg-white rounded-[5px]">

                </div>
                <div class="w-[172px] h-[172px] bg-white rounded-[5px]">

                </div>
                <div class="w-[172px] h-[172px] bg-white rounded-[5px]">

                </div>
                <div class="w-[172px] h-[172px] bg-white rounded-[5px]">

                </div>
            </div>
        </div>
    </div>
    <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[0px]">




        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">Kelas Populer </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
            @include('components.verticalProductCard.blade')
            @include('components.verticalProductCard.blade')
            @include('components.verticalProductCard.blade')
            @include('components.verticalProductCard.blade')
            @include('components.verticalProductCard.blade')
        </div>

        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">Direkomendasikan Untuk Anda </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
           @include('components.verticalProductCard.blade')
           @include('components.verticalProductCard.blade')
           @include('components.verticalProductCard.blade')
           @include('components.verticalProductCard.blade')
           @include('components.verticalProductCard.blade')

        </div>
    </div>
@endsection
