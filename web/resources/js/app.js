
console.log("Hello World!");

window.$ = window.jQuery = require('jquery');
import * as bootstrap from 'bootstrap';
window.bootstrap = bootstrap;


const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

$(document).ready(function () {
    const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
    const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));
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
