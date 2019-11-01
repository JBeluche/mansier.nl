

@extends('layout.main')

@include('layout.head')
@section('title', 'Hoofdmenu')
@section('base', '/3_Projects/mansier.nl/public/Hoofdmenu')


<header class="header header__menu"> 

    @include('layout.navbar')

</header>
<main class="main-menu">
<div class="menu__container">
    <img src="img/hoofdmenu.jpg" alt="Picture of the main menu" class="menu__img"> 
</div>

</main>