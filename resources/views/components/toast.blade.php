{{-- success toast --}}
@if (session()->has('success'))
    <div class="toast align-items-center text-bg-success border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast" data-bs-autohide="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                Success: {{ session('success')}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
{{-- warning toast --}}
@elseif (session()->has('warning'))
    <div class="toast align-items-center text-bg-warning border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast" data-bs-autohide="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                Warning: {{ session('warning')}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
{{-- danger toast --}}
@elseif (session()->has('danger'))
    <div class="toast align-items-center text-bg-danger border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast" data-bs-autohide="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                Error: {{ session('danger')}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>
{{-- info toast --}}
@elseif (session()->has('info'))
    <div class="toast align-items-center text-bg-info border-0 position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true" id="liveToast" data-bs-autohide="true" data-bs-delay="5000">
        <div class="d-flex">
            <div class="toast-body">
                Info: {{ session('info')}}
            </div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto text-white" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>

@endif



@section('toastscripts')

    <script>
        const toastDiv = document.getElementById('liveToast')
        if(toastDiv){
            const toast = new bootstrap.Toast(toastDiv)
            toast.show()
        }
    </script>
@endsection
