import { Component } from "../../repos/dumpsterfire-components/src/js/Component.js";
export class TestComponent extends Component {
    bindEvents() {
        console.log(this);
    }
}

window.TestComponent = TestComponent;;