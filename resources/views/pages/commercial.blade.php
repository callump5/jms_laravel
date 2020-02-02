@extends('layout')
@section('page')


<section class="page-header">
    <h1 class="heading-primary--type-1">Commercial Cleaning</h1>
</section>

<section class="section-commercial"> 
    <div class="u-container">
        <div class="row">
            <div class="col-1-of-2">  
                <h3 class="heading-tertiary u-margin-small">Looking For A Cleaner</h3>
                <p class="paragraph">Whatever environment you work in, JMS cleaning has the training and experience to deal with any mess that comes their way. We've provided cleaning services for commercial printers, car garages, and even for the MoD.
                    <br><br>
                    JMS cleaners are fully trained and fully equipped to deal with any job that comes their way! Our thorough vetting system allows us to filter through and find the very best cleaners, with standards to match ours at JMS. We also DBS check our cleaners to give you the peace of mind knowing your property is in the safest of hands with JMS. 
                </p>
            </div>
            <div class="col-1-of-2">
                    <div class=" image-square image-square--1"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-services u-color-offset">
    <div class="u-container">
        <div class="row">
            <div class="col-1-of-3 section-services__service">Office Cleaning</div>
            <div class="col-1-of-3 section-services__service">Shop Cleaning</div>
            <div class="col-1-of-3 section-services__service">Salon Cleaning</div>
        </div>
        <div class="row">
            <div class="col-1-of-3 section-services__service">Kitchen Cleaning</div>
            <div class="col-1-of-3 section-services__service">Factory Cleaning</div>
            <div class="col-1-of-3 section-services__service">Other Cleaning</div>
        </div>
    </div>
</section>



<section class="section-contact-page">
    <div class="u-container u-center-text">
        <h2 class="heading-secondary u-margin-medium">Get In Touch</h2>
        <p class="paragraph u-margin-big">If you would like to arrange a quote, or would like to call up to find out more, please find either our contact information, or the contact form below and we will get back to you as quickly as possible.</p>
    
        <div class="row">
            <div class="col-1-of-2">
                <div class="section-contact-page__item u-center-text">
                    <div class="section-contact-page__item--icon-border">
                            <img src="/style/icons/phone.png" class="section-contact-page__item--icon">

                    </div>
                    <p>01702 667455</p>
                </div>
            </div>
            <div class="col-1-of-2">
                <div class="section-contact-page__item u-center-text">
                    <div class="section-contact-page__item--icon-border">
                            <img src="/style/icons/mail.png" class="section-contact-page__item--icon">

                    </div>
                    <a>info@jmscommercialcleaning.co.uk</a>
                </div>
            </div>
        </div>
    </div>
</section>

    
@endsection