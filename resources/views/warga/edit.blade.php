
<body>
@extends('layout.master')
@section('content')
<div class="container">
    <form action="/warga/{{$warga->id}}" method="post">
        @method('put')
        @csrf
        <input type="text" name="name" placeholder="name" value="{{$warga->name}}">
        <input type="text" name="phone" placeholder="phone" value="{{$warga->phone}}">
        <input class="btn btn-warning"  type="submit" value="edit warga">
    </form>
</div>
@endsection
