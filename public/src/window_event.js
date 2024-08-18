const topNav = document.querySelector('#top-nav')

const brandLogoW = document.querySelector('#brand-logo_w')
const brandLogoB = document.querySelector('#brand-logo_b')

const preloader = document.querySelector('#preloader')

const body = document.querySelector('body')
const modeBtn = document.querySelector('#mode-btn')

// scrollup
const scrollupBtn = document.querySelector('#scrollup-btn')
if (scrollupBtn) {
    scrollupBtn.onclick = () => window.scrollTo({ top: 0, behavior: 'smooth' })
}





// functions
const showWhiteLogo = () => {
    brandLogoW.classList.add('visible', 'opacity-100')
    brandLogoW.classList.remove('invisible', 'opacity-0')
    brandLogoB.classList.add('invisible', 'opacity-0')
    brandLogoB.classList.remove('visible', 'opacity-100')
}
const showBlackLogo = () => {
    brandLogoW.classList.remove('visible', 'opacity-100')
    brandLogoW.classList.add('invisible', 'opacity-0')
    brandLogoB.classList.remove('invisible', 'opacity-0')
    brandLogoB.classList.add('visible', 'opacity-100')
}
const topNavEffect = () => {
    if (topNav) {
        if (window.scrollY > 50) {
            topNav.classList.add('stick')
            if (darkMode === false) {
                showBlackLogo()
            } else {
                showWhiteLogo()
            }
        } else {
            topNav.classList.remove('stick')
            showWhiteLogo()
        }
    }
}
const switchMode = () => {
    darkMode = !darkMode
    if (darkMode === true) {
        localStorage.setItem("artificialDarkMode", "true")
        body.classList.add('dark')
    } else {
        localStorage.setItem("artificialDarkMode", "false")
        body.classList.remove('dark')
    }
    topNavEffect()
}



// on load
darkMode = false

window.onload = () => {
    // dark mode
    darkMode = localStorage.getItem("artificialDarkMode") === "true"
    if (darkMode === true) {
        body.classList.add('dark')
    } else {
        body.classList.remove('dark')
    }
    // preloader
    if (preloader) {
        preloader.classList.add('pop')
    }
    topNavEffect()
}

if (modeBtn) {
    modeBtn.onclick = () => {
        switchMode()
    }
}









// on scroll
window.onscroll = () => {
    // top nav
    topNavEffect()

    // scroll up
    if (scrollupBtn) {
        if (window.scrollY > 100) {
            scrollupBtn.classList.add('show')
        } else {
            scrollupBtn.classList.remove('show')
        }
    }
}