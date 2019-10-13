@extends('layout.main-layout')
@section('content')



<a href="{{ route('place.create') }}">Create new place</a>

    <div class="box-cont">
        @foreach ($places as $place)
            <div class="box">
                <p> {{ $place -> name }} <br>
                    {{ $place -> address }} <br>
                    {{ $place -> city }} <br>
                    {{ $place -> nation }}
                
                </p>
            </div>    
        @endforeach
    </div>    

 @endsection