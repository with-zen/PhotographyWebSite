@extends('layouts.admin')


@section('content')


<div class="container mt-10">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-5 d-none d-lg-block bg-register-image ">
                    <img class="bd-placeholder-img" width="100%" height="100%"id="image_label2"  src="http://127.0.0.1:8000/{{$profile->image}}" />
                </div>
                <div class="col-lg-7">


                        <form class="user mt-2 mr-1"  method="post" action="{{ route('profile.update',$profile->id) }}"   enctype="multipart/form-data" >
                            @method('PATCH')
                            @csrf
                            <div class="form-group ">

                            <div class="input-group">
                                <input type="text" id="image_label" class="form-control form-control-user" value="{{$profile->image}}"  name="image"
                                       aria-label="Image" aria-describedby="button-image">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" id="button-image">Select</button>
                                </div>
                            </div>
                            @error('image')
                            <p class="text-danger my-2 ">{{$message}}</p>
                            @enderror
                            </div>

                                <div class="col row">
                                    <div class="form-group col-12">
                                        <input type="text" class="form-control form-control-user" value="{{$profile->name}}" name="name"
                                            placeholder=" name ">
                                            @error('name')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>


                                    <div class="form-group  col-4">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->telegram}}"  name="telegram"
                                            placeholder="telegram">
                                            @error('telegram')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-4">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->instagram}}"  name="instagram"
                                            placeholder="instagram">
                                            @error('instagram')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="form-group col-4">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->facebook}}"  name="facebook"
                                            placeholder="facebook">
                                            @error('facebook')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->progressbar_1}}"  name="progressbar_1"
                                            placeholder="progressbar_1">
                                            @error('progressbar_1')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>


                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->progressbar_2}}"  name="progressbar_2"
                                            placeholder="progressbar_2">
                                            @error('progressbar_2')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>

                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->progressbar_3}}"  name="progressbar_3"
                                            placeholder="progressbar_3">
                                            @error('progressbar_3')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->progressbar_4}}"  name="progressbar_4"
                                            placeholder="progressbar_4">
                                            @error('progressbar_4')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->name_of_progressbar_1}}"  name="name_of_progressbar_1"
                                            placeholder="name_of_progressbar_1">
                                            @error('name_of_progressbar_1')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->name_of_progressbar_2}}"  name="name_of_progressbar_2"
                                            placeholder="name_of_progressbar_2">
                                            @error('name_of_progressbar_2')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->name_of_progressbar_3}}"  name="name_of_progressbar_3"
                                            placeholder="name_of_progressbar_3">
                                            @error('name_of_progressbar_3')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                    <div class="form-group col-3">
                                        <input type="tetx" class="form-control form-control-user" value="{{$profile->name_of_progressbar_4}}"  name="name_of_progressbar_4"
                                            placeholder="name_of_progressbar_4">
                                            @error('name_of_progressbar_4')
                                            <p class="text-danger my-2">{{$message}}</p>
                                            @enderror
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <input type="text" class="form-control form-control-user" value="{{$profile->bio}}"name="bio"
                                        placeholder="bio">
                                        @error('bio')
                                        <p class="text-danger my-2">{{$message}}</p>
                                        @enderror
                                </div>


                                <div class="text-center">
                             <button type="submit" class="btn btn-dark px-10 mb-2"> save </button>
                                </div>
                        </form>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
