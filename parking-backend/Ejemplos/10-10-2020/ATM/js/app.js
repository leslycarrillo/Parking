//var pins = import("./../fake/pin.js");
console.log("Iniciando JS")
console.info(window.localStorage.getItem("pantallaActual"));
let nroIntentos =0;


if(window.localStorage.getItem("pantallaActual") == null){
    mostrarPantalla("screenLenguaje");
} else {
    mostrarPantalla(localStorage.getItem("pantallaActual"));
}

function mostrarPantalla(dato){
    //Ocultando todas las pantallas
    document.getElementById("screenLenguaje").classList.add("ocultar");
    document.getElementById("screenPin").classList.add("ocultar");

    //Mostrando pantalla
    document.getElementById(dato).classList.remove("ocultar");
    document.getElementById(dato).classList.add("mostrar");
    //Almacenamos en localstorage la pantalla que fue mostrada.
    window.localStorage.setItem("pantallaActual", dato);
}


function changeScreen(){
    console.log("Cambiar pantalla");
    //Oculta la pantalla de lenguaje
    document.getElementById("screenLenguaje").classList.remove("mostrar");
    document.getElementById("screenLenguaje").classList.add("ocultar");
    //Muestra la pantalla para ingresar PIN
    document.getElementById("screenPin").classList.remove("ocultar");
    document.getElementById("screenPin").classList.add("mostrar");
    //Actualizando cambio de pantalla en localStorage
    localStorage.setItem("pantallaActual", "screenPin");
}
function clicBtn(dato){
    console.log("presiono el btn "+dato);
    /*
    * Validar el registro únicamente de 4 digitos
    * El boton "Confirmar" únicamente funciona cual el pin tiene 4 dígitos
    */
    if(dato == "Cancelar"){
        document.getElementById("pin").innerHTML = "[ ____ ]"
    } else if(dato == "Borrar"){
        let nuevoPin = document.getElementById("pin").innerHTML;
        if(Number(nuevoPin)>=0) {
            document.getElementById("pin").innerHTML = (Number(nuevoPin)/10).toFixed(0);
        }
    } else if(dato == "Confirmar") {        
        fetch("./../fake/pin.json")
        .then(res =>{
            console.info(res);
        }).catch(error => {
            console.error(error);
        })
        //console.log(pins);
        
        let pinCorrecto = "1234";
        
        if(pinCorrecto == document.getElementById("pin").innerHTML){
            alert("PIN correcto")
        } else {
            // Primera solución
            //document.getElementById("pin").innerHTML = "[ ____ ]"
            // Segunda solución
            //clicBtn('Cancelar');
            // Tercera opción
            document.getElementById("btnCancelar").click();
            document.getElementById("msjErrorPin").style="";

            setTimeout(() => {
                document.getElementById("msjErrorPin").style="display:none;";
            }, 3000);
            nroIntentos= nroIntentos+1;
            if(nroIntentos>3){
                alert("Ups!!! ve al banco para solicitar tu tarjeta..... :(");
            }
        }
    } else {
        if("[ ____ ]" == document.getElementById("pin").innerHTML){
            document.getElementById("pin").innerHTML = dato;
        } else {
            document.getElementById("pin").innerHTML = document.getElementById("pin").innerHTML + dato
        }
    }
    
     
}
