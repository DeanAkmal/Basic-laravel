@extends('template.master')

@section('content')
<h1>Welcome to Admin</h1>
<form action="{{route('auth.logout')}}" method="POST">
@csrf
    <input type="submit" value="logout">
</form>
@endsection