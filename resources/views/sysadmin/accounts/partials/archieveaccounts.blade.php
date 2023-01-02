 <!-- Modal -->
 <div class="modal fade" id="archieveModal{{ $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Archieve</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h1>Do you want to archieve?</h1>
        </div>
        <div class="modal-footer">
          <a class="btn btn-secondary" data-bs-dismiss="modal">Close</a>
          <a class="btn btn-primary" href=" {{ route('accountsarchieve', $user->id) }}">Archieve</a>
        </div>
      </div>
    </div>
  </div>
