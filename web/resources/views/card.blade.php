@extends('index')

@section('body')
<div class="row row-cols-auto cards">
    <div class="card card-my">
        <div class="col card-body">
            <img class="img-fluid"  src="static/images/zombie.jpg" alt="">
            <div class="card-text">
                <h2>Zombie cat</h2>
                <p>They eat your brain</p>

            </div>
        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal0">More info</button>
            <div class="modal fade" id="Modal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" num="0">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="It's just a zombie">Aaaaa! Zombie!</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Something about Zombie
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn0'type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal5">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn0' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal1">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-my">
        <div class="col card-body">

            <img class="img-fluid" src="https://avatars.mds.yandex.net/i?id=58abea5175865c6e3373aea23efc4ef8_l-5888192-images-thumbs&n=13" alt="">
            <div class="card-text">
                <h2>Cute cat</h2>
                <p>Very cute</p>

            </div>

        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal1">More info</button>
            <div class="modal fade" id="Modal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" num="1">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="Do you know cute cat?">( ˘ ³˘)♥︎( ˘ ³˘)♥︎</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Something about cute cats
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn1'type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal0">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn1' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal2">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-my">
        <div class="col card-body">
            <img class="img-fluid" src="https://cdn.culture.ru/images/c568096b-44ad-50f6-8634-112e61c7b35f" alt="">
            <div class="card-text">
                <h2>Sleeping cat</h2>
                <p>Cat that always sleeps</p>
            </div>
        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal2">More info</button>
            <div class="modal fade" id="Modal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" num="2">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="Do you know ...?">He is sleeping now</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Nothing interesting
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn2' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal1">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn2' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal3">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-my">
        <div class="col card-body">
            <img class="img-fluid" src="static/images/yum.jpg" alt="">
            <div class="card-text">
                <h2>Yum cat</h2>
                <p>cat yum</p>
            </div>
        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal3">More info</button>
            <div class="modal fade" id="Modal3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" num="3">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="Do you know Yum?">Yum cat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Eating cat
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn3' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal2">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn3' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal4">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-my">
        <div class="col card-body">
            <img class="img-fluid" src="static/images/cat-com.jpg" alt="">
            <h2>Busya</h2>
            <p>Andrew's cat</p>
        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal4">More info</button>
            <div class="modal fade" id="Modal4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" num="4">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="Do you know Busya?">Bysya</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Something about that
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn4' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal3">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn4' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal5">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-my">
        <div class="col card-body">
            <img class="img-fluid" src="static/images/1b61b47a-e6cc-4786-b00d-1cc3251bb2bd.jfif" alt="">
            <h2>Seraphim</h2>
            <p>Ann's cat</p>
        </div>
        <div class="cont cards" >
            <button class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal5" >More info</button>
            <div class="modal fade" id="Modal5" tabindex="-1" aria-labelledby="ModalLabel1" aria-hidden="true" num="5">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="ModalLabel1" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="Do you know Sim?">Ann's cat</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Very black
                        </div>
                        <div class="modal-footer cont">
                            <button id='l-btn5' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal4">Left</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button id='r-btn5' type="button" class="button-upload" data-bs-toggle="modal" data-bs-target="#Modal0">Right</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
