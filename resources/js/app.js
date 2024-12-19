import './bootstrap';


import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

document.addEventListener("DOMContentLoaded", function () {
    const button = document.getElementById("button");
    const menu = document.getElementById("menu");
    const bars = document.getElementById("bars");
    const xmark = document.getElementById("xmark");

    button.addEventListener("click", function () {
        // メニューの開閉を切り替え
        menu.classList.toggle("active");

        // アイコンの切り替え
        bars.classList.toggle("hidden");
        xmark.classList.toggle("hidden");
    });
});
