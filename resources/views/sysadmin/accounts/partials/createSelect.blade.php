<div class="modal fade" id="createSelect" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelCreate" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabelCreate">Select Account Type</h1>
          
        </div>
        <form action="{{route('accountStore')}}" method="POST">
            @csrf
            <div class="modal-body">
                <button type="button" class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#createSysadminAccount" data-bs-dismiss="modal">System Admin</button>
                <button type="button" class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#createSchooladminAccount" data-bs-dismiss="modal">School Admin</button>
                <button type="button" class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#createTeacherAccount" data-bs-dismiss="modal">Teacher</button>
                <button type="button" class="btn btn-primary bg-primary" data-bs-toggle="modal" data-bs-target="#createStudentAccount" data-bs-dismiss="modal">Student</button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary bg-secondary" data-bs-dismiss="modal">Close</button>
                
            </div>
        </form>
      </div>
    </div>
</div>

@section('scripts')
    <script>
        function changetab(event){
            let tabID = event.target.options[event.target.selectedIndex].dataset.target;
            const tab = document.querySelector(tabID);
            tab.style.display = "block";
            tab.classList.add('show');
        }
    </script>
@endsection