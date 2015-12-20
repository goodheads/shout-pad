@include ('partials.errors')

<form method="POST" action="/auth/login">
    {{ csrf_field() }}
    <div class="form-group">
        <input type="email" name="email" class="form-control" placeholder="Email Address" autofocus="autofocus" />
    </div>

    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Password" />
    </div>

    <div class="text-right">
        <input type="submit" name="submit" class="btn btn-primary" value="Sign in" />
    </div>
</form>
