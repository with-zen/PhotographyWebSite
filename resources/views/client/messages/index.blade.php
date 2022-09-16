@extends('layouts.index')


@section('content')


<div class=" mt-10 container">

    <div class="card o-hidden border-0 shadow-lg my-5">
        <div class="card-body ">
            <!-- Nested Row within Card Body -->




    @error('name')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
    @error('email')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
    @error('text')
    <p class="text-danger my-2">{{$message}}</p>
    @enderror
                <section id="contact" class="contact">
                    <div class="" data-aos="fade-up">

                      <div class="section-title">
                        <h2>Contact</h2>
                      </div>

                      <div class="row mt-1">
                        @guest
                        <div class="alert alert-warning text-white">for send message most login</div>
                    @endguest

                        <div class="col-lg-4">
                          <div class="info">
                            <div class="address">
                              <i class="bi bi-geo-alt"></i>
                              <h4>Location:</h4>
                              <p>A108 Adam Street, New York, NY 535022</p>
                            </div>

                            <div class="email">
                              <i class="bi bi-envelope"></i>
                              <h4>Email:</h4>
                              <p>info@example.com</p>
                            </div>

                            <div class="phone">
                              <i class="bi bi-phone"></i>
                              <h4>Call:</h4>
                              <p>+1 5589 55488 55s</p>
                            </div>

                          </div>

                        </div>

                        <div class="col-lg-8 mt-5 mt-lg-0 ">
                            @auth
                            <form class="user" method="post" action="{{ route('messages.store') }}" >
                                @csrf
                            <div class="row input-group input-group-outline">
                              <div class="col-md-6 ">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" >
                              </div>
                              <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" >
                              </div>
                            </div>

                            <div class="input-group input-group-outline mt-3">
                              <textarea class="form-control" name="text" rows="5" placeholder="Message" ></textarea>
                            </div>
                            <div class="my-3">
                              <div class="loading">Loading</div>
                              <div class="error-message"></div>
                              <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div>
                            <div class="text-center"><button class="btn btn-dark" type="submit">Send Message</button></div>
                          </form>
                          @endauth
                        </div>

                      </div>

                    </div>
                  </section><!-- End Contact Section -->
            </div>
        </div>


@endsection
