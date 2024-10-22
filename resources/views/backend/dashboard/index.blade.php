@extends('backend.layouts.layout')

@section('content')
    <p>Welcome, {{ Auth::user()->first_name??Auth::user()->username }}!</p>
@endsection