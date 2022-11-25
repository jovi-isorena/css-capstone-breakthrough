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
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
        </div>
        <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
            Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
        </div>
    </div>
</div>

@endsection
