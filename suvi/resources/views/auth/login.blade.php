@extends('layouts.front')

@section('content')
<img src="{{ asset('images/left-bub.png') }}" class="z-[-100]	absolute left-[-20.5rem]" alt="">
    <img src="{{ asset('images/right-bub.png') }}" class="z-[-100]	absolute right-[-19.5rem]" alt="">
    <div class="xl:mx-[30.5%] lg:mx-[20%] md:mx-[19%] sm:mx-[15%] mx-[10%]">
        <h1 class="text-[30px] ops font-[600] mb-[22px]">Sign In</h1>
        <p class="text-[16px] font-[400] ops  mb-[35px]">If you dont have an account, you can <span
                class="text-[16px] font-[400] ops text-[#FF7E00]">Sign Up Here</span> here !  !</p>


        <label class="text-[13px] font-[400] ops" for="">Email</label>
        <div class="relative mt-[7px] mb-[38px]">
            <span class="absolute inset-y-0 left-0 flex items-center">
                <button type="submit" class="p-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17"
                        fill="none">
                        <g clip-path="url(#clip0_365_179)">
                            <path
                                d="M1.85198 2.67627H19.22C20.2412 2.67627 21.072 3.34654 21.072 4.17041V12.8292C21.072 13.6531 20.2412 14.3233 19.22 14.3233H1.85198C0.830763 14.3233 -6.10352e-05 13.6531 -6.10352e-05 12.8292V4.17041C-6.10352e-05 3.34654 0.830763 2.67627 1.85198 2.67627ZM2.09369 3.67236L2.34087 3.83841L9.80117 8.85013C10.227 9.13614 10.8451 9.13614 11.2708 8.85013L18.7311 3.83841L18.9783 3.67236H2.09369ZM19.8373 4.39148L13.7589 8.4749L19.8373 11.7385V4.39148ZM1.85198 13.3272H19.22C19.5183 13.3272 19.7678 13.1556 19.8249 12.9284L12.7689 9.13992L12.0608 9.61559C11.6191 9.91236 11.0775 10.0607 10.5359 10.0607C9.9944 10.0607 9.45287 9.91236 9.01105 9.61559L8.303 9.13992L1.24698 12.9284C1.30419 13.1557 1.55368 13.3272 1.85198 13.3272ZM1.23463 11.7385L7.3131 8.47493L1.23463 4.39148V11.7385Z"
                                fill="black" />
                        </g>
                        <defs>
                            <clipPath id="clip0_365_179">
                                <rect width="21.0721" height="17" fill="white" transform="matrix(-1 0 0 1 21.072 0)" />
                            </clipPath>
                        </defs>
                    </svg>
                </button>
            </span>
            <input
                class="placeholder-black form-input w-full	py-2 text-sm text-black bg-transparent text-[16px] font-[400] ops pl-10 "
                placeholder="Enter your email address" autocomplete="off">
        </div>



        <label class="text-[13px] font-[400] ops" for="">Password</label>
        <div class="relative mt-[7px] mb-[38px]">
            <span class="absolute inset-y-0 left-0 flex items-center">
                <button type="submit" class="p-1 ">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="17" viewBox="0 0 22 17"
                        fill="none">
                        <path
                            d="M10.6626 7.2296V4.53742C10.6685 3.31927 10.2696 2.14798 9.55735 1.29383C8.86877 0.457706 7.96741 0 7.01286 0C6.99809 0 6.98035 0 6.96558 0C4.9294 0.00360399 3.27445 2.03625 3.27445 4.53742V7.2296C2.50608 7.34132 1.94458 8.12699 1.94458 9.07844V15.1259C1.94458 16.1531 2.61838 17 3.46063 17H10.4794C11.3216 17 11.9954 16.1531 11.9954 15.1259V9.07844C11.9925 8.13059 11.431 7.34132 10.6626 7.2296ZM3.86255 4.53742H3.8655C3.8655 2.43269 5.25743 0.709985 6.96853 0.709985H6.97149C7.78419 0.706381 8.56438 1.09922 9.14065 1.79839C9.74057 2.52279 10.0745 3.51028 10.0686 4.53742V7.2332H9.41845V4.53742C9.42436 3.71931 9.15839 2.93364 8.68259 2.35701C8.23339 1.8092 7.6246 1.49926 6.98922 1.49926H6.97149C5.61207 1.49926 4.51271 2.86156 4.51271 4.53381V7.2332H3.86255V4.53742ZM8.83035 4.53742V7.2332H5.10672V4.53742C5.10672 3.26161 5.9401 2.22366 6.97444 2.22366H6.99218C7.47093 2.22366 7.93195 2.45792 8.27181 2.87238C8.63235 3.31206 8.83626 3.91393 8.83035 4.53742ZM11.431 15.1367C11.431 15.7674 11.0113 16.2792 10.4942 16.2792H3.47245C2.95528 16.2792 2.53563 15.7674 2.53563 15.1367V9.09646C2.53563 8.46576 2.95528 7.954 3.47245 7.954H10.4942C11.0113 7.954 11.431 8.46576 11.431 9.09646V15.1367Z"
                            fill="black" />
                        <path
                            d="M7.99123 11.8933C7.8612 11.3347 7.44451 10.9526 6.96871 10.9526C6.38061 10.9526 5.90186 11.5329 5.90186 12.2537C5.90186 12.8339 6.21511 13.3421 6.67318 13.5007V14.5098C6.67318 14.708 6.80617 14.8702 6.96871 14.8702C7.13125 14.8702 7.26423 14.708 7.26423 14.5098V13.5007C7.82869 13.3024 8.15672 12.5816 7.99123 11.8933ZM6.96871 12.8303C6.70569 12.8303 6.49291 12.5708 6.49291 12.2501C6.49291 11.9293 6.70569 11.6698 6.96871 11.6698C7.23173 11.6698 7.44451 11.9293 7.44451 12.2501C7.44451 12.5708 7.23173 12.8303 6.96871 12.8303Z"
                            fill="black" />
                    </svg>
                </button>
            </span>
            <input
                class="placeholder-black form-input w-full	py-2 text-sm text-black bg-transparent text-[16px] font-[400] ops pl-10 "
                placeholder="Enter your Password" autocomplete="off">
        </div>

        <div class="mb-[13px] shadow-xl	 text-center text-[17px] text-white font-[600] ops py-[12px]  bg-[#FF7E00] rounded-[32px]">
            Sign In
        </div>

        <p class="ops">Forgot password? <span class="text-[#FF7E00]">Click here</span></p>

        <div class="w-full flex items-center justify-between my-[13px]">
            <hr class="w-full border-[#000]">
            <p class="text-[17px] font-[400]  px-2.5 ops">OR</p>
            <hr class="w-full  border-[#000] ">
        </div>

        <div class="flex justify-between px-[10px]">
            <div class="flex items-center border-[1.3px] border-[#525252] rounded-[5.25px] py-[13px] w-full items-center justify-start">
                <img class="ml-[10%] mr-[10%] sm:ml-[35px] sm:mr-[39px]" src="{{ asset('images/google.png') }}" alt="">
                <p class=" font-bold">Google</p>
            </div>
            <div class="w-[40px]">

            </div>
            <div class="flex items-center border-[1.3px] border-[#525252] rounded-[5.25px] py-[13px] w-full items-center justify-start">
                <img class="ml-[10%] mr-[10%] sm:ml-[35px] sm:mr-[39px]" src="{{ asset('images/facebook.png') }}" alt="">
                <p class=" font-bold">Facebook</p>
            </div>
        </div>
    </div>
@endsection
