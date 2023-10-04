$(document).ready(function() {
    $('.js-example-basic-single').select2();


});



document.addEventListener('wpcf7mailsent', function (event) {
    let parent = event.target;
        console.log(parent);
    if (parent) {
        parent.classList.add('thx');
    }
}, false);

document.addEventListener('wpcf7mailsent', function (event) {
    let form = event.target;
    if (form.classList.contains('wpcf7-form')) {
        let thxElement = document.getElementById('thx');

        if (thxElement) {
            thxElement.style.display = 'block';
        }
        form.classList.add('thx');
    }
}, false);
