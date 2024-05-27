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
                          <div class="card-header">Students Page</div>
                          <div class="card-body">
                                <div class="card-body">
                                <h5 class="card-title">Name : {{ $students->name }}</h5>
                                <p class="card-text">Address : {{ $students->address }}</p>
                                <p class="card-text">Mobile : {{ $students->mobile }}</p>
                          </div>
                            </hr>
                          </div>
                        </div>
                </div>
            </div>
        </div>
    </section>
    <!--Main content end -->
</div>

@endsection
