@extends('class.layout')
@section('content')
 
 <div class="container-fluid py-3">
   <div class="container">
     <div class="card">
       <div class="card-header">Contactus Page</div>
       <div class="card-body">
        
      
             <div class="card-body">
             <h5 class="card-title">Classname : {{ $class->class }}</h5>
             <p class="card-text">Section : {{ $section->section }}</p>
             <p class="card-text">Subject : {{ $subject->subject }}</p>
             <p class="card-text">Room : {{ $room->room }}</p>
       </div>
            
         </hr>
       
       </div>
     </div>

   </div>
 </div>