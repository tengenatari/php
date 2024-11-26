@extends('index')


@section('body')
    <div class="row row-cols-auto cards">
        @foreach($cards as $card)
            <div class="card card-my">
                <div class="col card-body">
                    <img class="img-fluid"  src="{{ $card->image}}" alt="">
                    <div class="card-text">
                        <h2>{{$card->title}}</h2>
                        <p>{{$card->description}}</p>

                    </div>
                </div>
                <div class="cont cards" >
                    <button class="button-modal btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal" id="{{$card->id}}">More info</button></div>
            </div>
        @endforeach
    </div>
    <div class="cont cards" >

        <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="It's just a zombie"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="exampleModalDesc">

                    </div>
                    <div class="modal-footer cont">
                        <button id='l' type="button" class="button-upload"  value="">Left</button>
                        <button id='close' type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id='r' type="button" class="button-upload"  value="">Right</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
