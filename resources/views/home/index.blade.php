@extends('master')

@section('title', trans('home.title'))@section('desc', trans('home.desc'))

@section('content')
    <div class="ui main container">
        <div class="ui stackable grid">
            <div class="two column row">
                <div class="column">
                    @include('includes.bio')
                </div>

                <div class="column">
                    @include('includes.skills')
                </div>
            </div>
        </div>

        <h2>{{ trans('general.last_posts') }}</h2>

        <div class="ui stackable grid">
            <div class="three column row">
                @foreach($posts as $post)
                    <div class="column">
                        @include('includes.post')
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection