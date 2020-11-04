const WHITE_KEY = ['s','d','f','g','h','j','k'];
const BLACK_KEY = ['e','r','y','u','i'];
const keys = document.querySelectorAll('.key')
const white_keys = document.querySelectorAll('.key.white');
const black_keys = document.querySelectorAll('.key.black');

keys.forEach(key => {
    key.addEventListener('click', () => { playNote(key) })
});

document.addEventListener('keydown', event => {
    const key = event.key;
    const WhiteKeyIndex = WHITE_KEY .indexOf(key);
    const BlackKeyIndex = BLACK_KEY.indexOf(key);

    if(WhiteKeyIndex >-1) playNote(white_keys[WhiteKeyIndex]);
    if(BlackKeyIndex >-1) playNote(black_keys[BlackKeyIndex]);

})

function playNote(key) {
    const noteAudio = document.getElementById(key.dataset.note);
    noteAudio.currentTime = 0
    key.classList.add('active');
    noteAudio.play();
    
    noteAudio.addEventListener('ended', ()=>{
        key.classList.remove('active');
    })
}