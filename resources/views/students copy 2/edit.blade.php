@extends('layouts.master')


@section('content')

<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Recruitments</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Recruitments</li>
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
                        <div class="card-header">Edit Student</div>
                        <div class="card-body">

                            <form action="{{ url('student/' . $students->id) }}" method="post" enctype="multipart/form-data">
                              {!! csrf_field() !!}
                              @method("PATCH")
                              <input type="hidden" name="id" id="id" value="{{ $students->id }}" />
                              <label>Name</label></br>
                              <input type="text" name="name" id="name" value="{{ $students->name }}" class="form-control"></br>
                              <label>Education</label></br>
                              <input type="text" name="education" id="education" value="{{ $students->education }}" class="form-control" required></br>
                              <label>Experience</label></br>
                              <input type="text" name="experience" id="experience" value="{{ $students->experience }}" class="form-control" required></br>
                              <label>Salary</label></br>
                              <input type="text" name="salary" id="salary" value="{{ $students->salary }}" class="form-control" required></br>
                              <label>Reference</label></br>
                              <input type="text" name="reference" id="reference" value="{{ $students->reference }}" class="form-control" required></br>
                              <label>Address</label></br>
                              <input type="text" name="address" id="address" value="{{ $students->address }}" class="form-control"></br>
                              <label>Mobile</label></br>
                              <input type="text" name="mobile" id="mobile" value="{{ $students->mobile }}" class="form-control"></br>
                              <label>Email</label></br>
                              <input type="email" name="email" id="email" value="{{ $students->email }}" class="form-control"></br>
                              <label>Image</label></br>
                              <input type="file" name="image" id="image" class="form-control"></br>
                              <label>Date</label></br>
                              <input type="date" name="date" id="date" value="{{ $students->date }}" class="form-control"></br>
                              <label>File</label></br>
                              <input type="file" name="file" id="file" class="form-control"></br>
                              <label>Link</label></br>
                              <input type="url" name="link" id="link" value="{{ $students->link }}" class="form-control"></br>
                              <label>Note</label></br>
                              <input type="textarea" name="note" id="note" value="{{ $students->note }}" class="form-control"></br>
                              <input type="submit" value="Update" class="btn btn-success"></br>
                          </form>

                        </div>
                      </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection
