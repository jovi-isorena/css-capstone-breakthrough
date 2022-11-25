@extends('/layouts/layout-teacher')
@section('content')

<div class="container mt-5">

    {{-- Tab Header --}}
    <nav>
        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
            <li><a class="nav-item nav-link class-stream active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Class Stream</a></li>
            <li><a class="nav-item nav-link class-list" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Class List</a></li>
            <li><a class="nav-item nav-link class-work" id="nav-contact-tab" data-bs-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Class Work</a></li>
        </div>
    </nav>

    {{-- Tab content --}}
    <div class="tab-content py-3 px-3 border border-1" id="a1">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="row">
                    <div class="col">
                    <button class="btn btn-primary btn-lg" style="width: 200px;border: 1px;">
                        Join Meeting
                    </button>
                </div>
                <div class="col">
                   <button class="btn btn-outline-secondary btn-lg mt-5" style="width: 700px;height: 100px;">
                    Write Post
                   </button>
                   <button class="btn btn-outline-secondary btn-lg mt-5" style="width: 700px;height: 100px;">
                    Post 1
                   </button>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
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

@endsection
