const dataInput = document.getElementById('data');
const horarioSelect = document.getElementById('horario');

//Função dos hórarios fih
function HorariosDisponiveis() {
    const data = new Date(dataInput.value);
    const diaDaSemana = data.getUTCDay(); //Samuel, o getUTCDay serve pra fazer isso o 0 == domingo, 1 == segunda e assim por diante
    horarioSelect.innerHTML = '<option value="">Selecione um horário</option>'; 

    let horariosDisponiveis = [];

    if (diaDaSemana === 0 || diaDaSemana == 1) {
       alert("Não atendemos esse dia.");
        return;
    } else if(diaDaSemana == null ){
        alert("Nenhuma data selecionada.");
        return
    }else if (diaDaSemana === 6) {
        horariosDisponiveis = [
            "08:00", "09:00", "10:00", "11:00", "12:00",
            "14:00", "15:00", "16:00", "17:00", "18:00", "19:00"
        ];
    } else {
        horariosDisponiveis = [
            "09:00", "10:00", "11:00", "12:00", 
            "14:00", "15:00", "16:00", "17:00", "18:00", "19:00"
        ];
    }

   
    horariosDisponiveis.forEach(horario => {
        const option = document.createElement('option');
        option.value = horario;
        option.textContent = horario;
        horarioSelect.appendChild(option);
    });
}


dataInput.addEventListener('change', HorariosDisponiveis);


//Função da troca de cor e da soma
const cards = document.querySelectorAll('.animacao-card');
const valorTotal = document.getElementById('valorTotal');

let total = 0;
cards.forEach(card => {
    const preco = parseFloat(card.getAttribute('data-preco')); 
    
    card.addEventListener('click', () => {
        const cardSelecionado = card.style.backgroundColor === 'rgb(255, 111, 60)'; 

        if (cardSelecionado) {
            card.style.backgroundColor = ''; 
            total -= preco; 
        } else {
            card.style.backgroundColor = '#FF6F3C';
            total += preco;
        }

        valorTotal.textContent = total.toFixed(2); // Define o total formatado
    });
});
