<div class="ui segment skills">

    <h2 class="ui header">
        <i class="blue code icon"></i>
        <div class="content">
            {{ trans('general.skills') }}
            <div class="sub header">
                {{ trans('home.skills') }}
            </div>
        </div>
    </h2>

    <div class="ui divider"></div>

    <div class="ui grid">
        <div class="two column row">
            <div class="column">
                <div class="ui list">
                    <div class="item">
                        <div class="header">{{ trans('general.web_languages') }}</div>
                        PHP, Javascript, CSS3, HTML5
                    </div>
                    <div class="item">
                        <div class="header">{{ trans('general.native_languages') }}</div>
                        Java, C / C++, Go, Python, VB.net, Bash,
                    </div>
                    <div class="item">
                        <div class="header">{{ trans('general.operating_systems') }}</div>
                        Debian, Raspbian, Windows, Mac
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="ui list">
                    <div class="item">
                        <div class="header">{{ trans('general.front_frameworks') }}</div>
                        Bootstrap, jQuery, Semantic UI, Angular, Sass
                    </div>
                    <div class="item">
                        <div class="header">{{ trans('general.back_frameworks') }}</div>
                        Laravel, Lumen, CodeIgniter, Symfony
                    </div>
                    <div class="item">
                        <div class="header">{{ trans('general.tools_and_libs') }}</div>
                        Git, Gulp, Handlebars
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>