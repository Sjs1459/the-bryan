<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style.css">
    <title>Barbearia The Bryan</title>
</head>
<body >
    <header>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent"> 
                    <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="?page=index">Home</a>
                    </li>
                   
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=servicos">Serviços</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="?page=listar">Agendamentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=contato">Contate-nos</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </nav>
    </header>
    <a class="logo" href="?page=index">
        <img src="./IMG/logo.png" class="d-inline-block" alt="Logo">
    </a>  
 
    <div class="py-5">
    <?php 
        include("config.php");
        switch(@$_REQUEST["page"]) {
            case "cadastrar":
                include("cadastrar.php");
            break;
            case "editar":
                include("editar.php");
            break;
            case "listar":
                include("listar.php");
            break;
            case "salvar":
                include("salvar.php");
            break;
            case "servicos":
                include("servicos.php");
            break;
            case "listar":
                include("listar.php");
            break;
            default:
               include("destaques.php");
        }
    ?>
    </div>
    <script>
    function selectService(servicos, preco) {
        
        const appointmentTotal = document.getElementById('valorTotal');
        if (appointmentTotal) {
            appointmentTotal.textContent = preco.toFixed(2);
        }

       
        const editTotal = document.getElementById('valorTotalEdit');
        if (editTotal) {
            editTotal.textContent = preco.toFixed(2);
        }
        
        let inputServico = document.createElement('input');
        inputServico.type = 'hidden';
        inputServico.name = 'servico';
        inputServico.value = servicos;
        
     
        const appointmentForm = document.getElementById('appointmentForm');
        if (appointmentForm) {
            appointmentForm.appendChild(inputServico);
        }

    
        const editForm = document.getElementById('editAppointmentForm');
        if (editForm) {
            editForm.appendChild(inputServico.cloneNode());
        }
    }
</script>

    <script src="./script.js"></script>
    <footer class="footer fixed-bottom">
        <p>&copy; 2024 Barbearia The Bryan - Todos os direitos reservados.</p>
    
    </footer>
</body>
</html>
