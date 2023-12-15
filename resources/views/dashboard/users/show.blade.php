@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row justify-content-center my-5">
      <div class="col-lg-8">
        <h1 class="my-3">{{ $user->name }}</h1>

        <img src="https://source.unsplash.com/1200x400?{{ $users->name }}" alt="{{ $users->name }}" class="img-fluid">
        
        <table id="example" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email Address</th>
                </tr>
            </thead>
            <tbody>
              @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->nik }}</td>
                    <td>{{ $user->gender }}</td>
                    <td>{{ $user->address }}</td>
                    <td>{{ $user->email }}</td>
                </tr>
              @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>Name</th>
                    <th>NIK</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Email Address</th>
                </tr>
            </tfoot>
        </table>

        <!-- <a href="/dashboard/users" class="btn btn-primary">Back to my profile</a>
        <a href="/dashboard/users/{{ $users->nik }}/edit" class="btn btn-warning">Edit post</a>
        <form action="/dashboard/users/{{ $users->nik }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
        </form> -->

      </div>
    </div>
  </div>
@endsection