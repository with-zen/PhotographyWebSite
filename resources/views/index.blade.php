@extends('layouts.index')
@section('content')
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"> alex smith  </h1>
                    <p class="lead fw-normal text-white-50 mb-0"> god make beautiful me and my camera show for you </p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-3 justify-content-center">

                    @foreach($posts as $post)

                    <div class="col mb-5">
                        <div class="card h-100 ">
                          <div class="badge bg-dark text-white position-absolute" style="top: 0.5rem; right: 0.5rem">{{$post->created_at}}</div>
                            <!-- Product image-->
                            <img class="card-img-top" src="http://127.0.0.1:8000/{{$post->image}}" alt="{{$post->image}}" />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$post->title}}</h5>

                                   <div> {!! Str::limit($post->caption, 350) !!}</div>

                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer   border-top-0 bg-transparent  m-auto">
                                <div class="text-center"><a class="btn btn-dark mt-auto mx-1 " href="posts/{{$post->id}}">View more</a></div>

                            </div>
                        </div>
                    </div>

                    @endforeach

                </div>
                <div class="text-center">
                    {{ $posts->render() }}
                </div>
            </div>

        </section>
    @endsection
