var input = document.getElementById('filter-Input');

input.addEventListener('keyup', filter_names);


function filter_names(){
    //Get the value of the input :
    var input_value = document.getElementById('filter-Input').value.toUpperCase();
    console.log(input_value);

    //Get the names :
    var ul = document.getElementById('names');
    
    //Get list from the ul :
    var li = ul.querySelectorAll('li.collection-item'); 

    //Loop through the list :
    for (var i = 0; i < li.length; i++) {
        var a = li[i].getElementsByTagName('a')[0];

        if(a.innerHTML.toUpperCase().indexOf(input_value)>-1){
            li[i].style.display = '';
        }else{
            li[i].style.display = 'none';
        }
        
    }
}