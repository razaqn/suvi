<nav class="shadow-lg bg-white border-gray-200 fixed top-0 z-50 w-full">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="{{ route('landing') }}" class="flex items-center ">
                <img src="{{ asset('images/suvi3.png') }}" class="sm:w-full w-[100px]" alt="Flowbite Logo" />
            </a>
            <script>
                $('#search-mobile-icon').on('click', function() {
                    // $('#search-mobile').toggleClass('hidden')
                    console.log('test');
                })
            </script>
            <div class="flex items-center">
                {{-- <button type="button"  id="search-mobile-icon"
                    aria-expanded="false"
                    class="md:hidden text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-4 focus:ring-gray-200 rounded-lg text-sm p-2.5 mr-1">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                    <span class="sr-only">Search</span>
                </button> --}}
                <div class="relative md:hidden mr-[20px]" id="search-mobile">

                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-4 text-sm text-gray-900 border border-black border-[1.5px] rounded-[4px]  focus:ring-blue-500 focus:border-blue-500">
                    <div
                        class="absolute bg-[#FF7E00] inset-y-0 right-0 flex items-center px-3 rounded-r-[4px] border-[1.5px] border-[#000] pointer-events-none">
                        <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>
                </div>
                <div class="relative search-wrapper hidden md:block">
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-4 text-sm text-gray-900 border-[1.5px] border-[#000]  rounded-[4px] focus:ring-blue-500 focus:border-blue-500 ">
                    <div
                        class="absolute bg-[#FF7E00] inset-y-0 right-0 flex items-center px-3 rounded-r-[4px] border-[1.5px] border-[#000] pointer-events-none">
                        <svg class="w-4 h-4 text-white " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                        <span class="sr-only">Search icon</span>
                    </div>

                </div>
                <button data-collapse-toggle="navbar-search" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
                    aria-controls="navbar-search" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>

            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-search">

                <ul
                    class="flex flex-col md:items-center  md:p-0 mt-4 font-medium    md:flex-row  md:space-x-2 md:mt-0 md:border-0 md:bg-white   ">


                    <li class="mr-[0px] md:mr-[10px]">
                        <div class=" md:p-0  ">
                            <svg class="hidden md:block m-auto" xmlns="http://www.w3.org/2000/svg" width="28"
                                height="30" viewBox="0 0 28 30" fill="none">
                                <path
                                    d="M10.1111 25.2632C9.64962 25.2632 9.19849 25.4021 8.81478 25.6623C8.43107 25.9226 8.132 26.2925 7.95539 26.7252C7.77879 27.158 7.73258 27.6342 7.82261 28.0936C7.91264 28.5531 8.13487 28.9751 8.46119 29.3063C8.78752 29.6375 9.20328 29.8631 9.6559 29.9545C10.1085 30.0459 10.5777 29.999 11.004 29.8197C11.4304 29.6405 11.7948 29.3369 12.0512 28.9474C12.3076 28.5579 12.4444 28.1 12.4444 27.6316C12.4444 27.0034 12.1986 26.401 11.761 25.9569C11.3234 25.5127 10.7299 25.2632 10.1111 25.2632ZM26.4444 20.5263H7.77778C7.36522 20.5263 6.96956 20.36 6.67783 20.0639C6.38611 19.7677 6.22222 19.3661 6.22222 18.9474C6.22222 18.5286 6.38611 18.127 6.67783 17.8309C6.96956 17.5348 7.36522 17.3684 7.77778 17.3684H20.9863C21.9997 17.3651 22.9846 17.0286 23.7936 16.4092C24.6027 15.7898 25.1922 14.921 25.4738 13.933L27.94 5.17089C28.0062 4.9359 28.0177 4.68853 27.9737 4.44825C27.9296 4.20797 27.8313 3.98134 27.6863 3.78621C27.5413 3.59107 27.3537 3.43276 27.1382 3.32373C26.9227 3.2147 26.6852 3.15793 26.4444 3.15789H7.37189C7.04987 2.23793 6.45624 1.44112 5.67191 0.876022C4.88757 0.310923 3.95065 0.00502223 2.98883 0H1.55556C1.143 0 0.747335 0.166353 0.455612 0.462463C0.163888 0.758573 0 1.16018 0 1.57895C0 1.99771 0.163888 2.39932 0.455612 2.69543C0.747335 2.99154 1.143 3.15789 1.55556 3.15789H2.98883C3.32651 3.15909 3.65473 3.27129 3.92433 3.47768C4.19394 3.68407 4.39042 3.97356 4.48437 4.30279L4.72629 5.16291L4.72666 5.17089L7.27876 14.2375C6.09119 14.3672 4.9978 14.9541 4.22375 15.8775C3.44969 16.8008 3.05389 17.9903 3.11784 19.2009C3.18179 20.4115 3.70063 21.5512 4.56752 22.3853C5.43441 23.2193 6.58335 23.6842 7.77778 23.6842H26.4444C26.857 23.6842 27.2527 23.5179 27.5444 23.2218C27.8361 22.9256 28 22.524 28 22.1053C28 21.6865 27.8361 21.2849 27.5444 20.9888C27.2527 20.6927 26.857 20.5263 26.4444 20.5263ZM24.3823 6.31579L22.4826 13.0649C22.3888 13.3944 22.1922 13.6841 21.9225 13.8907C21.6527 14.0972 21.3242 14.2094 20.9863 14.2105H10.5068L10.1103 12.8018L8.28554 6.31579H24.3823ZM22.5556 25.2632C22.0941 25.2632 21.6429 25.4021 21.2592 25.6623C20.8755 25.9226 20.5764 26.2925 20.3998 26.7252C20.2232 27.158 20.177 27.6342 20.2671 28.0936C20.3571 28.5531 20.5793 28.9751 20.9056 29.3063C21.232 29.6375 21.6477 29.8631 22.1003 29.9545C22.553 30.0459 23.0221 29.999 23.4485 29.8197C23.8748 29.6405 24.2393 29.3369 24.4957 28.9474C24.752 28.5579 24.8889 28.1 24.8889 27.6316C24.8889 27.0034 24.6431 26.401 24.2055 25.9569C23.7679 25.5127 23.1744 25.2632 22.5556 25.2632Z"
                                    fill="#000" />
                            </svg>
                            <div class="flex md:hidden items-center justify-between mb-[10px]">
                                <a href="" class="text-[#BF5F00]" aria-current="page">
                                    Cart
                                </a>
                                <span style="color: #a1a1aa;">
                                    <i class="fa-xs	fa-solid fa-chevron-right"></i>
                                </span>


                            </div>
                        </div>
                    </li>
                    <li>
                    <a href="{{ route('login') }}"
                    class="inline-block  rounded-[3.5px] border-[2px] border-[#FF7E00] xl:py-[10px] xl:px-[33px] py-[8px] px-[27px] ops font-[700] xl:text-[14px] text-[12px] md:mt-[0px] mt-[10px] text-[#FF7E00]">
                    Login</a>
                    </li>
                    <li>
                    <a href="{{ route('register') }}"
                    class="inline-block  rounded-[3.5px] border-[2px] border-[#FF7E00] bg-[#FF7E00] xl:py-[10px] xl:px-[33px] py-[8px] px-[27px] ops font-[700] xl:text-[14px] md:mt-[0px] mt-[10px] text-[12px] text-white">
                    Register</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
