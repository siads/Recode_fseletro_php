
function exibir_categoria(categorias){
    let elementos = document.getElementsByClassName('box_produto');
    for(i=0; i<elementos.length; i++){
        if(categorias == elementos[i].id){
            elementos[i].style="display:inline-block";
        }else{
            elementos[i].style="display:none";
        }
    }
}

function exibir_tudo(){
    let elementos = document.getElementsByClassName('box_produto');
    for(i=0; i<elementos.length; i++){
        elementos[i].style="display:inline-block";
    }
}



function onMenu(a){
    a.style="color:#ff9d9d;";
}

function outMenu(a){
    a.style="color:#fff;";
}

function downScale(x){
    x.style="transform: scale(1.0); transition: transform 0.2s;";
}

function upScale(x){
     x.style="transform: scale(1.05); transition: transform 0.15s; background-color: #fff; box-shadow: 1px 2px 15px  #dfdfdf;";
}

function upScaleMenu(x){
    x.style="font-weight: bold; color: #ff0000;";
}

function downScaleMenu(x){
    x.style="font-weight: none; color: #7c7c7c;";
}


