let preco_element = document.getElementsByClassName("preco");
let qtd_element = document.getElementsByClassName("iqtd-itens");
let name = document.getElementsByClassName("iname-buyer");

let tab = document.getElementById("ivalores");

let valores = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
let total = 0;

/*Função que adiciona os itens e soma os valores.*/
function addItens(num){
    if((preco_element[num].value) != 0){
        valores[num] += (Number(preco_element[num].value) * Number(qtd_element[num].value));
        showItens(num)
    }else{
        valores[num] = 0;
        total = 0;
        if(typeof(tab.children[num]) != "undefined")
            tab.children[num].textContent = '';
    }

    preco_element[num].value = '';
    qtd_element[num].value = 1;
}

/*Função que mostra e formata os valores dos itens.*/
function showItens(num){
    if(tab.children[num] != null){
        tab.children[num].textContent = `${name[num].value}: ${valores[num].toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'})}`;
    }else{
        let item = document.createElement('option');
        item.text = `${name[num].value}: ${valores[num].toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'})}`;
        //item.style.color = '#ffffff';
        item.value = `tab${num}`;
        tab.appendChild(item);
    }
}

/*Função que permite a adição de itens através da tecla "Enter".*/
function addItensByEnter(event, num){
    if(event.keyCode == 13){
        addItens(num);
    }
}

/*Função que calcula o valor total.*/
function calcTotal(num){
    valores.forEach((value) => {
        total += value;
    });

    if(total == 0){
        if(typeof(tab.children[num]) != "undefined")
            tab.children[num].textContent = '';
        window.alert('Adicione os valores antes de calcular o total!');
    }else{
        showTotal(num);
        total = 0;
    }
    
}

/*Função que mostra e formata o valor total.*/
function showTotal(num){
    if(tab.children[num] != null){
        tab.children[num].textContent = `Total: ${total.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'})}`;
    }else{
        let item = document.createElement('option');
        item.text = `Total: ${total.toLocaleString('pt-BR', {minimumFractionDigits: 2, maximumFractionDigits: 2, style: 'currency', currency: 'BRL'})}`;
        item.value = 'total';
        item.style.color = '#1fa20b';
        tab.appendChild(item);
    }
}