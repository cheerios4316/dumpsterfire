var Component = /** @class */ (function () {
    function Component($element) {
        this.$element = $element;
        this.setData();
        this.setDependencies();
        this.init();
    }
    Component.prototype.init = function () {
        this.bindEvents();
        this.$element.data('instance', this);
    };
    Component.prototype.setDependencies = function () { };
    Component.prototype.setData = function () { };
    Component.prototype.bindEvents = function () { };
    return Component;
}());
export { Component };
