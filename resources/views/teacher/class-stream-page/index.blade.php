<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Class-Stream') }}
            </h2>
        </div>
    </x-slot>


<div class="container mt-5">

    {{-- Tab Header --}}
    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <li><a class="nav-item nav-link class-stream active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Class Stream</a></li>
            <li><a class="nav-item nav-link class-list" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Class List</a></li>
            <li><a class="nav-item nav-link class-work" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Class Work</a></li>
            <li><a class="nav-item nav-link class-score" id="nav-score-tab" data-bs-toggle="tab" href="#nav-score" role="tab" aria-controls="nav-contact" aria-selected="false">Scores</a></li>
        </div>
    </nav>

    {{-- Tab content --}}
    <div class="tab-content py-3 px-3 border border-1" id="a1">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="row">
                <div class="col">
            <button class="btn btn-outline-secondary btn-lg mt-5" style="width: 100%;height: 100px;">
                Section 1 - Year 1
               </button>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <button class="btn btn-outline-secondary btn-lg mt-5" style="width: 100%;height: 100px;">
                    Section 2 - Year 2
                   </button>
            </div>
        </div>
        </div>

        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            @foreach ( $students as $student)
            <div class="row">
                <div class="col">
                    @if ($student->sectionID)
            <div class="card mb-3 p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="{{ URL('images/profile.png') }}"
                          class="img-fluid rounded-3" alt="Proifle" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5><strong>
                        {{ $student->firstName .' '.$student->middleName.' '.$student->lastName }}
                        </strong></h5>
                        <p class="small mb-0">{{ $student->gradeLevel }}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endif
            </div>
        </div>
        @endforeach
    </div>

        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            <div class="row">
                <div class="col">
            <div class="card mb-3 p-4">
                <div class="card-body">
                  <div class="d-flex justify-content-between">
                    <div class="d-flex flex-row align-items-center">
                      <div>
                        <img
                          src="{{ URL('images/profile.png') }}"
                          class="img-fluid rounded-3" alt="Proifle" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <h5><strong>Activity Name</strong></h5>
                        <p class="small mb-0">Students Name/Email</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3 p-4">
                    <div class="card-body">
                      <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                          <div>
                            <img
                              src="{{ URL('images/profile.png') }}"
                              class="img-fluid rounded-3" alt="Proifle" style="width: 65px;">
                          </div>
                          <div class="ms-3">
                            <h5><strong>Activity Name</strong></h5>
                            <p class="small mb-0">Students Name/Email</p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
        </div>

    </div>
</div>

</x-app-layout>
