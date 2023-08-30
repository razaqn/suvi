@extends('layouts.front')

@section('content')

    <div style="z-index: -2" class="bg-[#FF7E00] mt-[-3rem] py-9 pb-16 px-20 relative">
        <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] top-[0px] left-[0px] "
            src="{{ asset('images/left-bub-main.png') }}" alt="">
        <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] right-[80px] bottom-[0px]"
            src="{{ asset('images/right-bub-main.png') }}" alt="">
        <div class="grid grid-cols-1 lg:grid-cols-2">
            <div>
                <p class="ops text-white mb-6">Online Courses / Graphic Design / Photoshop</p>
                <h1 class="text-4xl text-white font-bold ops mb-4">Ultimate Adobe Photoshop Training: From Beginner to Pro
                </h1>
                <p class="text-white ops font-light	mb-8">Master Adobe Photoshop CC without any previous knowledge with this
                    easy-to-follow course</p>
                <div class="flex mb-[12px] items-center">
                    <div class="flex mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15 15"
                            fill="none">
                            <g clip-path="url(#clip0_348_1025)">
                                <path
                                    d="M14.3477 6.34014H9.33828L7.78516 1.48389L6.23203 6.34014H1.22266L5.26953 9.33701L3.73828 14.1714L7.78516 11.1745L11.832 14.1714L10.2789 9.31514L14.3477 6.34014Z"
                                    fill="#FFCE31" />
                            </g>
                            <defs>
                                <clipPath id="clip0_348_1025">
                                    <rect width="14" height="14" fill="white"
                                        transform="translate(0.785156 0.827637)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="text-white ml-[3.5px] text-[#737373] text-[14px] font-[400]">4.9 (1200 Reviews)</p>
                    </div>
                    <div class="flex mr-[10px] items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 14 14"
                            fill="none">
                            <g clip-path="url(#clip0_348_1020)">
                                <path
                                    d="M0.4375 8.37158C0.553532 8.37158 0.664812 8.41438 0.746859 8.49057C0.828906 8.56676 0.875 8.67009 0.875 8.77783V10.8091C0.875 11.0246 0.967187 11.2312 1.13128 11.3836C1.29538 11.536 1.51794 11.6216 1.75 11.6216H12.25C12.4821 11.6216 12.7046 11.536 12.8687 11.3836C13.0328 11.2312 13.125 11.0246 13.125 10.8091V8.77783C13.125 8.67009 13.1711 8.56676 13.2531 8.49057C13.3352 8.41438 13.4465 8.37158 13.5625 8.37158C13.6785 8.37158 13.7898 8.41438 13.8719 8.49057C13.9539 8.56676 14 8.67009 14 8.77783V10.8091C14 11.2401 13.8156 11.6534 13.4874 11.9581C13.1592 12.2629 12.7141 12.4341 12.25 12.4341H1.75C1.28587 12.4341 0.840752 12.2629 0.512563 11.9581C0.184374 11.6534 0 11.2401 0 10.8091V8.77783C0 8.67009 0.0460936 8.56676 0.128141 8.49057C0.210188 8.41438 0.321468 8.37158 0.4375 8.37158Z"
                                    fill="#fff" />
                                <path
                                    d="M6.68983 9.95901C6.73047 9.99684 6.77874 10.0269 6.8319 10.0473C6.88505 10.0678 6.94203 10.0784 6.99958 10.0784C7.05712 10.0784 7.1141 10.0678 7.16726 10.0473C7.22041 10.0269 7.26869 9.99684 7.30933 9.95901L9.93433 7.52151C10.0165 7.44523 10.0626 7.34177 10.0626 7.23389C10.0626 7.12601 10.0165 7.02254 9.93433 6.94626C9.85218 6.86998 9.74076 6.82712 9.62458 6.82712C9.5084 6.82712 9.39698 6.86998 9.31483 6.94626L7.43708 8.6907V1.54639C7.43708 1.43864 7.39098 1.33531 7.30894 1.25912C7.22689 1.18294 7.11561 1.14014 6.99958 1.14014C6.88354 1.14014 6.77226 1.18294 6.69022 1.25912C6.60817 1.33531 6.56208 1.43864 6.56208 1.54639V8.6907L4.68433 6.94626C4.60218 6.86998 4.49076 6.82712 4.37458 6.82712C4.2584 6.82712 4.14698 6.86998 4.06483 6.94626C3.98268 7.02254 3.93652 7.12601 3.93652 7.23389C3.93652 7.34177 3.98268 7.44523 4.06483 7.52151L6.68983 9.95901Z"
                                    fill="#fff" />
                            </g>
                            <defs>
                                <clipPath id="clip0_348_1020">
                                    <rect width="14" height="13" fill="white" transform="translate(0 0.327637)" />
                                </clipPath>
                            </defs>
                        </svg>
                        <p class="ml-[7px] text-white text-[14px] font-[700]">15 Sales</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div style="z-index: 1" class="bg-white grid grid-cols-1 lg:grid-cols-5 px-20 py-9">
        <div class="col-span-3 gap-4">
            <div class="bg-[#D9D9D9] w-full h-[285px] relative ">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    @include('components.icon.iconPlayVideo')
                </div>


            </div>
            <p class="ops mt-4 mb-4">Apakah anda ingin membuat banner atau design produk untuk bisnis anda? Maka belajar
                photoshop adalah pilihan terbaik untuk anda agar anda dapat membuat design untuk bisnis anda sendiri, Lorem
                ipsum dolor sit amet.</p>
            <p>Apa yang akan dipelajari?</p>
            <ul class="list-disc ml-6 mt-4 text-base font-light	">
                <div class="flex flex-col md:flex-row">
                    <div>
                        <li class="ops">design icon</li>
                        <li class="ops">membuat logo</li>
                        <li class="ops">design banner</li>
                    </div>
                    <div class="mt-[10px] md:mt-[0px] md:ml-[10rem]">
                        <li class="ops">design icon</li>
                        <li class="ops">membuat logo</li>
                        <li class="ops">design banner</li>
                    </div>
                </div>

            </ul>
            <p class="mt-8">Apa yang akan dipelajari?</p>
            <ul class="list-disc ml-6 mt-4 text-base font-light	">
                <div class="flex">
                    <div>
                        <li class="ops">design icon</li>
                        <li class="ops">membuat logo</li>

                    </div>

                </div>

            </ul>
            <p class="text-xl ops font-bold mt-8 mb-6">Ulasan</p>
            <div class="grid grid-cols-1 lg:grid-cols-4 w-full">

                @include('components.testimoniCard')
                @include('components.testimoniCard')
                @include('components.testimoniCard')
                @include('components.testimoniCard')
            </div>

            <p class="mt-[35px] ops font-bold text-[20px] mb-8">Kursus serupa</p>
            @include('components.horizontalProductCard')
            @include('components.horizontalProductCard')
            @include('components.horizontalProductCard')

        </div>

        <div class="col-span-2 xl:col-span-1  lg:ml-[24px] lg:w-[110%] bg-white p-6 lg:mt-[-10rem] sticky top-[120px] h-fit">
            <p class="ops font-[700] mb-[13px]">Ultimate Adobe Photoshop Training: From Beginner to Pro</p>
            <div class="flex items-center">
                <p class="text-[20px] text-[#FF7E00] font-[700] mr-[8px]">Rp150.000</p>
                <p class="font-bold text-[#BDBDBD] ops text-base">Rp250.000</p>
            </div>
            <p class="text-[12px] font-[300] ops mb-[15px]">Diskon 20%</p>

            <div class="flex mb-[20px]">
                @include('components.icon.clockIcon')
                <p class="text-[14px] ops ml-[12px]">38 jam pembelajaran</p>
            </div>
            <div class="flex mb-[20px]">
                @include('components.icon.medalIcon')
                <p class="text-[14px] ops ml-[12px]">Sertifikat penyelesaian</p>
            </div>
            <div class="flex mb-[20px]">
                @include('components.icon.customerServiceIcon')
                <p class="text-[14px] ops ml-[12px]">Konsultasi ahli</p>
            </div>
            <div class="flex mb-[20px]">
                @include('components.icon.languageIcon')
                <p class="text-[14px] ops ml-[12px]">Bahasa Indonesia</p>
            </div>
            <div class="flex mb-[20px] items-center">
                <div class="h-fit sm:mt-[0px] mr-[8px] md:mt-[15px] rounded-[3.5px] bg-[#FF7E00] py-[16px] px-[42px]">
                    <p class=" ops font-[700] text-[14px] text-white"><a href="">Beli Kursus Ini</a></p>
                </div>
                <div class="h-fit rounded-[4px] p-[14px] border border-[2px] border-[#FF7E00]">
                    @include('components.icon.cartIcon1')
                </div>
            </div>
            <p class="text-center ops font-[300] text-[#737373] text-[12px]">Bila anda sudah menyelesaikan kursus ini, ada dapat melakukan sertifikasi BNSP <span class="font-bold">dengan tambahan biaya</span> </p>
            <div class="flex mt-[12px] items-center ">
                @include('components.icon.shareIcon')
                <p class="text-[#FF7E00] ml-[8px] text-[12px]">Bagikan kursus ini</p>
            </div>
        </div>




    </div>


@endsection
