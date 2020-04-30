export default class ImageModal {

    /**
     * @param   {Element} element
     */
    constructor(element) {
        /**
         * @type {Element}
         * @private
         */
        this._container = element;

        this.cross = this._container.querySelector(".cross");
        
        this._button = document.querySelector('.choose-image');

        this._options = this._container.querySelectorAll('.option');

        this._chosenImage = document.querySelector('.chosenImage');

        // chosenImage
    }

    init() {

        let self = this;

        document.addEventListener('keydown', (e) => {
            if(e.key === "Escape") {
                this.hideModal();
            }
        });

        this.cross.addEventListener('click', () => {
            this.hideModal();
        });

        this._button.addEventListener('click', () => {
            this.showModal();
        });

        this._options.forEach(function(option){
            option.addEventListener('change', (e) => {
                self.hideModal();
                self.getImage(e);
            });
        })

    }

    showModal() {
        this._container.classList.add("active");
    }

    hideModal() {
        this._container.classList.remove("active");
    }

    getImage(e) {
        console.log(this._chosenImage);
        console.log(e.srcElement.value);
        $(this._chosenImage)
            .attr('src', e.srcElement.value)
    }
}
