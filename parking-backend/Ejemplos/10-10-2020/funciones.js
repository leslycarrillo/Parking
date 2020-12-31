//console.log(document);
/*
* Solicitar monto a retirar
* Fraccionar el monto entre los cortes de billetes de
* Bs 10, 20, 50, 100 y 200
*/

//let montoaRetirar = prompt("Inserte el monto a retirar");

//Ocultando mensajes
document.getElementById("msgError").style="display:none"
document.getElementById("msgOk").style="display:none"

function solicitaRetiro(){
    console.log("solicita retiro");
    let montoaRetirar = document.getElementById("montoSolicitado").value
    // Validar que el monto a retirar esté en los cortes propuestos
    if(montoaRetirar % 10 == 0 && montoaRetirar > 0){
        //alert("Usted desea retirar Bs.- " + montoaRetirar);
        muestraCortes(montoaRetirar);
        //Ocultando mensajes
        document.getElementById("msgError").style="display:none"
        document.getElementById("msgOk").style=""
    } else {
        //alert("El monto a retirar no es válido.")
        //Ocultando mensajes
        document.getElementById("msgError").style=""
        document.getElementById("msgOk").style="display:none"
    }
        
}

function muestraCortes(monto){
    /*
    * Ejemplo: Retiro de 340
    * 200 = 1
    * 100 = 1
    *  50 = 0
    *  20 = 2
    *  10 = 0
    */
    //Para billetes de 200
    let c200 = 0;
    c200 = Math.trunc(monto / 200);
    console.log("De Bs.- 200 = " + c200);
    monto = monto - (c200 * 200);
    //Para billetes de 100
    let c100 = 0;
    c100 = Math.trunc(monto / 100);
    console.log("De Bs.- 100 = " + c100);
    monto = monto - (c100 * 100);
    //Para billetes de 50
    let c50 = 0;
    c50 = Math.trunc(monto / 50);
    console.log("De Bs.- 50 = " + c50);
    monto = monto - (c50 * 50);
    //Para billetes de 20
    let c20 = 0;
    c20 = Math.trunc(monto / 20);
    console.log("De Bs.- 20 = " + c20);
    monto = monto - (c20 * 20);
    //Para billetes de 10
    let c10 = 0;
    c10 = Math.trunc(monto / 10);
    console.log("De Bs.- 10 = " + c10);
    monto = monto - (c10 * 10);

    // Mostrando resultados al usuario
    document.getElementById("cantidadBilletes200").innerHTML = c200;
    document.getElementById("cantidadBilletes100").innerHTML = c100;
    document.getElementById("cantidadBilletes50").innerHTML = c50;
    document.getElementById("cantidadBilletes20").innerHTML = c20;
    document.getElementById("cantidadBilletes10").innerHTML = c10;

    /*
        * Verificamos si se muestra o no
    */
    if(c200 == 0)
        document.getElementById("etiquetaBilletes200").style = "display: none;";
    else
        document.getElementById("etiquetaBilletes200").style = "display: block;";
    if(c100 == 0)
        document.getElementById("etiquetaBilletes100").style = "display: none;";
    else
        document.getElementById("etiquetaBilletes100").style = "";
    if(c50 == 0)
        document.getElementById("etiquetaBilletes50").style = "display: none;";
    else
        document.getElementById("etiquetaBilletes50").removeAttribute("style");
    if(c20 == 0)
        document.getElementById("etiquetaBilletes20").style = "display: none;";
    else
        document.getElementById("etiquetaBilletes20").style = "";
    if(c10 == 0)
        document.getElementById("etiquetaBilletes10").style = "display: none;";
    else
        document.getElementById("etiquetaBilletes10").style = "";
}
