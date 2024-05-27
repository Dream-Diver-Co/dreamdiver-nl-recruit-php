@extends('layouts.master')


@section('content')

<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">recruitments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">recruitments</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card" style="margin:20px;">
                        <div class="card-header">Create New Students</div>
                        <div class="card-body">

                            <form action="{{ url('student') }}" method="post">
                              {!! csrf_field() !!}
                              <label>Name</label></br>
                              <input type="text" name="name" id="name" class="form-control"></br>
                              <label>Address</label></br>
                              <input type="text" name="address" id="address" class="form-control"></br>
                              <label>Mobile</label></br>
                              <input type="text" name="mobile" id="mobile" class="form-control"></br>
                              <input type="submit" value="Save" class="btn btn-success"></br>
                            </form>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main content end -->
</div>

@endsection
