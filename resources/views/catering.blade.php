

@extends('layout.main')
@include('layout.head')
@section('title', 'Catering')
@section('base', '/3_Projects/mansier.nl/public/Catering')

<header class="header header__buffet">

    @include('layout.navbar')

</header>

<main class="buffet-main">

    <div class="feesten-banner croisantone">
        <h2>Catering van Mansier</h2>
    </div>
    <div class="intro-container robotoregular">
        <p>
                Voor elk feest of evenement op locatie kan Mansier de catering voor u verzorgen.<br>
                
                Wij verzorgen overheerlijke bufetten.<br>
                Kijk hieronder voor onze buffeten en prijsen.<br><br>
                
                Neem vrijblijvend contact met ons op en vraag naar de mogelijkheden.<br><br>
                
                U kunt hiervoor bellen met 0529-471456
                
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