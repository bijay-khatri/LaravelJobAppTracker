@extends('layouts.layout')

@section('intro')
<!-- Intro Header -->
<header class="intro">
    <div class="intro-body">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <h1 class="brand-heading">{{ config('app.introname', 'Job Application Tracker') }}</h1>
                    <p class="intro-text">Make your job application tracking process easy.</p>
                    <a href="#about" class="btn btn-circle page-scroll">
                        <i class="fa fa-angle-double-down animated"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')
    <h3>Highlights of what you were doing </h3>
@endsection
