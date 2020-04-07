@extends('admin')

@section('title', 'Edit Profile')

@section('content')

<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit profile</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit profile</li>
            </ol>
        </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>


<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
        <div class="card card-dark">
            <div class="card-header">
              <h3 class="card-title">Update profile</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('profile.update', $user->id) }}" role="form" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">

                    <div class="form-group">
                      <label for="name">Name</label>
                      @error('name')
                       - <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <input type="text" class="form-control" id="name" value="{{ old('name', $user->name) }}" placeholder="Enter name" name="name">
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      @error('email')
                       - <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <input type="text" class="form-control" id="email" value="{{ old('email', $user->email) }}" placeholder="Enter email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone</label>
                        @error('phone')
                            - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="phone" value="{{ old('phone', $user->phone) }}" placeholder="Enter phone" name="phone">
                    </div>


                    <div class="form-group">
                        <label for="address1">Address line 1</label>
                        @error('address1')
                            - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="address1" value="{{ old('address1', $user->address1) }}" placeholder="Enter address 1" name="address1">
                    </div>

                    <div class="form-group">
                        <label for="address2">Address line 2</label>
                        @error('address2')
                            - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="address2" value="{{ old('address2', $user->address2) }}" placeholder="Enter address 2" name="address2">
                    </div>

                    <div class="form-group">
                        <label for="city">City</label>
                        @error('city')
                            - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="city" value="{{ old('city', $user->city) }}" placeholder="Enter your city" name="city">
                    </div>

                    <div class="form-group">
                        <label for="zip">Zip</label>
                        @error('zip')
                            - <span class="text-danger">{{ $message }}</span>
                        @enderror
                        <input type="text" class="form-control" id="zip" value="{{ old('zip', $user->zip) }}" placeholder="Enter zip code" name="zip">
                    </div>

                    <div class="form-group">
                      <label for="avatar">User avatar</label>
                      @error('avatar')
                         - <span class="text-danger">{{ $message }}</span>
                      @enderror
                      <input type="file" class="form-control" id="avatar" name="avatar">
                    </div>

                </div>
                <!-- /.card-body -->
      
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary float-right">Submit</button>
                </div>
            </form>
        </div>
      </div>
      <!-- /.col-md-6 -->
      <div class="col-lg-6">       
      </div>
      <!-- /.col-md-6 -->
    </div>
    <!-- /.row -->
  </div>
</div>


@endsection