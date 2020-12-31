<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATM - Banco de la fortuna</title>
    <link href="./css/main.css" rel="stylesheet" />
</head>
<body>
    
    <section id="pantalla">
        <table width="100%" height="100%">
            <tr>
                <td width="10%">
                    <button class="fns"></button>
                    <button class="fns"></button>
                    <button class="fns"></button>
                    <button class="fns"></button>
                </td>
                <td width="80%">                    
                    <div class="screen mostrar" id="screenLenguaje">
                        Selecciona el lenguaje
                        <p style="text-align: right;">Español</p>
                        <p style="text-align: right;">Ingles</p>
                    </div>
                    <div class="screen ocultar" id="screenPin" >
                        <h2 id="msjErrorPin" style="display: none;">Pin incorrecto... :(</h2>
                        <h3>Ingrese su código</h3>
                        <h1 id="pin">[ ____ ]</h1>

                    </div>
                </td>
                <td width="10%">
                    <button class="fns"></button>
                    <button class="fns"></button>
                    <button class="fns" onclick="changeScreen()"></button>
                    <button class="fns" onclick="changeScreen()"></button>
                </td>
            </tr>
        </table>
        
    </section>
    <section id="teclado">
        <button onclick="clicBtn('1')">1</button>
        <button onclick="clicBtn('2')">2</button>
        <button onclick="clicBtn('3')">3</button>
        <button id="btnCancelar" onclick="clicBtn('Cancelar')">Cancelar</button>
        <button onclick="clicBtn('4')">4</button>
        <button onclick="clicBtn('5')">5</button>
        <button onclick="clicBtn('6')">6</button>
        <button onclick="clicBtn('Borrar')">Borrar</button>
        <button onclick="clicBtn('7')">7</button>
        <button onclick="clicBtn('8')">8</button>
        <button onclick="clicBtn('9')">9</button>
        <button onclick="clicBtn('Confirmar')">Confirmar</button>
        <button onclick="clicBtn('0')">0</button>
    </section>
    <script src="./js/app.js"></script>
</body>
</html>