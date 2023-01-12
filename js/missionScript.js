const flightStage = document.querySelector('.flight-stage'),
        flightStageBtn = document.querySelector('.flight-progress__btn'),
        flightStageContent = document.querySelector('.flight-stage--open');

flightStageBtn.addEventListener('click', (e) => {
    flightStage.classList.add('flight-stage--open');
});
flightStage.addEventListener('click', (e) => {
    if (e.target == flightStage){
        flightStage.classList.remove('flight-stage--open');
    }
});