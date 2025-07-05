@extends('layout.default_layout')
@section('head')
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
@endsection
@section('header')
  @include('layout.navbar')
@endsection

@section('main')
<br>
<br>
<br>
<div class="container col-md-6">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <h2>Hi, {{$user->username}}</h2>
      <form action="{{url('update_profile',$user->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name:</label>
          <input type="text" name="name" class="form-control" value="{{$user->name}}">
        </div>
        <div class="form-group">
          <label for="phone">Phone:</label>
          <input type="text" name="phone" class="form-control" value="{{$user->phone}}">
        </div>
        <div class="form-group">
          <label for="address">Address:</label>
          <textarea name="address" class="form-control">{{ $user->address }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

@endsection