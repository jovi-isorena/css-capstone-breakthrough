<x-app-layout>
    <x-slot name="header">
        <div class="d-flex">
            <div class="col-md-1 border-2">
                <a href="{{ route('curriculums') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>
                
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Create Curriculum') }}
            </h2>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')

        <div class="my-5">
            <form action="{{ route('curriculumStore')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Curriculum Name</label>
                    <span class="text-danger fst-italics">*
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>
                    <input type="text" class="form-control" id="name" name="name" >
                </div>
                <div class="mb-3">
                    <label for="gradeLevel" class="form-label">Grade Level</label>
                    <span class="text-danger fst-italics">*
                        @error('gradeLevel')
                            {{ $message }}
                        @enderror
                    </span>
                    <select name="gradeLevel" id="gradeLevel" class="form-select">
                        <option value="" hidden disabled selected>--Select One--</option>
                        @for ($i = 1; $i < 13; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                            
                        @endfor
                    </select>
                </div>
                <div class="mb-3 border rounded p-3">
                    <div class="row justify-content-between align-items-center mb-3">
                        <div class="col-md-2">
                            <h2>Subjects</h2>
                        </div>
                        <div class="col-md-2">
                            <button type="button" class="btn btn-dark bg-dark" id="add-subject" onclick="addsubject()">Add Subject</button>
                        </div>
                    </div>
                    <hr class="mb-3">
                    <div id="subject-list">
                        <div class="d-flex justify-content-between align-items-center mb-3" id="subject-0" data-id="0">
                            <input class="form-control m-1" type="text" name="subjectName[0]" placeholder="Subject Name" aria-label="subject name">
                            <input class="form-control m-1" type="text" name="subjectShorthand[0]" placeholder="Shorthand/Code" aria-label="subject name">
                            <input class="form-control m-1" type="text" name="subjectDescription[0]" placeholder="Description" aria-label="subject name">
                            <button type="button" class="btn-close p-3 border" data-target="#subject-0" aria-label="Close" onclick="document.getElementById('subject-0').remove()"><i class="fas fa-times"></i></button>
                        </div>
                        
                    </div>
                </div>
                <button type="submit" class="btn btn-lg btn-success bg-success">Create Curriculum</button>
            </form>
        </div>
    </div>
    @section('scripts')
        <script>
            function addsubject(){

                console.log('add');
                const divSubjectList = document.querySelector('#subject-list');
                if(divSubjectList.children.length === 15){
                    alert('Maximum number of subject in a class is 15');
                    return;
                }
                let newID = Number(divSubjectList.lastElementChild.dataset.id) + 1;

                const newRow = `<div class="d-flex justify-content-between align-items-center mb-3" id="subject-${newID}" data-id="${newID}">
                            <input class="form-control m-1" type="text" name="subjectName[${newID}]" placeholder="Subject Name" aria-label="subject name">
                            <input class="form-control m-1" type="text" name="subjectShorthand[${newID}]" placeholder="Shorthand/Code" aria-label="subject name">
                            <input class="form-control m-1" type="text" name="subjectDescription[${newID}]" placeholder="Description" aria-label="subject name">
                            <button type="button" class="btn-close p-3" data-target="#subject-${newID}" aria-label="Close" onclick="document.getElementById('subject-${newID}').remove()""><i class="fas fa-times"></i></button>
                        </div>`;

                divSubjectList.insertAdjacentHTML('beforeend',newRow);
            }

            function close(){
                console.log("closing");
                // document.getElementById(`subject-${id}`).remove();
            }
        </script>
    @endsection
</x-app-layout>
