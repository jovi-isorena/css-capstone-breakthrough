<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Accounts') }}
                </h2>

            </div>
            <div class="col-md-2">

                <button class="btn btn-success justify-self-right" data-bs-toggle="modal" data-bs-target="#createSelect">
                    Create Account
                </button>
            </div>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')
        @include('sysadmin.accounts.partials.createSelect')
        @include('sysadmin.accounts.partials.createSysadmin')
        @include('sysadmin.accounts.partials.createTeacher')
        @include('sysadmin.accounts.partials.createStudent')
               
        <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>Name</th>
                        <th>Role</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>    
                            <td>{{$user->name}}</td>    
                            <td>{{$user->role}}</td>    
                            <td>
                                <a href="{{ route('accountShow', $user->id) }}" class="btn btn-primary">View</a>
                                <button class="btn btn-danger">Archive</button>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>