@extends('layout.main-layout')
@section('content')



<a href="{{ route('company.create') }}">Create new company</a>

    <div class="box-cont">
        @foreach ($companies as $company)
            <div class="box">
                <p> {{ $company -> name }} <br>
                    {{ $company -> phone }} <br>
                    {{ $company -> mail }} <br>
                    {{ $company -> website }}
                
                </p>
            </div>    
        @endforeach
    </div>    

 @endsection