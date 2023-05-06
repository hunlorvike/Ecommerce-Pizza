var btn_tab1 = document.getElementById('btn-tab1');
var btn_tab2 = document.getElementById('btn-tab2');
var tab1 = document.getElementById('tab1');
var tab2 = document.getElementById('tab2');

btn_tab1.addEventListener('click', () => {
    tab1.classList.add("d-block");
    tab1.classList.remove("d-none");
    tab2.classList.add("d-none");
    tab2.classList.remove("d-block");
});

btn_tab2.addEventListener('click', () => {
    tab1.classList.add("d-none");
    tab1.classList.remove("d-block");
    tab2.classList.add("d-block");
    tab2.classList.remove("d-none");
});
