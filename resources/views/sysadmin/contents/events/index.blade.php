<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between">
            <div class="col-md-6">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    Events
                </h2>

            </div>
            <div class="col-md-2">

                <button class="btn btn-success justify-self-right" data-bs-toggle="modal" data-bs-target="#createEvent">
                    Create Event
                </button>
            </div>
        </div>
    </x-slot>
    <div class="py-12 container">
        @include('sysadmin.contents.events.partials.createEvent')
        @include('sysadmin.contents.events.partials.editEvent')
        <div class="my-5">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="text-start">Event ID</th>
                        <th class="text-start">Event Name</th>
                        <th class="text-start">Date</th>
                        <th class="text-start">time</th>
                        <th class="text-start">Notes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                        <tr>
                            <td class="text-start">{{$event->id}}</td>
                            <td class="text-start">{{$event->name}}</td>
                            <td class="text-start">{{$event->date}}</td>
                            <td class="text-start">{{$event->time}}</td>
                            <td class="text-start">{{$event->notes}}</td>
                            <td class="text-start">
                                <button class="btn btn-primary" onclick="viewEvent({{$event}})">View</button>
                                <form method="POST" action="{{ url('sysadmin/contents/events/archive', $event->id) }}">
                                    {{ csrf_field() }}
                                    {{ method_field('put') }}
                                    <button class="btn btn-danger bg-danger" >Archive</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>
<script>
    const editModal = new bootstrap.Modal(document.querySelector('#editEvent'), {});

    function viewEvent(event){
        const id = document.querySelector('#editEvent #id');
        const name = document.querySelector('#editEvent #name');
        const date = document.querySelector('#editEvent #date');
        const time = document.querySelector('#editEvent #time');
        const notes = document.querySelector('#editEvent #notes');

        id.value = event.id;
        name.value = event.name;
        date.value = event.date;
        time.value = event.time;
        notes.value = event.notes;

        editModal.show()
    }
</script>

