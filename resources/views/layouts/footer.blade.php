<!-- logo -->
    <div class="top-logo">
    
    </div>
    
    <!-- black menu -->
    <div id="blackmenu-top">
        <div class="blackmenu">
            <div class="blackmenu-inline">
                <a href="{{ url('/') }}">
                    <h4 style="color:white;">Home</h4>
                </a>
                <div class="blackmenu-inline-active">
                
                </div>
                <div class="blackmenu-inline-active-sparate-left">
                
                </div>
                <div class="blackmenu-inline-active-sparate-right">
                
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="#">
                        <h4 style="color:white;">Product</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('automotive') }}">
                        <h4 style="color:white;">Automotive</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('riders') }}">
                        <h4 style="color:white;">Riders</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('interior') }}">
                        <h4 style="color:white;">Interior Design</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('video') }}">
                        <h4 style="color:white;">Video</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="#">
                        <h4 style="color:white;">Gallery</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="#">
                        <h4 style="color:white;">Magazine</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('about/about-us') }}">
                        <h4 style="color:white;">About Us</h4>
                    </a>
                </div>
            </div>
            <div class="blackmenu-inline">
                <div class="blackmenu-button">
                    <a href="{{ url('about/contact-us') }}">
                        <h4 style="color:white;">Contact Us</h4>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Socmed -->
    <div id="socmed-bottom">
        <div class="socmed">
            <div class="socmed-inline-fb">
            </div>
            <div class="socmed-inline-youtube">
            </div>
            <div class="socmed-inline-insta">
            </div>
            <div class="socmed-inline-twitter">
            </div>
            <div class="socmed-inline-wa">
            </div>
        </div>
    </div>
    
</body>
<script src="{{ asset('js/jquery.parallax.js')}}"></script>
<script src="{{ asset('js/share.js') }}"></script>
<script>
$('#scene').parallax();
</script>
</html>
