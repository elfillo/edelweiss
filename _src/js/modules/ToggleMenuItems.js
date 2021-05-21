class ToggleMenuItems{
    constructor(){
        this.dropDownItems = document.querySelectorAll('.dropdown-li');
        this.events();
    }

    events(){
        this.dropDownItems.forEach(el => {
            el.addEventListener("mouseenter", e => {
                e.preventDefault();
                console.log('drop down mouseenter');
            });
        });
    }

}

export default ToggleMenuItems;