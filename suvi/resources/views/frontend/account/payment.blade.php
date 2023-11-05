@extends('layouts.front')

@section('content')
    <div class=" mx-[30px] lg:mx-[176px] sm:mx-[86px]">
        <div class="flex flex-col md:flex-row">
            <div class="basis-2/3">
                <h5 class="mb-[12px] text-[24px] font-semibold  ops">Metode Pembayaran</h5>
                <hr class="mb-[36px] border-[#D4D4D8]">

                <div class="grid grid-flow-col gap-2 mb-[10px]">
                    <div
                        class="w-full pl-[11px] py-[14px] bg-white border border-[#0570DE] border-2 rounded-[4px] mr-[12px]">
                        <a href="#">
                            <img src="{{ asset('images/card.jpg') }}" alt="">
                            <h5 class=" text-[13px] font-semibold tracking-tight text-[#0570DE] dark:text-white">Card
                            </h5>
                        </a>

                    </div>
                    <div
                        class="w-full pl-[11px] py-[14px] bg-white border border-[#E0E0E0] border-2 rounded-[4px] mr-[12px]">
                        <a href="#">
                            <img src="{{ asset('images/card.jpg') }}" alt="">
                            <h5 class=" text-[13px] font-semibold tracking-tight text-[#1F1F1F] dark:text-white">EPS
                            </h5>
                        </a>
                    </div>
                    <div
                        class="w-full pl-[11px] py-[14px] bg-white border border-[#E0E0E0] border-2 rounded-[4px] mr-[12px]">
                        <a href="#">
                            <img src="{{ asset('images/card.jpg') }}" alt="">
                            <h5 class=" text-[13px] font-semibold tracking-tight text-[#1F1F1F] dark:text-white">EPS
                            </h5>
                        </a>
                    </div>
                    <div
                        class="w-full pl-[11px] py-[14px] bg-white border border-[#E0E0E0] border-2 rounded-[4px] mr-[12px]">
                        <a href="#">
                            <img src="{{ asset('images/card.jpg') }}" alt="">
                            <h5 class=" text-[13px] font-semibold tracking-tight text-[#1F1F1F] dark:text-white">EPS
                            </h5>
                        </a>
                    </div>
                    <div class="w-full relative  bg-white border border-[#E0E0E0] border-2 rounded-[4px] mr-[12px]">
                        <p class="absolute text-[#727F96] top-1 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                            ...</p>
                    </div>

                </div>

                <div class="mb-[10px]">
                    <label class="text-[13px] block text-[#1F1F1F] text-sm font-semibold mb-2" for="username">
                        Card Number
                    </label>
                    <div
                        class="rounded-[4px] appearance-none  border border-[#E0E0E0] border-2 w-full text-[#1F1F1F] leading-tight focus:outline-none text-[13px] flex">
                        <input
                            class="appearance-none  rounded w-[84%] py-2 px-3 text-[#1F1F1F] leading-tight focus:outline-none text-[13px]"
                            id="username" type="text" placeholder="1234 1234 1234 1234">
                        <div class="grid grid-cols-4 gap-1 content-center">
                            <img class="shadow w-[24px] h-[16px]" src="{{ asset('images/VISA.jpg') }}" alt="">
                            <img class="shadow w-[24px] h-[16px]" src="{{ asset('images/VISA.jpg') }}" alt="">
                            <img class="shadow w-[24px] h-[16px]" src="{{ asset('images/VISA.jpg') }}" alt="">
                            <img class="shadow w-[24px] h-[16px]" src="{{ asset('images/VISA.jpg') }}" alt="">
                        </div>
                    </div>

                </div>



                <div class="grid grid-cols-1 sm:grid-cols-2 sm:gap-6">
                    <div class="mb-4">
                        <label class="text-[13px] block text-[#1F1F1F] text-sm font-semibold mb-2" for="username">
                            Expiry
                        </label>
                        <input
                            class="rounded-[4px] appearance-none border border-[#E0E0E0] border-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-[13px]"
                            id="username" type="text" placeholder="MM / YY">
                    </div>
                    <div class="mb-4">
                        <label class="text-[13px] block text-[#1F1F1F] text-sm font-semibold mb-2" for="username">
                            CVC
                        </label>
                        <input
                            class="rounded-[4px] appearance-none border border-[#E0E0E0] border-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-[13px]"
                            id="username" type="text" placeholder="CVC">
                    </div>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-2 gap-6 mb-[48px]">
                    <div>
                        <label for="countries"
                            class="block mb-2 text-sm font-semibold text-[#1F1F1F] dark:text-white">Country</label>
                        <select id="countries"
                            class=" border border-[#E0E0E0] border-2 py-2 px-3 text-gray-900 text-[13px] rounded-[4px]  w-full">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>
                    <div>
                        <div class="">
                            <label class="text-[13px] block text-[#1F1F1F] text-sm font-semibold mb-2" for="username">
                                Postal Code
                            </label>
                            <input
                                class=" appearance-none border rounded-[4px] border-[#E0E0E0] border-2 w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-[13px]"
                                id="username" type="text" placeholder="90210">
                        </div>
                    </div>
                </div>

                <h1 class="text-[20px] font-semibold ops mb-[20px]">Detail pesanan</h1>

                <div class="flex flex-col sm:flex-row justify-between mb-[20px]">
                    <div class="flex flex-col sm:flex-row">
                        <img src="{{ asset('images/fixed-width.jpg') }}" alt="">
                        <div class="sm:ml-[25px] mt-[15px] sm:mt-[0px]">
                            <h1
                                class="w-[65%] mb-[4px] leading-[24px] tracking-[0.2px] font-bold text-[14px] text-[#FF7E00]">
                                Adobe after effect for beginners</h1>
                            <p class="text-[12px] font-semibold text-[#A1A1AA]">Graphic Design</p>
                        </div>
                    </div>
                    <div class="flex mt-[15px] sm:mt-[0px] items-start">
                        <p class="font-bold text-[14px] text-[#FF7E00]">Rp.150.000</p>
                        <p class="text-[12px] font-bold text-[#A1A1AA] ml-[15px]">Rp.250.000</p>
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row justify-between mb-[20px]">
                    <div class="flex flex-col sm:flex-row">
                        <img src="{{ asset('images/fixed-width.jpg') }}" alt="">
                        <div class="sm:ml-[25px] mt-[15px] sm:mt-[0px]">
                            <h1
                                class="w-[65%] mb-[4px] leading-[24px] tracking-[0.2px] font-bold text-[14px] text-[#FF7E00]">
                                Adobe after effect for beginners</h1>
                            <p class="text-[12px] font-semibold text-[#A1A1AA]">Graphic Design</p>
                        </div>
                    </div>
                    <div class="flex mt-[15px] sm:mt-[0px] items-start">
                        <p class="font-bold text-[14px] text-[#FF7E00]">Rp.150.000</p>
                        <p class="text-[12px] font-bold text-[#A1A1AA] ml-[15px]">Rp.250.000</p>
                    </div>
                </div>
            </div>
            <div class="basis-1/3">
                <div class="sticky top-[120px] h-fit md:ml-[24px] py-[14px] px-[17.5px] shadow-lg mt-[36px]">

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
                    <div class="flex justify-between mb-[20px]">
                        <p class="ops font-bold text-[14px] text-[#525252]">Total</p>
                        <p class="ops font-bold text-[14px] text-[#FF7E00]">Rp 200.000</p>
                    </div>

                    <div class="rounded-[4px] bg-[#FF7E00] py-[11.5px] px-[105.px]">
                        <p class="text-center text-white"><a href="">Lanjutkan</a></p>
                    </div>

                </div>
            </div>
        </div>

    </div>
@endsection
