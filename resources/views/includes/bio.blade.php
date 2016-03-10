<div class="ui fluid card">
    <div class="content">
        <h3 class="ui header">
            <img src="{{ url('img/soywod.jpg') }}" class="ui circular image">
            <div class="content">
                {{ trans('home.name') }}
                <div class="sub header">
                    {!! trans('home.job') !!}
                </div>
            </div>
        </h3>
        <div class="description">
            <p>{!! trans('home.bio') !!}</p>
            <p>{{ trans('home.share') }}</p>
        </div>
    </div>
    <div class="extra content">
        <a class="ui blue" href="#">
            <i class="mail icon"></i>
            {{ trans('general.contact_me') }}
        </a>
    </div>
</div>