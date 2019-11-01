    {{--------------------------------------- FOOTER ---------------------------------------}}
    <footer class="footer">

        {{--GOOGLE MAPS--}}
        <a target="_blank"
            href="https://www.google.nl/maps/place/Zalencentrum+Mansier/@52.5330308,6.309904,16z/data=!4m5!3m4!1s0x47c7e206d8aa3cc5:0x53611e1148d35e4e!8m2!3d52.5320832!4d6.3122477"
            class="footer__map--link">
            <div class="footer__map">
            </div>
        </a>

        {{--HERE IS THE CONTENT ABOUT: CONTACT, SOCIAL AND OPENINGHOURS --}}
        <div class="footer__red-section" id="contact" name="contact">


            {{--THIS IS THE RIGHT DECORATION OF RED FOOTER BANER--}}
            <div class="footer__red-section--decoration-1 footer__red-section--decoration">
                @include('svg.footer-decoration')
            </div>

        <div class="footer__red-section--content-wrapper">

        {{--CONTACT--}}
            <div class="footer__red-section--contact">

                <h2 class="footer__red-section--contact-title robotobold">Contact</h2>
                <ul class="robotoregular">
                    <br>
                    <li>0529-471456</li>
                    <li>zalencentrummansier<br>
                        &#64;hetnet.nl</li><br>
                    <li> Parallelstraat 2,<br>
                        7722 TD,<br>
                        Oudleusen
                    </li>
                </ul>

            </div>

            
        {{--SOCIAL MEDIA--}}
            <div class="footer__red-section--social">

                <h2 class="footer__red-section--social-title robotobold">Volg ons op social media!</h2>
                <div class="anomaly"><br>&nbsp;<br>&nbsp;</div>
                <div class="footer__red-section--social--icon-wrap">
                    <a target="_blank" href="https://www.facebook.com/cafemansier/">@include('svg.facebook-icon')</a>

                    <a target="_blank" href="https://www.facebook.com/cafemansier/">@include('svg.instagram-icon')</a>
                </div>
                <hr class="footer__red-section--social-line">

            </div>

            
        {{--OPENINGHOURS--}}
            <div class="footer__red-section--openninghours">
                
                <div class="openinghours__titlebox footer__red-section--openinghours__titlebox croisantone"><h3>Openingstijden</h3></div>
                <div class="openinghours__contentbox footer__red-section--openinghours__contentbox">
                    <div class="openinghours__contentbox--days robotoregular">
                        <ul>
                            <li>Maandag</li>
                            <li>Dinsdag</li>
                            <li>Woensdag</li>
                            <li>Donderdag</li>
                            <li>Vrijdag</li>
                            <li>Zaterdag</li>
                            <li>Zondag</li>
                        </ul>
                    </div>
                    <div class="openinghours__contentbox--line"></div>
                    <div class="openinghours__contentbox--hours robotobold">
                        <ul>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                            <li>11:00 - 23:00</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

            {{--THIS IS THE RIGHT DECORATION OF RED FOOTER BANER--}}
            <div class="footer__red-section--decoration-2 footer__red-section--decoration">
                @include('svg.footer-decoration')
            </div>
        </div>

        <div class="footer__copyright-section">
            <p class="footer__copyright-section-text robotoregular">&copy; 2019 mansier.nl &#45; Zalencentrum Mansier</p>
        </div>

    </footer>
    
@include('layout.popup-reserveren')


</div>{{--End of page container--}}
</body>

<script>

    //var url = window.location.pathname;
    //var id = url.substring(url.lastIndexOf('/') + 1);
    //var elmnt = document.getElementById(id);
    //elmnt.scrollIntoView();  

    var myVar;

    function loader() {
    myVar = setTimeout(showPage, 200);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";    
    document.getElementById("loader-wrapper").style.display = "none";
    document.getElementById("body").style.display = "block";
    }

</script>



</html>