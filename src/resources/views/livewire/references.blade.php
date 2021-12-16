<div>
    @foreach ($references as $reference)
        <div>
            <p>{{ $reference->description }}</p>
            <a href="{{ $reference->url }}">{{ $reference->url }}</a>
        </div>
    @endforeach
</div>
