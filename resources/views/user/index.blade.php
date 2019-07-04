@extends('user.master')
@section('title','welcome Homepage')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12"> <br />
        <br><br>
        <div align="right"><a href="{{route('user.create')}}" class="btn btn-success">เพิ่มข้อมูล</a>
        @if(\Session::has('success'))
          <div class="alert alert-success">
            <a>{{\Session::get('success')}}</a>
          </div>
        @endif
        <table class="table table-bordered table-striped">
          <tr>
            <th>ID</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Edit</th>
            <th>Delete</th>
          </tr>
          @foreach($user as $row)
          <tr>
            <td>{{$row['id']}}</td>
            <td>{{$row['fname']}}</td>
            <td>{{$row['lname']}}</td>
            <td><a href="{{action('Usercontroller@edit',$row['id'])}}" class="btn btn-primary">Edit</a></td>
            <td>
              <form method="post" class="delete_form" action="{{action('Usercontroller@destroy',$row['id'])}}">
                {{csrf_field()}}
              <input type="hidden" name="_method" value="DELETE" />
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
            </td>
          </tr>
          @endforeach
        </table>
    </div>
  </div>
</div>
@stop
