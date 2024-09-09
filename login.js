let container = document.getElementById('container')

toggle = () => {
	container.classList.toggle('sign-in')
	container.classList.toggle('sign-up')
}

setTimeout(() => {
	container.classList.add('sign-in')
}, 200)


//disable/unable buttons

let input = document.querySelector(".input")
let button = document.querySelector(".button")

button.disabled = true

input.addEventListener("change", stateHandle)

function stateHandle() {
  if (document.querySelector(".input").value === "") {
    button.disabled = true
  } else {
    button.disabled = false
  }
}