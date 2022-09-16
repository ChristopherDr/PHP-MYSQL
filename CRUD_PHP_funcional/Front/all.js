        
var variavel

//Uma variável que recebe uma função com parametro ID que joga o id selecionado para a URL informado no FETCH.
//let excluir = (id) => fetch(`../back/delete.php?id=${id}`)


async function excluir(id){
   var teste = await fetch(`../back/delete.php?id=${id}`)
    window.location.reload()

}

let editar = (id) => window.location.href = `edit.html?id=${id}`

async function editarUsuario(id){

    var update = await fetch(`../back/update.php?id=${id}?nome=${nome}?cpf=${cpf}`)

}




async function buscarDados(variavel){

        var data = await fetch('../back/select.php');
        var variavel = await data.json();
        
   var planilha = window.document.getElementById("tabela")
   
   var cabecalho = document.createElement("th")
   cabecalho.innerText = " ID "
   planilha.appendChild(cabecalho)
   var cabecalho = document.createElement("th")
   cabecalho.innerText = " NOME "
   planilha.appendChild(cabecalho)
   var cabecalho = document.createElement("th")
   cabecalho.innerText = " CPF "
   planilha.appendChild(cabecalho)

    for ( var item of variavel){
            var filho = document.createElement("tr")   
            filho.innerHTML += 
        `
            <tr>
                <td> ${item.id}</td>
                <td>${item.nome}</td>
                <td>${item.cpf}</td>
                <td>
                    <button onclick="editar(${item.id})"> Editar </button>
                    <button onclick="excluir(${item.id})"> Excluir </button>
                </td>
            </tr>
        `
            planilha.appendChild(filho)
        
    }
}

async function listar(){
    var resp = await  fetch(`../back/select.php`)
    var variavel = await resp.json()
    buscarDados(variavel)
    
  }

  //listar()



