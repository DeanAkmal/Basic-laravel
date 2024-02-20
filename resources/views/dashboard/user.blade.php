@extends('template.master')

@section('content')
<h1>Welcome to user</h1>
<form action="{{route('auth.logout')}}" method="POST">
@csrf
    <input type="submit" value="logout">
</form>
@endsection