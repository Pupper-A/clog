<div class="item">
    <div class="image">
        <img src={{ $image }}>
    </div>
    <div class="content">
        <a class="header">{{ $name }}</a>
        <div class="meta">
            <span class="cinema">Union Square 14</span>
        </div>
        <div class="description">
            {{ $description }}
            </p>
        </div>
        <div class="extra">
            @foreach ($tags as $tag)
                <div class="ui label">{{ $tag }}</div>
            @endforeach

        </div>
    </div>
</div>
