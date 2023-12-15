@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Create new Profile</h1>
</div>

<div class="col-lg-8">
    <form action="route('users.create')" method="post" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="nik" class="form-label">NIK</label>
            <input type="text" class="form-control" id="nik" name="nik" value="{{ old('nik') }}">
        </div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" required autofocus value="{{ old('name') }}">
        </div>
        <div class="mb-3">
            <label for="gender" class="form-label">Gender</label>
            <input type="text" class="form-control" id="gender" name="gender" required autofocus value="{{ old('gender') }}">
        </div>
        <!-- <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Gender
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Male</a></li>
                <li><a class="dropdown-item" href="#">Female</a></li>
            </ul>
        </div> -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="textarea" class="form-control" id="address" name="address" required autofocus value="{{ old('address') }}">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" name="email" autofocus required value="{{ old('email') }}">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" required autofocus value="{{ old('password') }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
        <button type="reset" class="btn btn-danger">Reset</button>
    </form>
</div>

@endsection
