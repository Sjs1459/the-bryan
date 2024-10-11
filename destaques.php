<section class="content-container container text-center my-4">
        <h1><strong>AGENDE JÁ!</strong></h1>
        <p>Entre em contato conosco para reservar o seu horário e garantir o seu estilo!</p>
        <button type="button" class="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><strong>AGENDAR HORÁRIO</strong></button>
        <div class="modal fade costas" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center" id="exampleModalLabel"><strong>AGENDAMENTO</strong></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
            <form id="appointmentForm" action="?page=salvar" method="POST">
                <input type="hidden" name="acao" value="cadastrar">
                <div class="mb-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome completo" required>
                </div>
                <div class="mb-4">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Digite seu e-mail" required>
                </div>
                <div class="row mb-4">
                    <div class="col-12 col-md-6 mb-3">
                        <label for="data" class="form-label">Data do Agendamento</label>
                        <input type="date" class="form-control" id="data" name="data" required>
                    </div>
                    <div class="col-12 col-md-6 mb-3">
                        <label for="horario" class="form-label">Horário</label>
                        <select class="form-select" id="horario" name="horario" required></select>
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
    </div>
</div>
    </section>
    <div class="content-container container text-center my-4">
        <section>
            <h1>Serviços</h1>
            <section class="container mt-5">
                <div class="row">
                     <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card img-servicos1 shadow-sm p-3"">
                            <h5>CORTE</h5>
                            <p>Mudar o visual é importante, e temos referências para você.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card img-servicos shadow-sm p-3">
                         
                            <h5>BARBA</h5>
                            <p>Profissionais treinados para atender em um ambiente super apropriado.</p>
                        </div>
                    </div> 
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card img-servicos2 shadow-sm p-3">
                            <h5>LIMPEZA DE PELE</h5>
                            <p>Cuidar da pele não é apenas para mulheres. Venha se cuidar.</p>
                        </div>
                    </div>
        </section>
    </div>