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
                                <th>caption</th>
                                <th>email</th>
                                <th>date</th>
                                <th>status</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->user->name }} </td>
                                <td><p class=" text-bold">{{$comment->comment}}</p></td>
                                <td><p class=" text-bold">{{ $comment->user->email }}</p></td>
                                <td>{{$comment->created_at}}</td>
                                @if($comment->approvd == 0)
                                <td>Inactive</td>
                                @endif
                                @if($comment->approvd == 1)
                                <td>active</td>
                                @endif
                                <td>
                                    <a href=" {{route('comment.edit',$comment->id)}} " class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">edit</span>
                                    </a>
                                </td>
                                <td>
                                    <form action="{{route('comment.destroy', $comment->id)}}" method="post" id="delete-user-{{$comment->id}}">
                                        @csrf
                                    @method('delete')
                                    <button href="#" class="btn btn-danger btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">delete</span>
                                    </button>
                                </form>

                                </td>
                                @endforeach
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{$comments->render()}}
    </div>
@endsection
