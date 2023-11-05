@extends('layouts.back')

@section('javascript')
    <script>
        $(function(){
            $('input[name=image]').change(function(){
                imagePreview(this);
            });
        })
        function imagePreview(input){
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e){
                    $("#preview").removeClass("d-none");
                    $("#preview").attr("src",e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mentor - Create</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Backend</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('mentor-index') }}">Mentor</a></li>
                            <li class="breadcrumb-item active">Create</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="mb-0">Form Create</h5>
                </div>
                <div class="card-body">
                    <form  action="{{ route('mentor-cp') }}"  method="post" enctype="multipart/form-data">
                    @csrf
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label @error('image') text-danger @enderror" for="basic-default-image">Image</label>
                            <div class="col-sm-10">
                                <input type="file" class="form-control @error('image') text-danger is-invalid @enderror" name="image" id="basic-default-image"/>
                                <img src="" class="img-thumbnail mt-3 mb-3 d-none w-50" id="preview">
                                @error('image')
                                    <small class="text-danger">{!! $message !!}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label @error('name') text-danger @enderror" for="basic-default-name">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control @error('name') text-danger is-invalid @enderror" name="name" id="basic-default-name" placeholder="Input the name" />
                                @error('name')
                                    <small class="text-danger">{!! $message !!}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label @error('desc') text-danger @enderror" for="basic-default-desc">Desc</label>
                            <div class="col-sm-10">
                                <textarea id="basic-default-desc"  name="desc" class="form-control @error('desc') text-danger @enderror"></textarea>
                                @error('desc')
                                    <small class="text-danger">{!! $message !!}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label @error('email') text-danger @enderror" for="basic-default-email">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control @error('email') text-danger is-invalid @enderror" name="email" id="basic-default-email" placeholder="Input the email" />
                                @error('email')
                                    <small class="text-danger">{!! $message !!}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label @error('password') text-danger @enderror" for="basic-default-password">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control @error('password') text-danger is-invalid @enderror" name="password" id="basic-default-password" placeholder="Input the password" />
                                @error('password')
                                    <small class="text-danger">{!! $message !!}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-end">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection