// Control de Audio
function playAudio() {
    var audio = document.getElementById("audioPrueba");
    audio.play();
    document.getElementById("btnPlay").classList.add("hidden");
    document.getElementById("btnPausa").classList.remove("hidden");
}

function pauseAudio() {
    var audio = document.getElementById("audioPrueba");
    audio.pause();
    document.getElementById("btnPlay").classList.remove("hidden");
    document.getElementById("btnPausa").classList.add("hidden");
}

// Cuenta Regresiva
function countdown() {
    var fechaCuenta = new Date(fechaCuentaRegresiva).getTime();
    var ahora = new Date().getTime();
    var distancia = fechaCuenta - ahora;

    if (distancia < 0) {
        document.getElementById("reloj").style.display = "block";
        document.getElementById("reloj_number").style.display = "none";
        return;
    }

    var dias = Math.floor(distancia / (1000 * 60 * 60 * 24));
    var horas = Math.floor((distancia % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutos = Math.floor((distancia % (1000 * 60 * 60)) / (1000 * 60));
    var segundos = Math.floor((distancia % (1000 * 60)) / 1000);

    document.getElementById("dias").innerHTML = dias;
    document.getElementById("horas").innerHTML = horas;
    document.getElementById("min").innerHTML = minutos;
    document.getElementById("seg").innerHTML = segundos;
}

setInterval(countdown, 1000);
countdown();

// Generar enlaces de calendario
function generateCalendarLinks() {
    var startDate = new Date(fechaInicioEvento);
    var endDate = new Date(fechaFinEvento);
    
    // Formato para Google Calendar
    var googleFormat = startDate.toISOString().replace(/-|:|\.\d\d\d/g, "") + "/" + 
                       endDate.toISOString().replace(/-|:|\.\d\d\d/g, "");
    var googleLink = "https://calendar.google.com/calendar/render?action=TEMPLATE&text=" + 
                     encodeURIComponent(tituloEvento) + "&dates=" + googleFormat;
    document.getElementById("LinkCalendarGoogle").href = googleLink;

    // Formato para Outlook
    var outlookFormat = startDate.toISOString().replace(/-|:|\.\d\d\d/g, "") + "/" + 
                        endDate.toISOString().replace(/-|:|\.\d\d\d/g, "");
    var outlookLink = "https://outlook.live.com/calendar/0/deeplink/compose?path=/calendar/action/compose&rru=addevent&subject=" + 
                      encodeURIComponent(tituloEvento) + "&startdt=" + startDate.toISOString() + "&enddt=" + endDate.toISOString();
    document.getElementById("LinkCalendarOutlook").href = outlookLink;

    // Formato para Apple Calendar
    var appleLink = "data:text/calendar;charset=utf-8,BEGIN:VCALENDAR%0AVERSION:2.0%0ABEGIN:VEVENT%0ADTSTART:" + 
                    startDate.toISOString().replace(/-|:|\.\d\d\d/g, "") + "%0ADTEND:" + 
                    endDate.toISOString().replace(/-|:|\.\d\d\d/g, "") + "%0ASUMMARY:" + 
                    encodeURIComponent(tituloEvento) + "%0AEND:VEVENT%0AEND:VCALENDAR";
    document.getElementById("LinkCalendarApple").href = appleLink;
}

generateCalendarLinks();

// Animaciones al scroll
const observerOptions = {
    threshold: 0.1
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.animated').forEach(element => {
    observer.observe(element);
});

document.querySelectorAll('.opacidad').forEach(element => {
    observer.observe(element);
});

// Inicializar Fancybox
$(document).ready(function() {
    $("[data-fancybox]").fancybox({
        animationEffect: "fade",
        transitionEffect: "slide",
        buttons: [
            "zoom",
            "slideShow",
            "thumbs",
            "close"
        ]
    });
});

// Parallax effect para portada
if (typeof Parallax !== 'undefined') {
    var scene = document.querySelector('.parallax-portada');
    if (scene) {
        var parallaxInstance = new Parallax(scene);
    }
}
