@extends('admin')

@section('title', 'Change Password')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Change password</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Change password</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Update password</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('password.update', $user->id) }}" role="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                  <div class="row">
                    <div class="col-md-6 offset-md-3">
                      <div class="form-group">
                        <label for="name">Current Password</label>
                        @error('current_password')
                         - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" class="form-control" value="" id="current_password" placeholder="Enter current password" name="current_password" autocomplete="new-password">
                      </div>
    
                      <div class="form-group">
                        <label for="name">New Password</label>
                        @error('password')
                         - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" class="form-control" id="password" placeholder="Enter new password" name="password">
                      </div>
    
                      <div class="form-group">
                        <label for="email">Confirm password</label>
                        @error('password_confirmation')
                         - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="password" class="form-control" id="password_confirmation" placeholder="Enter password confirmation" name="password_confirmation">
                      </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
      
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Change password</button>
                </div>
            </form>
        </div>
      </div>
      <!-- /.col-md-12 -->
    </div>
    <!-- /.row -->
  </div>
</div>


@endsection