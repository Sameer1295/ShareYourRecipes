
@extends('layouts.app')
@section('Child title', 'Child Page Title')
@section('sidebar')
    @parent

    <p class="lead" style="background-color: blueviolet">This is appended to the master sidebar.
        Instead of overwriting everything of parents sidebar use this parent directive to add something from child. 
    </p>
@endsection
@section('content')
    <p>This is my body content. It uses app blade php file from layout folders in Views as common layout for our site</p>
@endsection