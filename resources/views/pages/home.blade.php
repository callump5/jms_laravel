@extends('layout')

@section('page')

@include('partials/landing')


    <section class="home__about u-section-padding">
        <div class="container">
            <h2 class="heading-secondary u-center-text">About Us</h2>
            <p class="paragraph u-center-text">Its quick to forget the benefits a clean and healthy working
                environment can bring. Stop putting it off and give us a call today so we can start putting the
                smiles back on your face as you walk into work!</p>    

            <div class="row u-padding-top">
                <div class="col-6">
                    <div  class="home__images--image-1"></div>
                    <div  class="home__images--image-2"></div>
                </div>
                <div class="col-6 u-flex-vert-center u-padding-left">
                    <h3 class="heading-tertiary">Who We Are</h3>
                    <p class="paragraph u-margin-small">Based in Southend, Essex, JMS Commercial Cleaning is a reliable cleaning company that has built up a solid reputation, purely built on trust in Southend, Basildon, and surrounding areas. We pride ourselves on our reliable, consistent and friendly commercial cleaning service for our customers.</p>
                    <a href="/" class="btn">Read More</a>      
                </div>
            </div>

                 
        </div>
    </section>

    <section class="section-services u-color-offset">
        <div class="u-container">
            <div class="u-center-text">
                <h2 class="heading-secondary">Our Service</h2>
                <p class="paragraph u-margin-big u-margin-align">No matter which industry you are in, you will probably find yourself needing a cleaner, whether it's for a routine clean to keep your office nice and clean, or just a once-off deep clean, to help brighten it up after the busy period! Whatever situation you find yourself in, JMS has the solution.</p>
                
                <div class="service-circle">
                    
                    <div class="service-circle__child-circle">
                        <div class="service-circle__image">
                            <div class="image_circles__services">
                                <p class="paragraph service-circle__services--text-1">Kitchen Cleaning</p>
                                <img src="/style/icons/kitchen.png" alt="" class="service-circle__services--image-1">
                        
                                <p class="paragraph service-circle__services--text-2">Bathroom Cleaning</p>
                                <img src="/style/icons/toilet.png" alt="" class="service-circle__services--image-2">
                        

                                <p class="paragraph service-circle__services--text-3">Floor Cleaning</p>
                                <img src="/style/icons/mopping.png" alt="" class="service-circle__services--image-3">
                                
                                
                                <p class="paragraph service-circle__services--text-4">Interior Windows</p>
                                <img src="/style/icons/window.png" alt="" class="service-circle__services--image-4">
                                
                                
                                <p class="paragraph service-circle__services--text-5">Dusting & Polishing</p>
                                <img src="/style/icons/bucket.png" alt="" class="service-circle__services--image-5">
                                
                                
                                <p class="paragraph service-circle__services--text-6">Bin Changing</p>
                                <img src="/style/icons/bin.png" alt="" class="service-circle__services--image-6">

                            </div>
                        </div>  
                    </div>
                </div>


            </div>
        </div>
    </section>


    <section class="section-why-choose">
        <div class="u-container u-center-text">

            <h3 class="heading-secondary u-margin-medium">Why Choose Us</h3>

            <p class="paragraph u-margin-big">
                    We offer several cleaning services throughout Essex. So if you are a landlord or tenant in need or an end of tenancy clean, or is your office starting to look dusty and in need of an office clean? Whatever it is you might need, give us a call on 01702 667455 and we can arrange a free non-obligatory quote to get your property sparkling again!</p>

            <div class="row">
                <div class="col-1-of-2">
                    <div class="image-circle-solo">
                        <p class="paragraph image-circle-solo__text">JMS cleaners are fully trained and fully equipped to deal with any job that comes their way! Our thorough vetting system allows us to filter through and find the very best cleaners, with standards to match ours at JMS. We also DBS check our cleaners to give you the peace of mind knowing your property is in the safest of hands with JMS</p>
                    </div>
                </div>
                <div class="col-1-of-2">
                    <div class="image-circle-solo image-circle-solo--2">
                    
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--
    <div>Icons made by <a href="https://www.flaticon.com/authors/nhor-phai" title="Nhor Phai">Nhor Phai</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/kiranshastry" title="Kiranshastry">Kiranshastry</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div><div>Icons made by <a href="https://www.flaticon.com/authors/mynamepong" title="mynamepong">mynamepong</a> from <a href="https://www.flaticon.com/"     title="Flaticon">www.flaticon.com</a></div>
-->

@endsection