// pop up gallery
const imgDisplay = document.querySelector('#img-display')
const popImg = document.querySelector('#img-display img')
const leftBtn = document.querySelector('#img-display #left')
const rightBtn = document.querySelector('#img-display #right')
let currentImgGroup = ''
let imgIndex = -1

const allGallery = document.querySelectorAll('#all-gallery-item')

const displayImg = (index, gal) => {
    popImg.src = gal[index].querySelector('img').getAttribute('src')
    imgDisplay.classList.add('show')
}

if (imgDisplay) {
    imgDisplay.onclick = () => {
        imgDisplay.classList.remove('show')
    }
}
if (popImg) {
    popImg.onclick = (e) => {
        e.stopPropagation()
    }
}
if (allGallery) {
    allGallery.forEach((item, index) => {
        item.querySelector('#view').onclick = () => {
            displayImg(index, allGallery)
            imgIndex = index
            currentImgGroup = 'allGallery'
        }
    })
}


// control
if (leftBtn) {
    leftBtn.onclick = (e) => {
        e.stopPropagation()
        if (currentImgGroup === 'allGallery') {
            imgIndex = imgIndex - 1
            if (imgIndex < 0) {
                imgIndex = allGallery.length - 1
            }
            displayImg(imgIndex, allGallery)
        }
    }
}
if (rightBtn) {
    rightBtn.onclick = (e) => {
        e.stopPropagation()
        if (currentImgGroup === 'allGallery') {
            imgIndex = imgIndex + 1
            if (imgIndex === allGallery.length) {
                imgIndex = 0
            }
            displayImg(imgIndex, allGallery)
        }
    }
}