<div class="ui fluid card">
    <div class="content">
        <h3 class="ui header">
            <i class="cogs icon"></i>
            {{ trans('general.skills') }}
        </h3>
        <div class="description">
            <div class="ui grid">
                <div class="four column row">
                    @foreach($skills as $skill)
                        @include('includes.skill')
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>