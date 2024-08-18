// menu
const menuIc = document.querySelector('#menu-ic')
const menuOverlay = document.querySelector('#menu-overlay')
const menu = document.querySelector('#menu')
const closeMenuBtn = document.querySelector('#close-menu-btn')

const openMenu = () => {
    menuIc.classList.add('open')
    menuOverlay.classList.add('show')
    menu.classList.add('show')
}
const closeMenu = () => {
    menuIc.classList.remove('open')
    menuOverlay.classList.remove('show')
    menu.classList.remove('show')
}

if (menuIc && menuOverlay && menu && closeMenuBtn) {
    menuIc.onclick = () => {
        openMenu()
    }
    menuOverlay.onclick = () => {
        closeMenu()
    }
    closeMenuBtn.onclick = () => {
        closeMenu()
    }
}

// scroll to gallery
const galleryBtn = document.querySelector('#gallery-btn')
const galleryDiv = document.querySelector('#gallery')

if (galleryBtn && galleryDiv) {
    galleryBtn.onclick = () => {
        galleryDiv.scrollIntoView({ behavior: 'smooth' })
    }
}