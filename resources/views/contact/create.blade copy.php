@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact form message Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact form message Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
        <div class="col-lg-12">

            <form class="row g-3" action="{{ route('contact_form_store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="col-12">
                    <label for="inputAddress2" class="form-label">name</label>
                    <input type="text"  name="name"  class="form-control" id="inputAddress2" placeholder="">
                </div>
                <div class="col-12">
                  <label for="inputAddress2" class="form-label">email</label>
                  <input type="email" id="img" name="email" accept="image/*"  class="form-control"  placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">phone</label>
                    <input type="text" id="img" name="phone"  class="form-control"  placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">message</label>
                    <input type="text" id="img" name="message"  class="form-control"  placeholder="">
                </div>
                <div class="col-12">
                    <label for="inputAddress2" class="form-label">note</label>
                    <input type="text" id="img" name="note"  class="form-control"  placeholder="">
                </div>


                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Create</button>
                </div>

              </form>


        </div>
        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection






