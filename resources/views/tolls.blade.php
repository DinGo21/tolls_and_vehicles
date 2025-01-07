@extends("layouts.app")

@section('content')
    <div class="title">
        <h2>Tolls</h2>
    </div>
    <div class="content">
        @foreach($tolls as $toll)
           <article class="element">
                <h3>{{$toll->name}}</h3>
                <div>
                    <h4>vehicles</h4>
                    @foreach($toll->vehicles as $vehicle)
                        <p>{{$vehicle->type}}. {{$vehicle->registration}}</p>
                    @endforeach
                </div>
           </article>
        @endforeach
    </div>
@endsection
