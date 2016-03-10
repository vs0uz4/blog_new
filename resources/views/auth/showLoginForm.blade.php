@extends('master')

@section('title', trans('auth.title'))
@section('desc', trans('auth.desc'))

@section('content')
    <div class="ui middle aligned center aligned grid">
        <div class="column auth">
            <form class="ui large form" method="post" action="{{ route('login') }}">
                <div class="ui segment">
                    {{ csrf_field() }}

                    <div class="field {{ ! $errors->has('email') ?: 'error' }}">
                        <div class="ui left icon input">
                            <i class="user icon"></i>
                            <input type="email" name="email" placeholder="{{ trans('general.email') }}">
                        </div>
                    </div>

                    <div class="field {{ ! $errors->has('password') ?: 'error' }}">
                        <div class="ui left icon input">
                            <i class="lock icon"></i>
                            <input type="password" name="password" placeholder="{{ trans('general.password') }}">
                        </div>
                    </div>

                    <button class="ui fluid large inverted blue submit button" type="submit">
                        {{ trans('general.login') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection