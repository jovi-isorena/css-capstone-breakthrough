<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-1 border-2">
                <a href="{{ route('schoolYears') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>

            </div>
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('School Years ') . $schoolYear-> schoolYearID }}
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
                        <th>School Year ID</th>
                        <th>Curriculum ID</th>
                        <th>Start</th>
                        <th>End</th>
                    </tr>
                </thead>
                <tbody>
                        <tr>
                            <td>{{$schoolYear->schoolYearID}}</td>
                            <td>{{$schoolYear->curriculumID}}</td>
                            <td>{{$schoolYear->start}}</td>
                            <td>{{$schoolYear->end}}</td>

                        </tr>

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
