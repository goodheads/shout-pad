@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-1">
                <div class="panel panel-default panel-on-grey signup-box">
                <div class="panel-heading">
                    <h2 class="panel-title">Sign in</h2>
                </div>
                <div class="panel-body">
                    @include ('partials.signin-form')
                </div>
            </div>
        </div>
    </div>
@stop