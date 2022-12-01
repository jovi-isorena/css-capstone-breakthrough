<div class="modal fade" id="createSection" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelStudent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelStudent">Create New Sections</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('sectionStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="schoolYear" class="form-label">School Year</label>
                            <select class="form-control text-truncate" id="schoolYear" name="schoolYear">
                                <option value="" hidden disabled selected>Select</option>
                                @foreach ($schoolYears as $schoolYear)
                                    <option value="{{$schoolYear->schoolYearID}}">{{ $schoolYear->start . '-' . $schoolYear->end}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="gradeLevel" class="form-label">Grade Level</label>
                            <select class="form-control text-truncate" id="gradeLevel" name="gradeLevel">
                                <option value="" hidden disabled selected>Select</option>
                                @for ($i = 1; $i < 13; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                    
                                @endfor
                            </select>
                        </div>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="curriculum" class="form-label">Curriculum</label>
                            <select class="form-control" id="curriculum" name="curriculum">
                                <option value="" hidden disabled selected>--Select One--</option>
                                @foreach ($curriculums as $curriculum)
                                    <option value="{{ $curriculum->curriculumID }}">{{ $curriculum->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="quantity" class="form-label"># of Section to Create</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" min=1 max=20>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Create Section(s)</button>
            </div>
        </form>
      </div>
    </div>
</div>
