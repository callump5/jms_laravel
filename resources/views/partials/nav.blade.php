
<header class="clearfix shadow">
    <nav class="navbar solid-b topnav fixed-top navbar-expand-lg scrolling-navbar">
        <div class="container">
            
        <div>
            <a href="mailto:info@jmscommercialcleaning.co.uk" class="social-link hover">info@jmscommercialcleaning.co.uk</a>
        </div>
        <div>
            <a href="tel:01702667455" class="social-link hover">01702 667455</a>
            <a href="/contact.html" class="social-link hover">9.00 - 6.00</a>
        </div>
        </div>
    </nav>
    <nav class="navbar bottom-nav fixed-top navbar-expand-lg scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#"><img class="logo" src="/logo/jms-original-logo.png" alt="JMS Logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('about') ? 'active' : '' }}" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('commercial-cleaning') ? 'active' : '' }}" href="/commercial-cleaning">Commercial Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('end-of-tenancy-cleaning') ? 'active' : '' }}" href="/end-of-tenancy-cleaning">Tenancy Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('blog*') ? 'active' : '' }}" href="/blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link  {{ Request::is('contact') ? 'active' : '' }}" href="/contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>


@if(! Request::is('/') )
    @push('footer-scripts')

    <script type="text/javascript">
        var coll = $(".collapsible");
        
        coll.on("click", function() {
            
            this.classList.toggle("collapsible__active");

            var content = this.nextElementSibling;
            
            if (content.style.display == "block") {
                content.style.display = "none";
                $(this).find("span").text("+")
            } else {
                $(".collapsible__content").css("display", "none");
                $('.collapsible').each(function(){
                    $(this).find("span").text("+");
                    $(this).removeClass("collapsible__active");
                });
                content.style.display = "block";
                $(this).find("span").text("-");
                $(this).addClass("collapsible__active");
            }
        });
    </script>
    @endpush
@endif