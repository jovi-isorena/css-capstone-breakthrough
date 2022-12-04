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
                                <button class="btn btn-danger">Archive</button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
