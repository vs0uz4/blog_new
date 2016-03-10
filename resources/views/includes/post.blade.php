<div class="ui fluid card">
    <a class="ui image" href="#">
        <img src="{{ url('img', 'soywod.jpg') }}">
    </a>
    <div class="content">
        <a class="header" href="#">{{ $post->title }}</a>
        <div class="meta">
            {{ $post->desc }}
        </div>
    </div>
    <div class="extra content">
        <span class="right floated">
            {{ $post->updated_at }}
        </span>
    </div>
</div>