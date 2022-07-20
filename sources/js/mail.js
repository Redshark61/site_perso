const button = document.querySelector('#js-send-mail');
const body = document.querySelector('#message');
const title = document.querySelector('#subject');

button.addEventListener('click', () => {
  window.open(`mailto:
    tim.vannier@gmail.com
    ?subject=${title.value}
    &body=${body.value}
  `);
})