@extends('layouts.app')

@section('content')

<section class="hero-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">

                <div class="hero-label">

                    Digital partners for what's next

                </div>

                <h1 class="hero-title">

                    Build what's

                    <span>
                        next.
                    </span>

                </h1>

                <p class="hero-description">

                    Thoughtful websites, custom software and dependable IT support
                    to help your business work smarter and grow with confidence.

                </p>

                <div class="hero-actions">

                    <a href="#contact"
                       class="btn hero-btn-primary">

                        Discuss your project
                        <i class="bi bi-arrow-up-right"></i>
                    </a>

                    <a href="#services"
                       class="btn hero-btn-outline">

                        Explore what we do
                        <i class="bi bi-arrow-down"></i>
                    </a>

                </div>

            </div>

            <div class="col-lg-6">

                <div class="hero-visual">

                    <div class="hero-image-card tilt-card">
                        <span class="hero-orbit" aria-hidden="true"></span>
                        <img src="{{ asset('Idea.png') }}"
                             class="img-fluid"
                             alt="Sculptural blue and silver rings, representing ideas brought together">
                    </div>

                    <div class="hero-note">
                        <i class="bi bi-stars" aria-hidden="true"></i>
                        <span>Websites, software and IT support built around your business.</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</section>

@include('partials.services')
@include('partials.foundation')
@include('partials.support')
@include('partials.creative-services')
@include('partials.approach')
@include('partials.process')
@include('partials.faq')
@include('partials.contact')
@endsection