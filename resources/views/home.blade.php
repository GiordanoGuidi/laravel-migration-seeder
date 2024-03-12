@extends('layouts.main')
@section('title','Home')

@section('main-content')

<div>
   <div class="container">
    <h1 class="text-center my-5">Train List</h1>
    <div class="row g-5">
        @foreach ($trains as $train )            
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <p class="card-title"><strong>Codice Treno:</strong>{{$train->train_code}}</p>
                    <p class="card-subtitle mb-2 "><strong>Agenzia:</strong>{{$train->agency}}</p>
                    <p><strong>Partenza:</strong> {{$train->departure_station}}, {{$train->departure_time}}</p>
                    <p><strong>Arrivo:</strong> {{$train->arrival_station}}, alle{{$train->arrival_time}}</p>
                    <p><strong>Stato:</strong> {{$train->deleted == 0 ? 'Attivo' : 'Cancellato'}}
                    </p>
                    <p><strong>Ritardo:</strong> {{$train->in_time == 0 ? 'No' : 'Si'}}</p>
                </div>
            </div>    
        </div>
        @endforeach
    </div>
   </div>
</div>
@endsection