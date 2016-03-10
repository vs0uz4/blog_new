<div class="ui segment bio">
    <h2 class="ui header">
        <img src="{{ url('img/soywod.jpg') }}" class="ui circular image">
        <div class="content">
            {{ trans('home.name') }}
            <div class="sub header">
                {!! trans('home.job') !!}
            </div>
        </div>
    </h2>

    <div class="ui divider"></div>

    <p>{!! trans('home.bio') !!}</p>
    <p>{{ trans('home.share') }}</p>
</div>