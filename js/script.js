document.addEventListener('DOMContentLoaded', () =>{
    const helloMessageBox = document.querySelector('.hello-message'),
    helloMessageCloseBtn = document.querySelector('.hello-message__btn'),
    missionStatus = document.querySelectorAll('.mission__status');


    helloMessageBox.addEventListener('click', (e) => {
        if (e.target == helloMessageBox || e.target == helloMessageCloseBtn){
            helloMessageBox.classList.add('hello-message--close');
            setTimeout(() => {
                helloMessageBox.remove();
                document.body.classList.remove('modal-hello--open');
            }, 1000)
        } 
    })

    // Установка статуса миссии
    missionStatus.forEach(status => {
        if (status.innerHTML == 'Успешно' |
        status.innerHTML == 'успешно'){
            status.classList.add('mission__status--successful');
        } else{status.classList.add('mission__status--failure') }    
    });


    // const landingAnimationElementsText = document.querySelectorAll('.section__text-container');
    // const scrollAnimationText = () =>{
    //     let windowCenter = (window.innerHeight / 2) + window.scrollY + 200;
    //     landingAnimationElementsText.forEach(e => {
    //         let scrollOffset = e.offsetTop + (e.offsetHeight / 2);
    //         if (windowCenter >= scrollOffset){
    //             e.classList.add('animation-class');
    //         }else{
    //             e.classList.remove('animation-class');
    //         }
    //     });
    // };

    const landingAnimationBackground = document.querySelectorAll('.info-wrapper');
    const missionListWrapper = document.querySelector('.mission-list_container');
    const rocketImage = document.querySelector('.mission_background-image');
    const missionElement = document.querySelectorAll('.mission_list__element-wrapper');
    const scrollAnimationBackground = () =>{
        let windowCenter = (window.innerHeight / 2) + window.scrollY + 600;
        landingAnimationBackground.forEach(e => {
            let scrollOffset = e.offsetTop + (e.offsetHeight / 2);
            if (windowCenter >= scrollOffset){
                e.classList.add('animation-background');
            }else{
                e.classList.remove('animation-background');
            }

            if (windowCenter >= missionListWrapper.offsetTop + (missionListWrapper.offsetHeight / 2)){
                missionElement.forEach(e => {
                    e.classList.add('animation-element');
                });
                rocketImage.classList.add('rocket-image--animation');
            }else{
                missionElement.forEach(e => {
                    e.classList.remove('animation-element');
                });
                rocketImage.classList.remove('rocket-image--animation');
            }


        });
    };
    scrollAnimationBackground();
    // scrollAnimationText();
    window.addEventListener('scroll', () => {
        scrollAnimationBackground();
        // scrollAnimationText();
    });
})
