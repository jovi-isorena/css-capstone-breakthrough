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
            <button class="btn btn-primary">View</button>
            <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal1{{$schoolYear->schoolYearID}}" data-bs-dismiss="modal">Archive</button>

                            </td>
                        </tr>    
                </tbody>
                
<div class="modal fade" id="exampleModal1{{$schoolYear->schoolYearID}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Archive Confirmation</h1>
        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <p>  Are you sure you want to archive {{$schoolYear->start}} ?</p>
      </div>
      <div class="modal-footer">
        <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="{{route('schoolYearArchive', $schoolYear->schoolYearID)}}" class="btn btn-danger">Archive</a>
         @endforeach  
      </div>
    </div>
  </div>
</div>
                                      </td>
                                  </tr>    
                             </tbody>
                        </table> 
                    </div>
                 </div>
            </table>
        </div>
    </div>
</x-app-layout>
