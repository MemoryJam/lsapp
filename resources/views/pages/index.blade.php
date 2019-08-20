@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
    <h1 class="display-3">{{$title}}</h1>
            <a class="btn btn-primary btn-lg" href="Jumbo action link" role="button" href="/login">Login</a>
            <a class="btn btn-secondary btn-lg" href="Jumbo action link" role="button" href="/register">Register</a>
    </div>
@endsection
