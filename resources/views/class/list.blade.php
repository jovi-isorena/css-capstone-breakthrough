@extends('class.layout')
@section('content')


<div class="container-fluid py-3">
    <div class="container">
        <h3>Classes</h3>
        <div class="action_classes w-100 d-flex justify-content-end py-3">
            <button class="btn add">Add</button>
            <button class="btn remove ms-2">Remove</button>
        </div>
    </div>
    <div class="container py-2">
    @foreach($classes as $item)
        <ul class="list-group">
            <li class="list-group-item py-3 d-flex justify-content-between">
                {{ $item->classname }}
                <form method="POST" action="{{ url('/class'. '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"> 
                    Remove
                    </button>
                </form>
            </li>
        </ul>
    @endforeach
    </div>
    <!-- <div class="container">
        <div class="row">
 
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Class</div>
                    <div class="card-body">
                        <a href="{{ url('/class/create') }}" class="btn btn-success btn-sm" title="Add New Contact">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Classname</th>
                                        <th>Section</th>
                                        <th>Subject</th>
                                        <th>Room</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($classes as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->classname }}</td>
                                        <td>{{ $item->section }}</td>
                                        <td>{{ $item->subject }}</td>
                                        <td>{{ $item->room }}</td>
 
                                        <td>
                                            <a href="{{ url('/class/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/class/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/class' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div> -->

</div>


@endsection
