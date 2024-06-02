@extends('layouts.master')


@section('content')


<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Perfect Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Perfect Employee</li>
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
                        <div class="card-header">Find Skilled Employee List</div>
                        <div class="card-body">
                            {{-- <a href="{{ url('/employee/create') }}" class="btn btn-success btn-sm" title="Add New Employee">
                                Add New
                            </a> --}}
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Actions</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Company Name</th>
                                            <th>Contact Information</th>
                                            <th>Job Title</th>
                                            <th>Job Description</th>
                                            <th>Location</th>
                                            <th>File</th>
                                            <th>Education</th>
                                            <th>Skills</th>
                                            <th>Date</th>
                                            <th>Salary</th>
                                            <th>Recruitment Process</th>
                                            <th>company culture</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($employees as $employee)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <a href="{{ url('/employee/' . $employee->id) }}" title="View Employee"><button class="btn btn-info btn-sm" style="height: 30px; width: 70px;"> View</button></a>
                                                {{-- <a href="{{ url('/employee/' . $employee->id . '/edit') }}" title="Edit Employee"><button class="btn btn-primary btn-sm">Edit</button></a> --}}
                                                <form method="POST" action="{{ url('/employee' . '/' . $employee->id) }}" accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm" style="height: 30px; width: 70px; margin-top: 5px;" title="Delete Employee" onclick="return confirm('Confirm delete?')"> Delete</button>
                                                </form>
                                            </td>
                                            <td>{{ $employee->name }}</td>
                                            <td>{{ $employee->email }}</td>
                                            <td>{{ $employee->company_name }}</td>
                                            <td>{{ $employee->mobile }}</td>
                                            <td>{{ $employee->job_title }}</td>
                                            <td>{{ $employee->job_description }}</td>
                                            <td>{{ $employee->location }}</td>
                                            <td>{{ $employee->file }}</td>
                                            <td>{{ $employee->education }}</td>
                                            <td>{{ $employee->skills }}</td>
                                            <td>{{ $employee->date }}</td>
                                            <td>{{ $employee->salary }}</td>
                                            <td>{{ $employee->process }}</td>
                                            <td>{{ $employee->note }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
