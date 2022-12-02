<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center">
            <div class="col-md-1 border-2">
                <a href="{{ route('sections') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>
                
            </div>
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Section: ') }}
                    <input type="text" name="name" id="name" value="{{ $section->name }}" placeholder="<NO NAME>" disabled>
                    <button class="btn btn-dark bg-dark"><i class="bi bi-pencil-square"></i></button>
                </h2>

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
                        </button>
                  </h2>
                  <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
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
                                    @foreach ($section->sectionSubjects as $subject)
                                    <tr>
                                        <td>{{$subject->name}}</td>
                                        <td>{{$subject->teacher}}</td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                    
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {{-- accordion for students --}}
                <div class="accordion-item">
                    <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Accordion Item #3
                        </button>
                    </h2>
                    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
