<div class="modal fade" id="createEvent" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelStudent" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelStudent">Create New Event</h1>
          <button  class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form action="{{route('contentsEventsStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                    {{-- event form --}}
                    <div id="eventform">
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-12 mb-4">
                                    <label for="name" class="form-label">Event Name</label>
                                    <span class="text-danger fst-italics">*
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="date" class="form-label">Date</label>
                                    <span class="text-danger fst-italics">*
                                        @error('date')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="date" class="form-control" id="date" name="date" required>
                                </div>
                                <div class="col-6 mb-4">
                                    <label for="time" class="form-label">Time</label>
                                    <span class="text-danger fst-italics">*
                                        @error('time')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <input type="time" class="form-control" id="time" name="time" required>
                                </div>
                                <div class="col-12 mb-4">
                                    <label for="notes" class="form-label">Notes</label>
                                    <span class="text-danger fst-italics">*
                                        @error('notes')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <textarea class="form-control" id="notes" name="notes" required></textarea>
                                </div>

                                <input type="hidden" class="form-control" id="status" name="status" value="active">
                            </div>
                        </div>
                    </div>
                    {{-- end event form --}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-success bg-success">Create</button>
            </div>
        </form>
      </div>
    </div>
</div>
