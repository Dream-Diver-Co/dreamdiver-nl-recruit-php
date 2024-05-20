@extends('layouts.master')


@section('content')
<div class="content-wrapper" style="min-height: 320.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Ticket Create</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ticket Create</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <form  action="{{ route('tickets.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row justify-content-between">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body ticket-card">
                            <div class="form-row justify-content-between display-none" >
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                            <label for="inputAddress2" class="col-3 text-right">Ticket creator Id (hide):</label>
                                            <input type="text"  name="ticket_creator_id"  class="form-control col-5" id="inputAddress2" value="{{ auth()->user()->id }}" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between display-none" >
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">User Email (hide)</label>
                                        <input type="text"  name="email"  class="form-control col-5" id="inputAddress2" value="{{ auth()->user()->email }}" placeholder="" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between " >
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Phone</label>
                                        <input type="text"  name="phone"  class="form-control col-5" id="inputAddress2"  placeholder="" >
                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Your Question: </label>
                                        <textarea name="issue" class="form-control col-5" id="inputAddress2" placeholder=""></textarea>

                                    </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <label for="inputAddress2" class="col-3 text-right">Attach File: </label>
                                        <input type="file"  name="files[]"  class="form-control col-5" id="inputAddress2" placeholder="" multiple>
                                    </div>
                                </div>
                            </div>

                            <div class="form-row justify-content-between">
                                <div class="col-lg-12">
                                    <div class="form-group form-row">
                                        <div class="input-group">
                                            <label for="inputAddress2" class="col-3 text-right">Captcha </label>
                                            <div class="col-5">
                                                {!! NoCaptcha::renderJs() !!}
                                                {!! NoCaptcha::display() !!}
                                            </div>

                                        </div>


                                    </div>
                                </div>
                            </div>



                            <div class="form-row justify-content-between" style="display: none">
                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="form-label">Status</label>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusYes" class="form-check-input" value="on" checked>
                                            <label for="statusYes" class="form-check-label">On</label>
                                        </div>
                                        <div class="form-check">
                                            <input type="radio" name="status" id="statusNo" class="form-check-input" value="off">
                                            <label for="statusNo" class="form-check-label">Off</label>
                                        </div>
                                </div>
                            </div>
                            <div class="form-row justify-content-between">

                                @if($errors->any())
            <div class="col-lg-12">
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif


                                <div class="col-lg-12">
                                    <label for="inputAddress2" class="col-3 text-right"></label>
                                    <button type="submit" class="btn btn-primary ">Create</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
      </div>
    </section>
    <!-- /.content -->
  </div>

@endsection
