let preco_element = document.getElementsByClassName("preco");
let qtd_element = document.getElementsByClassName("iqtd-itens");
let text = document.getElementsByClassName("itens");
let total = document.getElementById("total");

let valores = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];

function addItens(num){
    if((preco_element[num].value) != 0){
        valores[num] += (Number(preco_element[num].value) * Number(qtd_element[num].value));
        text[num].innerHTML = '<strong> ' + valores[num].toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'}) + '</strong>';
    }else{
        valores[num] = 0;
        text[num].innerHTML = '';
        total.innerHTML = '';
    }

    preco_element[num].value = '';
    qtd_element[num].value = 1;
}

function addItensByEnter(event, num){
    if(event.keyCode == 13){
        addItens(num)
    }
}

function calcTotal(){
    let tot = 0;

    valores.forEach((value) => {
        tot += value;
    });

    if(tot == 0){
        total.innerHTML = '';
        window.alert('Adicione os valores antes de calcular o total!');
    }else{
        total.innerHTML = "<h3>" + tot.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'}) + "</h3>";
    }
    
}

