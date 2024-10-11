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

<section class="container content-container">
    <div class="row">
        <h2 class="fw-light text-center mt-3">Editar Agendamento:</h2>
        <div class="modal-body">
            <form action="?page=salvar" method="POST" id="appointmentForm" class="container">
                <input type="hidden" name="acao" value="editar"/>
                <input type="hidden" name="id" value="<?php print $id; ?>" />
                <div class="mb-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required value="<?php print $nome; ?>">
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required value="<?php print $email; ?>">
                </div>
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="data" class="form-label">Data do Agendamento</label>
                        <input type="date" class="form-control" id="data" name="data" required value="<?php print $data; ?>">
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="horario" class="form-label">Horário</label>
                        <select class="form-select" id="horario" name="horario" required>
                            <option value="<?php print $horario; ?>" selected><?php print $horario; ?></option>
                        </select>
                    </div>
                </div>
                <div class="mb-4">
                    <label class="form-label">Tipo de Serviço</label>
                    <div class="row">
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card animacao-card" data-preco="25">
                                <div class="card-body text-center" onclick="selectService('Corte de Cabelo', 25)">
                                    <h5 class="card-title">Corte de Cabelo</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card animacao-card" data-preco="20">
                                <div class="card-body text-center" onclick="selectService('Barba', 20)">
                                    <h5 class="card-title">Barba</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 mb-3">
                            <div class="card animacao-card" data-preco="15">
                                <div class="card-body text-center" onclick="selectService('Limpeza de Pele', 15)">
                                    <h5 class="card-title">Limpeza de Pele</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <h5>Total: R$<span id="valorTotal">0.00</span></h5>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="button button1">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>

