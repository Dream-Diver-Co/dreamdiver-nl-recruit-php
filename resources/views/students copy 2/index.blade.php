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
                    <div class="container">
                        <div class="row" style="margin:20px;">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h2>Recruitments</h2>
                                    </div>
                                    <div class="card-body">
                                        <a href="{{ route('student.create') }}" class="btn btn-success btn-sm" title="Add New Student">
                                            Add New
                                        </a>
                                        <br/>
                                        <br/>
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Name</th>
                                                        <th>Education</th>
                                                        <th>Experience</th>
                                                        <th>Salary</th>
                                                        <th>Reference</th>
                                                        <th>Address</th>
                                                        <th>Mobile</th>
                                                        <th>Email</th>
                                                        <th>Date</th>
                                                        <th>Link</th>
                                                        <th>Note</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                @foreach($students as $item)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->education }}</td>
                                                        <td>{{ $item->experience }}</td>
                                                        <td>{{ $item->salary }}</td>
                                                        <td>{{ $item->reference }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->mobile }}</td>
                                                        <td>{{ $item->email }}</td>
                                                        <td>{{ $item->date }}</td>
                                                        <td>{{ $item->link }}</td>
                                                        <td>{{ $item->note }}</td>
                                                        <td>
                                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                                                            <form method="POST" action="{{ url('/student/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                                {{ method_field('DELETE') }}
                                                                {{ csrf_field() }}
                                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                                            </form>
                                                        </td>
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
                </div>
            </div>
        </div>
    </section>
    <!-- Main content end -->
</div>


@endsection
