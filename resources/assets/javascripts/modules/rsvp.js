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
    let target = e.target
    let choice = target.dataset.to

    if (choice == this.current.choice) return

    this.current.button.classList.add('-light')
    target.classList.remove('-light')

    const currentChoice = this.current.choice

    this.rsvpBlocks[currentChoice].classList.remove('-show')
    this.rsvpBlocks[choice].classList.add('-display-block')

    setTimeout(() => {
      this.rsvpBlocks[currentChoice].classList.remove('-display-block')
    }, 100)
    setTimeout(() => {
      this.rsvpBlocks[choice].classList.add('-show')
    }, 200)

    this.current = {
      choice : choice,
      button : this.buttons[choice == 'yes' ? 0 : 1]
    }
  }
}
