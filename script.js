const modal = document.querySelector('.display-modal')
const imgModal = document.querySelector('.show-modal>img')
const containerModal = document.querySelector('.show-modal')
const buttons = document.querySelectorAll('.show-modal>button')
const screenshots = document.querySelectorAll('.slider-item')

function showModal(e) {
    if (modal.style.display === 'none') {
        modal.style.display = 'block'
        imgModal.src = e.target.src
    } else if (e.target === containerModal) {
        modal.style.display = 'none'
    }
}


screenshots.forEach((element) => {
    element.addEventListener('click', (e) => showModal(e))
})

modal.addEventListener('click', (e) => {
    showModal(e)
})

const prevBtn = document.querySelector('.show-modal button:first-child');
const nextBtn = document.querySelector('.show-modal button:last-child');
const modalView = document.querySelector('.view-modal');
const sliderItems = Array.from(document.querySelectorAll('.slider-item'));
let currentItemIndex = 0;

// Atualiza o conteúdo do modal para o índice fornecido
function updateModalContent(index) {
    if (index < 0) index = sliderItems.length - 1;
    if (index >= sliderItems.length) index = 0;
    currentItemIndex = index;

    // Limpa o conteúdo atual do modal
    modalView.innerHTML = '';

    // Clona o elemento filho (img ou iframe) do slider
    const element = sliderItems[currentItemIndex].firstElementChild.cloneNode(true);
    modalView.appendChild(element);
}

// Ao abrir o modal, define o índice do elemento clicado
sliderItems.forEach((element, idx) => {
    element.addEventListener('click', (e) => {
        showModal(e);
        currentItemIndex = idx;
        updateModalContent(currentItemIndex);
    });
});

// Botão anterior
prevBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    updateModalContent(currentItemIndex - 1);
});

// Botão próximo
nextBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    updateModalContent(currentItemIndex + 1);
});


const headerRating = document.querySelector('.header-rating')
const bodyRating = document.querySelector('.body-rating')

document.querySelector('.classification-note').innerText = headerRating.textContent.replace('star', '')
document.querySelector('.classification-text').innerText = bodyRating.textContent