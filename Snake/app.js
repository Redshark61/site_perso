const cvs = document.getElementById('snake');
const ctx = cvs.getContext('2d');

//Create the unit :
const box = 32;

//Load the images :
const ground = new Image();
ground.src = "img/ground.png";

const foodImg = new Image();
foodImg.src = "img/food.png";

//Load audio files :
const dead = new Audio();
const eat = new Audio();
const up = new Audio();
const left = new Audio();
const right = new Audio();
const down = new Audio();

dead.src = "audio/dead.mp3";
eat.src = "audio/eat.mp3";
left.src = "audio/left.mp3";
up.src = "audio/up.mp3";
right.src = "audio/right.mp3";
down.src = "audio/down.mp3";


//Create the snake :
var snake = [];
snake[0] = {
    x: 9 * box,
    y: 10 * box
}

//Create the food :
var food = {
    x: Math.floor(Math.random() * 17 + 1) * box,
    y: Math.floor(Math.random() * 15 + 3) * box
}

//Create the score :
var score = 0;

//Control the snake :

var d;

document.addEventListener('keydown', direction);

function direction(event) {
    if (event.keyCode == 37 && d != "RIGHT") {
        d = "LEFT";
        left.play();
    } else if (event.keyCode == 38 && d != "DOWN") {
        d = "UP";
        left.play();

    } else if (event.keyCode == 39 && d != "LEFT") {
        d = "RIGHT";
        left.play();

    } else if (event.keyCode == 40 && d != "UP") {
        d = "DOWN";
        left.play();

    }
}

//Draw everything : 

function draw() {
    ctx.drawImage(ground, 0, 0);

    for (var i = 0; i < snake.length; i++) {
        ctx.fillStyle = (i == 0) ? 'green' : 'white';
        ctx.fillRect(snake[i].x, snake[i].y, box, box);

        ctx.strokeStyle = 'red';
        ctx.strokeRect(snake[i].x, snake[i].y, box, box);

    }

    ctx.drawImage(foodImg, food.x, food.y);

    //Old snake head position :
    var snakeX = snake[0].x;
    var snakeY = snake[0].y;


    //Wich direction :
    switch (d) {
        case ("LEFT"):
            snakeX -= box;
            break;
        case ("UP"):
            snakeY -= box;
            break;
        case ("RIGHT"):
            snakeX += box;
            break;
        case ("DOWN"):
            snakeY += box;
            break;
    }

    function collision(head, array){
        for(var i=0; i<array.length; i++){
            if(head.x == array[i].x && head.y == array[i].y){
                return true;
            }
        }
        return false;
    }

    //When the snake eat the apple :
    if (snakeX == food.x && snakeY == food.y) {
        score++;
        eat.play();
        food = {
            x: Math.floor(Math.random() * 17 + 1) * box,
            y: Math.floor(Math.random() * 15 + 3) * box
        }

    } else {
        //Remove the tail :
        snake.pop();

    }
        //Add a new head :
        var newHead = {
            x: snakeX,
            y: snakeY
        }

    //when game-over :
    if (snakeX < box || snakeX > 17 * box || snakeY < 3 * box || snakeY > 17 * box || collision(newHead, snake)){
        clearInterval(game);
        dead.play();
    }
    snake.unshift(newHead);

    //Score :
    ctx.fillStyle = "white";
    ctx.font = "45px Changa one";
    ctx.fillText(score, 2 * box, 1.6 * box);

}

//Call draw() every 100ms :
var game = setInterval(draw, 100);

function noScroll() {
    window.scrollTo(0, 0);
  }
  
  // add listener to disable scroll
  window.addEventListener('scroll', noScroll);
  
  
