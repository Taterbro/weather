import axios from "axios";
window.axios = axios;

window.axios.defaults.headers.common["X-Requested-With"] = "XMLHttpRequest";

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allow your team to quickly build robust real-time web applications.
 */

import "./echo";

function init() {
    window.Echo.channel("weatherchannel").listen("weatherevent", (e) => {
        const icon = e.weatherdata.icon;
        const weather = e.weatherdata.weather;
        const desc = e.weatherdata.description;
        const city = e.weatherdata.city;

        document.getElementById(
            "icon"
        ).src = `http://openweathermap.org/img/wn/${icon}@2x.png`;
        document.getElementById("desc").textContent = desc;
        document.getElementById("weather").textContent = weather;
        document.getElementById("city").textContent = city;
    });
}
init();
