<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Accounts') }}
        </h2>
    </x-slot>
    <div class="py-12 container">
        <div class="my-5">
            <div class="row">
                <div class="col-2">
                    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#createAccount">
                        Create Account
                    </button>
                    @include('sysadmin.accounts.partials.create')
                </div>
            </div>
        </div>
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
                                <button class="btn btn-primary">View</button>
                                <button class="btn btn-danger">Archive</button>
                            </td>
                        </tr>    
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @include('components.toast')
</x-app-layout>