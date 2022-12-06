<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Classes') }}
            </h2>
        </div>
    </x-slot>
    <section class="h-100">
        <div class="container h-100 py-5">
            <h1>

            </h1>

        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-10">

                @for ($i = 1; $i < $teacherSectionCounts; $i++)
                @if ($SectionSubjects->where('sectionID', $i)->count() > 0)
            <div class="card rounded-3 mb-4">
                <div class="card-body p-4">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-md-3 col-lg-3 col-xl-3">
                        @foreach ($SectionSubjects->where('sectionID', $i) as $SectionSubject)
                    <p class="lead fw-normal mb-2">
                    </p>
                {{ $SectionSubject->name }}
                    <p style="margin: 0;">
                {{ $SectionSubject->Section->name }}

                    </p>

                    <p style="margin: 0;">
                        {{ $SectionSubject->gradeLevel }}
                        <span class="ms-3">


                           {{ $SectionSubject->section->sectionStudents->count() }}

                        </span>

                    </p>
                    @endforeach
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                       <a href="{{ route('teacherstudentshow', $SectionSubject->sectionID) }}" class="stretched-link" ><img src="{{ URL('images/placeholder.jpg') }}" class="img-fluid rounded-3" alt="Place Holder"></a>
                    </div>
                </div>
                </div>

            </div>
@endif
@endfor

            </div>
        </div>
        </div>
    </section>
</x-app-layout>
