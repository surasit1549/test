@extends('user.master')
@section('title','welcome Homepage')
@section('content')
    <h1> Hello Laravel </h1>
    <a href="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
@stop
