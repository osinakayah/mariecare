@extends('layout')
@section('page_title', 'contact-page')
@section('content')

    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Contact</h1>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </div><!-- .page-header -->

    <div class="contact-page-wrap">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="entry-content">
                        <h2>Get In touch with us</h2>

                        <p>
                            MarieCare Initiative is an NGO driven by commitment to help women and children in rural areas, please contact us for any questions, suggestions or feedback.
                        </p>

                        <ul class="contact-social d-flex flex-wrap align-items-center">
                            <li><a href="http://www.facebook.com/mariecareinitiative"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="http://www.twitter.com/mariecareinitiative"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/mariecareinitiative/"><i class="fa fa-instagram"></i></a></li>
                        </ul>

                        <ul class="contact-info p-0">
                            <li><i class="fa fa-phone"></i><span>+23495045393, +2348032599864</span></li>
                            <li><i class="fa fa-envelope"></i><span>info@mariecare.org</span></li>
                            <li><i class="fa fa-map-marker"></i><span>N0.2 Living Spring Chapel Avenue, Opp. Muhammadu Buhari international Market New Karu</span></li>
                        </ul>
                    </div>
                </div><!-- .col -->

                <div class="col-12 col-lg-7">

                    <form class="contact-form" method="post" action="{{route('send-email')}}">
                        @if (session()->has('success'))
                            <div class="alert alert-success">
                                {!! session()->get('success')!!}
                            </div>
                        @endif
                        {{ csrf_field() }}
                        <input type="text" placeholder="Name" name="fullname">
                        <input type="email" placeholder="Email" name="email">
                        <textarea rows="15" cols="6" placeholder="Messages" name="message"></textarea>

                        <span>
                            <input class="btn gradient-bg" type="submit" value="Contact us">
                        </span>
                    </form><!-- .contact-form -->

                </div><!-- .col -->


            </div><!-- .row -->
        </div><!-- .container -->
    </div>
@endsection
