
import AOS from "aos"
import "aos/dist/aos.css"

/**
 * Inicialización de AOS (Animate On Scroll)
 * Sistema de Clasificación de Residuos Sólidos - SENA
 */
document.addEventListener("DOMContentLoaded", () => {
  // Inicializar AOS con configuración personalizada
  AOS.init({
    duration: 800,
    easing: "ease-in-out",
    once: true,
    mirror: false,
    offset: 100,
    delay: 0,
    anchorPlacement: "top-bottom",
  })

  // Refrescar AOS cuando el contenido cambie dinámicamente
  window.addEventListener("load", () => {
    AOS.refresh()
  })

  // Smooth scroll para enlaces internos
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault()
      const target = document.querySelector(this.getAttribute("href"))
      if (target) {
        target.scrollIntoView({
          behavior: "smooth",
          block: "start",
        })
      }
    })
  })

  // Navbar scroll effect
  const navbar = document.querySelector(".navbar-scroll")
  if (navbar) {
    window.addEventListener("scroll", () => {
      if (window.scrollY > 50) {
        navbar.classList.add("scrolled")
      } else {
        navbar.classList.remove("scrolled")
      }
    })
  }

  // Counter animation para estadísticas
  const animateCounters = () => {
    const counters = document.querySelectorAll(".counter")
    counters.forEach((counter) => {
      const target = Number.parseInt(counter.getAttribute("data-target"))
      const duration = 2000
      const increment = target / (duration / 16)
      let current = 0

      const updateCounter = () => {
        current += increment
        if (current < target) {
          counter.textContent = Math.floor(current)
          requestAnimationFrame(updateCounter)
        } else {
          counter.textContent = target
        }
      }

      // Iniciar animación cuando el elemento sea visible
      const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            updateCounter()
            observer.unobserve(entry.target)
          }
        })
      })

      observer.observe(counter)
    })
  }

  animateCounters()
})

// Utilidades globales
window.showNotification = (message, type = "success") => {
  // Implementar sistema de notificaciones si es necesario
  console.log(`[${type.toUpperCase()}] ${message}`)
}

// Export para uso en otros módulos
export { AOS }
