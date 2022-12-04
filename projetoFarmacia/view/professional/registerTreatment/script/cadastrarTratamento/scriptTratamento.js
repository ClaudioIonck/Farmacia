
var controleCampo = 1;

function adicionarCampo(){

    controleCampo++

    console.log(controleCampo)


    document.getElementById('remedyListContent').insertAdjacentHTML('beforeend', 
    
        '<div class="form-group" id="campo'+controleCampo+'"> <label>Nome remédio: </label> <input type="text" name="remedyName[]" id="remedyName" placeholder="Nome do remédio"/> <label>Gramagem remédio: </label> <input type="number" step="0.01" value="0.00" name="remedyMg[]" id="remedyMg" placeholder="00.00"/> <label>Quantidade: </label> <input type="text" name="remedyQuantity[]" id="remedyQuantity" placeholder="Quantidade na caixa"/> <button type="button" id="'+controleCampo+'" onclick="removerCampo('+controleCampo+')"> - </button> </div>'
        
        )

}

function removerCampo(idCampo){

    console.log("Campo removido: "+idCampo);

    document.getElementById('campo'+ idCampo).remove();

}