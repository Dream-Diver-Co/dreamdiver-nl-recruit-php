@extends('layouts.master')


@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Posted Jobs</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Posted Jobs</li>
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
                    <div class="card">
                        <div class="card-header">Find A Suitable Job List View</div>
                        <div class="card-body">
                            <h5 class="card-title" style="font-size: x-large;font-weight: 600;">Name : {{ $students->name }}</h5>
                            <p class="card-text">Email : {{ $students->email }}</p>
                            <p class="card-text">Mobile : {{ $students->mobile }}</p>
                            <p class="card-text">Address : {{ $students->address }}</p>
                            <p class="card-text">Education : {{ $students->education }}</p>
                            <p class="card-text">Experience : {{ $students->experience }}</p>
                            <p class="card-text">Date : {{ $students->date }}</p>
                            <p class="card-text">Salary : {{ $students->salary }}</p>
                            <p class="card-text">Reference : {{ $students->reference }}</p>
                            <p class="card-text">Link : {{ $students->link }}</p>
                            <p class="card-text">Note : {{ $students->note }}</p>
                            @if($students->image)
                            <p class="card-text">Image: <img src="{{ asset('storage/' . $students->image) }}" alt="Student Image" style="max-width: 200px;"></p>
                        @endif
                        @if($students->file)
                            <p class="card-text">File: <a href="{{ asset('storage/' . $students->file) }}" target="_blank">Download</a></p>
                        @endif
                            {{-- @if($students->image)
                                <p class="card-text"><img src="{{ url('images/'.$students->image) }}" alt="{{ $students->name }}" width="100"></p>
                            @endif
                            @if($students->file)
                                <p class="card-text"><a href="{{ url('files/'.$students->file) }}" target="_blank">Download File</a></p>
                            @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>

@endsection
