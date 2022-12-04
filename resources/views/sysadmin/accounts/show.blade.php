<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-1 border-2">
                <a href="{{ route('accounts') }}" class="btn btn-dark"><i class="fas fa-chevron-left"></i></a>

            </div>
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Account Name: ') . $users->name }}
                </h2>

            </div>
            <div class="col-md-2">


            </div>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('components.toast')
     <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th>Account ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>

                        <tr>
                            <td>{{$users->id}}</td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td>{{$users->role}}</td>
                            <td>{{$users->status}}</td>
                        </tr>

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
