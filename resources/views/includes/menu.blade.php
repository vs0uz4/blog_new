<div class="ui inverted fixed menu">
    <div class="ui container">
        <a class="item title" href="{{ route('home') }}">
            <h3>Soywod's blog</h3>
        </a>

        <div class="item mobile">
            v1.0.0
        </div>

        @if(Auth::check())
            <a href="{{ route('logout') }}" class="ui right item">
                {{ trans('general.logout') }}
            </a>
        @endif
    </div>
</div>