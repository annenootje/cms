export default class Progress {

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
        this.percent = this._container.dataset.procent;

    }

    init() {
        
        $(this._container).css("width", this.percent + "%");

        if(this.percent > 30) {
            $(this._container).removeClass('red');
            $(this._container).addClass('orange');
        }

        if(this.percent > 70) {
            $(this._container).removeClass('orange');
            $(this._container).addClass('green');
        }
    }
}
