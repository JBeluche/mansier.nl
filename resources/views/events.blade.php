


@extends('layout.main')

@include('layout.head')
@section('title', 'Events')
@section('base', '/3_Projects/mansier.nl/public/events')

    {{--------------------------------------- HEADER ---------------------------------------}}
    <header class="header header-events">


        @include ('layout.navbar')

     

    </header>
    <main>

        {{--------------------------------------- SECTION EVENTS ---------------------------------------}}
        <section class="events-monthly-section" id="events" name="events" style="padding-top:6rem;">
            <div class="events-monthly-section">
                        <img src="img/maandelijkse-events-2.png" alt="Picture of the header events" class="monthly-event__header">
                    
<div class="buffet-container monthly-events-container">

@include('monthly-events.event-1')        
@include('monthly-events.event-2')        
@include('monthly-events.event-3')

</div>
</div>

</section>
    {{-- Monthy event 1 
    <div class="row events__monthly-event">
        <div class="col-2-of-2">
            <div class="events__monthly-event-1">
                <h1 class="events__monthly-event--title croisantone">Bingo Avond!</h1>
                <p class="events__monthly-event--date croisantone">Elke maandag v.a. 20.00 uur </p>
                <div class="events__monthly-event--image">
                    <img src="img/bingo_warm-min.jpg" alt="Photo Bingo Avond"
                        class="events__monthly-event--image-1">
                </div>
            </div>
        </div>
    </div>

    {{-- Monthy event 2
    <div class="row events__monthly-event">
        <div class="col-2-of-2 col-to-right">
            <div class="events__monthly-event-2">
                <h1 class="events__monthly-event--title croisantone">Countrydansen!</h1>
                <p class="events__monthly-event--date croisantone">Elke woensdag v.a. 19.30 uur </p>
                <div class="events__monthly-event--image">
                    <img src="img/bingo_warm-min.jpg" alt="Photo Countrydansen Avond"
                        class="events__monthly-event--image-1">
                </div>
            </div>
        </div>
    </div>

    {{-- Monthy event 3 
    <div class="row events__monthly-event">
        <div class="col-2-of-2">
            <div class="events__monthly-event-3">
                <h1 class="events__monthly-event--title croisantone">Kaart Marathon<br>Klaverjassen!</h1>
                <p class="events__monthly-event--date croisantone">Eerst en derde zaterdag van de maand </p>
                <div class="events__monthly-event--image">
                    <img src="img/playing-cards_InPixio.jpg" alt="Photo van Kaarten met Oude Film Filter"
                        class="events__monthly-event--image-1">
                </div>
            </div>
        </div>
    </div>--}}

    <section class="events special-events-section" id="events" name="events">

        <img src="img/special-event-2.png" alt="Picture of the header events" class="coming-event__header">

    {{--HERE IS THE CONTENT ABOUT: COMMING EVENTS 
    <div class="events__title--container">
        <div class="events__title--svg-board">
            @include('svg.board')
        </div>
        <h2 class="events__title--text croisantone">Aankomende <br> Evenementen</h2>
    </div>--}}


    {{--NO EVENTS TEXT--}}
    <div class="row events__coming-event full-row">
        <div class="col-2-of-2 disable-margin-right">
            <h1 class="events__coming-event--no-event-header croisantone">
                Helaas zijn er geen aankomende evenementen bekend!
            </h1>
        </div>
        {{--
        <div class="col-1-of-2 event-column-break">
            <img src="img/event-1.jpg" alt="Photo 3" class="events__coming-event--image events__event--image-1">
        </div>

        <div class="col-1-of-2 event-column-break event-column-break--1">
            <div class="events__coming-event--container croisantone">

                <div class="events__coming-event--svg-border-top-decoration">
                    @include('svg.border-top-decoration')
                </div>

                <h2 class="events__coming-event--title ">Classic Toerrit</h2>

                <div class="events__coming-event--text-wrap">
                    <div class="events__coming-event--text events__coming-event--text-left">
                        Datuum <br>
                        Tijd: <br>
                        <br>
                        Adres: <br>
                        <br>
                        <br>
                        Prijs <br> <br>
                    </div>
                    <div class="events__coming-event--text events__coming-event--text-right">
                        15-September-2019 <br>
                        Tussen 11:00 en 12:00 <br>
                        <br>
                        Parallestraat 2 <br>
                        Oudleusen <br>
                        <br>
                        €5.- per auto, motor <br> of vrachtwagen <br>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>

</section>
    </main>

