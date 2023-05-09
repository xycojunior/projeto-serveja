
function toggleModal() {
    document.getElementById("overlay").classList.toggle('active');
}

function closeModal() {
    document.getElementById("overlay").classList.toggle('active');
}

document.addEventListener(
    "click",
    function(event) {
      // If user either clicks X button OR clicks outside the modal window, then close modal by calling closeModal()
      if (
        event.target.matches(".button-close-modal") ||
        !event.target.closest(".box")
      ) {
        closeModal()
      }
    },
    false
)