function HorariosDisponiveis() {
    const data = new Date(dataInput.value);

    if (isNaN(data)) {
        alert("Nenhuma data selecionada.");
        return;
    }

    const diaDaSemana = data.getDay(); // Dia da semana no horário local
    horarioSelect.innerHTML = '<option value="">Selecione um horário</option>'; 

    let horariosDisponiveis = [];

    if (diaDaSemana === 0 || diaDaSemana === 1) {
       alert("Não atendemos esse dia.");
        return;
    } else if (diaDaSemana === 6) { // Sábado
        horariosDisponiveis = [
            "08:00", "09:00", "10:00", "11:00", "12:00",
            "14:00", "15:00", "16:00", "17:00", "18:00", "19:00"
        ];
    } else { // Outros dias da semana
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


// Função para trocar a cor do card selecionado e calcular o total
const radios = document.querySelectorAll('input[name="servico"]');
const valorTotal = document.getElementById('valorTotal');

// Função que altera a cor do card e atualiza o valor total
radios.forEach(radio => {
    radio.addEventListener('change', (event) => {
        // Remove a cor de todos os cards
        cards.forEach(card => card.style.backgroundColor = '');

        // Adiciona a cor ao card selecionado
        const cardSelecionado = event.target.closest('.animacao-card');
        cardSelecionado.style.backgroundColor = '#FF6F3C';

        // Atualiza o valor total com base no preço do serviço selecionado
        const preco = parseFloat(event.target.getAttribute('data-preco'));
        valorTotal.textContent = preco.toFixed(2);
    });
});
