<div class="bg-dark">
    <div class="container cards">
        @forelse($comics as $c)
        <div class="card">
            <figure>
                <img src="{{$c['thumb']}}" alt="">
            </figure>
            <h3>{{$c['type']}}</h3>
        </div>
        @empty
        <h2>Niente</h2>
        @endforelse
    </div>
</div>