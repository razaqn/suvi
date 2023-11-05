@extends('layouts.front')


@section('content')
    <div>
        <div class="mx-[30px] lg:mx-[175px]  mt-[2rem] ">
            <div class="flex flex-col md:flex-row justify-between mb-[85px]">
                <div class="w-[350px]">
                    <h1 class="text-[#1F1F1F] text-[42px] font-extrabold	mb-[14px] ops">LOREM IPSUM DOLOT SITAMET</h1>
                    <p class="ops text-[14px] text-[#1F1F1F] font-[400] mb-[32px] w-[80%]">LOREM IPSUM DOLOT SITAMET
                        AWKOKAWOKAWOK LMAO AMAT ASDASD</p>
                    <div data-modal-target="defaultModal" data-modal-toggle="defaultModal"
                        class="cursor-pointer inline-block rounded-[3.5px] bg-[#0081FF] py-[10px] px-[33px]">
                        <p class="ops font-[700] text-[14px] text-white">Get Started</p>
                    </div>
                </div>
                <img class="w-[256px] h-[256px] mt-[40px] mt-[0px]" src="{{ asset('images/landing-page-first.png') }}"
                    alt="">
            </div>


        </div>
        <div style="z-index: -2" class="mt-[80px] bg-[#FF7E00] mt-[-6rem] mb-[64px] relative pb-[22px]">
            <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] top-[37px] left-[0px] "
                src="{{ asset('images/left-bub-main.png') }}" alt="">
            <img style="z-index: -1" class="absolute my-[-36px] mx-[-80px] right-[80px] bottom-[35px]"
                src="{{ asset('images/right-bub-main.png') }}" alt="">
            <div class="mx-[30px] lg:mx-[136px]  mt-[136px] mt-[88px]">
                <h1 class="ops text-[34px] font-[700] text-center text-white pt-[53px] mb-[5px]">Asah Skill Anda</h1>
                <p class="ops text-[20px] font-[400] mb-[22px] text-center text-white">Kami menyediakan kursus” yang telah
                    di buat oleh mentor mentor yang berpengalaman</p>


                <div
                    class="grid grid-cols-1 gap-7 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4  mt-[22px] org sm:px-[5%] md:px-[10%]  xl:px-[20%] pb-[56px] ">
                    <div class="w-full  h-[172px] mr-[10px] bg-white rounded-[5px]">

                    </div>
                    <div class="w-full  mr-[100px] h-[172px] bg-white rounded-[5px]">

                    </div>
                    <div class="w-full  mr-[10px] h-[172px] bg-white rounded-[5px]">

                    </div>
                    <div class="w-full  mr-[10px] h-[172px] bg-white rounded-[5px]">

                    </div>
                </div>
            </div>
        </div>


        <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px] mt-[0px]">
            <h1 class="text-[#1F1F1F] font-[600] text-center text-[32px] ops">Instruktur Kami</h1>
            <p class="font-[400] text-[20px] text-[#555] ops text-center mt-[5px] mb-[25px]">kita juga memiliki beberapa
                instruktur yang berpengalaman dan bersertifikasi nasional</p>

            <div class="px-[20px] w-full relative flex items-center justify-center">
                <button aria-label="slide backward"
                    class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                    id="prev3">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
                <div class="w-full h-full  overflow-x-hidden overflow-y-hidden">
                    <div id="sliderInstruktur"
                        class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                alt="black chair and white table" class="object-cover object-center w-[513px] h-[202px]" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                alt="black chair and white table" class="object-cover object-center w-[513px] h-[202px]" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                alt="black chair and white table" class="object-cover object-center w-[513px] h-[202px]" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                alt="black chair and white table" class="object-cover object-center w-[513px] h-[202px]" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                            <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                alt="black chair and white table" class="object-cover object-center w-[513px] h-[202px]" />
                            <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                    Catalog 1</h2>
                                <div class="flex h-full items-end pb-6">
                                    <h3
                                        class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                        Minimal Interior</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button aria-label="slide forward"
                    class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                    id="next3">
                    <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
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


            <div class="flex items-center justify-center w-full h-full py-24 sm:py-8 ">
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward"
                        class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                        id="prev">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="w-full h-full  overflow-x-hidden overflow-y-hidden">
                        <div id="sliderPenghargaan"
                            class="h-full flex lg:gap-8 md:gap-6 gap-14 items-center justify-start transition ease-out duration-700">
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-shrink-0 relative w-full sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[350px] h-[214px]" />
                                <div class="bg-gray-800 bg-opacity-30 absolute w-full h-full p-6">
                                    <h2 class="lg:text-xl leading-4 text-base lg:leading-5 text-white dark:text-gray-900">
                                        Catalog 1</h2>
                                    <div class="flex h-full items-end pb-6">
                                        <h3
                                            class="text-xl lg:text-2xl font-semibold leading-5 lg:leading-6 text-white dark:text-gray-900">
                                            Minimal Interior</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button aria-label="slide forward"
                        class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                        id="next">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>

        </div>

        <div class="bg-[#FF9D3C] mb-[40px]">
            <div class="mx-[30px] lg:mx-[175px]  mt-[136px] mt-[88px] mt-[0px] mt-[96px]">
                <h1 class="ops text-[32px] font-[700] text-center text-white pt-[24px] mb-[5px]">Partner Kami</h1>
                <p class="ops text-[20px] font-[400] mb-[39px] text-center text-white">Kami Memiliki Partner Sebagai
                    Berikut
                </p>
                <div class="w-full relative flex items-center justify-center">
                    <button aria-label="slide backward"
                        class="absolute z-30 left-0 ml-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400 cursor-pointer"
                        id="prev2">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 1L1 7L7 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                    <div class="w-full h-full  overflow-x-hidden overflow-y-hidden">
                        <div id="sliderPartner"
                            class="h-full flex lg:gap-8 md:gap-6 gap-6 items-center justify-start transition ease-out duration-700">
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>
                            <div class="flex flex-shrink-0 relative w-auto sm:w-auto">
                                <img src="https://www.simplilearn.com/ice9/free_resources_article_thumb/what_is_image_Processing.jpg"
                                    alt="black chair and white table"
                                    class="object-cover object-center w-[165px] h-[74px]" />

                            </div>

                        </div>
                    </div>
                    <button aria-label="slide forward"
                        class="absolute z-30 right-0 mr-10 focus:outline-none focus:bg-gray-400 focus:ring-2 focus:ring-offset-2 focus:ring-gray-400"
                        id="next2">
                        <svg class="dark:text-gray-900" width="8" height="14" viewBox="0 0 8 14" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M1 1L7 7L1 13" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="pt-[60px]"></div>
            </div>
        </div>
    </div>
    @include('modal.landingPageModal')
@endsection
