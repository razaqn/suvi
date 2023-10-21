@extends('layouts.front')


@section('content')
    <div class="mx-[30px] lg:mx-[136px]">

        {{-- REGISTERED --}}
        {{-- <div class="flex justify-between mb-[24px]">
            <h1 class=" text-[#1F1F1F] text-[20px] md:text-[25px] lg:text-[30px] font-[600] ops">Selamat Siang, Abdur Razaq
            </h1>
            <p class="text-[#FF7E00]  text-[14px] md:text-[18px] font-[400]">Kelas saya</p>
        </div>


        <div class="py-[24px] border rounded-[4px]">
            <div class="relative">
                <img class="w-[80px] m-auto h-[80px] " src="{{ asset('images/sedih.png') }}" alt="">
            </div>

            <p class="text-[24px] font-[600] text-[#1F1F1F] text-center ops my-[10px]">Anda belum memiliki kelas</p>
            <div class="   flex justify-center ">
                <p class=" ops font-[700] py-[10px] px-[33px] rounded-[3.5px] bg-[#FF7E00] text-[14px] text-white">Edit
                    Profil</p>
            </div>
        </div> --}}


        {{-- INI HAVE COURSE --}}
        {{-- <div class="py-[42px] px-[27px] border rounded-[4px]">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-6">
                @for ($i = 0; $i < 4; $i++)
                    <div class="cursor-pointer">
                        <div
                            class="h-[140px] sm:h-[102.5px] w-full bg-cover bg-[url('{{ asset('images/product-cover-5.png') }}')] bg-center">

                        </div>
                        <h1 class="text-[#252B42] text-[16px] font-[700] ops mt-[8.5px] mb-[12px]">Dummy Product Title</h1>
                        <div class="flex justify-between mb-[12px]">
                            <p class="text-[12px] font-[400] mts text-[#737373]">Dummy Category</p>
                            <div class="flex items-center">
                                <p class="text-[12px] font-[700] mts text-[#FF7E00] mr-[3.5px]">Lanjutkan</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="12" viewBox="0 0 8 12"
                                    fill="none">
                                    <g clip-path="url(#clip0_365_160)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.689428 0.259534C0.733883 0.220139 0.786695 0.188883 0.844837 0.167557C0.902979 0.146231 0.96531 0.135254 1.02826 0.135254C1.09121 0.135254 1.15354 0.146231 1.21168 0.167557C1.26982 0.188883 1.32264 0.220139 1.36709 0.259534L7.11001 5.33586C7.15458 5.37516 7.18994 5.42184 7.21406 5.47323C7.23819 5.52463 7.25061 5.57972 7.25061 5.63537C7.25061 5.69101 7.23819 5.7461 7.21406 5.7975C7.18994 5.84889 7.15458 5.89557 7.11001 5.93487L1.36709 11.0112C1.27723 11.0906 1.15535 11.1353 1.02826 11.1353C0.901173 11.1353 0.779291 11.0906 0.689428 11.0112C0.599564 10.9318 0.549079 10.824 0.549079 10.7117C0.549079 10.5994 0.599564 10.4916 0.689428 10.4122L6.09447 5.63537L0.689428 0.858541C0.64486 0.819245 0.609499 0.772564 0.585373 0.72117C0.561247 0.669776 0.548828 0.61468 0.548828 0.559037C0.548828 0.503395 0.561247 0.448299 0.585373 0.396905C0.609499 0.345511 0.64486 0.29883 0.689428 0.259534Z"
                                            fill="#FF7E00" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_365_160">
                                            <rect width="7" height="11" fill="white"
                                                transform="translate(0.548828 0.135254)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>
                        </div>
                        <div class="mb-[4px] relative  w-full">
                            <div class="border-[0.5px] center">

                            </div>
                            <div class="h-[3px]  w-[50%] bg-[#FF7E00]">

                            </div>
                        </div>
                        <p class="text-[10px] font-[400] mts text-[#737373]">50% SELESAI</p>
                    </div>
                @endfor
            </div> --}}
    </div>


    <div>
        <div class="bg-[#FF7E00] mb-[64px] relative pb-[22px] mt-[-48px]">
            <img class="absolute my-[-36px] mx-[-80px] top-[37px] left-[0px] z-10"
                src="{{ asset('images/left-bub-main.png') }}" alt="">
            <img class="absolute my-[-36px] mx-[-80px] right-[80px] bottom-[35px] z-10"
                src="{{ asset('images/right-bub-main.png') }}" alt="">
            <div class="mx-[30px] lg:mx-[136px] z-20 relative">
                <h1 class="ops text-[30px] font-[700] text-center text-white pt-[53px] mb-[32px]">Apa yang ingin anda
                    pelajari
                </h1>


                <div
                    class="grid grid-cols-1 gap-7 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4  mt-[22px]  pb-[56px] sm:px-[5%] md:px-[10%]  xl:px-[20%] pb-[56px]">

                    @for ($i = 0; $i < 4; $i++)
                        <div class=" w-full h-[172px] mr-[10px] bg-white rounded-[5px] cursor-pointer">

                        </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[0px]">




        <h1 class="mb-[12px]text-[24px] text-[#1F1F1F] ops font-semibold">Kelas Populer </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
            @for ($i = 0; $i < 5; $i++)
                @include('components.verticalProductCard')
            @endfor
        </div>

        <h1 class="mb-[12px] text-[24px] text-[#1F1F1F] ops font-semibold">Direkomendasikan Untuk Anda </h1>
        <hr class="mb-[16px]">

        <div class="grid grid-cols-1 xl:grid-cols-5 lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 gap-1">
            @for ($i = 0; $i < 5; $i++)
                @include('components.verticalProductCard')
            @endfor
        </div>
    </div>
@endsection
