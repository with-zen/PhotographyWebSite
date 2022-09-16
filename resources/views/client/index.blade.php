@extends('layouts.index')

@section('content')
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <main>



            <img class="bd-placeholder-img" width="100%" height="100%" src="http://127.0.0.1:8000/{{$post->image}}" />
        <div class="card shadow">
            <div class="card-body">
                <h1 class="card-title text-lg-center">{{$post->title}}</h1>
                <p class="card-text ">
                    {{$post->caption}}
                </p>


            </div>

        </div>
    </div>
</section>
@auth
    <div class="modal fade" id="sendComment">
        <div class="modal-dialog bg-white">
            <div class="modal-content bg-white">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> send comment</h5>
                    <button type="button" class="close mr-auto ml-0" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('comments.send') }}" method="post" id="sendCommentForm">
                    @csrf
                    <div class="modal-body">
                            <input type="hidden" name="commentable_id" value="{{ $post->id }}" >
                            <input type="hidden" name="commentable_type" value="{{ get_class($post) }}">
                            <input type="hidden" name="parent_id" value="0">

                            <div class="form-group">
                                <label for="message-text" class="col-form-label"> caption:</label>
                                <textarea name="comment" class="form-control" id="message-text"></textarea>
                            </div>
                    </div>
                    <div class="modal-footer">

                        <button type="submit" class="btn btn-success"> send comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endauth

<div class="container">

    <div class="row">
        <div class="col">
            <div class="d-flex align-items-center justify-content-between">
                <h4 class="mt-4">comments section</h4>
                @auth
                <span class="btn btn-sm btn-info"  data-bs-toggle="modal" data-bs-target="#sendComment">send new comment</span>
            @endauth
            </div>

            @guest
                <div class="alert alert-warning">for send comment most login</div>
            @endguest

            @foreach($posts as $comment )
                <div class="card {{ ! $loop->first ? 'mt-3' : '' }}">
                    <div class="card-header d-flex justify-content-between">
                        <div class="commenter">
                            <span>{{ $comment->user->name }}</span>
                            <span class="text-muted">- {{ $comment->created_at }}</span>
                        </div>

                    </div>

                    <div class="card-body">
                        {{ $comment->comment }}

                    </div>
                </div>
            @endforeach

        </div>
    </div>
    <div class="mt-3">
        {{$posts->render()}}
    </div>
</div>

@endsection
