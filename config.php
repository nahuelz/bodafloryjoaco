<?php
$evento = [
    'titulo'              => 'Boda Flor & Joaco',
    'titulo_evento'       => 'Boda Florencia & Joaquin',
    'novios'              => 'Flor y Joaco',
    'portada_sobre'         => './assets/img/background-sobre.png',
    'sello_sobre'         => './assets/img/sello.png',
    'fecha_inicio'        => '02/13/2027 19:00:00',
    'fecha_fin'           => '02/13/2027 23:59:00',
    'instagram_handle'    => '@bodafloryjoaco',
    'instagram_url'       => 'https://www.instagram.com/bodafloryjoaco',
    'dress_code'          => [
        'hombres' => 'Traje Elegante',
        'mujeres' => 'Vestido Largo',
    ],
    'form_asistencia'     => 'https://docs.google.com/forms/d/e/1FAIpQLSe9YQMx7pJ7roFnvzgB353ytHGRUEOI_339DoK6--8r9jtZwg/viewform?usp=sf_link',
    'form_canciones'      => 'https://music.youtube.com/playlist?list=PLS_TOPoBNB80&jct=KHPLNcBvO8bdS8h9Z6rEcw',

    'ceremonia' => [
        'fecha'  => '13 de Febrero',
        'hora'   => '18:30 hs',
        'lugar'  => 'Lago Polo Sur',
        'ciudad' => 'Olavarría, Buenos Aires.',
        'mapa'   => 'https://maps.app.goo.gl/Vv8RXsFfsY9x9nB6A',
    ],

    'fiesta' => [
        'horario' => 'Después de la ceremonia',
        'lugar'  => 'Salón Polo Sur',
        'ciudad' => 'Olavarría, Buenos Aires.',
        'mapa'   => 'https://maps.app.goo.gl/Vv8RXsFfsY9x9nB6A',
    ],

    'galeria' => [
        './assets/img/1.jpg',
        ['src' => './assets/img/2.jpg', 'pos' => '75% center'],
        './assets/img/3.jpg',
        ['src' => './assets/img/4.jpg', 'pos' => '10% center'],
        './assets/img/5.jpg',
        ['src' => './assets/img/6.jpg', 'pos' => '85% center'],
        ['src' => './assets/img/7.jpg', 'pos' => '87% center'],
        './assets/img/8.jpg',
    ],

    'cbu' => [
        'pesos' => [
            'titular' => 'Joaquin German Perez',
            'cbu'     => '0000003100076531932031',
            'alias'   => 'bodafyj.mp',
            'dni'     => '38825341',
            'banco'   => 'Mercado Pago',
        ],
        'dolares' => [
            'titular' => 'Joaquin German Perez',
            'cbu'     => '00701101-31004010286577',
            'alias'   => 'bodafyj.usd',
            'cuil'    => '20388253410',
            'banco'   => 'Banco Galicia',
        ],
    ],

    'alojamientos' => [
        ['nombre' => 'GUÍA DE HOSPEDAJES PARA INVITADOS', 'info' => '', 'url' => 'https://docs.google.com/spreadsheets/d/1f41qBeH3FwGa_5cnqoe-coE35_O7C6fp/edit?gid=1035360929#gid=1035360929'],
    ],

    'traslados' => [
        ['nombre' => 'Eco Remis', 'info' => '2284 425656', 'url' => 'https://play.google.com/store/apps/details?id=com.maker.apper.ecoremis&hl=es_AR'],
        ['nombre' => 'UBER', 'info' => '', 'url' => 'https://play.google.com/store/apps/details?id=com.ubercab&hl=es_AR'],
    ],

    'calendarios' => [
        'google'        => 'https://calendar.google.com/calendar/render?action=TEMPLATE&dates=20261122T220000Z%2F20261123T025900Z&text=Boda%20de%20Prueba&text=Boda%20de%20Prueba',
        'outlook'       => 'https://outlook.live.com/calendar/0/action/compose?allday=false&enddt=2026-11-23T02%3A59%3A00Z&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2026-11-22T22%3A00%3A00Z&subject=Boda%20de%20Prueba',
        'microsoft365'  => 'https://outlook.office.com/calendar/action/compose?allday=false&enddt=2026-11-23T02%3A59%3A00Z&path=%2Fcalendar%2Faction%2Fcompose&rru=addevent&startdt=2026-11-22T22%3A00%3A00Z&subject=Boda%20de%20Prueba',
        'apple'         => 'data:text/calendar;charset=utf-8,BEGIN%3AVCALENDAR%0AVERSION%3A2.0%0ABEGIN%3AVEVENT%0AURL%3AEvento%0ADTSTART%3A20261122T220000Z%0ADTEND%3A20261123T025900Z%0ASUMMARY%3ABoda%20de%20Prueba%0AEND%3AVEVENT%0AEND%3AVCALENDAR',
        'yahoo'         => 'https://calendar.yahoo.com/?dur=&et=20261122T235900Z&st=20261122T190000Z&title=Boda%20de%20Prueba&v=60',
    ],
];
