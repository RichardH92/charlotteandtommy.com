import smoothScroll from 'smoothscroll'

export default class Nav {
  constructor(el) {
    this.el     = el
    this.links  = this.el.querySelectorAll('a')
    this.toggle = this.el.querySelector('.toggle-menu')

    Array.prototype.forEach.call(this.links, (link) => {
      link.addEventListener('click', this.scrollTo.bind(this))
    })

    this.toggle.addEventListener('click', this.toggleMenu.bind(this))
  }

  toggleMenu() {
    this.el.classList.toggle('-active')
  }

  scrollTo(e) {
    let href = e.target.href.split('#')

    this.el.classList.remove('-active')

    smoothScroll(document.querySelector('#'+href[1]))
  }
}
