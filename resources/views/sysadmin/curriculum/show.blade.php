<x-app-layout>
    <x-slot name="header">
        <div class="d-flex align-items-center">
            <div class="col-md-1 border-2">
                <a href="{{ route('curriculums') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>
                
            </div>
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Curriculum: ') . $curriculum->name }}
                </h2>

            </div>
            
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')

        <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Subject Code</th>
                        <th>Name</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    
                    @foreach ($curriculum->curriculumSubjects as $subject)
                        <tr>
                            <td>{{$subject->subjectShorthand}}</td>    
                            <td>{{$subject->name}}</td>    
                            <td>{{$subject->description}}</td>    
                           
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
