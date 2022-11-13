

const dropDown = $$('.c-dropdown')
const showDropMenus = $$('.c-dropdown-menu');

dropDown.forEach((show, element) => {
    const showDropMenu = showDropMenus[element];

    show.onclick = () => {
       showDropMenu.classList.toggle('show');
    }
});


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


