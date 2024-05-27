@extends('layouts.master')


@section('content')

<h1>dreamjob Details</h1>
    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <td>{{ $dreamjob->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $dreamjob->email }}</td>
        </tr>
        <tr>
            <th>Phone</th>
            <td>{{ $dreamjob->phone }}</td>
        </tr>
        <tr>
            <th>Image</th>
            <td>
                @if($dreamjob->image)
                    <img src="{{ asset('storage/' . $dreamjob->image) }}" width="100">
                @endif
            </td>
        </tr>
        <tr>
            <th>File</th>
            <td>
                @if($dreamjob->file)
                    <a href="{{ asset('storage/' . $dreamjob->file) }}">Download</a>
                @endif
            </td>
        </tr>
        <tr>
            <th>Date</th>
            <td>{{ $dreamjob->date }}</td>
        </tr>
        <tr>
            <th>Note</th>
            <td>{{ $dreamjob->note }}</td>
        </tr>
    </table>
    <a href="{{ route('dreamjobs.index') }}" class="btn btn-primary">Back</a>

@endsection
