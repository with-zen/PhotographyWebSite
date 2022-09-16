@extends('layouts.admin')


@section('content')


<div class="container mt-10">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image">
                    <img class="bd-placeholder-img" width="100%" height="100%"id="image_label2"  src="http://127.0.0.1:8000/{{$posts->image}}" />
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-900 mb-4">edit post</h1>
                        </div>
                        <form class="user" method="post" action="{{ route('post.update',$posts->id) }}"   enctype="multipart/form-data" >
                            @method('PATCH')
                            @csrf
                            <div class="form-group">
                            <label for="image"> image  </label>
                            <div class="input-group">
                                <input type="text" id="image_label" class="form-control form-control-user" value="{{$posts->image}}"  name="image"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                </div>
                            </div>
                            @error('image')
                            <p class="text-danger my-2">{{$message}}</p>
                            @enderror
                            </div>

                           <div class="row">
                            <div class="form-group col-6">
                                <input type="text" class="form-control form-control-user" value="{{$posts->title}}" name="title"
                                    placeholder=" title ">
                                    @error('title')
                                    <p class="text-danger my-2">{{$message}}</p>
                                    @enderror
                            </div>
                            <div class="form-group col-6">
                                <input type="text" class="form-control form-control-user" value="{{$posts->caption}}"  name="caption"
                                    placeholder="caption">
                                    @error('caption')
                                    <p class="text-danger my-2">{{$message}}</p>
                                    @enderror
                            </div>
                           </div>

                                <div class="form-group">
                                    <input type="tetx" class="form-control form-control-user" value="{{$posts->tags}}"  name="tags"
                                        placeholder="tags">
                                        @error('tags')
                                        <p class="text-danger my-2">{{$message}}</p>
                                        @enderror
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
