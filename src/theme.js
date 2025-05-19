window.$ = function (selector) {
    if (typeof selector === 'string') {
        const elements = document.querySelectorAll(selector);
        if (elements.length === 1) {
            return elements[0];
        }
        else if (elements.length > 1) {
            return elements;
        }
        else {
            return null;
        }
    }
    else if (selector instanceof HTMLElement) {
        return selector;
    }
    else {
        return null;
    }
}


const themeToggleDarkIcon = document.getElementById(
    "theme-toggle-dark-icon"
);
const themeToggleLightIcon = document.getElementById(
    "theme-toggle-light-icon"
);
const colorMode = localStorage.getItem("color-theme");
if (colorMode === "dark") {
    document.documentElement.classList.add("dark");
}
if (
    colorMode === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    themeToggleLightIcon.classList.remove("hidden");
} else {
    themeToggleDarkIcon.classList.remove("hidden");
}

const themeToggleBtn = document.getElementById("theme-toggle");

themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");
    const currentMode = localStorage.getItem("color-theme");
    if (currentMode) {
        if (currentMode === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
    } else if (document.documentElement.classList.contains("dark")) {
        document.documentElement.classList.remove("dark");
        localStorage.setItem("color-theme", "light");
    } else {
        document.documentElement.classList.add("dark");
        localStorage.setItem("color-theme", "dark");
    }
});
document.querySelector('#full-screen').addEventListener('click', () => {
    $('#editor-wrapper').classList.toggle('lg:grid-cols-3');
    $('#editor-info').classList.toggle('hidden');
    $('#content').classList.toggle('container');
    $('#content').classList.toggle('margin-top-0');
    $('#full-screen-icon').classList.toggle('hidden');
    $('#exit-full-screen-icon').classList.toggle('hidden');
    $('.ql-container').classList.toggle('full');
});

window.addEventListener('load', () => {
    tippy('#strength-wrapper', {
        theme: 'light-border',
        inertia: true,
        animation: 'scale',
        content: "This is the overall strength of your writing. The scale is from 0 to 100, where 100 means the strongest possible.",
     }); 
});