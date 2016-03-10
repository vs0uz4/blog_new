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
                        <div class="column">{{ $skill->name }}</div>
                        <div class="column">
                            <div class="ui mini heart rating" data-rating="{{ $skill->level }}" data-max-rating="{{ config('general.max_skills_rating') }}"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>