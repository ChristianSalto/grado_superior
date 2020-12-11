const createInput = (num = new Array(num)) => {
  const input = [];
  for (i = 0; i < num; i++) {
    input.push(document.createElement("input"))
  }
  return input;
}

const numCaracteres = (text) => text !== undefined ? text.length : "";

const firstLetterA = (text) => text.indexOf("A", 0);

const lastLetterA = (text) => {
  const arr = [];
  text = text.split("");
  text.map((v, i) => {
    if (v === "A") arr.push(i)
  });
  return Math.max(...arr)
}

// con esta funcion podemos extraer una subcadena dado un indice inicial y final
const lessThree = (text) => text.substring(3, text.length)



