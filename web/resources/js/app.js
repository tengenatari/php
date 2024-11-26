import {parseInt} from "lodash/string";

console.log("Hello World!");

window.$ = window.jQuery = require('jquery');
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')
function modal(event, id = null){
    let modal_title = document.getElementById("exampleModalLabel")
    let modal_description = document.getElementById("exampleModalDesc")
    let l_but = document.getElementById('l')
    let r_but = document.getElementById('r')
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
            console.log(data);
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

    $('.button-arrow').on('click', function (){
        let val = this.value;
        console.log(val);
        let MyModal = document.getElementById('Modal')
        MyModal.hide();
        modal(null, String(val));
        let elem = $(document.getElementById("Modal"));
        elem.on('hidden.bs.modal', function (event){
            MyModal.show();
            elem.off();
        })


    });

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
