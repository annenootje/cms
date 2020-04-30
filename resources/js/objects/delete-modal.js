export default class DeleteModal {

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
        this.delete_button = document.querySelectorAll('.control.delete');
        this.cross = this._container.querySelector(".cross");
        this.cancel = this._container.querySelector(".cancel");

        this.text = this._container.querySelector(".inner h2");
        this.inline_delete_button = this._container.querySelector(".controls .control.red");
        
    }

    init() {
                
        let self = this;

        this.delete_button.forEach(function(button){
            button.addEventListener('click', (button) => {
                self.showModal(button);
            });
        })

        document.addEventListener('keydown', (e) => {
            if(e.key === "Escape") {
                this.hideModal();
            }
        });

        this.cross.addEventListener('click', () => {
            this.hideModal();
        });

        this.cancel.addEventListener('click', () => {
            this.hideModal();
        });
    }

    showModal(button) {
        console.log(button)

        this._container.classList.add("active");
        this.text.innerHTML = 
            "Weet je zeker dat je '" + button.srcElement.dataset.name + "' wilt verwijderen?";
        this.inline_delete_button.href = "/wijzigen/" + button.srcElement.dataset.number + "/delete";
    }

    hideModal() {
        this._container.classList.remove("active");
    }

}
