@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hello, {{ auth()->user()->name }}</h1>
</div>

<div class="my-2">
  <a href="/users/create" class="btn btn-primary">Create Profile</a>
</div>

<div class="card mb-3" style="max-width:full">
  <div class="row g-0">
    <div class="col-md-4">
      <div class="mx-4 my-4">
        <img src="https://source.unsplash.com/500x500?" class="card-img" alt="">
      </div>
    </div>
    <div class="col-md-8">
      <div class="card-body my-2 justify-center">
        <h3 class="card-title">{{ auth()->user()->name }}</h3>
        <h5 class="card-text">NIK: {{ auth()->user()->nik }}</h5>
        <h5 class="card-text">Gender: {{ auth()->user()->gender }}</h5>
        <h5 class="card-text">Address: {{ auth()->user()->address }}</h5>
        <h5 class="card-text">Email: {{ auth()->user()->email }}</h5>
        <div class="d-flex justify-content-end mx-auto my-auto">
          <a href="/users/edit" type="button" class="btn btn-dark" role="button">Edit Profile</a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection