
<header class="clearfix shadow">
    <nav class="navbar topnav fixed-top navbar-expand-lg scrolling-navbar">
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Commercial Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tenancy Cleaning</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@push('footer-scripts')
<script type="text/javascript">

$(document).ready(function() {
        // Transition effect for navbar 
        $(window).scroll(function() {
          // checks if window is scrolled more than 500px, adds/removes solid class
          if($(this).scrollTop() > 500) { 
              $('.navbar').addClass('solid');
              $('.topnav').addClass('solid-b');
          } else {
              $('.navbar').removeClass('solid');
              $('.topnav').removeClass('solid-b');
          }
        });
});

</script>
@endpush
<!--

<div class="social-header__contact">
    <div class="u-flex-row container">
        <div>
            <a href="mailto:info@jmscommercialcleaning.co.uk" class="social-header__link">info@jmscommercialcleaning.co.uk</a>
        </div>
        <div class="social-header__contact-socials">
            <a href="tel:01702667455" class="social-header__link">01702 667455</a>
            <a href="/contact.html" class="social-header__link">9.00 - 6.00</a>
        </div>
    </div>
</div>



<div class="navigation">
    <div class="u-flex-row container">
        <div class="navigation__logo-circle">
            <a href="/" class="navigation__logo-circle--link">
                <img src="/logo/jms-original-logo.png" alt="JMS Logo" class="navigation__logo-circle--logo">
            </a>
        </div>
        <nav class="navigation__nav">
            <a href="/" class="navigation__nav--link {{ Request::is('/') ? 'active' : 'uh' }}">Home</a>
            <a href="/about" class="navigation__nav--link {{ Request::is('about') ? 'active' : 'uh' }}">About</a>
            <a href="/commercial-cleaning" class="navigation__nav--link {{ Request::is('commercial-cleaning') ? 'active' : 'uh' }}">Commerical Cleaning</a>
            <a href="/end-of-tenancy" class="navigation__nav--link {{ Request::is('end-of-tenancy') ? 'active' : 'uh' }}">End Of Tenancy</a>
            <a href="/blog" class="navigation__nav--link {{ Request::is('blog*') ? 'active' : 'uh' }}">Cleaning Tips</a>
            <a href="/contact" class="navigation__nav--link {{ Request::is('contact') ? 'active' : 'uh' }}">Contact</a>
        </nav>
    </div>
</div> -->