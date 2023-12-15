@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hello, {{ auth()->user()->name }}</h1>
</div>

<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="..." class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">{{ auth()->user()->name }}</h5>
        <p class="card-text">NIK: {{ auth()->user()->nik }}</p>
        <p class="card-text">Email: {{ auth()->user()->email }}</p>
        <p class="card-text"><small class="text-muted">Email: {{ auth()->user()->email }}</small></p>
      </div>
    </div>
  </div>
</div>
@endsection