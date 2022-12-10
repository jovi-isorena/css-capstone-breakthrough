<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Class Stream') }}
            </h2>
        </div>
    </x-slot>


<div class="container mt-5">
    @include('components.toast')
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
                    <a href="http://localhost:8080/" class="btn btn-primary btn-lg" style="width: 200px;border: 1px;" target="_blank">
                        Join Meeting
                    </a>
                </div>

                <div class="col">
                    <span class="text-danger fst-italics">
                        @error('content')
                            {{ $message }}
                        @enderror
                    </span>
                    @foreach( $teachers as $teacher)
                    <button type="button" id="editBtn" class="btn btn-outline-secondary btn-lg mt-5" style="width: 700px;height: 100px;" onclick="editMode(true)">Write Post</button>
                    <div class="card" style="display: none" name="writepost" id="writepost">
                        <form action="{{route('teacherAddpost', ['sectionid' => $section->sectionID,'subjectname' => $subjectname])}}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="card-header">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                          <img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 65px;">
                          <div class="ms-3">
                            <h5><strong>
                          {{ $teacher->firstName.' '.$teacher->middleName.' '.$teacher->lastName }}
                            </strong></h5>

                          </div>
                        </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                        <div class="card-body">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Announce Something" name="content" id="content" style="height: 100px"></textarea>
                                <label for="floatingTextarea2">Announcement</label>
                              </div>
                              <div class="mt-3">
                                <label for="fileupload" class="form-label">Upload File: </label>
                                <input class="form-control rounded border" type="file" id="fileupload" name="fileupload">
                              </div>
                        </div>
                      </div>
                      </div>
                        <div class="card-footer">
                          <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <span id="editControl" style="display:none">
                                <button type="button" class="btn btn-danger bg-danger" onclick="editMode(false)">Cancel</button>
                                <button type="submit" class="btn btn-success bg-success mx-2">Post</button>
                            </span>
                    </div>
                  </div>
                </form>
                    </div> <!-- end card -->
                    @foreach ($postthreads as $postthread)
                   <div class="mt-5">

                   <div class="row">
                    <div class="col">
                        <div class="card">
                        <div class="card-header">
                          <div class="d-flex justify-content-between">
                            <div class="d-flex flex-row align-items-center">
                          <img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 65px;">
                          <div class="ms-3">
                            <h5><strong>
                           {{ $postthread->Teacher->firstName.' '. $postthread->Teacher->middleName.' '.$postthread->Teacher->lastName }}
                            </strong></h5>
                            <p class="small mb-0">{{ $postthread->created_at->format('F') .' '.$postthread->created_at->format('d') }}</p>
                          </div>
                        </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                        <div class="card-body">
                          <h5 class="card-title">{{ $postthread->content }}</h5>

                        </div>
                      </div>
                      </div>
                        <div class="card-footer">
                            @foreach ($comments as $comment)
                                <ul class="list-group list-group-flush">
                                    @if( $comment->postID == $postthread->postID )
                                    <li class="list-group-item">
                                        <div class="d-flex justify-content-between">

                                            <div class="d-flex flex-row align-items-center">

                                                <img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 25px;">

                                          <div class="ms-3">
                                            <h5><strong>

                                          {{ $comment->user->name }}
                                            </strong> <span class="small"> {{ $comment->created_at->diffForHumans() }}</span></h5>
                                            <p class="small mb-0">{{ $comment->content }}</p>
                                          </div>

                                        </div>
                                          </div>

                                    </li>
                                    @endif
                                  </ul>
                                  @endforeach
                            <form action="{{route('teacherAddComment', ['postid' => $postthread->postID,'subjectname' => $subjectname])}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            <div class="d-flex justify-content-between">
                              <div class="d-flex flex-row align-items-center">
                          <img src="{{ URL('images/profile.png') }}" class="img-fluid rounded-3" alt="Proifle" style="width: 45px;">
                          </div>
                          <div class="input-group" style="width: 85%">
                            <input type="text" class="form-control rounded" placeholder="Add comment" aria-label="Recipient's username" name="addcomment" id="addcomment" aria-describedby="button-addon2">
                            <button type="submit" class="btn bg-transparent" style="margin-left: -40px; z-index: 100;">
                              <i class="bi bi-send"></i>
                            </button>
                        </div>
                    </div>
                </form>
                  </div>
                    </div> <!-- end card -->
                      </div>
                      </div> <!-- end row -->
                    </div>
                    @endforeach
                    @endforeach
                </div>
            </div>
        </div> <!-- tab pane end  -->

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
<script>
     function editMode(bool){
                // edit mode true = hide divname, edit button; show input name, edit control
                if(bool){
                    document.getElementById('editControl').style.display = 'flex';
                    document.getElementById('content').style.display = 'block';
                    document.getElementById('writepost').style.display = 'block';
                    document.getElementById('editBtn').style.display = 'none';
                    document.getElementById('divName').style.display = 'none';

                }else{
                    document.getElementById('editControl').style.display = 'none';
                    document.getElementById('content').style.display = 'none';
                    document.getElementById('writepost').style.display = 'none';
                    document.getElementById('editBtn').style.display = 'block';
                    document.getElementById('divName').style.display = 'block';


                }
            }
</script>
</x-app-layout>
