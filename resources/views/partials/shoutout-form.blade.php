@include ('partials.errors')

<form method="POST" action="/shout">
    {{ csrf_field() }}
    <div class="form-group">
        <textarea name="shoutout" class="form-control" cols="5" rows="5"></textarea>
    </div>

    <div class="text-right">
        <input type="submit" name="submit" class="btn btn-primary" value="Shout" />
    </div>
</form>
