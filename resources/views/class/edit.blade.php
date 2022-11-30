@extends('class.layout')
@section('content')

<div class="container-fluid py-3">
  <div class="container">
  <div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('class/' .$classes->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$classes->id}}" id="id" />
        <label>Classname</label></br>
        <input type="text" name="classname" id="classname" value="{{$classes->name}}" class="form-control"></br>
        <label>Section</label></br>
        <input type="text" name="section" id="section" value="{{$classes->address}}" class="form-control"></br>
        <label>Subject</label></br>
        <input type="text" name="subject" id="subject" value="{{$classes->mobile}}" class="form-control"></br>
        <label>Room</label></br>
        <input type="text" name="room" id="room" value="{{$classes->mobile}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
  </div>
</div>

 
@stop