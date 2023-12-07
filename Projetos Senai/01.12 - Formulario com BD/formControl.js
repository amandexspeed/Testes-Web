async function puxarDados(){

    let CEP = document.getElementById("formGroupCEP").value
    let data = await fetch(`https://viacep.com.br/ws/${CEP}/json/`).then(Response => Response.json());
    
    console.log(data);
    
    document.getElementById("formGroupBairro").value = data.bairro;
    document.getElementById("formGroupEndereco").value = data.logradouro + data.complemento;
    document.getElementById("formGroupCidade").value = data.localidade;
    document.getElementById("formGroupUF").value = data.uf; 
    

} 