@extends('layouts.master_layout.master_layout')
@section('title','Add user')
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>Add New User</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
            <li class="breadcrumb-item active">Add New User</li>
        </ol>
        </div>
     </div>
    </div><!-- /.container-fluid -->
</section>

<section class="content">
    <div class="container-fluid">
        <form method="POST" action="{{route('add-user')}}">
        @csrf
        <div class="card card-default">
            <div class="card-header">
                <h3 class="card-title">Add User Form</h3>
                <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
                </div>
            </div>
            <!-- /.card-header -->

            <div class="card-body">
                <div class="row">

                <div class="col-md-6">
                  <div class="form-group">
                      <label for="roles"><span style="color: red;">* </span>Name:</label>
                      <div class="input-group">
                        <input type="text" name="name"  value="{{old('name')}}" class="form-control" required>
                      </div>
                      @error('name')
                      <p style="color:red">{{$message}}</p>
                      @enderror
                    </div>
              </div>

                <!-- /.col -->
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="roles"><span style="color: red;">* </span>E-Mail:</label>
                        <input type="text" name="email" value="{{old('email')}}" class="form-control" required>
                        @error('email')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label><span style="color: red;">* </span>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter User Password" required>
                        @error('password')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label><span style="color: red;">* </span>Confirm Password:</label>
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                        @error('confirm_password')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Contact No:</label>
                        <input type="number" name="contact" class="form-control" placeholder="Enter Contact Number">
                        @error('contact')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>CNIC No:</label>
                        <input type="text" name="cnic" class="form-control" placeholder="Enter CNIC Number">
                        @error('cnic')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Salary:</label>
                        <input type="number" name="salary" class="form-control" placeholder="Enter Current Salary">
                        @error('salary')
                        <p style="color:red">{{$message}}</p>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label><span style="color: red;">* </span>User Role:</label>
                        <select name="role_as" class="form-control" id="role_as" required>
                            <option value="" selected="true">Select Role</option>
                            <option value="admin">Admin</option>
                            <option value="employee">Employee</option>
                        </select>
                        @error('role_as')
                        <p style="color:red">{{$message}}</p>
                        @enderror
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
