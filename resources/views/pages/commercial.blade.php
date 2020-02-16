@extends('layout')


@push('meta')
    <title>Commercial Cleaning | JMS Commercial Cleaning Commercial | Essex</title>
    <meta name="title" content="Commercial Cleaning | JMS Commercial Cleaning Commercial | Essex">
    <meta name="description" content="Whatever environment you work in, JMS cleaning has the training and experience to deal with any mess that stands in their way. We&#39;ve provided cleaning services for companies in all sorts of environments" />
@endpush

@section('page')


<section class="page-header">
    <h1 class="heading-primary--type-1">Commercial Cleaning</h1>
</section>

<section class="section-commercial u-section-padding"> 
    <div class="container">
        <div class="row">
            <div class="col-6">  
                <h3 class="heading-tertiary u-margin-small">Looking For A Cleaner</h3>
                <p class="paragraph">Whatever environment you work in, JMS cleaning has the training and experience to deal with any mess that comes their way. We've provided cleaning services for commercial printers, car garages, and even for the MoD.
                    <br><br>
                    JMS cleaners are fully trained and fully equipped to deal with any job that comes their way! Our thorough vetting system allows us to filter through and find the very best cleaners, with standards to match ours at JMS. We also DBS check our cleaners to give you the peace of mind knowing your property is in the safest of hands with JMS. 
                </p>
            </div>
            <div class="col-6">
                    <div class=" image-square image-square--1"></div>
            </div>
        </div>
    </div>
</section>

<section class="section-services u-color-offset u-section-padding">
    <div class="container">
        <div class="services-row">
            <div class="section-services__service">Office Cleaning</div>
            <div class="section-services__service">Shop Cleaning</div>
            <div class="section-services__service">Salon Cleaning</div>
        </div>
        <div class="services-row">

            <div class="section-services__service">Kitchen Cleaning</div>
            <div class="section-services__service">Factory Cleaning</div>
            <div class="section-services__service">Other Cleaning</div>
        </div>
    </div>
</section>


@include('partials/contact-strip')

    
@endsection