@extends('layouts.app')

@section('content')
    <p>It is the celebration of Christmas. Give a Shoutout to your loved ones, Santa would definitely be happy with you on this!</p>
    <div class="text-center big">
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