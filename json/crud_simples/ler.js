const fs = require("fs");
const dados = fs.readFileSync("contatos.json", "utf-8"); // Lê o conteúdo do arquivo JSON
console.log(dados); // Exibe os dados lidos do arquivo JSON