@extends('layout.app')


@section('content')
    <div>
        <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px]">
            <div class="flex flex-col md:flex-row justify-between mb-[85px]">
                <div class="w-[350px]">
                    <h1 class="text-[#1F1F1F] text-[42px] font-extrabold	mb-[14px] ops">LOREM IPSUM DOLOT SITAMET</h1>
                    <p class="ops text-[14px] text-[#1F1F1F] font-[400] mb-[32px] w-[80%]">LOREM IPSUM DOLOT SITAMET
                        AWKOKAWOKAWOK LMAO AMAT ASDASD</p>
                    <div class="inline-block rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px]">
                        <p class="ops font-[700] text-[14px] text-white"><a href="">Edit Profil</a></p>
                    </div>
                </div>
                <img class="w-[256px] h-[256px] mt-[40px] mt-[0px]" src="{{ asset('images/landing-page-first.png') }}" alt="">
            </div>


        </div>

        <div class="bg-[#FF7E00] mb-[40px]">
            <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px]">
                <h1 class="ops text-[34px] font-[700] text-center text-white pt-[53px] mb-[5px]">Asah Skill Anda</h1>
                <p class="ops text-[20px] font-[400] mb-[22px] text-center text-white">Kami menyediakan kursus” yang telah
                    di buat oleh mentor mentor yang berpengalaman</p>

                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-4 gap-4 mt-[22px] justify-items-center pb-[56px]">
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

        <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px] mt-[0px]">
            <h1 class="text-[#1F1F1F] font-[600] text-center text-[32px] ops">Instruktur Kami</h1>
            <p class="font-[400] text-[20px] text-[#555] ops text-center mt-[5px] mb-[25px]">kita juga memiliki beberapa
                instruktur yang berpengalaman dan bersertifikasi nasional</p>

            <div class="flex flex-col sm:flex-row mx-[20px]">
                <div class="bg-black w-full h-[202px] mr-[0px] mb-[20px] sm:mb-[0px] sm:mr-[12px]">

                </div>
                <div class="bg-black w-full h-[202px] ml-[0px] sm:ml-[12px]">

                </div>
            </div>
            <div class="flex justify-between mt-[70px] items-start">
                <p class="mb-[24px]  text-[24px] font-[600] ops text-[#1f1f1f]">Penghargaan Kami</p>
                <div class="flex items-center">
                    <p class="font-[18px] ops font-[600] text-[#3F3F46] mr-[5px]">Selengkapnya</p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                        fill="none">
                        <path
                            d="M15.7071 8.70711C16.0976 8.31658 16.0976 7.68342 15.7071 7.29289L9.34315 0.928931C8.95262 0.538407 8.31946 0.538407 7.92893 0.928931C7.53841 1.31946 7.53841 1.95262 7.92893 2.34315L13.5858 8L7.92893 13.6569C7.53841 14.0474 7.53841 14.6805 7.92893 15.0711C8.31946 15.4616 8.95262 15.4616 9.34315 15.0711L15.7071 8.70711ZM8.74228e-08 9L15 9L15 7L-8.74228e-08 7L8.74228e-08 9Z"
                            fill="#3F3F46" />
                    </svg>
                </div>
            </div>


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
                <div class="w-full h-[214px]  bg-black">

                </div>
                <div class="w-full h-[214px] bg-black">

                </div>
                <div class="w-full h-[214px] bg-black">

                </div>
            </div>
        </div>

        <div class="bg-[#FF7E00] mb-[40px]">
            <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px] mt-[0px] mt-[96px]">
                <h1 class="ops text-[32px] font-[700] text-center text-white pt-[24px] mb-[5px]">Partner Kami</h1>
                <p class="ops text-[20px] font-[400] mb-[39px] text-center text-white">Kami Memiliki Partner Sebagai Berikut</p>

                <div class="grid grid-cols-2 xl:grid-cols-6 lg:grid-cols-4 md:grid-cols-4 sm:grid-cols-3 gap-9 mt-[22px] justify-items-center pb-[56px]">
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>
                    <div class="w-full h-[74px] bg-black rounded-[4px]">

                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
