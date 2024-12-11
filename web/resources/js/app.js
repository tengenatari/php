require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

import {parseInt} from "lodash/string";

console.log("Hello World!");

window.$ = window.jQuery = require('jquery');
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;

const modal_title = document.getElementById("exampleModalLabel")
const modal_description = document.getElementById("exampleModalDesc")

const l_but = document.getElementById('l')
const r_but = document.getElementById('r')

const ModalUpdate = document.getElementById('ModalUpdate')
const modal_id = document.getElementById('update_modal_id')
const modal_update_title = document.getElementById('update_title')
const modal_update_description = document.getElementById('update_description')
const modal_update_modal_title = document.getElementById('update_modal_title');
const modal_update_modal_description = document.getElementById('update_modal_description')
const modal_update_image = document.getElementById('update_modal_image')

const ModalCreate = document.getElementById('ModalCreate')
const modal_create_title = document.getElementById('create_title')
const modal_create_description = document.getElementById('create_description')
const modal_create_modal_title = document.getElementById('create_modal_title');
const modal_create_modal_description = document.getElementById('create_modal_description')
const modal_create_image = document.getElementById('create_modal_image')


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
const generalCont = document.getElementById("cont")

function modal(event, id = null){

    console.log(id)

    if(id == null){
        id = this.id
        console.log(id)
    }
    console.log(id)
    $.ajax({
        url: "/show",
        method: 'get',
        dataType: 'html',
        data: {"id": id},

        success: function(data){

            data = JSON.parse(data);

            modal_title.innerHTML= data['modal_title'];
            modal_description.innerHTML = data["modal_description"];
            let count = data['count']
            id = parseInt(id)
            let l = (id - 1  + count) % (count + 1)
            let r = (id + 1) % (count + 1)
            if(l === 0){
                l = l + 1;
            }
            if(r === 0){
                r = r + 1;
            }

            l_but.setAttribute("value", String(l));
            r_but.setAttribute("value", String(r));
        }

    })}
$(document).ready(function () {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

    $('.button-modal').on('click', modal)

    $('.button-arrow').on('click', function () {
        let val = this.value;
        console.log(val);
        let MyModal = document.getElementById('button-modal')
        MyModal.click();
        modal(null, String(val));
        let elem = $(document.getElementById("Modal"));
        elem.on('hidden.bs.modal', function (event) {

            MyModal.click();
            elem.off();
        })


    });

    $('.button-update-modal').on('click',  function (event, id = null){
        if (id == null){
            id = this.value
        }

        $.ajax({
            url: "/show",
            method: 'get',
            dataType: 'html',
            data: {"id": id},
            success: function (data) {

                data = JSON.parse(data);
                modal_id.value = id;
                modal_update_title.value = data['title'];
                modal_update_description.value = data['description'];
                modal_update_modal_description.value = data['modal_description'];
                modal_update_modal_title.value = data['modal_title'];
                modal_update_image.value = data['image'];
            }
        })

    })
    $(document.getElementById("UpdateCard")).on("click", function UpdateCard(){
            let data = $("#formUpdate").serializeArray()
            let new_data = {};

            for (let i = 0; i < data.length; i++) {
                console.log(data[i])
                new_data[data[i]['name']] = data[i]["value"];

            }
            let title_elem = document.getElementById('CardTitle' + new_data["id"]);
            let desc_elem = document.getElementById('CardDesc' + new_data["id"]);
            console.log(new_data)
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                }
            })
            $.ajax({
                url: "/update",
                method: 'post',
                dataType: 'html',
                data: new_data,
                success: function (data) {
                    data = JSON.parse(data);
                    title_elem.innerHTML = new_data["title"];
                    desc_elem.innerHTML = new_data["description"];

                }
            })
        }
    )
    $(document.getElementById("CreateCard")).on("click", function CreateCard(){
        let file = document.getElementById("create_modal_image").files[0]
        let data = $("#formCreate").serializeArray()
        let new_data = new FormData();
        console.log(file)
        for (let i = 0; i < data.length; i++) {
            console.log(data[i])
            new_data.append(data[i]['name'], data[i]["value"])

        }
        new_data.append('image', file)
        console.log(data)
        console.log(data.length)
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
        $.ajax({
            url: "/create",
            method: 'post',
            dataType: 'json',
            cache : false,
            processData: false,
            contentType: false,
            data: new_data,
            success: function (data) {

                generalCont.innerHTML += data;

            }
        })
    })
    $('.button-delete').on('click', function buttonDelete(event, id = null){



        let data = $(this).serializeArray()[0]
        console.log(data)
        let element = document.getElementById("Card" + data["value"]);

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            }
        })
        $.ajax({
            url: "/delete",
            method: "post",
            dataType: "html",
            data: {"id" : data["value"]},
            success: function(data){
                element.parentNode.removeChild(element);
            }
        })
    })

});

if (toastTrigger) {
    const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample)
    toastTrigger.addEventListener('click', () => {
        toastBootstrap.show()
    })
}


$(document).on('keydown', '.modal', function(e) {
    if(e.key==='ArrowRight'){
        document.getElementById('r').click();
    }
    if(e.key==='ArrowLeft'){
        document.getElementById('l').click();
    }
});

