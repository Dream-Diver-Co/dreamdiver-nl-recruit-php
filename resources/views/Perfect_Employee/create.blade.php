@extends('layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Recruitments</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Recruitments</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Create New Employee</div>
                        <div class="card-body">
                            @if (session('success_message'))
                                <div class="alert alert-success">
                                    {{ session('success_message') }}
                                </div>
                            @endif
                            <form action="{{ url('employee') }}" method="post" enctype="multipart/form-data">
                              {!! csrf_field() !!}
                              <label>Name</label></br>
                              <input type="text" name="name" id="name" class="form-control"></br>
                              <label>email</label></br>
                              <input type="email" name="email" id="email" class="form-control"></br>
                              <label>company_name</label></br>
                              <input type="text" name="company_name" id="company_name" class="form-control"></br>
                              <label>phone</label></br>
                              <input type="tel" name="mobile" id="mobile" class="form-control"></br>
                              <label>job_title</label></br>
                              <input type="text" name="job_title" id="job_title" class="form-control"></br>
                              <label>job_description</label></br>
                              <input type="text" name="job_description" id="job_description" class="form-control"></br>
                              <label>location</label></br>
                              <input type="text" name="location" id="location" class="form-control"></br>
                              <label>Education</label></br>
                              <input type="text" name="education" id="education" class="form-control" required></br>
                              <label>skills</label></br>
                              <input type="text" name="skills" id="experience" class="form-control" required></br>
                              <label>Salary</label></br>
                              <input type="text" name="salary" id="salary" class="form-control" required></br>
                              <label>Reference</label></br>
                              <input type="text" name="reference" id="reference" class="form-control" required></br>
                              <label>Address</label></br>
                              <input type="text" name="address" id="address" class="form-control"></br>
                              <label>Image</label></br>
                              <input type="file" name="image" id="image" class="form-control"></br>
                              <label>Date</label></br>
                              <input type="date" name="date" id="date" class="form-control"></br>
                              <label>File</label></br>
                              <input type="file" name="file" id="file" class="form-control"></br>
                              <label>Link</label></br>
                              <input type="url" name="link" id="link" class="form-control"></br>
                              <label>process</label></br>
                              <input type="textarea" name="process" id="process" class="form-control"></br>
                              <label>company culture</label></br>
                              <input type="textarea" name="note" id="note" class="form-control"></br>
                              <input type="submit" value="Save" class="btn btn-success"></br>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
