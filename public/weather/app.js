const icons = {
	CLEAR_DAY: ["0", "1"],
	CLEAR_NIGHT: ["0", "1"],
	PARTLY_CLOUDY_DAY: "2",
	PARTLY_CLOUDY_NIGHT: "2",
	CLOUDY: "3",
	RAIN: ["51", "52", "53"],
	SNOW: ["71", "73", "75", "77"],
	FOG: ["45", "48"],
};

window.addEventListener("load", () => {
	var long;
	var lat;
	var temperature_description = document.querySelector(".temperature-description");
	var temperature_degree = document.querySelector(".temperature-degree");
	var location = document.querySelector(".location-time");
	var temperature_section = document.querySelector(".temperature");
	const temperature_span = document.querySelector(".temperature span");

	if (navigator.geolocation) {
		navigator.geolocation.getCurrentPosition((position) => {
			long = position.coords.longitude;
			lat = position.coords.latitude;

			const api = `https://api.open-meteo.com/v1/forecast?latitude=${lat}&longitude=${long}&current_weather=true`;

			fetch(api)
				.then((response) => {
					return response.json();
				})
				.then((data) => {
					console.log(data);
					const { temperature, windspeed, weathercode } = data.current_weather;

					//Set the DOM element :
					temperature_degree.textContent = temperature;
					temperature_description.textContent = windspeed;
					location.textContent = data.timezone;
					// let codes = [];
					// for (const code in icons) {
					// 	codes.push(code);
					// }
					let icon = "";
					console.log(weathercode);

					for (const key in icons) {
						if (typeof icons[key] === "object") {
							for (const value of icons[key]) {
								if (weathercode.toString() === value) {
									icon = key;
									break;
								}
							}
						} else {
							if (weathercode.toString() === icons[key]) {
								icon = key;
								break;
							}
						}
					}

					console.log(icon);

					//FORMULA FOR CELSIUS :
					var fareinheit = (temperature * 9) / 5 + 32;

					//Set icons :
					setIcons(icon, document.querySelector(".icon"));

					//Change the temperature units :
					temperature_section.addEventListener("click", () => {
						if (temperature_span.textContent === "°C") {
							temperature_span.textContent = "°F";
							temperature_degree.textContent = Math.floor(fareinheit);
						} else {
							temperature_span.textContent = "°C";
							temperature_degree.textContent = temperature;
						}
					});
				});
		});
	}

	function setIcons(icon, iconID) {
		const skycons = new Skycons({ color: "white" });
		const curretnIcon = icon.replace(/-/g, "_").toUpperCase();
		skycons.play();
		return skycons.set(iconID, Skycons[curretnIcon]);
	}
});
