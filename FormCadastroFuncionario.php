<form action="CadastroDados.php" method="post" class="border shadow-sm p-4 mt-4">
    <div class="row LinhaForm">
        <div class="col-lg-6">
            <label>Primeiro Nome: </label>
            <input type="text" name="HTML_primeiroNome" class="form-control" maxlength="10">
        </div>
        <div class="col-lg-6">
            <label>Último Nome: </label>
            <input type="text" name="HTML_ultimoNome" class="form-control" maxlength="20">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-6">
            <label>Foto: </label>
            <input type="file" name="HTML_foto" class="form-control-file"  accept="image/png, image/jpeg">
        </div>
        <div class="col-lg-3">
            <label>Data de Nascimento: </label>
            <input type="date" name="HTML_dataNascimento" class="form-control">
        </div>
        <div class="col-lg-3">
            <label>Data de Contratação: </label>
            <input type="date" name="HTML_dataContratacao" class="form-control">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-6">
            <label>Cargo: </label>
            <input type="text" name="HTML_cargo" class="form-control" maxlength="30">
        </div>
        <div class="col-lg-3">
            <label>Título de Cortesia: </label>
            <input type="text" name="HTML_tituloCortesia" class="form-control" maxlength="25">
        </div>
        <div class="col-lg-3">
            <label>Salário: </label>
            <input type="number" name="HTML_salario" class="form-control">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-8">
            <label>Endereço: </label>
            <input type="text" name="HTML_endereco" class="form-control" maxlength="60">
        </div>
        <div class="col-lg-4">
            <label>Cidade: </label>
            <input type="text" name="HTML_cidade" class="form-control" maxlength="15">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-4">
            <label>Estado: </label>
            <input type="text" name="HTML_estado" class="form-control" maxlength="15">
        </div>
        <div class="col-lg-4">
            <label>País: </label>
            <input type="text" name="HTML_pais" class="form-control" maxlength="15">
        </div>
        <div class="col-lg-4">
            <label>CEP: </label>
            <input type="text" name="HTML_cep" class="form-control" maxlength="10">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-6">
            <label>Telefone Residencial: </label>
            <input type="text" name="HTML_telefone" class="form-control" maxlength="24">
        </div>
        <div class="col-lg-2">
            <label>Extensão: </label>
            <input type="text" name="HTML_telefone" class="form-control" maxlength="4">
        </div>
    </div>
    <div class="row LinhaForm">
        <div class="col-lg-12">  
                <input type="hidden" name="tabela" value="employees">
                <button type="submit" class="btn btn-dark float-right">Cadastrar Funcionário</button>            
        </div>
    </div>
</form>