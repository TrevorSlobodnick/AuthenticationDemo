// ENUM DEFINITIONS
class Themes{
    static DARK = "DARK"
    static LIGHT = "LIGHT"
}

// VARIABLE DEFINITIONS
let theme = localStorage.getItem("theme")
const themeElem = document.getElementById("theme")

themeElem.addEventListener("change", onThemeChange)

// INIT BLOCK
if(theme == null){
    // get system preference
    if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
        // dark mode
        localStorage.setItem("theme", Themes.DARK)
        theme = Themes.DARK
        document.body.classList.add("dark")
        themeElem.value = Themes.DARK
    }
    else{
        // light mode
        localStorage.setItem("theme", Themes.LIGHT)
        theme = Themes.LIGHT
        document.body.classList.remove("dark")
        themeElem.value = Themes.LIGHT
    }
}
else if(theme == Themes.DARK){
    // preference is dark mode
    document.body.classList.add("dark")
    themeElem.value = Themes.DARK
}
else{
    //default to light mode
    document.body.classList.remove("dark")
    themeElem.value = Themes.LIGHT
}

// FUNCTION DEFINITIONS
function onThemeChange(e){
    if (themeElem.value == Themes.DARK){
        setTheme(Themes.DARK)
    }
    else{
        setTheme(Themes.LIGHT)
    }
}

function setTheme(themeToSet){
    localStorage.setItem("theme", themeToSet)
    theme = themeToSet
    if (themeToSet == Themes.DARK){
        document.body.classList.add("dark")
    }
    else{
        document.body.classList.remove("dark")
    }
}