let total = 2;
let hechas = 0;

function marcar(btn) {
    if (btn.dataset.ok) return;

    btn.dataset.ok = "1";
    btn.innerHTML = '<span class="text-lg">✔️</span> Asistido';
    btn.classList.remove("text-gray-500");
    btn.classList.add("text-emerald-600");
    btn.disabled = true;

    // suavizar tarjeta
    const card = btn.closest(".rounded-xl");
    card.classList.add("opacity-70");

    hechas++;
    document.getElementById("barraProgreso").style.width =
        Math.round((hechas / total) * 100) + "%";
}

function verCalendario() {
  window.location.href = "/calendario/public/index.php?view=calendario";
}

function verDia(dia) {
  alert("Ver agenda del día " + dia);
  // luego:
  // window.location.href = "/usuario/dia/2026-01-" + dia;
}

function volverHoy() {
  // window.location.href = "/usuario";
  alert("Volver a hoy");
}
