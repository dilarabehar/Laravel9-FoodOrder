

@extends('layouts.frontbase')

@section('title', 'title from sub file')

@section('sidebar')
    @parent  //to change all sidebar

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
@endsection
