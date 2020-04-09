let elements = document.getElementById('switchForm');
elements.forEach((el) => {
    el.addEventListener('click', () => {
        debugger;
        document.getElementById('first').classList.toggle('d-none');
        document.getElementById('second').classList.toggle('d-none');
    })
})
