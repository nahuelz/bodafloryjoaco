<!-- Overlay del sobre de apertura -->
<div id="sobre-overlay" class="sobre-overlay">
    <div class="sobre-wrapper">

        <p class="sobre-titulo">Toca para abrir tu invitación</p>

        <div id="sobre-click" class="sobre-main relative z-10 sobre-float" style="width: clamp(300px, 88vw, 420px);">
            <div class="relative" style="height: clamp(190px, 52vw, 260px);">

                <!-- Carta interna -->
                <div class="carta-inner absolute rounded-t-2xl overflow-hidden"
                     style="left: clamp(16px, 4vw, 22px); right: clamp(16px, 4vw, 22px); top: 0px; height: clamp(130px, 36vw, 175px); z-index: 1; background: linear-gradient(160deg, rgb(253, 252, 247) 0%, rgb(247, 243, 234) 100%); box-shadow: rgba(0, 0, 0, 0.2) 0px -8px 32px; border-top: 1px solid rgba(41, 41, 41, 0.145); border-left: 1px solid rgba(41, 41, 41, 0.082); border-right: 1px solid rgba(41, 41, 41, 0.082);">
                    <div class="absolute pointer-events-none" style="inset: 8px; border: 1px solid rgba(41, 41, 41, 0.094); border-radius: 6px;"></div>
                    <div class="flex flex-col items-center justify-center h-full px-8 text-center gap-2">
                        <p style="font-size: 8px; letter-spacing: 0.4em; text-transform: uppercase; color: rgb(15, 16, 52); opacity: 0.9; font-family: 'Cormorant Garamond', Georgia, serif;">Invitación a</p>
                        <p style="font-size: clamp(1rem, 4vw, 1.5rem); color: rgb(15, 16, 52); font-family: 'Cormorant Garamond', Georgia, serif; font-style: italic; font-weight: 600; line-height: 1.2;"><?= $evento['novios'] ?></p>
                        <div style="width: 28px; height: 1px; background: rgb(15, 16, 52); opacity: 0.75; margin-top: 4px;"></div>
                    </div>
                </div>

                <!-- Cuerpo del sobre con foto -->
                <div class="sobre-cuerpo absolute inset-0"
                     style="border-radius: clamp(12px, 3vw, 18px); background-image: url('<?= $evento['portada_sobre'] ?>'); background-size: cover; background-position: center center; box-shadow: rgba(0, 0, 0, 0.28) 0px 24px 80px, rgba(0, 0, 0, 0.18) 0px 8px 24px, rgba(255, 255, 255, 0.12) 0px 1px 0px inset, rgba(41, 41, 41, 0.094) 0px 0px 0px 1px; z-index: 2; overflow: hidden;">
                    <div class="absolute pointer-events-none" style="inset: 6px; border: 1px solid rgba(41, 41, 41, 0.08); border-radius: clamp(8px, 2vw, 12px);"></div>

                    <!-- Líneas decorativas SVG del cuerpo -->
                    <div class="absolute inset-0" style="z-index: 1; pointer-events: none;">
                        <svg viewBox="0 0 400 240" preserveAspectRatio="none" class="w-full h-full">
                            <defs>
                                <linearGradient id="env_bot" x1="0%" y1="0%" x2="0%" y2="100%">
                                    <stop offset="0%" stop-color="#292929" stop-opacity="0.03"></stop>
                                    <stop offset="100%" stop-color="#292929" stop-opacity="0.09"></stop>
                                </linearGradient>
                                <linearGradient id="env_left" x1="0%" y1="0%" x2="100%" y2="0%">
                                    <stop offset="0%" stop-color="#292929" stop-opacity="0.05"></stop>
                                    <stop offset="100%" stop-color="#292929" stop-opacity="0"></stop>
                                </linearGradient>
                                <linearGradient id="env_right" x1="100%" y1="0%" x2="0%" y2="0%">
                                    <stop offset="0%" stop-color="#292929" stop-opacity="0.05"></stop>
                                    <stop offset="100%" stop-color="#292929" stop-opacity="0"></stop>
                                </linearGradient>
                            </defs>
                            <polygon points="0,240 400,240 200,130" fill="url(#env_bot)"></polygon>
                            <line x1="0" y1="0" x2="200" y2="130" stroke="#292929" stroke-width="0.6" stroke-opacity="0.18"></line>
                            <line x1="400" y1="0" x2="200" y2="130" stroke="#292929" stroke-width="0.6" stroke-opacity="0.18"></line>
                            <line x1="0" y1="240" x2="200" y2="130" stroke="#292929" stroke-width="0.6" stroke-opacity="0.18"></line>
                            <line x1="400" y1="240" x2="200" y2="130" stroke="#292929" stroke-width="0.6" stroke-opacity="0.18"></line>
                            <polygon points="0,0 0,240 200,130" fill="url(#env_left)"></polygon>
                            <polygon points="400,0 400,240 200,130" fill="url(#env_right)"></polygon>
                        </svg>
                    </div>

                    <!-- Solapa superior (la que se abre) -->
                    <div class="solapa-top absolute top-0 left-0 right-0" style="height: 52%; z-index: 4;">
                        <svg viewBox="0 0 400 130" preserveAspectRatio="none" class="w-full h-full">
                            <defs>
                                <filter id="sf"><feDropShadow dx="0" dy="8" stdDeviation="10" flood-color="#292929" flood-opacity="0.15"></feDropShadow></filter>
                                <clipPath id="flapClip"><path d="M0,0 L400,0 L210,118 Q200,128 190,118 Z"></path></clipPath>
                            </defs>
                            <image href="<?= $evento['portada_sobre'] ?>" x="0" y="0" width="400" height="130" preserveAspectRatio="xMidYMid slice" clip-path="url(#flapClip)" opacity="0.95"></image>
                            <path d="M0,0 L400,0 L210,118 Q200,128 190,118 Z" fill="none" filter="url(#sf)"></path>
                            <path d="M0,0 L400,0 L210,118 Q200,128 190,118 Z" fill="#292929" opacity="0.05"></path>
                            <line x1="0" y1="0" x2="195" y2="122" stroke="#292929" stroke-width="0.5" stroke-opacity="0.2"></line>
                            <line x1="400" y1="0" x2="205" y2="122" stroke="#292929" stroke-width="0.5" stroke-opacity="0.2"></line>
                        </svg>
                    </div>

                    <!-- Sello -->
                    <div class="sello-wrapper absolute left-1/2 -translate-x-1/2 rounded-full"
                         style="top: 36%; z-index: 5;">
                        <div class="sello-pulso rounded-full flex items-center justify-center relative overflow-hidden"
                             style="width: clamp(56px, 15vw, 72px); height: clamp(56px, 15vw, 72px); background: transparent; box-shadow: rgba(0, 0, 0, 0.28) 0px 8px 26px;">
                            <img src="<?= $evento['sello_sobre'] ?>" alt="" aria-hidden="true" draggable="false" class="absolute inset-0 w-full h-full object-contain">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <p class="sobre-hint">↑ Click ↑</p>
    </div>
</div>
