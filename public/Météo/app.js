window.addEventListener('load', () => {
    var long;
    var lat;
    var temperature_description = document.querySelector('.temperature-description');
    var temperature_degree = document.querySelector('.temperature-degree');
    var location = document.querySelector('.location-time');
    var temperature_section = document.querySelector('.temperature');
    const temperature_span = document.querySelector('.temperature span');


    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(position => {
            long = position.coords.longitude;
            lat = position.coords.latitude;

            const proxy = 'https://cors-anywhere.herokuapp.com/';
            const api = `${proxy}https://api.darksky.net/forecast/1894f0ba340d56b8749529393d66895e/${lat},${long}/`;

            fetch(api)
                .then(response => {
                    return response.json();
                })
                .then(data => {
                    console.log(data);
                    const { temperature, summary, icon } = data.currently;

                    //Set the DOM element :
                    temperature_degree.textContent = temperature;
                    temperature_description.textContent = summary;
                    location.textContent = data.timezone;

                    //FORMULA FOR CELSIUS :
                     var celsius = (temperature - 32)*(5/9); 

                    //Set icons :
                    setIcons(icon, document.querySelector('.icon'));

                    //Change the temperature units :
                    temperature_section.addEventListener('click', ()=>{
                        if(temperature_span.textContent === '°F'){
                            temperature_span.textContent = '°C';
                            temperature_degree.textContent = Math.floor(celsius);
                        }else{
                            temperature_span.textContent = '°F';
                            temperature_degree.textContent = temperature;
                        }
                    })
                });
        });
    }

    function setIcons(icon, iconID){
        const skycons = new Skycons({color:"white"});
        const curretnIcon = icon.replace(/-/g, "_").toUpperCase();
        skycons.play();
        return skycons.set(iconID, Skycons[curretnIcon]);
    }

});