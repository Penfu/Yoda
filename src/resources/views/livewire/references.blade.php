<div>
    @foreach ($references as $reference)
        <div>
            <p>{{ $reference->title }}</p>
            <a href="{{ $reference->url }}">{{ $reference->url }}</a>
        </div>
    @endforeach
</div>
