@extends('layouts.admin')


@section('content')


<div class="container mt-10">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    <img class="bd-placeholder-img" width="100%" height="100%"id="image_label2"  src="http://127.0.0.1:8000/{{$comments->image}}" />
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">Create new post</h1>
                        </div>
                        <form class="user" method="post" action="{{ route('comment.update',$comments->id) }}"   enctype="multipart/form-data" >
                            @method('PATCH')
                            @csrf
                            <div class="form-group">

                            @error('image')
                            <p class="text-danger my-2">{{$message}}</p>
                            @enderror
                            </div>

                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" value="{{$comments->comment}}" name="comment"
                                        placeholder=" comment ">
                                        @error('comment')
                                        <p class="text-danger my-2">{{$message}}</p>
                                        @enderror
                                </div>
                                <input type="hidden" name="commentable_id" value="{{ $comments->commentable_id }}" >
                                <input type="hidden" name="commentable_type" value="{{$comments->commentable_type}}">
                                <input type="hidden" name="parent_id" value="0">
                                <div class="form-group">
                                    <select class="form-control " name="approvd"
                                        placeholder=" approvd ">
                                        @error('approvd')
                                        <p class="text-danger my-2">{{$message}}</p>
                                        @enderror
                                        <option value="0" @if($comments->approvd =='0') selected @endif>Inactive</option>
                                        <option value="1" @if($comments->approvd =='1') selected @endif>active</option>
                                    </select>

                                </div>
                                <hr>
                                <div class="text-center">
                             <button type="submit" class="btn btn-dark px-10"> save </button>
                                </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
