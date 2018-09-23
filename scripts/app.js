// Function
let scrollTo = element => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  })
}

/**
 * Parallax effect
 * @param {Node} element 
 */
let parallax = (element) => {
  // Distance to top
  let scrollOffsetTop = window.pageYOffset
  // Parallax element
  const background = document.querySelector(element)
  background.style.backgroundPositionY = `${(scrollOffsetTop - background.offsetTop) / 1.5}px`
}

// Return direction of mouse enter/leave to an element
// (top: 0, right: 1, bottom: 2, left: 3)
let getDirection = function (ev, obj) {
  let w = obj.offsetWidth,
    h = obj.offsetHeight,
    x = (ev.pageX - obj.offsetLeft - (w / 2) * (w > h ? (h / w) : 1)),
    y = (ev.pageY - obj.offsetTop - (h / 2) * (h > w ? (w / h) : 1)),
    d = Math.round(Math.atan2(y, x) / 1.57079633 + 5) % 4;

  // Add is-active-to-* direction
    switch (d) {
      case 0: return { enter: 'is-active-to-top', leave: 'is-leave-to-top' }
      case 1: return { enter: 'is-active-to-right', leave: 'is-leave-to-right' }
      case 2: return { enter: 'is-active-to-bottom', leave: 'is-leave-to-bottom' }
      default: return { enter: 'is-active-to-left', leave: 'is-leave-to-left' }
    }
}

// Events

// Scroll
window.addEventListener('scroll', () => {
  parallax('#top-page')
  parallax('#contact')

  if (window.pageYOffset > 500) {
    document.querySelector('#arrow-up').classList.add('is-visible')
  } else {
    document.querySelector('#arrow-up').classList.remove('is-visible')
  }
})

// Navigation button
document.querySelector('#toggle-header-nav').addEventListener('click', (event) => {
  document.querySelector('#toggle-header-nav').classList.toggle('is-active')
  document.querySelector('body').classList.toggle('navigation-show')
})

// Smooth scrollTo
document.querySelectorAll('a[href*="#"]').forEach(e => {
  e.addEventListener('click', (event) => {
    event.preventDefault()
    let target = document.querySelector('#' + e.getAttribute('href').split('#')[1])

    scrollTo(target)
    return false
  })
})

// Scroll to top
document.querySelector('#arrow-up').addEventListener('click', () => {
  scrollTo(document.querySelector('#top-page'))
})

// Projects mouse enter/leave events
document.querySelectorAll('.project-item').forEach(e => {
  e.addEventListener('mouseenter', (event) => {
    let element = event.target

    // Remove last is-leave-* class
    element.firstElementChild.classList.remove(
      'is-leave-to-top',
      'is-leave-to-left',
      'is-leave-to-bottom',
      'is-leave-to-right'
    )

    element.firstElementChild.classList.add(getDirection(event, element).enter, 'is-active')
  })

  e.addEventListener('mouseleave', (event) => {
    let element = event.target
    let d = getDirection(event, element)

    element.firstElementChild.classList.remove(
      'is-active-to-top',
      'is-active-to-left',
      'is-active-to-bottom',
      'is-active-to-right',
      'is-active'
    )

    element.firstElementChild.classList.add(getDirection(event, element).leave)
  })
})

// Instant exec

// Arrow Up
if (window.pageYOffset > 500) {
  document.querySelector('#arrow-up').classList.add('is-visible')
} else {
  document.querySelector('#arrow-up').classList.remove('is-visible')
}


// Form checker

document.querySelector('#contact-form').addEventListener('submit', (e) => {
  e.preventDefault()

  let frmEmail = document.querySelector('#frmEmail')
  let mailRegex = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-]+)\.([a-z]{2,})$/g

  if (!mailRegex.exec(frmEmail.value)) {
    frmEmail.parentNode.classList.add('inputError')
  } else {
    frmEmail.parentNode.classList.remove('inputError')
    e.target.submit()
  }
})