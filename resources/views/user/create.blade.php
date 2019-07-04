@extends('user.master')
@section('title','จัดการฐานข้อมูล')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br />
      <h3 align="center">เพิ่มข้อมูลผู้ใช้ระบบ</h3> <br />
      <form method="post" action="{{url('user')}}">
        {{csrf_field()}}
        <div class="form-group">
          <input type="text" name="fname" class="form-control" placeholder="ป้อนชื้อ" />
        </div>
        <div class="form-group">
          <input type="text" name="lname" class="form-control" placeholder="ป้อนนามสนุล" />
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="save" />
        </div>
      </form>
    </div>
  </div>
</div>
@endsection
