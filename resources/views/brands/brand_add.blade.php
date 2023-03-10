@extends('layouts.master_layout.master_layout')
@section('title', 'Add Brand')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add New Brand</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                        <li class="breadcrumb-item active">Add New Brand</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <form method="POST" action="{{route('brands.add')}}">
                @csrf
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Add Brand Form</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <!-- /.card-header -->

                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="roles"><span style="color: red;">* </span>Brand Name:</label>
                                    <div class="input-group">
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                                            placeholder="Enter Brand Name" required>
                                    </div>
                                    @error('name')
                                        <p style="color:red">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Brand Description:</label>
                                    <textarea class="form-control" name="description" rows="4" cols="50" placeholder="Enter Brand Description"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                            </div>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </section>

@endsection
