@extends('layouts.front')

@section('content')
    <div class="mx-[30px] lg:mx-[176px] sm:mx-[86px]">
        <div class="flex flex-col lg:flex-row">
            <div class="basis-2/3">
                @include('components.orderDetail')
                @include('components.orderDetail')
                @include('components.orderDetail')
            </div>
            <div class="basis-1/3">
                 <div class=" py-[14px] md:ml-[24px] md:w-[292px]  px-[17.5px] shadow-lg mt-[36px]">

                    <p class="ops text-[16px] font-bold text-[#525252] mb-[24px]">Harga</p>

                    <div class="flex justify-between mb-[8px]">
                        <p class="ops font-semibold text-[12px] text-[#525252]">Harga Asli</p>
                        <p class="ops font-bold text-[12px] text-[#FF7E00]">Rp 299.000</p>
                    </div>
                    <div class="flex justify-between mb-[16px]">
                        <p class="ops font-semibold text-[12px] text-[#525252]">Diskon</p>
                        <p class="ops font-bold text-[12px] text-[#FF7E00]">Rp 99.000</p>
                    </div>
                    <hr class="mb-[16px]">


                    <div class="rounded-[4px] bg-[#FF7E00] py-[9.5px] px-[90px]">
                        <p class="text-center text-[12px] text-white"><a href="">Checkout</a></p>
                    </div>

                </div>
            </div>

            <div>

            </div>
        </div>
    </div>
@endsection
