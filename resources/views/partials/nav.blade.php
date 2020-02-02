
<header>
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
    </div>
</header>
