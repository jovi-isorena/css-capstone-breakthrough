<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center">
            <div class="col-md-1 border-2">
                <a href="{{ route('sections') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>
                
            </div>
            <div class="col-md-6">
                <form action="{{ route('sectionUpdateName', $section) }}" method="post">
                    @csrf
                    @method('put')
                    <div class="font-semibold text-xl text-gray-800 leading-tight d-flex align-items-center">
                        {{ __('Section: ') }}
                        <div class="px-3" id="divName" style="display: block">{{ $section->name ?? "<NO NAME>" }}</div>
                        <input type="text" class="ml-2" name="name" id="name" value="{{ $section->name }}" placeholder="{{ $section->name ?? '<NO NAME>' }}" style="display: none">
                        <span>
                            <button type="button" id="editBtn" style="display:block" class="btn btn-dark bg-dark" onclick="editMode(true)"><i class="bi bi-pencil-square"></i></button>
                        </span>
                        <span id="editControl" style="display:none">
                            <button type="submit" class="btn btn-success bg-success mx-2"><i class="bi bi-check-lg"></i></button>
                            <button type="button" class="btn btn-danger bg-danger" onclick="editMode(false)"><i class="bi bi-x"></i></button>
                        </span>
                    </div>
                </form>

            </div>
            
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')
        <div>
            <div class="accordion" id="accordionPanelSection">
                {{-- accordion for adviser --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                            Adviser
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            @if ($section->teacherID)
                                {{-- if section has adviser, show details. otherwise, show select button     --}}
                                <div class="d-flex">
                                    <img src="{{ $section->teacher->imageURL}}" alt="adviser image" style="width:50px; height:50px;">
                                    <span>{{ $section->teacher->firstName . ' ' . $section->teacher->lastName }}</span>

                                </div>
                            @else
                                <button class="btn btn-success justify-self-right" data-bs-toggle="modal" data-bs-target="#selectAdviser">
                                    Select Adviser
                                </button>
                                @include('sysadmin.section.partials.selectAdviser')
                            @endif
                        </div>
                    </div>
                </div>
                {{-- accordion for subject list --}}
                <div class="accordion-item">
                  <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                            Subjects
                            <span class=" text-muted ml-2 text-sm">
                                Curriculum: [ ]
                            </span>
                        </button>
                        
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <form action="{{ route('sectionUpdateTeachers') }}" method="post">
                                @csrf
                                @method('put')
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>Subject Name</th>
                                            <th>Assigned Teacher</th>
                                            <th>Day</th>
                                            <th>Start Time</th>
                                            <th>End Time</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($section->sectionSubjects as $key => $subject)
                                        <input type="hidden" name="sectionSubjectID[{{$key}}]" value={{$subject->sectionSubjectID}}>
                                        <tr>
                                            <td>{{$subject->name}}</td>
                                            <td>
                                                <select name="sectionSubjectTeacher[{{$subject->sectionSubjectID}}]" id="sectionSubjectTeacher[{{$subject->sectionSubjectID}}]">
                                                    <option value="" disabled hidden {{ $subject->teacherID ? '' : 'selected' }} >Select</option>
                                                    @foreach ($teachers as $teacher)
                                                        <option value="{{ $teacher->teacherID }}" {{ $subject->teacherID === $teacher->teacherID ? 'selected' : '' }}>{{ $teacher->firstName . ' ' . $teacher->lastName }}</option>
                                                    @endforeach
                                                </select>
                                            </td>
                                            <td>
                                                <select name="" id="">
                                                    <option value="">Monday</option>
                                                    <option value="">Tuesday</option>
                                                    <option value="">Wednesday</option>
                                                    <option value="">Thursday</option>
                                                    <option value="">Friday</option>
                                                    <option value="">Saturday</option>
                                                </select>
                                            </td>
                                            <td><input type="time" name="" id=""></td>
                                            <td><input type="time" name="" id=""></td>
                                        </tr>
                                        
                                    @endforeach
                                    </tbody>
                                </table>
                                <div >
                                    <button type="submit" class="btn btn-success bg-success">Save Subject List</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- accordion for students --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                            Students
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            {{-- search bar for student --}}
                            <div class="relative">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Type Name or ID" aria-label="search term" aria-describedby="button-addon2" id=searchBox onkeyup="getStudents({{ $section->gradeLevel }}, event)">
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="getStudents({{ $section->gradeLevel }}, event)"><i class="bi bi-search"></i></button>
                                </div>

                                <div id="searchResult" class="absolute w-100 bg-white">
                                    
                                </div>
                            </div>
                            <form action="{{ route('sectionStudentStore') }}" method="post">
                                @csrf
                                <input type="hidden" name="sectionID" value="{{ $section->sectionID }}">
                                <div class="mb-3">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Student ID</th>
                                                <th>First Name</th>
                                                <th>Middle Name</th>
                                                <th>Last Name</th>
                                                <th>Gender</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="studentList">
                                            @foreach ($section->sectionStudents as $student)
                                                <tr id="{{ $student->student->studentID }}">
                                                    <input type="hidden" name="studentID" value="0">
                                                    <td>{{ $student->student->studentID }}</td>
                                                    <td>{{ $student->student->firstName }}</td>
                                                    <td>{{ $student->student->middleName }}</td>
                                                    <td>{{ $student->student->lastName }}</td>
                                                    <td>{{ $student->student->gender }}</td>
                                                    <td>
                                                        <div class="align-items-center ">
                                                            <button type="button" class="btn-close text-danger" data-target="#subject-0" aria-label="Close" onclick="document.getElementById('idhere').remove()"><i class="fas fa-times"></i></button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-flex mb-3">
                                    <button class="btn btn-success">Save Student List</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @section('scripts')
        <script>
            function getStudents(gradeLevel, event){
                const divResult = document.getElementById('searchResult');
                let htmlResult = '';
                
                const searchTerm = document.getElementById('searchBox').value;
                if(!searchTerm){
                    divResult.innerHTML = '';
                }else{
                    axios.get(`{{ route('getStudents')}}?gradeLevel=${gradeLevel}&search=${searchTerm}`)
                        .then(function(response){
                            console.log(response.data.data);
                            response.data.data.forEach(student => {
                                htmlResult += `<div class="resultItem d-flex hover:bg-gray-100 p-2 border align-items-center" style="cursor:pointer;" onclick='addStudent(${JSON.stringify(student)})'>
                                        <div class=""><span class="fst-italic badge bg-info">${student.studentID}</span></div>
                                        <div class="m-1">${student.firstName} ${student.lastName}</div>
                                    </div>`;
                            });
                            divResult.innerHTML = htmlResult;
                        })
                        .catch(function(error){
                            console.error(error);
                        });

                }
            }

            function addStudent(student){
                const studentList = document.getElementById('studentList');
                const newRow = `
                    <tr id="${student.studentID}">
                        <input type="hidden" name="studentID[${student.studentID}]" value="${student.studentID}">
                        <td>${student.studentID}</td>
                        <td>${student.firstName}</td>
                        <td>${student.middleName}</td>
                        <td>${student.lastName}</td>
                        <td>${student.gender}</td>
                        <td>
                            <div class="align-items-center " style="z-index:100;">
                                <button type="button" class="text-danger" aria-label="Close"   onclick="document.getElementById('${student.studentID}').remove()"><i class="bi bi-x-lg"></i></button>
                            </div>
                        </td>
                    </tr>
                `;
                // add new table row
                studentList.insertAdjacentHTML('beforeend',newRow)
                // clear the search box
                document.getElementById('searchBox').value = '';
                // clear result box
                document.getElementById('searchResult').innerHTML = '';
            }

            function editMode(bool){
                // edit mode true = hide divname, edit button; show input name, edit control
                if(bool){
                    document.getElementById('editControl').style.display = 'flex';
                    document.getElementById('name').style.display = 'block';
                    document.getElementById('editBtn').style.display = 'none';
                    document.getElementById('divName').style.display = 'none';
                    
                }else{
                    document.getElementById('editControl').style.display = 'none';
                    document.getElementById('name').style.display = 'none';
                    document.getElementById('editBtn').style.display = 'block';
                    document.getElementById('divName').style.display = 'block';
                    
                }
            }

        </script>
    @endsection
</x-app-layout>
