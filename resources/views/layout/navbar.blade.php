{{--NAVIGATION--}}
<div class="header__navigation center robotolight">
    <a href="/mansier.nl/public/" class="header__navigation--logo croisantone"><h1 class="header__navigation--logo croisantone">Mansier</h1></a>
    
        <a href="/mansier.nl/public/" class="header__navigation--item">Home</a>
    
        <a  href="/mansier.nl/public/events" 
           {{-- onClick="
                    var isFirefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
                    if(navigator.userAgent.toLowerCase().indexOf('firefox') > -1){                       
                        var id = ('events'); 
                        window.location = '#events'; 
                        window.location.reload(true); 
                   }"--}}

            class="header__navigation--item">Evenementen</a>
    
        {{--<a href="#" class="header__navigation--item">Over ons</a>--}}
    
        <a href="/mansier.nl/public/contact" {{--onClick="var id = ('contact'); window.location = '#contact'; window.location.reload(true);"--}} class="header__navigation--item">Contact</a>
    
        <div class="header__navigation--line header__navigation--item"></div>
    
        <a href="/mansier.nl/public/feesten" class="header__navigation--item">Feesten en Partijen</a>
    
        <a href="/mansier.nl/public/buffet" class="header__navigation--item">Buffet</a>
    
        <a href="/mansier.nl/public/catering" class="header__navigation--item">Catering</a>
    
        {{--<a href="#" class="header__navigation--item">Onze zalen</a>--}}
    
        <div class="header__navigation--line header__navigation--item"></div>
    
        <ul class="dropdown-menu header__navigation--item">
            <li><input class="btn-main dropdown-menu__btn font-size-nav btn-main-link-1 " type="button" value="Menu">
                <ul class="hidden">
                    <hr class="dropdown-menu__line">
                    <li class=""><a href="/mansier.nl/public/afhaal"><input
                                class="btn-main btn-main-link-2 font-size-nav" type="button" value="Afhaal Menu"></a></li>
                    <hr class="dropdown-menu__line">
                    <li> <a href="/mansier.nl/public/hoofdmenu"> <input
                                class="btn-main font-size-nav btn-main-link-2" type="button" value="Hoofdmenu"></a></li>
                </ul>
            </li>
        </ul>
    
        <a href="#popup" class="header__navigation--item "> <input class="btn-main font-size-nav btn-main-link-1"
                type="button" value="Reserveren"></a>
    
                <div class="navigation-popup">
                    <input type="checkbox" class="navigation-popup__checkbox" id="navi-toggle">
            
                    <label for="navi-toggle" class="navigation-popup__button">
                        <span class="navigation-popup__icon">&nbsp;</span>
                    </label>
                    
                    <div class="navigation-popup__background">&nbsp;</div>
            
                    <nav class="navigation-popup__nav">
                        <ul class="navigation-popup__list">
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/" {{-- onClick="var id = ('events'); window.location.reload(true);"--}} class="navigation-popup__link"> Home</a></li>
                                <li class="navigation-popup__item"><a  href="/mansier.nl/public/events" {{-- onClick="var id = ('events'); window.location = '#events'; window.location.reload(true);"--}} class="navigation-popup__link">Evenementen</a></li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/contact" class="navigation-popup__link"{{-- onClick="window.location = '#contact'; window.location.reload(true);"--}}>Contact</a></li>
                                <li class="navigation-popup__item navigation-popup__line">&nbsp;</li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/feesten" class="navigation-popup__link">Feesten <br> en Partijen</a></li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/buffet" class="navigation-popup__link">Buffet</a></li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/catering" class="navigation-popup__link">Cattering</a></li>
                                <li class="navigation-popup__item navigation-popup__line">&nbsp;</li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/afhaal" class="navigation-popup__link">Afhaalmenu</a></li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/hoofdmenu" class="navigation-popup__link">Hoofdmenu</a></li>
                                <li class="navigation-popup__item"><a href="/mansier.nl/public/#popup" class="navigation-popup__link">Reserveren</a></li>
                        </ul>
                    </nav>
                </div>
    </div>