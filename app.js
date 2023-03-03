import main from './storage/main.js'

document.querySelector("#res").insertAdjacentHTML("beforeend", await main.obtener());
