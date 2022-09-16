@extends('layouts.index')


@section('content')


<div class="container mt-10">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body shadow-lg p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
                @foreach($profiles as $profile)
                <div class="col-lg-5 d-none d-sm-block bg-register-image ">
                    <img class="bd-placeholder-img" width="100%" height="100%" src="http://127.0.0.1:8000/{{$profile->image}}" />
                </div>
                <div class="col-lg-7">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-gray-{{$profile->progressbar_2}}0 mb-4">{{$profile->name}} </h1>
                            <p>{{$profile->bio}} .</p>
                        </div>
                        <div class="text-center">
                            <a class=" btn btn-dark" >  githab  <i class="fab fa-github"></i></a>
                            <a class=" btn btn-info" >linkdin  <i class="fab fa-linkedin"></i></a>
                            <a class=" btn btn-danger" >inistagram   <i class="fab fa-instagram"></i></a>
                        </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-6 mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{$profile->name_of_progressbar_1}}
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$profile->progressbar_1}}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: {{$profile->progressbar_1}}%" aria-valuenow="{{$profile->progressbar_1}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{$profile->name_of_progressbar_2}}
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$profile->progressbar_2}}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: {{$profile->progressbar_2}}%" aria-valuenow="{{$profile->progressbar_2}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{$profile->name_of_progressbar_3}}
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$profile->progressbar_3}}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: {{$profile->progressbar_3}}%" aria-valuenow="{{$profile->progressbar_3}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 mr-2">
                                            <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">{{$profile->name_of_progressbar_4}}
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">{{$profile->progressbar_4}}%</div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-dark" role="progressbar" style="width: {{$profile->progressbar_4}}%" aria-valuenow="{{$profile->progressbar_4}}" aria-valuemin="0" aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    <hr>
                                    <div class="text-center">
                                 <a href="{{ route('messages.index') }}" class="btn btn-success px-10"> contact  <i class="fa fa-message"></i> </a>
                                    </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>


@endsection
