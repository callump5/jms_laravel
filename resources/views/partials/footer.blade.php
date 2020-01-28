
        <div class="u-color-contact">
            <div class="u-container u-flexy-row">
                <section class="section-contact">
                    <h2 class="heading-tertiary heading-tertiary--type-2 u-center-left u-margin-small">Get A Quote</h2>
                    @include('partials.contact')
                </section>

                <section class="section-testimonial">
                    <h2 class="heading-tertiary u-center-left u-margin-medium">Testimonials</h2>

                    <div class="section-testimonial__testimonial">
                        <p class="section-testimonial__testimonial--text paragraph">"JMS have been cleaning 2 of my
                            office for some time now. We always come into work and the place is smelling beautiful and
                            everything organised neatly! Would always recommend JMS"</p>
                        <p class="section-testimonial__testimonial--author paragraph">Liv Harris</p>
                        <p class="section-testimonial__testimonial--position paragraph">June. 22, 2018</p>
                    </div>
                </section>
            </div>
        </div>
        <footer class="footer">
            <section class="u-container">
                <div class="row">

                    <div class="col-1-of-3">
                        <h3 class="heading-tertiary u-margin-small heading-tertiary--type-3">Quick Links</h3>
                        <a href="/" class="footer--link">Home</a>
                        <a href="/about.html" class="footer--link">About</a>
                        <a href="/commercial-cleaning.html" class="footer--link">Commercial Cleaning</a>
                        <a href="/end-of-tenancy.html" class="footer--link">End Of Tenancy</a>
                        <a href="/contact.html" class="footer--link">Contact Us</a>
                    </div>
                    <div class="col-1-of-3">
                        <h3 class="heading-tertiary u-margin-small heading-tertiary--type-3">Get In Touch</h3>
                        <p class="footer--text">JMS Commercial Cleaning</p>
                        <p class="footer--text">01702 667455</p>
                        <p class="footer--text">info@jmscommercialcleaning.co.uk</p>
                    </div>
                    <div class="col-1-of-3">
                        <h3 class="heading-tertiary u-margin-small heading-tertiary--type-3">Business Hours</h3>
                        <p class="footer--text">Monday - Friday</p>
                        <p class="footer--text">9.00 - 6.00</p>
                    </div>
                </div>
            </section>
        </footer>

        @stack('footer-scripts')
</body>


</html>