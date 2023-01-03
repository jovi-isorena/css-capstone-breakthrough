<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Curriculums') }}
                </h2>

            </div>
            <div class="col-md-2">

                <a href="{{ route('curriculumCreate') }}" class="btn btn-success justify-self-right">
                    Create Curriculum
                </a>
            </div>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')

        <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Grade Level</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($curriculums as $curriculum)
                        <tr>
                            <td>{{$curriculum->name}}</td>    
                            <td>{{$curriculum->gradeLevel}}</td>    
                            <td>
                                <a href="{{ route('curriculumShow',$curriculum->curriculumID) }}" class="btn btn-primary">View</a>
                                <!-- Button trigger modal -->
<a class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$curriculum->curriculumID}}">
  Archive
</a>
<div class="modal fade" id="exampleModal1{{$curriculum->curriculumID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Archive Confirmation</h1>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>  Are you sure you want to archive {{$curriculum->name}} ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{route('curriculumArchive', $curriculum->curriculumID)}}" class="btn btn-danger">Archive</a>
        @endforeach
      </div>
    </div>
  </div>
</div>
                            </td>
                        </tr>    
                </tbody>
            </table>   
        </div>
    </div>
    <!--
    <script> const myModal = document.getElementById('myModal')
const myInput = document.getElementById('myInput')

myModal.addEventListener('shown.bs.modal', () => {
  myInput.focus()
})</script> -->


<!-- Modal -->

</x-app-layout>
