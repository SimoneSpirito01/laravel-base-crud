require('./bootstrap');

const bottonsToggle = document.getElementsByClassName('btnToggle');
const form = document.querySelector('.my_form');
const buttonDelete = document.querySelector('.my_button');
let comicId;

for(let i = 0; i < bottonsToggle.length; i++) {
    bottonsToggle[i].addEventListener('click', function() {
        comicId = this.getAttribute('data-id');
    })
}

buttonDelete.addEventListener('click', function() {
    console.log(comicId);
    form.setAttribute('action', 'comics/'+comicId);
    form.submit();
})

// const bottonsToggle = document.getElementsByClassName('btnToggle');
// const formIndex = document.querySelector('.my_form_index');
// const formShow = document.querySelector('.my_form_show');
// const buttonDeleteIndex = document.querySelector('.my_button_index');
// const buttonDeleteShow = document.querySelector('.my_button_show');
// let comicId;

// for(let i = 0; i < bottonsToggle.length; i++) {
//     bottonsToggle[i].addEventListener('click', function() {
//         comicId = this.getAttribute('data-id');
//         console.log(comicId);
//         console.log(buttonDeleteShow);
//         console.log(formShow);
//         buttonDeleteIndex.addEventListener('click', function() {
//             console.log(comicId);
//             formIndex.setAttribute('action', 'comics/'+comicId);
//             formIndex.submit();
//         });
        
//         buttonDeleteShow.addEventListener('click', function() {
//             console.log('ciao');
//             formShow.setAttribute('action', comicId);
//             formShow.submit();
//         });
//     })
// }