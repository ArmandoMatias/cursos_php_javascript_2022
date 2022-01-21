var mivariable = 'Rojo'; //Esta ya no se usa
let comillas = ` ` // alt+96
let boton = true;  //Verdadero
let boton2 = false; //negativo
const Pi = 3.14;
console.log(Pi);
//ciclo for
for( let i=0;  i<10; i++){
  //console.log(i);  
}
let j=0;
//ciclo while

//Arreglos

let shopping = ['bread', 'milk', 'cheese', 'hummus', 'noodles'];

for( let i=0;  i<5; i++){
    //console.log(shopping[i]);  
}

//JSOn
const manzana = {
    color: 'rojo',
    marca: 'appleRed',
    distribucion:{
        pais: 'Estados UNIDOS',
        telefono: '557766223'
    },
}


console.log(   manzana.distribucion, manzana.color);


while(j<10){
    if(j==5){
        //console.log("Efectivamente j es igual a 5");
    }else{
        //console.log("j no es 5");
    } 
    j++;
}

//Funciones
    function suma(id,conexion){
        //Lo que vamos a realizar
        let resultado = numero1+numero2;
        //lo que vamos a retornar
        return resultado;
    }

    let sum = (a, b) => {
        let result = a + b; 
        return result;
    }

    console.log( sum('5',12) );
