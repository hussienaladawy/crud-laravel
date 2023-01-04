@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('warga') }}</div>

                <div class="card-body">
                    <a class="btn btn-primary" href="/warga/create">add warga</a>
                    <table class="table table-hover">
                        <tr>
                            <th>id</th>
                            <th>name</th>
                            <th>phone</th>
                            <th>update  </th>
                            <th> delete</th>
                        </tr>
                        @foreach ($warga as $w )
                        <tr>
                            <td>{{$w->id}}</td>
                            <td>{{$w->name}}</td>
                            <td>{{$w->phone}}</td>
                            <td>
                                <a href="/warga/{{$w->id}}/edit" class="btn btn-success">edit</a>
                            </td>
                            <td>        {{-- <a href="/warga/{{$w->id}}/delete">delete</a> --}}
                    <form action="/warga/{{$w->id}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="delete" class="btn btn-danger">
                    </form>
                            </td>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container">


</div>
@endsection
