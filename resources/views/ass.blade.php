@extends('layouts.ass')

@section('content')

    <div class="row justify-content-center">

        <div class="col-12 col-md-7">

            <div class="card shadow-sm">
                <div class="card-header">
                    Your random Ass Word is:
                </div>
                <div class="card-body">

                    <h1 class="text-center">{{ $word }}</h1>

                </div>
                <div class="card-footer text-center">
                    <a target="_blank" class="btn btn-primary btn-sm" href="https://duckduckgo.com/?q={{ $word }}&ia=meanings">
                        <span class="bi-search"></span> See what this Ass Word means
                    </a>
                </div>
            </div>

            <p class="text-small text-muted text-end"><small>Don't like this one? <a href="{{ route('ass') }}">See another Ass Word</a></small></p>


            <div class="card shadow-sm mt-5">
                <div class="card-header">
                    <span class="bi-calendar2-event-fill"></span> Your Personalized Daily Ass Word is:
                </div>
                <div class="card-body">

                    <h1 class="text-center">{{ $dailyWord }}</h1>

                </div>
                <div class="card-footer text-center">
                    <a target="_blank" class="btn btn-primary btn-sm" href="https://duckduckgo.com/?q={{ $dailyWord }}&ia=meanings">
                        <span class="bi-search"></span> See what this Ass Word means
                    </a>
                </div>
            </div>

            <p class="text-small text-muted text-end"><small>Make sure to check back to get your Personalized Ass Word each day!</small></p>

        </div>

        <div class="col-12 col-md-4">

            <div class="card shadow">
                <div class="card-body">
                    <h3 class="border-bottom">New!</h3>
                    <div class="row">
                        <div class="col-4 text-center">
                            <span class="bi-check-circle text-success display-4"></span>
                        </div>
                        <div class="col-8">
                            <a href="{{ route('validate') }}">Check out our NEW state-of-the-art Ass Word Validator!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
