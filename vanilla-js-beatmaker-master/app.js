window.addEventListener('load', ()=>{
    const sounds = document.querySelectorAll('.soud');
    const pads = document.querySelectorAll('.pads div');
    const visual = document.querySelector('.visual');
    const colors = [
        "lawngreen",
        "seagreen",
        "lightcoral",
        "navy",
        "rebeccapurple",
        "saddlebrown"
    ];
    
    //Play the sound :
    pads.forEach((pad, index) =>{
        pad.addEventListener('click', function(){
            sounds[index].currentTime = 0
            sounds[index].play();

            create_bubbles(index);
        });
    });

    //Create bubble's function :
    const create_bubbles = (index)=>{
        const bubble = document.createElement('div');
        visual.appendChild(bubble);
        bubble.style.backgroundColor = colors[index];
        bubble.style.animation = 'jump 1s ease';
        bubble.addEventListener('animationend', function(){
            visual.removeChild(this);
        })
    }

});