<div id="Card{{ $card->id }}"class="card card-my">
    <div class="col card-body">
        <img class="img-fluid"  src="{{ $card->image}}" alt="">
        <div class="card-text">
            <h2 id="CardTitle{{ $card->id }}">{{$card->title}}</h2>
            <p id="CardDesc{{ $card->id }}">{{$card->description}}</p>

        </div>
    </div>
    <div class="cont cards" >
        <button class="button-modal btn button-upload button-cont m-1" data-bs-toggle="modal" data-bs-target="#Modal" id="{{$card->id}}">about</button>
        <button class="button-update-modal btn button-upload button-cont m-1" data-bs-toggle="modal" data-bs-target="#ModalUpdate" value="{{$card->id}}">update</button>
        <form id="formDelete{{$card->id}}" class="button-delete btn button-upload button-cont m-1" >delete<input name="id" value="{{$card->id}}" type="Hidden">@csrf </form></div>

</div>
