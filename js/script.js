let elements = document.getElementById('signup');
elements.forEach((el) => {
    el.addEventListener('click', () => {
        document.getElementById('first').classList.toggle('none');
        document.getElementById('second').classList.toggle('none');
    })
})

// const verifPass = function() {
//     var pass1 = document.querySelector('#inscriptionPass').value;
//     var pass2 = document.querySelector('#inscriptionPassVerif').value;
//     if (pass1 != pass2) {
//         document.querySelector('.alert').classList.remove('none');
//         document.querySelector('#submit-register').disabled = true;
//     } else {
//         document.querySelector('.alert').classList.add('none');
//         document.querySelector('#submit-register').disabled = false;
//     }
// }

// document.querySelector('#close').addEventListener('click', () => {
//     document.querySelector('#connectionPass').type = 'text';  
//     document.querySelector('#close').classList.add('none');
//     document.querySelector('#open').classList.remove('none');   
// })

// document.querySelector('#open').addEventListener('click', () => {
//     document.querySelector('#connectionPass').type = 'password';  
//     document.querySelector('#open').classList.add('none');
//     document.querySelector('#close').classList.remove('none');   
// })