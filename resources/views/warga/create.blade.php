@extends('layout.master')
@section('content')
<div class="container">
    <h2>create warga</h2>
<form action="/warga/store" method="post">
    @csrf
    <input type="text" name="name" placeholder="name">
    <input type="text" name="email" placeholder="email">
    <input type="password" name="password" placeholder="password">
    <input  class="btn btn-secondary" type="submit" value="create warga">
</form>
</div>
@endsection
