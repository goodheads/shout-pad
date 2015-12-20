@extends('layouts.app')

@section('content')
    <div class="container">
        @include ('partials.shoutouts')
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1">
                <div class="panel panel-default panel-on-grey signup-box">
                <div class="panel-heading">
                    <h2 class="panel-title">Give a Shoutout</h2>
                </div>
                <div class="panel-body">
                    @include ('partials.shoutout-form')
                </div>
            </div>
        </div>
    </div>
@stop