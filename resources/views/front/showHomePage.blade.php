@extends('master')

@section('title', trans('home.title'))
@section('desc', trans('home.desc'))

@section('content')
    <div class="ui main container">
        <div class="ui stackable grid">
            <div class="two column row">
                <div class="column">
                    @include('front.includes.biography')
                </div>

                <div class="column">
                    @include('front.includes.skills')
                </div>
            </div>
        </div>

        <h2 class="ui dividing header">{{ trans('general.last_posts') }}</h2>

        @include('front.includes.posts')
    </div>
@endsection