@extends('layouts.master')


@section('content')

{{-- <h1>Add dreamjob</h1>
<form action="{{ route('dreamjobs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="file">File:</label>
        <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="note">Note:</label>
        <textarea name="note" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-success">Submit</button>
</form> --}}

<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Find Your Dream Jobs Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Find Your Dream Jobs Create</li>
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
                    <form class="row g-3" action="{{ route('dreamjob_form_store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="inputAddress2" placeholder="">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputAddress2" placeholder="">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Phone</label>
                            <input type="text" name="phone" class="form-control" id="inputAddress2" placeholder="">
                            @error('phone')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        {{-- <div class="col-12">
                            <label for="inputAddress2" class="form-label">Message</label>
                            <input type="text" name="message" class="form-control" id="inputAddress2" placeholder="">
                            @error('message')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div> --}}

                        <div class="col-12">
                            <label for="inputAddress2" class="form-label">Note</label>
                            <input type="text" name="note" class="form-control" id="inputAddress2" placeholder="">
                            @error('note')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Main content end -->
</div>

@endsection
