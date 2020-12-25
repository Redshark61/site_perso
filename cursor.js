const cursor = document.querySelector('.cursor')

window.addEventListener('mousemove', function(e){
    cursor.style.top = e.pageY+"px"
    cursor.style.left = e.pageX+"px"
})