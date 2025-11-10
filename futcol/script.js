// Script para animar o mostrar mensaje al enviar el formulario
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("formContacto");

  form.addEventListener("submit", (e) => {
    e.preventDefault();
    alert("Gracias por contactarte con Futcol ⚽. Te responderemos pronto.");
    form.reset();
  });
});