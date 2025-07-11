// Elementos do DOM
const modal = document.querySelector('.display-modal');
const modalView = document.querySelector('.view-modal');
const sliderItems = Array.from(document.querySelectorAll('.slider-item'));
const [prevBtn, nextBtn] = document.querySelectorAll('.show-modal button');
const [headerRating, bodyRating] = [
    document.querySelector('.header-rating'),
    document.querySelector('.body-rating')
];

// Estado do modal
let currentItemIndex = 0;

// Funções principais
const showModal = (e) => {
    if (e.target === modal || modal.style.display === 'block') {
        modal.style.display = 'none';
    } else {
        modal.style.display = 'block';
        currentItemIndex = sliderItems.indexOf(e.target.closest('.slider-item'));
        updateModalContent(currentItemIndex);
    }
};

const updateModalContent = (index) => {
    currentItemIndex = (index + sliderItems.length) % sliderItems.length;
    modalView.innerHTML = '';
    modalView.appendChild(sliderItems[currentItemIndex].firstElementChild.cloneNode(true));
};

// Event Listeners
sliderItems.forEach(item => item.addEventListener('click', showModal));
modal.addEventListener('click', showModal);
prevBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    updateModalContent(currentItemIndex - 1);
});
nextBtn.addEventListener('click', (e) => {
    e.stopPropagation();
    updateModalContent(currentItemIndex + 1);
});

// Atualizações iniciais
document.querySelector('.classification-note').textContent = headerRating.textContent.replace('star', '');
document.querySelector('.classification-text').textContent = bodyRating.textContent;