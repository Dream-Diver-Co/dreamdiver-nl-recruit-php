@extends('layouts.master')


@section('content')

{{-- <h1>Contacts</h1>
<a href="{{ route('dreamjob.create') }}">Add Contact</a>

@if ($message = Session::get('success'))
    <p>{{ $message }}</p>
@endif

<table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Date</th>
        <th>Note</th>
        <th>Actions</th>
    </tr>
    @foreach ($dreamjobs as $dreamjob)
        <tr>
            <td>{{ $dreamjob->name }}</td>
            <td>{{ $dreamjob->email }}</td>
            <td>{{ $dreamjob->phone }}</td>
            <td>{{ $dreamjob->date }}</td>
            <td>{{ $dreamjob->note }}</td>
            <td>
                <a href="{{ route('dreamjobs.show', $dreamjob->id) }}">Show</a>
                <a href="{{ route('dreamjobs.edit', $dreamjob->id) }}">Edit</a>
                <form action="{{ route('dreamjobs.destroy', $dreamjob->id) }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table> --}}

<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dream Job</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dream Job</li>
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
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">sl</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">phone</th>
                        {{-- <th scope="col">message</th> --}}
                        <th scope="col">note</th>
                      </tr>
                    </thead>

                    <tbody>
                        @php
                            $sl = 1;
                        @endphp
                        @foreach ($dreamjobs as $dreamjob )
                      <tr>
                        <th scope="row">{{ $sl++ }}</th>
                        <td>{{ $dreamjob->name; }}</td>
                        <td>{{ $dreamjob->email; }}</td>
                        <td>{{ $dreamjob->phone; }}</td>
                        {{-- <td>{{ $service->message; }}</td> --}}
                        <td>{{ $dreamjob->note; }}</td>

                      </tr>
                      @endforeach

                    </tbody>
                </table>
            </div>


        </div>
        <!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection
