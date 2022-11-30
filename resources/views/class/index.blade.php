@extends('class.layout')
@section('content')

<div class="create_class_container">
    <div class="class_image">
        <img src="{{url('/pexels-roberto-nickson-2559941.jpg')}}" alt="">
    </div>
    <div class="button_create_wrap">
        <a href="{{ url('/class/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
            <i class="fa fa-plus" aria-hidden="true"></i> Create Class
        </a>
        <button>Assign Class</button>
    </div>
</div>






@endsection
