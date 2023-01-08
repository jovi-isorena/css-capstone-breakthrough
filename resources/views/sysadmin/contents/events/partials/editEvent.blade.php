<div class="modal fade" id="editEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelStudent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelStudent">Event</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('contentsEventsUpdate')}}" method="POST">
            @csrf
            @method('PUT')
            <div class="modal-body">
                    {{-- event form --}}
                    <div id="eventform">
                        <div class="mt-3 mb-3">
                            <input type="hidden" name="id" id="id">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="name" class="form-label">Event Name</label>
                                    <span class="text-danger fst-italics">*
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" required class="form-control" id="name" name="name">
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="date" class="form-label">Date</label>
                                    <span class="text-danger fst-italics">*
                                        @error('date')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="date" class="form-control" required id="date" name="date">
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="time" class="form-label">Time</label>
                                    <span class="text-danger fst-italics">
                                        @error('time')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="time" class="form-control" id="time" name="time">
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="notes" class="form-label">Notes</label>
                                    <span class="text-danger fst-italics">
                                        @error('notes')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <textarea class="form-control" id="notes" name="notes" ></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- end event form --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Save</button>
            </div>
        </form>
      </div>
    </div>
</div>
