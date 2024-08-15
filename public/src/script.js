const navToggler = document.querySelector('#nav-toggle')
const nav = document.querySelector('#nav')

const toggleNav = () => {

    nav.classList.toggle('open')
}

navToggler.addEventListener("click", () => {
    toggleNav()
})