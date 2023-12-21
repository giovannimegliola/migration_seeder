@extends('layouts.app')

@section('title', 'Houses')

@section('content')
<main>
    <h1>Houses</h1>
    <div class="row">
        @forelse ($houses as $house)
            <div class="col-12 col-md-3 col-lg-4">
            <div class="card">
                <img src="{{$house->image}}" alt="{{$house->reference}}">
                <div class="card-body">
                    <h5>{{$house->city}} - {{$house->reference}}</h5>
                    <p>
                        {{$house->description}}
                    </p>
                </div>
            </div>
        </div>
        @empty
            <h6>No record found</h6>
        @endforelse

    </div>
</main>
@endsection
