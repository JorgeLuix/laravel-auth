import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const el = document.getElementById("wrapper");
const toggleButton = document.getElementById("menu-toggle");

toggleButton.onclick = function () {
    el.classList.toggle("toggled");
};
