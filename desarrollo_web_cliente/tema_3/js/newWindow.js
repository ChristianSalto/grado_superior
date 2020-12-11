
// con esta 
const availableJava = () => {
  let text = "";
  navigator.javaEnabled()
    ? (text = "Java SI disponible en esta ventana")
    : (text = "Java NO disponible en esta ventana");

  document.getElementById("java").innerHTML = text;


  const url = location.href;
  const protocol = location.protocol;
  const navegator = navigator.userAgent;
  const iframe = document.createElement("iframe");

  document.getElementById("url").innerHTML = `<b>URL Completa</b>: ${url}`;
  document.getElementById("protocol").innerHTML = `<b>Protocolo utilizado</b>: ${protocol}`;
  document.getElementById("navegator").innerHTML = `<b>Nombre en código del navegador:</b>: ${navegator}`;

  iframe.setAttribute("width", "800")
  iframe.setAttribute("height", "600")
  iframe.setAttribute("src", "https://www.google.es/")

  document.body.appendChild(iframe);
};


availableJava();


