export default class Modal {

    /**
     * @param   {Element} element
     */
    constructor(element) {
        /**
         * @type {Element}
         * @private
         */
        this._container = element;

        this._chosenImage = document.querySelector(".chosenImage");
    
    }

    init() {
        
        const self = this;
            
        this._container.addEventListener("change", function() {
            console.log(self._container.files);

            var reader = new FileReader();

            reader.onload = function (e) {
                $(self._chosenImage)
                    .attr('src', e.target.result)
                    console.log(self._chosenImage)
            };

            reader.readAsDataURL(self._container.files[0]);
        })
    }
}
