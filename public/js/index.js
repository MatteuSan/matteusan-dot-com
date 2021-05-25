// HEADER COLOR CHANGE
const header = document.querySelector('.header')
const banner = document.querySelector('.banner')

const options = {}

const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach(entry => {
        if(!entry.isIntersecting) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
}, options);

observer.observe(banner)
