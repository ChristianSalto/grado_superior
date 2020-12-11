const header = document.getElementById("header");
const main = document.querySelector("main")
const title = document.createElement("h1");
const hr = document.createElement("hr");
const form = document.createElement("form");
const section = document.createElement("section");
const ul = document.createElement("ul");


title.innerHTML = "TAREA DWEC03";
header.appendChild(title);
header.appendChild(hr);
main.appendChild(form);


const input = createInput(5);
input.forEach(i => form.appendChild(i));

input[0].setAttribute("placeholder", "Introduzca su nombre y apellidos...");

input[1].setAttribute("placeholder", "Introduzca DIA de nacimiento....");
input[1].setAttribute("type", "number");

input[2].setAttribute("placeholder", "Introduzca MES de nacimiento....");

input[3].setAttribute("placeholder", "Introduzca AÑO de nacimiento....");
input[3].setAttribute("type", "number");

input[4].setAttribute("type", "submit");
input[4].setAttribute("value", "submit");
input[4].setAttribute("class", "submit");

const hr2 = hr.cloneNode(true);
main.appendChild(hr2);
main.appendChild(section);
section.appendChild(ul);


form.addEventListener("submit", (e) => {
  e.preventDefault();
  const values = {};

  values.fullName = e.target[0].value;
  values.dia = e.target[1].value;
  values.mes = e.target[2].value;
  values.año = e.target[3].value;

  const caracteres = numCaracteres(values.fullName);
  const firstA = firstLetterA(values.fullName.toUpperCase());
  const lastA = lastLetterA(values.fullName.toUpperCase());
  const lessThreeLetter = lessThree(values.fullName.toUpperCase());

  ul.appendChild(document.createElement("li")).innerHTML = `Buenos dias ${values.fullName}`;
  ul.appendChild(document.createElement("li")).innerHTML = `Tu nombre tiene ${caracteres} caracteres, incluidos espacios.`;
  ul.appendChild(document.createElement("li")).innerHTML = `La primera letra A de tu nombre está en la posición: ${firstA}`
  ul.appendChild(document.createElement("li")).innerHTML = `La última letra A de tu nombre está en la posición: ${lastA}`
  ul.appendChild(document.createElement("li")).innerHTML = `Tu nombre menos las 3 primeras letras es: ${lessThreeLetter}`
  ul.appendChild(document.createElement("li")).innerHTML = `Tu nombre todo en mayúsculas es: ${values.fullName.toUpperCase()}`
  ul.appendChild(document.createElement("li")).innerHTML = `Tu edad es: ${2020 - values.año} años.`
  ul.appendChild(document.createElement("li")).innerHTML = `Naciste un feliz ${values.mes} del año ${values.año}.`
  ul.appendChild(document.createElement("li")).innerHTML = `El coseno de 180 es: ${Math.cos(180)}`
  ul.appendChild(document.createElement("li")).innerHTML = `El número mayor de (34,67,23,75,35,19) es: ${Math.max(34, 67, 23, 75, 35, 19)}`
  ul.appendChild(document.createElement("li")).innerHTML = `Ejemplo de número al azar: ${Math.random()}`
});



const ventanaNueva = (URL) => {
  window.open(URL, "Ejemplo de Ventana Nueva", "width=550,height=550");
}

ventanaNueva("newWindow.html");
