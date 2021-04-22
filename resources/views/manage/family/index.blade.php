@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>All Families</h1>
            

            @foreach ($families as $item)

                <div class="card" style="width: 20rem;">
                    <img class="card-img-top w-100" src="https://dummyimage.com/600x400/563d7c/fff"
                    alt="Card image cap" >
                    <div class="card-body">
                        <h4 class="card-title">{{$item->family_name}}</h4>
                        <p class="card-text">Some quick example text to build on the card title and make up
                        the bulk of the card's content.</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
                
            @endforeach
            

        </div>
        <div class="col-md-4">

            

            
            
        </div>
    </div>
</div>
@endsection
