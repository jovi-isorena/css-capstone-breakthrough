@extends('class.layout')
@section('content')


<div class="container_create container">
  <h2>Create Class</h2>
  <form action="{{ url('class') }}" method="post">
        {!! csrf_field() !!}
        <input class="inp" type="text" name="classname" id="classname" class="form-control" placeholder="Class Name"></br>
        <input class="inp" type="text" name="section" id="section" class="form-control" placeholder="Section"></br>
        <input class="inp" type="text" name="subject" id="subject" class="form-control" placeholder="Subject"></br>
        <input class="inp" type="text" name="room" id="room" class="form-control" placeholder="Room"></br>
        
        <div class="button_create_wrap">
          <input type="submit" value="Create" class="btn btn-success">
          <a href="{{ url('class') }}">Cancel</a>

        </div>
    </form>
</div>
<!-- <div class="container-fluid py-3">
  <div class="container">
  <div class="card">
  <div class="card-header">Class Create Page</div>
  <div class="card-body">
      
      <form action="{{ url('class') }}" method="post">
        {!! csrf_field() !!}
        <label>Classname</label></br>
        <input type="text" name="classname" id="classname" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" class="form-control"></br>
        <label>Room</label></br>
        <input type="text" name="room" id="room" class="form-control"></br>
        
        <input type="submit" value="Create" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
  </div>
</div> -->

 
@stop