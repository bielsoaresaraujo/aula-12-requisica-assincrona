<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>calculadora AJAX</h1>
    <pre>
        <lebel>Numero 01</lebel>
        <input type="text" name="numero1" id="numero1"/>
        <lebel>Numero 02</lebel>
        <input type="text" name="numero2" id="numero2"/>

        <button onclick="calcular();">Calculara com ajax</button>
        <p id="reultado"></p>
    </pre>
  <script>
    function calcular(){
        const numero1 = document.getElementById("numero01").value;
         const numero2 = document.getElementById("numero02").value;
         fetch( '/calculo.php',{
            method: 'POST',
            headers:{'Content-Type': 'application/json'},
            body: JSON.stringify({
                numero1: parseFloat(numero1),
                numero1: parseFloat(numero2)
            })
         })
         .then(resposta => resposta.json())
         .then(dados =>{
            
            document.getElementById("resultado").innerHTML =
            "soma: " + dados.soma;
         })
         .catch(erro =>{
            document.getElementByiId("resultado").innerHTML =
            "Erro ao processar";
         })
    }
  </script>

</body>
</html>