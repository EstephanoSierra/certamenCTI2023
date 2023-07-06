var a = 0;
var b = 0;


function idca(){

       b++;

        var cad=document.getElementById('id').value = ++a;
        var foto=document.getElementById("foto");
        
        foto.src="../img/candidatas/"+b+".jpg";
        

if(a == 13){
  
    red();
}

}

function red(){
var C = document.getElementById('C').innerText;
switch(C){

case 'Traje Fantasia':
location.href="portada_coreografia.html";
break;

case 'Traje de Deportes':
location.href="portada_vestuario_casual.html";
break;

case 'Vestuario Casual':
location.href="portada_traje_noche.html"
break;

case 'Traje de Noche':
  
  location.href="portada_pregunta_final.html";
break;

case 'Pregunta Secreta':
location.href="portada_pregunta_final.html";
break;

case 'Pregunta Final':
location.href="portada_pregunta_final.html";
break;
  }
}



