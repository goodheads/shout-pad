<!DOCTYPE html>
<html>
    <head>
        <title>ShoutPad</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="/css/app.css">

        <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    </head>
    <body>
        <div class="container">
            <div class="row">
                @if(Auth::check())
                    <a href="auth/logout" class="btn btn-default pull-right meta-button">Log out <i class="fa fa-sign-out"></i></a>
                @endif
                <h1 class="text-center page-title page-title"><a href="/">ShoutPad</a></h1>
            </div>
            <div class="row col-md-8 col-md-push-2">
                @yield('content')
            </div>`

            <div class="row col-md-8 col-md-push-2 text-center footer">
                ShoutPad source is on GitHub: <a href="https://github.com/goodheads/shout-pad">goodheads/shout-pad</a>.<br>
                By <a href="http://twitter.com/unicodeveloper/">Prosper Otemuyiwa</a>, for tutorial purpose <a href="http://goodheads.io/2015/12/19/how-to-handle-logs-and-reports-in-your-app-using-laravel-5-part-1/">How to handle logs and reports in your app using Laravel 5</a>.<br>
            </div>
        </div>
    </body>
</html>