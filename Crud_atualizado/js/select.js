
var variavel;

//Função criara para deletar usuário.
/*O usuario ao clicar no botão desligar, aciona o ONCLICK e chama  
função abaixo. a função através do fetch envia o ID para o back*/
async function excluirElemento(id){
    var excluir = await fetch(`../back/delete.php?id=${id}`);
    window.location.reload()
}

async function editarElemento(id){
     window.location.href = `editarCadastro.html?id=${id}`;
}


//CRIANDO UMA FUNÇÃO.
async function criarTable(variavel){

    var data = await fetch(`../back/select.php`);
    variavel = await data.json();
    var list = variavel;

/*----------------------------------------------*/ 

//CHAMANDO UM ELEMENTO PELO ID.
    var tabela = window.document.getElementById("tabela");
// CRIANDO CABEÇALHOS COM O CREATEELEMENT.
    var cabecalho = document.createElement("th");
    cabecalho.innerText = " ID ";
    tabela.appendChild(cabecalho);
//UTILIZANDO O APPENDCHILD PARA ADICIONAR O ELEMENTO AO FINAL.
    var cabecalho = document.createElement("th");
    cabecalho.innerText = " NOME ";
    tabela.appendChild(cabecalho);

    var cabecalho = document.createElement("th");
    cabecalho.innerText = " CPF ";
    tabela.appendChild(cabecalho);
/*---------------------------------------------*/ 


 for(var item of list){
    var linha = document.createElement("tr");
    linha.innerHTML += 
    `
    <tr>
        <td>${item.id}</td>
        <td>${item.nome}</td>
        <td>${item.cpf}</td>
    </tr>
    <td><button onclick="editarElemento(${item.id})" id="editar"> Editar </button></td>
    <td><button onclick="excluirElemento(${item.id})" id="excluir"> Excluir </button></td>
    `
    tabela.appendChild(linha)
/*-----------------------------------------------*/
 }



}

criarTable();