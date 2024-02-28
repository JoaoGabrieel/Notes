function abrirModal() {
  const modal = document.getElementById("janelaModal")
  modal.classList.add("abrir")

  modal.addEventListener("click", (e) => {
    if (e.target.id == "fechar" || e.target.id == "janelaModal") {
      modal.classList.remove("abrir")
    }
  })
}
