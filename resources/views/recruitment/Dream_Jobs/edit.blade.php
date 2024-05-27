@extends('layouts.master')


@section('content')

<h1>Edit dreamjob</h1>
<form action="{{ route('dreamjobs.update', $dreamjob->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control" value="{{ $dreamjob->name }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" value="{{ $dreamjob->email }}" required>
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control" value="{{ $dreamjob->phone }}" required>
    </div>
    <div class="form-group">
        <label for="image">Image:</label>
        <input type="file" name="image" class="form-control">
    </div>
    <div class="form-group">
        <label for="file">File:</label>
        <input type="file" name="file" class="form-control">
    </div>
    <div class="form-group">
        <label for="date">Date:</label>
        <input type="date" name="date" class="form-control" value="{{ $dreamjob->date }}" required>
    </div>
    <div class="form-group">
        <label for="note">Note:</label>
        <textarea name="note" class="form-control">{{ $dreamjob->note }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Update</button>
</form>

@endsection
