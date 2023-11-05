@extends('layouts.back')

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Mentor</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin-home') }}">Backend</a></li>
                            <li class="breadcrumb-item active">Mentor</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <section class="content">
        <div class="card">
            <h5 class="card-header">
                <a href="{{ route('mentor-c') }}"
                    class="btn btn-sm btn-primary">
                    <i class="fas fa-plus"></i> Create
                </a>
            </h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                <thead>
                    <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Desc</th>
                    <th>Image</th>
                    <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($mentor as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->desc }}</td>
                        <td class="w-25"><img src="{{ asset('images/mentor/'. $item->image) }}" alt="" class="img-thumbnail"></td>
                        <td>
                            <a href=""
                                class="btn btn-sm btn-success">
                                <i class="fas fa-edit"></i> Edit
                            </a>

                            <form action=""
                                method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="fas fa-trash-alt pe-1"></i> Destroy
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
            </div>
        </section>
    </div>
@endsection
