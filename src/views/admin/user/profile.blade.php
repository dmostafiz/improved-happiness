@extends('admin')

@section('title', 'Profile')

@section('content')

<div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">User detailes</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">User detailes</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    
    
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-dark" style="padding:30px">
                <!-- form start -->
                <div class="text-center">
                    @if (Auth::user()->avatar != '')
                        <img style="width:200px; height:200px; border-radius:50%" class="img-thumbnail"
                        src="{{ url('storage/user/'. Auth::user()->avatar) }}" alt="" srcset="">
                    @else
                        <img style="width:200px; height:200px; border-radius:50%" class="img-thumbnail"
                        src="{{ url('defaults/user.png') }}" alt="" srcset="">
                    @endif
                </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">User detailes</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered">
                                        <tbody>
                                            <tr role="row" class="odd">
                                                <td>Name</td>
                                                <td>{{ Auth::user()->name }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Email</td>
                                                <td>{{ Auth::user()->email }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Phone</td>
                                                <td>{{ Auth::user()->phone }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Address 1</td>
                                                <td>{{ Auth::user()->address1 }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Address 2</td>
                                                <td>{{ Auth::user()->address2 }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>City</td>
                                                <td>{{ Auth::user()->city }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>Zip</td>
                                                <td>{{ Auth::user()->zip }}</td>
                                            </tr>
                                            <tr role="row" class="odd">
                                                <td>User role</td>
                                                <td>{{ (Auth::user()->user_role == 0) ? "Super Admin" : "" }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div>
</div>

@endsection