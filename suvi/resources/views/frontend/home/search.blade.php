@extends('layouts.front')

@section('content')
<div class="mx-[30px] xl:mx-[10%] lg:mx-[96px] md:mx-[100px] sm:mx-[86px]">
        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">18 Hasil untuk “Photoshop” </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')
            @include('components.verticalProductCard')

        </div>

        <div class="flex items-center justify-center mt-[124px]">
            <div class="py-[8px] px-[10.5px] bg-[#FF7E00] rounded-full mr-[16px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12"
                    fill="none">
                    <path
                        d="M6 1L1.12022 5.73077C1.08227 5.7653 1.05202 5.80701 1.03135 5.85331C1.01067 5.89962 1 5.94954 1 6C1 6.05046 1.01067 6.10038 1.03135 6.14669C1.05202 6.19299 1.08227 6.2347 1.12022 6.26923L6 11"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>
            <p class="text-[16px] ops border-[#FF7E00] border-b mr-[16px]">1
                <hr>
            </p>
            <p class="ops text-[16px] mr-[16px]">2</p>
            <p class="ops text-[16px] mr-[16px]">3</p>
            <div class="py-[8px] px-[10.5px] bg-[#FF7E00] rounded-full mr-[16px]">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" viewBox="0 0 7 12"
                    fill="none">
                    <path
                        d="M1 11L5.87978 6.26923C5.91773 6.2347 5.94798 6.19299 5.96865 6.14669C5.98933 6.10038 6 6.05046 6 6C6 5.94954 5.98933 5.89962 5.96865 5.85331C5.94798 5.80701 5.91773 5.7653 5.87978 5.73077L1 1"
                        stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </div>

        </div>
    </div>

@endsection




