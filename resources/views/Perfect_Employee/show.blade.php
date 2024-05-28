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
                        <div class="card-header">Employee Page</div>
                        <div class="card-body">
                            <h5 class="card-title">Name : {{ $employees->name }}</h5>
                            <p class="card-text">Email : {{ $employees->email }}</p>
                            <p class="card-text">Company Name : {{ $employees->company_name }}</p>
                            <p class="card-text">Contact information : {{ $employees->mobile }}</p>
                            <p class="card-text">Job Title : {{ $employees->job_title }}</p>
                            <p class="card-text">Job Description : {{ $employees->job_description }}</p>
                            <p class="card-text">Location : {{ $employees->location }}</p>
                            <p class="card-text">File : {{ $employees->file }}</p>
                            <p class="card-text">Education : {{ $employees->education }}</p>
                            <p class="card-text">Skills : {{ $employees->skills }}</p>
                            <p class="card-text">date : {{ $employees->date }}</p>
                            <p class="card-text">Salary : {{ $employees->salary }}</p>
                            <p class="card-text">Recruitment Process : {{ $employees->process }}</p>
                            <p class="card-text">company culture : {{ $employees->note }}</p>
                            @if($employees->image)
                                <p class="card-text">Image: <img src="{{ asset('storage/' . $employees->image) }}" alt="Employee Image" style="max-width: 200px;"></p>
                            @endif
                            @if($employees->file)
                                <p class="card-text">File: <a href="{{ asset('storage/' . $employees->file) }}" target="_blank">Download</a></p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@endsection
