export default class Tabmenu {

    /**
     * @param   {Element} element
     */
    constructor(element) {
        /**
         * @type {Element}
         * @private
         */
        this._container = element;

        /**
         * @type {NodeListOf<Element>}
         */
        this.tabbody = this._container.querySelectorAll('.tab');

        this.sub_item = document.querySelectorAll('.sub-menu .item');

        
    }

    init() {
        
        let self = this;

        this.sub_item.forEach(function(button){
            button.addEventListener('click', () => {
                let clicked_index = $(button).index();
                self.changeTab(clicked_index);
            });
        })
    }

    changeTab(clicked_index) {

        $(this.tabbody).removeClass("active");
        $(this.tabbody[clicked_index]).addClass("active");

        $(this.sub_item).removeClass("active");
        $(this.sub_item[clicked_index]).addClass("active");
    }
}
