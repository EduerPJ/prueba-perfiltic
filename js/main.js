/**
 * Práctica JS
 *
 *  Basado en la misma página del ejercicio ​ 2.3​ genere un botón que duplique los valores de la matriz por cada clic recibido
 */
function duplicaValorTd() {
  let allTd = document.getElementsByTagName("td");

  for (const td in allTd) {
    if (allTd.hasOwnProperty(td)) {
      const tdValue = allTd[td].innerHTML;

      const newTdValue = tdValue * 2;

      allTd[td].innerHTML = newTdValue;
    }
  }
}

let boton = document.querySelector("#boton");
boton.addEventListener("click", function () {
  duplicaValorTd();
});
