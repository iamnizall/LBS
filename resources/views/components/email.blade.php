@extends('index')
@section('content')
    {{-- <form action="{{ route('email.send') }}" method="post"> --}}
    <div class="container mt-5" style="padding-top: 20px">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="row justify-content-center">
                    <div class="col-md-6">

                        <h3 class="heading mb-4">Let's talk about everything!</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas debitis, fugit natus?</p>

                        <p><img src="img/undraw-contact.svg" alt="Image" class="img-fluid"></p>
                    </div>
                    <div class="col-md-6">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('email.send') }}" class="mb-5" method="post" id="contactForm"
                            name="contactForm">
                            @csrf
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Your name">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="email" id="email"
                                        placeholder="Email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <input type="text" class="form-control" name="subject" id="subject"
                                        placeholder="Subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 form-group">
                                    <textarea class="form-control" name="message" id="message" cols="30" rows="7"
                                        placeholder="Write your message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-success ml-3">Send Email</button>
                            </div>
                        </form>

                        <div id="form-message-warning mt-4"></div>
                        <div id="form-message-success">
                            Your message was sent, thank you!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    {{-- </form> --}}
@endsection
