import $ from 'jquery';
function initializeComponents(container) {
    if (container === void 0) { container = document; }
    $(container).find('[class*="-component"]').each(function () {
        var $element = $(this);
        var componentName = getComponentName(this);
        if (!componentName) {
            return;
        }
        if (!$element.data('initialized') && typeof window[componentName] === 'function') {
            // @ts-ignore
            new window[componentName]($element);
            $element.data('initialized', true);
        }
    });
}
function getComponentName(element) {
    // @ts-ignore
    var classname = $(element).attr('class').split(' ').find(function (e) { return e.endsWith('-component'); });
    if (!classname) {
        return null;
    }
    // turn html class name 'some-component' into js class name SomeComponent
    return classname.split('-').map(function (part) { return part.charAt(0).toUpperCase() + part.slice(1); }).join('');
}
var observer = new MutationObserver(function (mutationsList) {
    for (var _i = 0, mutationsList_1 = mutationsList; _i < mutationsList_1.length; _i++) {
        var mutation = mutationsList_1[_i];
        if (mutation.type === 'childList') {
            mutation.addedNodes.forEach(function (node) {
                if (node.nodeType === 1) { // element node
                    initializeComponents();
                }
            });
        }
    }
});
// Initialize components on DOMContentLoaded
document.addEventListener('DOMContentLoaded', function () {
    observer.observe(document.body, { childList: true, subtree: true });
    initializeComponents();
});
