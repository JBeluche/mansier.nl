

@extends('layout.main')
@include('layout.head')
@section('title', 'Feesten')
@section('base', '/3_Projects/mansier.nl/public/Feesten')

<header class="header header__feesten"> 

    @include('layout.navbar')

</header>

<main class="feesten-main">

    <div class="feesten-banner croisantone">
        <h2>Feesten en partijen</h2>
    </div>
    <div class="intro-container robotoregular">
        <p>Zalencentrum Mansier heeft voor elke feestelijke gelegenheid een passend arrangement, of het nu
                een bruiloft of receptie is, wij verzorgen het voor u.<br><br>
                
                Daarnaast zijn we gespecialiseerd in themafeesten voor personeelsverenigingen,
                buurtverenigingen, sportverenigingen, familie- of vriendengroepen.</p>
    </div>

    <div class="party-container party-container-reverse-column">
        <div class="party-container__left ">
            <h2 class="party-title croisantone">Uw bruiloft bij Mansier</h2>
            @include('svg.party-decoration')
            <p class="party-text robotoregular">
                    Zalencentrum Mansier kan, door hun jarenlange ervaring, uw bruiloft tot een onvergetelijk feest maken. 
                    Doordat onze zaal op te delen is, creëren we gezelligheid aangepast voor uw gezelschap,
                    of deze nou klein of groot is.<br><br>
                    
                    Ons standaard bruiloft- arrangement bestaat uit:	<br><br>
                    
                    - Koffie met gebak<br>
                    - 3 warme en 3 koude hapjes<br>
                    - Consumpties<br>
                    
                    Voor een All-In prijs van slechts € 23.00 p/p.<br><br>
                    
                    Maar misschien heeft u zelf een idee over hoe uw receptie eruit moet zien, maak het kenbaar aan ons en dan 
                    gaan we samen kijken wat de mogelijkheden zijn.<br><br>
                    
                    Neem, geheel vrijblijvend, contact met ons op voor de verschillende mogelijkheden.
            </p>
        </div>
        <div class="party-container__right wedding-image">
            &nbsp;
        </div>

    </div>
    <div class="party-container">
            
                <div class="party-container__right reception-image">
        
                </div>
                <div class="party-container__left ">
                        <h2 class="party-title croisantone">Uw receptie bij Mansier</h2>
                        @include('svg.party-decoration')
                        <p class="party-text robotoregular">
                                Ook voor uw receptie kunt u natuurlijk bij ons terecht. Zalencentrum Mansier biedt u de volgende standaard mogelijkheden:<br><br>
    
                                Receptie 11/2 uur. Prijs € 12.00 p.p<br>
                                - Koffie met gebak
                                - 3 x hapjes
                                - Consumpties<br><br>
                                
                                Koffietafel. Prijs: € 13.00 p.p<br>
                                - Luxe broodjes
                                - Vleeswaren en kaas
                                - Koffie, thee, jus d'orange
                                - Soep
                                - Kroket<br><br>
                                
                                Maar misschien heeft u zelf een idee over hoe uw receptie eruit moet zien, maak het kenbaar aan ons en dan gaan we samen kijken wat de mogelijkheden zijn.<br><br>
                                
                                Neem, geheel vrijblijvend, contact met ons op voor de verschillende mogelijkheden.
                        </p>
                    </div>
    </div>
    <div class="party-container party-container-without-img">
        
            {{--THIS IS THE RIGHT DECORATION OF RED FOOTER BANER--}}
            <div class="footer__red-section--decoration-1 footer__red-section--decoration decoration-last-party">
                    @include('svg.footer-decoration')
                </div>

            <div class="party-container__left">
                    <h2 class="party-title croisantone">Uw thema feesten, 
                        verzorgt door Mansier</h2>
                    @include('svg.party-decoration')
                    <p class="party-text robotoregular">
                        Zalencentrum Mansier kan, door hun jarenlange ervaring, uw bruiloft tot een onvergetelijk feest maken. 
                        Doordat onze zaal op te delen is, creëren we gezelligheid aangepast voor uw gezelschap,
                        of deze nou klein of groot is.<br><br>
                        
                        Ons standaard bruiloft- arrangement bestaat uit:	<br><br>
                        
                        - Koffie met gebak<br>
                        - 3 warme en 3 koude hapjes<br>
                        - Consumpties<br>
                        
                        Voor een All-In prijs van slechts € 23.00 p/p.<br><br>
                        
                        Maar misschien heeft u zelf een idee over hoe uw receptie eruit moet zien, maak het kenbaar aan ons en dan 
                        gaan we samen kijken wat de mogelijkheden zijn.<br><br>
                        
                        Neem, geheel vrijblijvend, contact met ons op voor de verschillende mogelijkheden.
                    </p>
                </div>

                
            {{--THIS IS THE RIGHT DECORATION OF RED FOOTER BANER--}}
            <div class="footer__red-section--decoration-2 footer__red-section--decoration decoration-last-party">
                    @include('svg.footer-decoration')
                </div>
        
    </div>

</main>