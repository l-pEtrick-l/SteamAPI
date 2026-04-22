function mudarPlaceholder() {
  const input = document.getElementById("meuInput");

  if (window.innerWidth <= 600) {
    input.placeholder = "Busque sua historia";
  } else {
    input.placeholder = "Procure sua proxima historia";
  }
}

window.addEventListener("resize", mudarPlaceholder);
window.addEventListener("load", mudarPlaceholder);