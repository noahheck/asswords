@extends('layouts.ass')

@section('content')

    <div class="row mt-3">
        <div class="col-12 col-md-8 mb-4">
            <h2>Ass Words Validator</h2>
            <p class="lead">Welcome to the Ass Words Validator!</p>
            <p>Our <strong>state-of-the-art</strong> Validator is the only Ass Words Validator that provides our carefully engineered 3-stage validation process so you can feel confident in the results!</p>
            <hr>

            @if($validationResult)

                <div class="card shadow mb-4">
                    <div class="card-body">
                        <h3 class="border-bottom">Validation results</h3>
                        <p class="mb-0">Potential Ass Word tested: <strong>{{ $validationResult->getWord() }}</strong></p>
                        <p class="text-muted"><small>Tested on {{ $validationResult->getTestTime()->toDateString() }} at {{ $validationResult->getTestTime()->toTimeString() . ' ' . $validationResult->getTestTime()->getTimezone() }} (Validation ID: {{ \Str::random(16) }})</small></p>
                        <hr>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <strong>String length test</strong>
                            </div>
                            <div class="col-2 text-center">
                                @if ($validationResult->isStringLengthValid())
                                    <span class="bi-check-square text-success display-3"></span>
                                @else
                                    <span class="bi-dash-square display-3"></span>
                                @endif
                            </div>
                            <div class="col-8">
                                @if ($validationResult->isStringLengthValid())
                                    <p><strong>{{ $potentialAssWord }}</strong> DOES contain enough characters for it to be considered a valid Ass Word!</p>
                                @else
                                    <p><strong>{{ $potentialAssWord }}</strong> DOES NOT contain enough characters for it to be considered a valid Ass Word.</p>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <hr>
                                <strong>Contains the character string 'ass' test</strong>
                            </div>
                            <div class="col-2 text-center">
                                @if ($validationResult->doesWordContainAss())
                                    <span class="bi-check-square text-success display-3"></span>
                                @else
                                    <span class="bi-dash-square display-3"></span>
                                @endif
                            </div>
                            <div class="col-8">
                                @if ($validationResult->doesWordContainAss())
                                    <p><strong>{{ $potentialAssWord }}</strong> DOES contain the character string 'ass', providing more potential for it to be considered a valid Ass Word!</p>
                                @else
                                    <p><strong>{{ $potentialAssWord }}</strong> DOES NOT contain the character string 'ass', so it CANNOT be considered a valid Ass Word.</p>
                                @endif
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <hr>
                                <strong>Found in our database of valid Ass Words</strong>
                            </div>
                            <div class="col-2 text-center">
                                @if ($validationResult->isWordValidAssWord())
                                    <span class="bi-check-square text-success display-3"></span>
                                @else
                                    <span class="bi-dash-square display-3"></span>
                                @endif
                            </div>
                            <div class="col-8">
                                @if ($validationResult->isWordValidAssWord())
                                    <p><strong>{{ $potentialAssWord }}</strong> IS contained in our database of Ass Words providing superior potential for it to be considered a valid Ass Word!</p>
                                @else
                                    <p><strong>{{ $potentialAssWord }}</strong> IS NOT contained in our database of Ass Words, so it CANNOT be guaranteed to be a valid Ass Word.</p>
                                @endif
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <hr>
                                <h3>Validation Result</h3>
                            </div>
                            <div class="col-3 text-center">
                                @if ($validationResult->isWordValidAssWord())
                                    <span class="bi-check-circle-fill text-success display-1"></span>
                                @elseif ($validationResult->doesWordContainAss())
                                    <span class="bi-question-circle text-info display-1"></span>
                                @else
                                    <span class="bi-x-circle-fill display-1"></span>
                                @endif
                            </div>
                            <div class="col-9">
                                @if ($validationResult->isWordValidAssWord())
                                    <h5>Congratulations!</h5>
                                    <p><strong>{{ $potentialAssWord }}</strong> passes all of our validation rules and should definitely be considered a valid Ass Word!</p>
                                @elseif ($validationResult->doesWordContainAss())
                                    <p><strong>{{ $potentialAssWord }}</strong> meets some of our criteria for being a valid Ass Word, but we can't guarantee it at this time. You'll want to perform your own analysis of the word to verify whether or not it is a valid Ass Word.</p>
                                @else
                                    <p><strong>{{ $potentialAssWord }}</strong> does not meet our criteria for being a valid Ass Word. Thanks for validating your potential Ass Word before using! You've likely saved yourself and your colleagues a lot of embarrassment by validating first!</p>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>

                <hr>

                <p class="lead">We hope you're satisfied with your results!</p>

                <p>If you would like to validate another potential Ass Word, you can use our validator again!</p>

                <hr>

            @endif

            <p>To use, provide your potential Ass Word in the text box below, then click the button to see the result displayed immediately! No additional forms to fill out or lengthy sign-up processes to follow! Get your Ass Word result right now!</p>

            <div class="card shadow">
                <div class="card-body">
                    <form action="{{ route('validate') }}" method="GET">
                        <div class="mb-3">
                            <label for="potentialAssWord" class="form-label"><strong>Enter your potential Ass Word here:</strong></label>
                            <input type="text" name="potentialAssWord" id="potentialAssWord" class="form-control" minlength="3" value="{{ $potentialAssWord ?? '' }}">
                        </div>
                        <div class="mb-3 text-center">
                            <button type="submit" class="btn btn-primary">
                                <span class="bi-check"></span> Check Ass Word!
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
        <div class="col-12 col-md-4">

            <div class="sticky-md-top" style="top: 60px;">

                <div class="card shadow-sm">
                    <div class="card-header">
                        <small><span class="bi-calendar2-event-fill"></span> Your Personalized Daily Ass Word is:</small>
                    </div>
                    <div class="card-body">

                        <h5 class="text-center">{{ $dailyWord }}</h5>

                    </div>
                    <div class="card-footer text-center">
                        <a target="_blank" class="btn btn-primary btn-sm" href="https://duckduckgo.com/?q={{ $dailyWord }}&ia=meanings">
                            <span class="bi-search"></span> See what this Ass Word means
                        </a>
                    </div>
                </div>

            </div>

        </div>
    </div>

@endsection
