import { Component } from "../../repos/dumpsterfire-pages/src/js/Component.js";
export class TestComponent extends Component {
    onClick(e: JQuery.ClickEvent) {
        console.log(this.$element);
    }
}

window.TestComponent = TestComponent;