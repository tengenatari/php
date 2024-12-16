@extends('index')


@section('body')

        @foreach($friends as $user)
            <form class="form-floating">
                <input id="userfloating{{$user->id}}" value="{{$user->name}}" class="form-control">
                <input name="id" value="{{$user->id}}" type="hidden">
                <label for="userfloating{{$user->id}}">registered at {{$user->created_at}}</label>

                    <a class="btn btn-danger" href="/unfriend/{{$user->id}}">delete</a>


            </form>


        @endforeach
        @foreach($others as $user)
            <form class="form-floating">
                <input id="userfloating{{$user->id}}" value="{{$user->name}}" class="form-control">
                <input name="id" value="{{$user->id}}" type="hidden">
                <label for="userfloating{{$user->id}}">registered at {{$user->created_at}}</label>

            </form>

            <a class="btn btn-primary" href="/unfriend/{{$user->id}}">add friend</a>
        @endforeach
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
                        <button id='l'  type="button" class="button-arrow button-upload"  value="">Left</button>
                        <button id='close' type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button id='r' type="button" class=" button-arrow button-upload"  value="">Right</button>
                    </div>
                    <button style="display:None" id="button-modal" class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal">More info</button>
                </div>
            </div>
        </div>
    </div>
    <div class="cont cards" >

        <div class="modal fade" id="ModalUpdate" tabindex="-1" aria-labelledby="exampleModalLabelUpdate" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabelUpdate" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="It's just a zombie"></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="exampleModalDescUpdate">
                        <form id="formUpdate" class="was-validated" method="POST">
                            @csrf

                            <input id="update_modal_id" type="hidden" name="id" value="0">
                            <div class="mb3">
                                <label for="update_title" class="form-label">Введите название карточки</label>
                                <input minlength="5" maxlength="20" name="title" class="form-control is-invalid" id="update_title" placeholder="Required example textarea" required>

                            </div>


                            <div class="mb-3">
                                <label for="update_description" class="form-label">Введите описание карточки</label>
                                <textarea minlength="5" maxlength="200" name="description" class="form-control is-invalid" id="update_description" placeholder="Required example textarea" required></textarea>


                            </div>
                            <div class="mb3">
                                <label for="update_modal_title" class="form-label">Введите название модального окна</label>
                                <input minlength="5" maxlength="20" name="modal_title" class="form-control is-invalid" id="update_modal_title" placeholder="Required example textarea" required></input>

                            </div>


                            <div class="mb-3">
                                <label for="update_modal_description" class="form-label">Введите текст модального окна</label>
                                <textarea minlength="5" maxlength="200" name="modal_description" class="form-control is-invalid" id="update_modal_description" placeholder="Required example textarea" required></textarea>

                            </div>

                            <div class="mb-3">
                                <input minlength="5" maxlength="200" name="image" class="form-control" id="update_modal_image" aria-label="file example" required>
                                <div class="invalid-feedback">Example invalid form file feedback</div>
                            </div>

                            <div class="mb-3">
                                <button id="UpdateCard" class="btn btn-primary" type="button">Submit form</button>
                            </div>
                        </form>
                    </div>

                    <button style="display:None" id="button-modal" class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal">More info</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalCreate" tabindex="-1" aria-labelledby="exampleModalLabelCreate" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabelCreate" data-bs-toggle="popover" data-bs-title="Name" data-bs-content="It's just a zombie"></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="exampleModalDescCreate">
                    <form id="formCreate" class="was-validated" method="POST">
                        @csrf

                        <input id="create_modal_id" type="hidden" name="id" value="0">
                        <div class="mb3">
                            <label for="create_title" class="form-label">Введите название карточки</label>
                            <input minlength="5" maxlength="20" name="title" class="form-control is-invalid" id="create_title" placeholder="Required example textarea" required>

                        </div>


                        <div class="mb-3">
                            <label for="create_description" class="form-label">Введите описание карточки</label>
                            <textarea minlength="5" maxlength="200" name="description" class="form-control is-invalid" id="create_description" placeholder="Required example textarea" required></textarea>


                        </div>
                        <div class="mb3">
                            <label for="create_modal_title" class="form-label">Введите название модального окна</label>
                            <input minlength="5" maxlength="20" name="modal_title" class="form-control is-invalid" id="create_modal_title" placeholder="Required example textarea" required></input>

                        </div>


                        <div class="mb-3">
                            <label for="create_modal_description" class="form-label">Введите текст модального окна</label>
                            <textarea minlength="5" maxlength="200" name="modal_description" class="form-control is-invalid" id="create_modal_description" placeholder="Required example textarea" required></textarea>

                        </div>

                        <div class="mb-3">
                            <input minlength="5" maxlength="200" name="image" type="file" class="form-control" id="create_modal_image" aria-label="file example" required>
                            <div class="invalid-feedback">Example invalid form file feedback</div>
                        </div>

                        <div class="mb-3">
                            <button id="CreateCard" class="btn btn-primary" type="button">Submit form</button>
                        </div>
                    </form>
                </div>

                <button style="display:None" id="button-modal" class="btn button-upload button-cont" data-bs-toggle="modal" data-bs-target="#Modal">More info</button>
            </div>
        </div>
    </div>
    </div>
@endsection
