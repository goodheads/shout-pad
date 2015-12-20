@extends('layouts.app')

@section('content')
    <p>Receive up-to-the-hour notifications on comments on your Gists. No work on your part, free because Tighten and DigitalOcean love you, cancel any time.</p>
    <div class="pricing well text-center big">
        <p>
            <a href="/"><img src="shoutpad.jpg" alt="ShoutPad" style="max-width: 25rem"></a><br>
        </p>
    </div>
    <div class="text-center">
        @if(Auth::check())
            <a href="/shouts" class="btn btn-default btn-lg github-sign-up-button">
                <i class="fa fa-step-forward"></i> Make a Shoutout
            </a>
        @else
            <a href="/auth/register" class="btn btn-default btn-lg github-sign-up-button">
                <i class="fa fa-register"></i> Sign Up Right Here
            </a>
            <div>
                <a href="/auth/login">Have an account already?, Click here to Sign in</a>
            </div>
        @endif
    </div>

@stop