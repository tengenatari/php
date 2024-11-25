<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Webpack App</title>
</head>
<body>
<div class="cont">
    <div class='navbar navbar-expand-lg bg-body-tertiary header'>
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://c1.iggcdn.com/indiegogo-media-prod-cld/image/upload/c_fill%2Cf_auto%2Ch_768%2Cw_1024/v1430985624/icxwaqislsihjy4b02yl.jpg" alt="Logo"  class="item d-inline-block align-text-top logo">
                I love cat's
            </a>

            <button class="btn  button-upload" type="submit" id="liveToastBtn">Search</button>
            <div class="toast-container position-fixed bottom-0 end-0 p-3">
                <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">

                    <div class="toast-header">
                        <svg xmlns="http://www.w3.org/2000/svg" height="45" width="45" class="load" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M495.9 166.6c3.2 8.7 .5 18.4-6.4 24.6l-43.3 39.4c1.1 8.3 1.7 16.8 1.7 25.4s-.6 17.1-1.7 25.4l43.3 39.4c6.9 6.2 9.6 15.9 6.4 24.6c-4.4 11.9-9.7 23.3-15.8 34.3l-4.7 8.1c-6.6 11-14 21.4-22.1 31.2c-5.9 7.2-15.7 9.6-24.5 6.8l-55.7-17.7c-13.4 10.3-28.2 18.9-44 25.4l-12.5 57.1c-2 9.1-9 16.3-18.2 17.8c-13.8 2.3-28 3.5-42.5 3.5s-28.7-1.2-42.5-3.5c-9.2-1.5-16.2-8.7-18.2-17.8l-12.5-57.1c-15.8-6.5-30.6-15.1-44-25.4L83.1 425.9c-8.8 2.8-18.6 .3-24.5-6.8c-8.1-9.8-15.5-20.2-22.1-31.2l-4.7-8.1c-6.1-11-11.4-22.4-15.8-34.3c-3.2-8.7-.5-18.4 6.4-24.6l43.3-39.4C64.6 273.1 64 264.6 64 256s.6-17.1 1.7-25.4L22.4 191.2c-6.9-6.2-9.6-15.9-6.4-24.6c4.4-11.9 9.7-23.3 15.8-34.3l4.7-8.1c6.6-11 14-21.4 22.1-31.2c5.9-7.2 15.7-9.6 24.5-6.8l55.7 17.7c13.4-10.3 28.2-18.9 44-25.4l12.5-57.1c2-9.1 9-16.3 18.2-17.8C227.3 1.2 241.5 0 256 0s28.7 1.2 42.5 3.5c9.2 1.5 16.2 8.7 18.2 17.8l12.5 57.1c15.8 6.5 30.6 15.1 44 25.4l55.7-17.7c8.8-2.8 18.6-.3 24.5 6.8c8.1 9.8 15.5 20.2 22.1 31.2l4.7 8.1c6.1 11 11.4 22.4 15.8 34.3zM256 336a80 80 0 1 0 0-160 80 80 0 1 0 0 160z"/></svg>
                        <strong class="me-auto">Kitty</strong>
                        <small>Now</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        This button disabled
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container text-center">
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

</div>
<footer class="footer">
    <div class="footer-item">
        <div class="footer-left">
            <div>
                <p class="author">Жилин Андрей</p>
            </div>
        </div>
    </div>
    <div class="footer-item">
        <div class="footer-right">
            <div class="icons">
                <a href="https://web.telegram.org/SideArket"><img class="icon-image" alt="Andrey Zhilin"
                                                                  src="https://cdn1.iconfinder.com/data/icons/unicons-line-vol-6/24/telegram-1024.png"></a>
            </div>
        </div>
    </div>
</footer>
</body>

<script>
    if ("serviceWorker" in navigator) {
        window.addEventListener("load", () => {
            navigator.serviceWorker
                .register("service-worker.js")
                .then((registration) => {
                    console.log("Service Worker registered: ", registration);
                })
                .catch((registrationError) => {
                    console.error("Service Worker registration failed: ", registrationError);
                });
        });
    }
</script>
</html>
