@extends('layouts.app')

@section('content')
<div class="hero-image">
    <img class="img-fluid" src="{{asset('img/hero_image.webp')}}" alt="">
</div>


<section class="sabers bg-white">
    <div class="container-fluid px-4">
        <h2 class="text-center py-4">Spade Laser</h2>
        <div class="row">
            @forelse($sabers as $saber)
            <div class="col-3">
                <div class="card border-0">
                    <img src="{{asset('/storage/' . $saber->thumb)}}" alt="">
                    <div class="card-body text-center">
                        <h3>{{$saber->name}}</h3>
                        <div class="price">{{$saber->price}} €</div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12">
                <p>No Lightsabers yet!</p>
            </div>
            @endforelse
        </div>
    </div>
</section>
@endsection