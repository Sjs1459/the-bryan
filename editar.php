<?php 
    $sql = "SELECT * FROM agendamentos WHERE id=".$_REQUEST["id"];
    $result = $conn->query($sql);
    $exibirRegistros = mysqli_fetch_array($result);
    $id = $exibirRegistros[0];
    $nome = $exibirRegistros[1];
    $email = $exibirRegistros[2];
    $data = $exibirRegistros[3];
    $horario = $exibirRegistros[4];
    $servico = $exibirRegistros[5];

    $row = $result->fetch_object();

?>
<h2 class="fw-light text-center mt-3">Editar Cadastro:</h2>
<hr>

<div class="col-12">
    <form action="?page=salvar" method="POST" class="container">
        <input type="hidden" name="acao" value="editar"/>
        <input type="hidden" name="id" value="<?php print $id; ?>" />
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome"
                placeholder="Digite seu nome completo.." required value="<?php print $nome; ?>">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email"
                placeholder="Digite seu e-mail.." required value="<?php print $email; ?>">
        </div>
        <div class="row">
            <div class="mb-3 col-4">
                <label for="data" class="form-label">Data do Agendamento</label>
            <input type="date" class="form-control" id="data" name="data" required value="<?php print $data; ?>">
            </div>               
            <div class="mb-3 col-3">
                <label for="horario" class="form-label">Horário</label>
                <input type="time" class="form-control" id="horario" name="horario" required value="<?php print $horario; ?>">
            </div>
        <div class="mb-4">
    <label class="form-label">Tipo de Serviço</label>
    <div class="row">
        <div class="col-12 col-md-4 mb-3">
            <label class="card animacao-card" data-preco="25">
                <div class="card-body text-center">
                    <h5 class="card-title">Corte de Cabelo</h5>
                    <input type="radio" name="servico" value="Corte de Cabelo" data-preco="25" required>
                </div>
            </label>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label class="card animacao-card" data-preco="20">
                <div class="card-body text-center">
                    <h5 class="card-title">Barba</h5>
                    <input type="radio" name="servico" value="Barba" data-preco="20" required>
                </div>
            </label>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <label class="card animacao-card" data-preco="15">
                <div class="card-body text-center">
                    <h5 class="card-title">Limpeza de Pele</h5>
                    <input type="radio" name="servico" value="Limpeza de Pele" data-preco="15" required>
                </div>
            </label>
        </div>
    </div>
</div>

<div class="mb-4">
    <h5>Total: R$<span id="valorTotal">0</span></h5>
</div>

        <div class="row mt-3">
            <div>
                <button class="btn btn-primary" type="submit">Salvar</button>
                <button class="btn btn-danger" type="reset">Limpar</button>
            </div>
        </div>
    </form>
</div>
<script>
    $("#nome").change(function() {
        $(this).val($(this).val().toUpperCase());
    });
</script>