const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

const cartBtn = $('.btn-cart')
const header = $('.header-search');

const notifyBtn = $('.btn-notify');
const containerNotify = $('.container-notify');
console.log(1223);
const btnDropdown = $('.cd-dropdown-btn');
console.log(btnDropdown);

const userBtn = $('.img-user');
const userMenu = $('.header-user');

window.addEventListener('load', () => {

    notifyBtn.addEventListener('click', () => {
        containerNotify.classList.toggle('show');
        userMenu.classList.remove('show');
    });

    userBtn.addEventListener('click', () => {
        userMenu.classList.toggle('show');
        containerNotify.classList.remove('show');
    });

    // btn group by options
    const activeOptions = $$('.group-option');
    const dropdownItems = $$('.dropdown-items');

    console.log(activeOptions);
    activeOptions.forEach((active, items) => {
        const dropdownItem = dropdownItems[items];

        active.onclick = function() {
            $('.group-option.active').classList.remove('active');
            $('.dropdown-items').classList.remove('active');

            this.classList.add('active');
            dropdownItem.classList.add('active');
        }
    });

});


