<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Classes') }}
            </h2>
        </div>
    </x-slot>

    <section class="h-100">
        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">

                <div class="col-10">

                    <button class="btn btn-primary mb-2 rounded-0">
                        Create Task
                    </button>
                    <div class="card mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Subject 1</p>
                                <p style="margin: 0;">Section</p>
                                <p style="margin: 0;">Information</p>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                                    <img src="{{ URL('images/placeholder.jpg') }}" class="img-fluid rounded-3" alt="Place Holder">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">Subject 2</p>
                                <p style="margin: 0;">Section</p>
                                <p style="margin: 0;">Information</p>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                                    <img src="{{ URL('images/placeholder.jpg') }}" class="img-fluid rounded-3" alt="Place Holder">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card rounded-3 mb-4">
                        <div class="card-body p-4">
                            <div class="row d-flex justify-content-between align-items-center">
                                <div class="col-md-3 col-lg-3 col-xl-3">
                                    <p class="lead fw-normal mb-2">Subject 3</p>
                                    <p style="margin: 0;">Section</p>
                                    <p style="margin: 0;">Information</p>
                                </div>
                                <div class="col-md-2 col-lg-2 col-xl-2 text-end">
                                    <img src="{{ URL('images/placeholder.jpg') }}" class="img-fluid rounded-3" alt="Place Holder">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
