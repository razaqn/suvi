@extends('layouts.app')

@section('content')
    <div
        class="mx-[15px] xl:mx-[10%] lg:mx-[96px] md:mx-[100px] sm:mx-[86px] border-[0.5px] border-[#1F1F1F] py-[24px] px-[36px]">
        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F]">Profil Saya</h1>
        <hr class="mb-[24px]">
        <div class="flex flex-col sm:flex-row justify-between items-start mb-[19px]">
            <div class="mb-[20px] sm:mb-[20px]">
                <p class="text-[#737373] text-[20px] font-[400] ops">Biodata</p>
                <p class="text-[#737373] text-[16px] font-[300]">Berikan informasi anda agar orang lain dapat mengenal anda.
                </p>
            </div>
            <div class="rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px]">
                <p class="ops font-[700] text-[14px] text-white"><a href="">Edit Profil</a></p>
            </div>
        </div>
        <div class="flex mb-[27px]">
            <label class="mr-[24px] text-[14px] sm:text-[18px] ops font-[600] text-[#1F1F1F]" for="namaInput">Nama
                Lengkap</label>
            <input class=" border rounded text-[12px] sm:text-[14px] py-1 w-[533px] px-3" id="namaInput" type="text"
                placeholder="Username">
        </div>
        <div class="flex flex-col sm:flex-row mb-[48px]">
            <p class="w-[126px] sm:text-right mb-[10px] sm:mb-[0px] mr-[24px] text-[18px] ops font-[600] text-[#1F1F1F]">
                Foto Profile</p>
            <div class="sm:mr-[12px] mb-[10px] sm:mb-[0px] w-[100px] p-[24px] profil-rgba">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path
                        d="M24 8C26.1217 8 28.1566 8.84285 29.6569 10.3431C31.1571 11.8434 32 13.8783 32 16C32 18.1217 31.1571 20.1566 29.6569 21.6569C28.1566 23.1571 26.1217 24 24 24C21.8783 24 19.8434 23.1571 18.3431 21.6569C16.8429 20.1566 16 18.1217 16 16C16 13.8783 16.8429 11.8434 18.3431 10.3431C19.8434 8.84285 21.8783 8 24 8ZM24 28C32.84 28 40 31.58 40 36V40H8V36C8 31.58 15.16 28 24 28Z"
                        fill="white" />
                </svg>
            </div>
            <div class="">

                <p
                    class="inline-block mb-[8.5px] rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px] ops font-[700] text-[14px] text-white">
                    Edit Profil</p>

                <p class="text-[12px] font-[300] ops text-[#737373]">Ukuran maksimal file 2 mb</p>
            </div>

        </div>

        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F]">Kelas Saya</h1>
        <hr class="mb-[24px]">
        <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-9">
            @include('components.courseCard')
            @include('components.courseCard')
            @include('components.courseCard')
            @include('components.courseCard')
        </div>

        <h1 class="mb-[12px] font-[600] text-[24px] ops text-[#1F1F1F] mt-[55px]">Sertifikat Saya</h1>
        <hr class="mb-[24px]">

        <div class="grid grid grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-9">
            @include('components.courseCard')
            @include('components.courseCard')

        </div>


    </div>
@endsection
