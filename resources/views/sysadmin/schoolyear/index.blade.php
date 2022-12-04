<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('School Years') }}
                </h2>

            </div>
            <div class="col-md-2">
                <button class="btn btn-success justify-self-right" data-bs-toggle="modal" data-bs-target="#createSchoolYear">
                    Create School Year
                </button>
            </div>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')
        @include('sysadmin.schoolyear.partials.create')

        <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>School Year ID</th>
                        <th>Start</th>
                        <th>End</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($schoolYears as $schoolYear)
                        <tr>
                            <td>{{$schoolYear->schoolYearID}}</td>
                            <td>{{$schoolYear->start}}</td>
                            <td>{{$schoolYear->end}}</td>
                            <td>
                                <a href="{{ route('schoolYearShow',$schoolYear->schoolYearID) }}" class="btn btn-primary">View</a>
                                <button class="btn btn-danger">Archive</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
