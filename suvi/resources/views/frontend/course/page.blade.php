@extends('layouts.front')


@section('content')
   <div class="mx-[27px] grid grid-cols-1  lg:grid-cols-5">
        <div class="px-[16px] bg-white shadow-lg h-[600px] overflow-y-auto	">
            <div class="flex items-center">
                @include('components.icon.menuCoursePageIcon')
                <p class="ml-[60px]">Kontent Kursus</p>
            </div>
            <div class="bg-[#FF7E00] py-[18px] flex justify-between	px-[16px] mx-[-16px] mt-[10px]">
                <p class="text-base ops text-white">Sertifikasi BNSP</p>
                @include('components.icon.lockIcon')
            </div>

            @include('components.bagianCourse', ['id' => '1'])
            <hr class="mx-[-16px]">
            @include('components.bagianCourse', ['id' => '2'])
            <hr class="mx-[-16px]">
            @include('components.bagianCourse', ['id' => '3'])
            <hr class="mx-[-16px]">
            @include('components.bagianCourse', ['id' => '4'])
            <hr class="mx-[-16px]">

            <script>
                $(document).ready(function() {
                    $("#buttonToggle1").click(function() {
                        $("#toggle1").toggle();
                    });
                });

                $(document).ready(function() {
                    $("#buttonToggle2").click(function() {
                        $("#toggle2").toggle();
                    });
                });

                $(document).ready(function() {
                    $("#buttonToggle3").click(function() {
                        $("#toggle3").toggle();
                    });
                });

                $(document).ready(function() {
                    $("#buttonToggle4").click(function() {
                        $("#toggle4").toggle();
                    });
                });
            </script>

            <hr class="px-[-16px]">
        </div>
        <div class="col-span-4 mt-[20px] lg:mt-[0px] lg:ml-[24px]">
            <div class="bg-[#D9D9D9] w-full h-[555px] relative">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    @include('components.icon.iconPlayVideo')
                </div>

            </div>
            <div class="flex sm:flex-row flex-col items-start justify-between mt-[15px]">
                <div class="">
                    <p class="text-2xl text-[#1F1F1F] ops font-semibold	">Pengenalan tools: laso tool</p>
                    <p class="ops mt-[8px]">Bagian 3: pengenalan tools</p>
                </div>
                <div class="sm:mt-[0px] mt-[15px] rounded-[3.5px] bg-[#FF7E00] py-[10px] px-[33px]">
                    <p class=" ops font-[700] text-[14px] text-white"><a href="">Next Lesson</a></p>
                </div>


            </div>

            <p class="mt-[31px] mb-[20px] text-2xl text-[#1F1F1F] ops font-semibold	">Resource yang diperlukan</p>
            <div class="grid grid-cols-1 xl:grid-cols-4 lg:grid-cols-2 gap-3">
                <div class="flex p-[8px] border border-[#1F1F1F] rounded-[4px]">
                    @include('components.icon.fileDownloadIcon')
                    <p>Background_image.png</p>
                </div>
                <div class="flex p-[8px] border border-[#1F1F1F] rounded-[4px]">
                    @include('components.icon.fileDownloadIcon')
                    <p>Background_image.png</p>
                </div>
            </div>
        </div>
    </div>
@endsection
