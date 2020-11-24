@extends('layouts.app')
@extends('nav.navi')
@section('contenttwo')
 @section('content')
 <

<div class="container mt-5">
    <form action = "{{route ('galeri.create')}}">
        @csrf
        <input type="submit" class="btn btn-primary" value="tambah">
    </form>
    <div class = "row row-cols-2">
        @foreach ($galeris as $galeri)
            <div>
                <div class="card" style="width: 18rem;">
                    <img src="/image/{{$galeri->picture}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title"> {{$galeri->name}}</h5>
                    <p class="card-text">{{$galeri->desc}}</p>
                    <a href="a" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
         @endforeach 
    </div>
</div>
@endsection