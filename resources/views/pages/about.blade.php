@extends('layout')

@push('meta')
<title>About Us | JMS Commercial Cleaning | Essex</title>

<meta name="title" content="About Us | JMS Commercial Cleaning | Essex">
<meta name="description" content="Based in Southend, Essex, JMS Commercial Cleaning is a reliable cleaning company that has built up a solid reputation, purely built on trust in Southend, Basildon, and surrounding areas. We pride ourselves on our reliable, consistent and friendly commercial cleaning service for our customers.
"/>
@endpush
@section('page')

<section class="page-header">
    <h1 class="heading-primary--type-1">About Us</h1>
</section>


<section class="section-about u-section-padding">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="">
                    <div class="image-square image-square--3"></div>
                </div>
            </div>
            <div class="col-6 u-padding-left">
                <h3 class="heading-tertiary u-margin-small">Why Choose A JMS Cleaner</h3>
                <p class="paragraph u-margin-small">Based in Southend, Essex, JMS Commercial Cleaning is a reliable cleaning company that has built up a solid reputation, purely built on trust in Southend, Basildon, and surrounding areas. We pride ourselves on our reliable, consistent and friendly commercial cleaning service for our customers.
                </p>
                <ul class="tick-list">
                    <li class="tick-list--item"><p>Cleaners are stocked with every tool they might need to get the job done.</p></li>
                    <li class="tick-list--item"><p>Having high standards at JMS we only higher cleaners with work ethics that match.</p></li>
                    <li class="tick-list--item"><p>With vetted, DBS checked and insured cleaners, you will know you are in safe hands with JMS.</p></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="u-color-offset u-section-padding">            
    <div class="container">
        <div class="row">
            <div class="col-6">
                <button type="button" class="collapsible">Cleaning Services<span class="collapsible__toggle">+</span></button>
                <div class="collapsible__content">
                    <p class="paragraph">We know how time-consuming cleaning can be. We also know how a growing business might not have the time to pay attention to the areas around the office that are starting to look neglected. We aim to take away the stress that by by keeping your office nice and clean.</p>
                </div>
        
                <button type="button" class="collapsible">Getting Started <span class="collapsible__toggle">+</span></button>
                <div class="collapsible__content">
                    <p class="paragraph">To get started either give us a call on 01702 667455 or fill out the contact form and we will be in touch to arrange a free, non-obligatory quotation. Alongside the quote we will provide our plan to tackle the mess thats plauging your property.</p>
                </div>
        
                <button type="button" class="collapsible">Payment Process & Pricing<span class="collapsible__toggle">+</span></button>
                <div class="collapsible__content">
                    <p class="paragraph">We price up our jobs by providing a free, non-obligatory quotation. We believe this gives you the most value for money as we can create a tailored cleaning plan that meets the needs of your premises. Payment can be made after each clean, week or month.</p>                        
                </div>
            </div>
            <div class="col-6">
                    <div class="image-square"></div>
            </div>
        </div>
    </div>
</section>        

@include('partials/contact-strip')
    
@endsection
