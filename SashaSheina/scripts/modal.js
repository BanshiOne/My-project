document.addEventListener("DOMContentLoaded", function() {
  const modal = document.getElementById("callback-modal");
  const openBtn = document.querySelector(".btn-signup"); // <-- класс кнопки "Записаться"
  const closeBtn = modal.querySelector(".modal-close");

  if (openBtn) {
    openBtn.addEventListener("click", function(e) {
      e.preventDefault();
      modal.style.display = "flex";
      document.body.style.overflow = "hidden"; // убрать скролл
    });
  }

  closeBtn.addEventListener("click", function() {
    modal.style.display = "none";
    document.body.style.overflow = "";
  });

  modal.addEventListener("click", function(e) {
    if (e.target === modal) {
      modal.style.display = "none";
      document.body.style.overflow = "";
    }
  });
});