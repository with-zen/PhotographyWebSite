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
                                <th>photo</th>
                                <th>title</th>
                                <th>create_at</th>
                                <th>edit</th>
                                <th>delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $post)


                            <tr>
                                <td> <img style="width: 50px" src="http://127.0.0.1:8000/{{$post->image}}" alt=""> </td>
                                <td><p class=" text-bold"> {{$post->title}} </p></td>
                                <td>{{$post->created_at}} </td>
                                <td>
                                    <a href="/dashboard/post/{{ $post->id}}/edit" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">edit</span>
                                    </a>
                                </td>
                                <td>

                                    <form action="{{route('post.destroy', $post->id)}}" method="post" id="delete-user-{{$post->id}}">
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
                            </tr>

                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer">
                {{ $posts->render() }}
            </div>
        </div>


    </div>
@endsection
