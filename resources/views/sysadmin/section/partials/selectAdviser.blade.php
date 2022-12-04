<div class="modal fade" id="selectAdviser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelStudent" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelStudent">Select Adviser for {{ $section->name ?? '<unset>' }}</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('sectionUpdateAdviser', $section)}}" method="POST">
            @csrf
            @method('put')
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="adviser" class="form-label">Select Teacher</label>
                            <select class="form-control text-truncate" id="adviser" name="adviser">
                                <option value="" hidden disabled selected>Select</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{$teacher->teacherID}}">{{ '[' . $teacher->teacherID . ']-' . $teacher->firstName . ' ' . $teacher->lastName}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Assign Adviser</button>
            </div>
        </form>
      </div>
    </div>
</div>
