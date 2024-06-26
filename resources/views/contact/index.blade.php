@extends('layouts.master')

@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Contact messages</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Contact messages</li>
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
                        @foreach ($contacts as $service )
                      <tr>
                        <th scope="row">{{ $sl++ }}</th>
                        <td>{{ $service->name; }}</td>
                        <td>{{ $service->email; }}</td>
                        <td>{{ $service->phone; }}</td>
                        {{-- <td>{{ $service->message; }}</td> --}}
                        <td>{{ $service->note; }}</td>

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



