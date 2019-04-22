@extends('welcome')

@section('title', 'Page Title')

@section('sidebar')
    <p>This is appended to the master sidebar 1.</p>
@endsection

@section('content')
    <p>{{ trans('Home::home.hello') }}</p>
@endsection