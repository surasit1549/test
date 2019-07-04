@extends('user.master')
@section('title','จัดการฐานข้อมูล')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br />
      <h3 align="center">แก้ไขข้อมูลผู้ใช้ระบบ</h3> <br />
      <form method="post" action="{{action('Usercontroller@update', $id)}}">
        {{csrf_field()}}
        <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="ป้อนชื้อ" value="{{$user->fname}}" />
        </div>
        <div class="form-group">
          <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสนุล" value="{{$user->lname}}"/>
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="Update" />
        </div>
          <input type="hidden" name="_method" value="PATCH"/>
      </form>
    </div>
  </div>
</div>
@endsection
