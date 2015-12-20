@if(count($shouts) > 0)
    <div class="row">
        @foreach ($shouts as $shout)
            <div>
                <span> {{ $shout->text }} </span> by
                <span style="font-style: italic; color: #09f;">
                    @if(auth()->user()->id === $shout->user->id)
                        {{ 'you' }}
                    @else
                        {{ $shout->user->name }}
                    @endif
                </span>
            </div>
            <hr/>
        @endforeach
    </div>
@endif