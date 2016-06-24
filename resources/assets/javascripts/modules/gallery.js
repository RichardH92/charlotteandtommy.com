import $ from 'jquery'
import magnificPopup from '../vendor/magnificPopup'

export default class Gallery {
  constructor(el) {
    this.el = el
    this.images = this.el.querySelectorAll('.gallery-image')

    Array.prototype.forEach.call(this.images, (el) => {
      this.createImage(el)
    })
  }

  createImage(image) {
    $(image).magnificPopup({
      type                : 'image',
      closeOnContentClick : true,
      closeBtnInside      : false,
      fixedContentPos     : true,
      mainClass           : 'mfp-no-margins mfp-with-zoom',
      image : {
        verticalFit : true
      },
      zoom : {
        enabled  : true,
        duration : 300
      }
    })
  }
}
