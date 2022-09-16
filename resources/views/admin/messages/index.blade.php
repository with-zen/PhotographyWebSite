@extends('layouts.admin')


@section('content')


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>name</th>
                                <th>text</th>
                                <th>email</th>
                                <th>date</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($messages as $message)
                            <tr>
                                <td> {{ $message->name }}</td>
                                <td><p class=" text-bold">{{ $message->text }}</p></td>
                                <td><p class=" text-bold">{{ $message->email }}</p></td>
                                <td><p class=" text-bold">{{ $message->created_at }}</p></td>


                        <td> <form action="{{route('message.destroy', $message->id)}}" method="post" id="delete-user-{{$message->id}}">
                            @csrf
                        @method('delete')
                        <button href="#" class="btn btn-danger btn-icon-split">
                            <span class="icon text-white-50">
                                <i class="fas fa-trash"></i>
                            </span>
                            <span class="text">delete</span>
                        </button>
                    </form> </td>
                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                {{$messages->render()}}
            </div>
        </div>

    </div>
@endsection
