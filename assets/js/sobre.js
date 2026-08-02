// Envelope reveal: maneja el clic, la animación y la reproducción de audio
(function () {
    // Forzar inicio desde arriba (desactivar scroll restoration del navegador)
    if ('scrollRestoration' in history) {
        history.scrollRestoration = 'manual';
    }
    window.scrollTo(0, 0);

    var overlay = document.getElementById('sobre-overlay');
    var sobre   = document.getElementById('sobre-click');
    if (!overlay || !sobre) return;

    document.body.classList.add('sobre-bloqueado');

    function abrirSobre() {
        sobre.classList.add('abriendo');

        // Reproducir música (gesto del usuario => navegador lo permite)
        try {
            if (typeof playAudio === 'function') {
                playAudio();
            } else {
                var audio = document.getElementById('audioPrueba');
                if (audio) audio.play().catch(function () {});
            }
        } catch (e) { /* silencioso */ }

        // Tras la animación, ocultar overlay
        setTimeout(function () {
            overlay.classList.add('abierto');
            document.body.classList.remove('sobre-bloqueado');

            // Quitar del DOM al terminar el fade
            setTimeout(function () {
                if (overlay && overlay.parentNode) {
                    overlay.parentNode.removeChild(overlay);
                }
            }, 900);
        }, 3000);
    }

    sobre.addEventListener('click', abrirSobre, { once: true });
})();
