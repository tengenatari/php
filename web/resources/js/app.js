
console.log("Hello World!");

window.$ = window.jQuery = require('jquery');
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

$(document).ready(function () {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));

    $('.button-modal').on('click', function (){
        let modal_title = document.getElementById("exampleModalLabel")
        let modal_description = document.getElementById("exampleModalDesc")
        $.ajax({
            url: "/show",
            method: 'get',
            dataType: 'html',
            data: {"id": this.id},

            success: function(data){
                data = JSON.parse(data);

                modal_title.innerHTML= data['modal_title'];
                modal_description.innerHTML = data["modal_description"];
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
        document.getElementById('r-btn' + this.getAttribute('num')).click();
    }
    if(e.key==='ArrowLeft'){
        document.getElementById('l-btn' + this.getAttribute('num')).click();
    }
});
