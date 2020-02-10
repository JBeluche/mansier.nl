

@extends('layout.main')
@include('layout.head')
@section('title', 'Buffet')
@section('base', '/3_Projects/mansier.nl/public/Buffet')

<header class="header header__buffet">

    @include('layout.navbar')

</header>

<main class="buffet-main">

    <div class="feesten-banner croisantone">
        <h2>Bufetten van Mansier</h2>
    </div>
    <div class="intro-container robotoregular">
        <p>We verzorgen heerlijke, uitgebreide bufetten, waarin vooral de kwaliteit- prijsverhouding voorop staat.
            <br><br>
            Heerlijke bufetten voor personeelsverenigingen, buurtverenigingen, sportverenigingen, familie- of
            vriendengroepen. <br><br>
            Kijk hieronder naar onze buffeten. U zult zien dat er vast een buffet
            voor u bij zit. <br><br>
            Neem, geheel vrijblijvend, contact met ons op voor de verschillende mogelijkheden.
        </p>
    </div>


    <div class="buffet-container">

        @include('buffets.buffet-1')
        @include('buffets.buffet-2')
        @include('buffets.buffet-3')
        @include('buffets.buffet-4')
        @include('buffets.buffet-5')
        @include('buffets.buffet-6')

    </div>



</main>