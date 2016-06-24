export default class Rsvp {
  constructor(el) {
    this.vars(el)
    this.listen()
  }

  vars(el) {
    this.el      = el
    this.buttons = document.querySelectorAll('.rsvp-buttons button')
    this.current = {
      choice : 'yes',
      button : this.buttons[0] // first button
    }
    this.rsvpBlocks = {
      yes : document.querySelector('.rsvp-yes'),
      no  : document.querySelector('.rsvp-no')
    }
  }

  listen() {
    for (var i = 0; i < this.buttons.length; i++) {
      this.buttons[i].addEventListener('click', this.toggleBlock.bind(this))
    }
  }

  toggleBlock(e) {
    let target        = e.target
    let nextChoice    = target.dataset.to
    let currentChoice = this.current.choice

    if (nextChoice == currentChoice) return

    this.current.button.classList.add('-light')
    target.classList.remove('-light')

    this.rsvpBlocks[currentChoice].classList.remove('-show')
    this.rsvpBlocks[nextChoice].classList.add('-display-block')

    setTimeout(() => {
      this.rsvpBlocks[currentChoice].classList.remove('-display-block')
      this.rsvpBlocks[nextChoice].classList.add('-show')
    }, 200)

    this.current = {
      choice : nextChoice,
      button : this.buttons[nextChoice == 'yes' ? 0 : 1]
    }
  }
}
