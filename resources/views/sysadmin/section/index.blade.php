<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Sections') }}
                </h2>

            </div>
            <div class="col-md-2">
                <button class="btn btn-success justify-self-right" data-bs-toggle="modal" data-bs-target="#createSection">
                    Create Section
                </button>
                @include('sysadmin.section.partials.create')
            </div>
        </div>
        <form action="{{route('sections')}}" method="get">
            <div class="d-flex align-items-center">
                {{-- @csrf --}}
                <div class="col-md-1">
                    <label for="schoolYear" class="form-label">School Year</label>
                </div>
                <div class="col-md-2 m-2">
                    <select name="schoolYear" id="" class="form-select">
                        @foreach ($schoolYears as $schoolYear)
                            <option value="{{$schoolYear->schoolYearID}}">{{ $schoolYear->start . '-' . $schoolYear->end}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-dark bg-dark">Go</button>
                </div>
                
            </div>
        </form>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')

        <div class="my-5">
            @for ($i = 1; $i < 13; $i++)
                @if ($sections->where('gradeLevel', $i)->count() > 0)
                    <div class="row mb-3">
                        <h2>Grade {{$i}}</h2>
                        <hr>
                        <table class="table text-center">
                            <thead>
                                <tr>
                                    <th>Section Name</th>
                                    <th>Adviser</th>
                                    <th>Students</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sections->where('gradeLevel', $i) as $section)
                                    <tr>
                                        <td>{{ $section->name }}</td>
                                        <td>{{ $section->teacher}}</td>
                                        <td>{{ $section->sectionStudents->count()}}</td>
                                        <td>
                                            <a href="#" class="btn btn-primary">Manage</a>
                                            <a href="#" class="btn btn-danger">Archive</a>
                                        </td>
                                    </tr>
                                    
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                @endif
            @endfor


        </div>
    </div>
</x-app-layout>
