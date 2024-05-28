@extends('layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
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
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">Edit Employee</div>
                        <div class="card-body">
                            <form action="{{ url('employee/' .$employees->id) }}" method="post" enctype="multipart/form-data">
                              {!! csrf_field() !!}
                              @method("PATCH")
                              <input type="hidden" name="id" id="id" value="{{$employees->id}}" id="id" />
                              <label>Name</label></br>
                              <input type="text" name="name" id="name" value="{{$employees->name}}" class="form-control"></br>
                              <label>Education</label></br>
                              <input type="text" name="education" id="education" value="{{$employees->education}}" class="form-control"></br>
                              <label>Experience</label></br>
                              <input type="text" name="experience" id="experience" value="{{$employees->experience}}" class="form-control"></br>
                              <label>Salary</label></br>
                              <input type="text" name="salary" id="salary" value="{{$employees->salary}}" class="form-control"></br>
                              <label>Reference</label></br>
                              <input type="text" name="reference" id="reference" value="{{$employees->reference}}" class="form-control"></br>
                              <label>Address</label></br>
                              <input type="text" name="address" id="address" value="{{$employees->address}}" class="form-control"></br>
                              <label>Mobile</label></br>
                              <input type="text" name="mobile" id="mobile" value="{{$employees->mobile}}" class="form-control"></br>
                              <label>Email</label></br>
                              <input type="email" name="email" id="email" value="{{$employees->email}}" class="form-control"></br>
                              <label>Date</label></br>
                              <input type="date" name="date" id="date" value="{{$employees->date}}" class="form-control"></br>
                              <label>Link</label></br>
                              <input type="url" name="link" id="link" value="{{$employees->link}}" class="form-control"></br>
                              <label>Note</label></br>
                              <textarea name="note" id="note" class="form-control">{{$employees->note}}</textarea></br>
                              @if($employees->image)
                                <p>Current Image: <img src="{{ asset('storage/' . $employees->image) }}" alt="Employee Image" style="max-width: 200px;"></p>
                              @endif
                              <label>New Image</label></br>
                              <input type="file" name="image" id="image" class="form-control"></br>
                              @if($employees->file)
                                <p>Current File: <a href="{{ asset('storage/' . $employees->file) }}" target="_blank">Download</a></p>
                              @endif
                              <label>New File</label></br>
                              <input type="file" name="file" id="file" class="form-control"></br>
                              <input type="submit" value="Update" class="btn btn-success"></br>
                          </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
