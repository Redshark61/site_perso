function setScale() {
  console.log('setScale');
  const title = document.querySelector('#js-contact-title');

  // get the width of its container
  const container = document.querySelector('.contact__links');
  const parentWidth = container.offsetWidth;

  /* Getting the width and height of the title element. */
  const titleWidth = title.offsetWidth;
  const titleHeight = title.offsetHeight;

  /* Getting the height of the window. */
  const windowHeight = window.innerHeight;

  // get 10% of the window height
  const desiredHeight = windowHeight * 0.1;

  /* Calculating the ratio of the desired height and width */
  const ratioHeight = desiredHeight / titleHeight;
  const ratioWidth = parentWidth / titleWidth;

  const transformTitle = () => {
    title.style.transform = `scale(${ratioWidth}, ${ratioHeight})`;
    const parent = title.parentElement;
    const { height: titleHeigth, width: titleWidth } = title.getBoundingClientRect();
    parent.style.height = `${titleHeigth}px`;
    parent.style.width = `${titleWidth}px`;
  };

  transformTitle();
}

setScale();

window.addEventListener('resize', setScale);