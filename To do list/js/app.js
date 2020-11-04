// Select elements
const clear = document.querySelector(".clear");
const dateElement = document.getElementById("date");
const list = document.getElementById("list");
const input = document.getElementById("input");

//Classes names :
const CHECK = "fa-check-circle";
const UNCHECK = "fa-circle-thin";
const LINE_TROUGH = "lineThrough";

//Create variables :
var LIST = [];
var id = 0;

//get item from the localstorage : 
var data = localStorage.getItem("TODO");

//check if data isn't empty :
if (data) {
    LIST = JSON.parse(data);
    id = LIST.length; // set the id to the last item in the array
    loadList(LIST); // load the list
} else { // if data is empty :
    LIST = [];
    id = 0;
}

//load items to the user's interface :
function loadList(array) {
    array.forEach(item => {
        addToDo(item.name, item.id, item.done, item.trash);

    });
}

//clear the local storage :
clear.addEventListener('click', () => {
    localStorage.clear();
    location.reload();
})

//Show todays date :

const options = { weekday: "long", month: "short", day: "numeric" };
const today = new Date();

dateElement.innerHTML = today.toLocaleDateString("fr-FR", options);

//Add to do function :
function addToDo(toDo, id, done, trash) {

    if (trash) {
        return;
    }

    const DONE = done ? CHECK : UNCHECK;
    const LINE = done ? LINE_TROUGH : "";


    const item = `
    <li class="item">
        <i class="fa ${DONE} co" job="complete" id=${id}></i>
        <p class="text ${LINE}">${toDo}</p>
        <i class="fa fa-trash-o de" job="delete" id=${id}></i>    
    </li>            `
    const position = "beforeend";
    list.insertAdjacentHTML(position, item);
}

//add an item to the list user enter key :
document.addEventListener("keyup", (event) => {
    if (event.keyCode == 13) {
        const toDo = input.value;

        //If the input isn't empty :
        if (toDo) {
            addToDo(toDo, id, false, false);

            LIST.push({
                name: toDo,
                id: id,
                done: false,
                trash: false
            });

            //add item to the localstorage (this code must be added where we update the LIST) :
            localStorage.setItem("TODO", JSON.stringify(LIST))
            id++
        }
        input.value = "";
    }
});

//Complete to do :
function completeToDo(element) {
    element.classList.toggle(CHECK);
    element.classList.toggle(UNCHECK);
    element.parentNode.querySelector(".text").classList.toggle(LINE_TROUGH);

    LIST[element.id].done = LIST[element.id].done ? false : true;
}

function removeToDo(element) {
    element.parentNode.parentNode.removeChild(element.parentNode);
    LIST[element.id].trash = true;
}

//Target items :
list.addEventListener('click', (event) => {
    const element = event.target; //return the list element inside the list
    const elementJob = element.attributes.job.value; // complete or delete

    if (elementJob == "complete") {
        completeToDo(element);
    } else if (elementJob == "delete") {
        removeToDo(element);
    }
    //add item to the localstorage (this code must be added where we update the LIST) :
    localStorage.setItem("TODO", JSON.stringify(LIST))
})