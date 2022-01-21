
document.getElementById("enviar").onclick =()=>{
    let opcion = document.getElementById("opcion").value;
    for( let imagenes=0;  imagenes<5; imagenes++){
        imagenes=imagenes+imagenes;
        imagenes;
    }
    
    let divImagenes = document.getElementById("imagenes");
    let imagenVisual = document.createElement("img");
    imagenVisual.src='./img/concierto.jpg';
    
    
    divImagenes.append(imagenVisual);


console.log(opcion);
}








