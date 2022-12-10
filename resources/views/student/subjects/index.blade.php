<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Subjects') }}
            </h2>
        </div>
    </x-slot>

    <section class="h-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-10">
                    @foreach($subjects as $subject)
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">
                                <a href="{{route ('studentClassStream', ['id' => $subject->sectionSubjectID])}}">{{$subject->name}}</a></p>
                                <p style="margin: 0;">{{$subject->section->name}}</p>
                                <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                            <img style="margin:0;" width="60px" src="{{ Url($subject->teacher->imageURL)}}">
                            
                               <p style="margin: 0;">{{$subject->teacher->firstName.' '.$subject->teacher->lastName}}</p>
                                </div></div>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                                    <img src="{{ URL('images/placeholder.jpg') }}" class="img-fluid rounded-3" alt="Place Holder">
                                </div>
                            </div>
                        </div>
                    
                    </div>
                    @endforeach
                    

    
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
