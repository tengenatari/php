@extends('index')

@section('body')
    <form class="was-validated" method="POST" action="/create/card">
        @csrf


        <div class="mb3">
            <label for="validationText" class="form-label">Введите название карточки</label>
            <input name="title" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required>
            <div class="invalid-feedback">
                Введите как минимум 4 символа
            </div>
        </div>


        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Введите описание карточки</label>
            <textarea name="description" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>

            <div class="invalid-feedback">
                Введите как минимум 4 символа
            </div>
        </div>
        <div class="mb3">
            <label for="validationText" class="form-label">Введите название модального окна</label>
            <input name="modal_title" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></input>
            <div class="invalid-feedback">
                Введите как минимум 4 символа
            </div>
        </div>


        <div class="mb-3">
            <label for="validationTextarea" class="form-label">Введите текст модального окна</label>
            <textarea name="modal_description" class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required></textarea>
            <div class="invalid-feedback">
                Введите как минимум 4 символа
            </div>
        </div>

        <div class="mb-3">
            <input name="image" class="form-control" aria-label="file example" required>
            <div class="invalid-feedback">Example invalid form file feedback</div>
        </div>

        <div class="mb-3">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>


@endsection
