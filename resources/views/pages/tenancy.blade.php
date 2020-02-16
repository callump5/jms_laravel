@extends('layout')

@push('meta')
<title>Tenancy Cleaning | JMS Commercial Cleaning Commercial | Essex</title>
<meta name="title" content="Tenancy Cleaning | JMS Commercial Cleaning Commercial | Essex">
<meta name="description" content="Whether you&#39;re a landlord whose property has reached its end of tenancy, or you&#39;re preparing to move out yourself; Take the stress of moving away by calling JMS. Our team of highly trained cleaners will not stop until your property is looking like the day you moved in!" />
@endpush


@section('page')



<section class="page-header">
    <h1 class="heading-primary--type-1">End Of Tenancy Cleaning</h1>
</section>

<section class="section-landlord u-section-padding"> 
    <div class="container">
        <div class="row">
            <div class="col-6">  
                <h3 class="heading-tertiary u-center-left u-margin-small">
                    Moving House?
                </h3>
                <p class="paragraph">Whether you're a landlord whose property has reached its end of tenancy, or you're preparing to move out yourself; Take the stress of moving day away by calling JMS. Our team of highly trained cleaners will not stop until your property is looking like the day you moved in!</p>
            </div>
            <div class="col-6">
                    <div class="image-square image-square--2"></div>
            </div>
        </div>
    </div>
</section>


    
<section class="section-landlord u-color-offset u-section-padding">
    <div class="container u-center-text">
        <div class="u-center-text u-margin-important">
            <h2 class="heading-secondary">Our Prices</h2>
        </div>
        <div class="services-row">
            <div class="section-landlord__service">
                <img class="section-landlord__service--icon" src="/icons/1bed.png">
                <p class="section-landlord__service--title">Studio</p>
                <p class="section-landlord__service--price">£85</p>
            </div>
            <div class="section-landlord__service">
                <img class="section-landlord__service--icon" src="/icons/1bed.png">
                <p class="section-landlord__service--title">1 Bedroom</p>
                <p class="section-landlord__service--price">£105</p>
            </div>
            <div class="section-landlord__service">
                <img class="section-landlord__service--icon" src="/icons/2bed.png">
                <p class="section-landlord__service--title">2 Bedroom</p>
                <p class="section-landlord__service--price">£135</p>
            </div>
            <div class="section-landlord__service">
                <img class="section-landlord__service--icon" src="/icons/3bed.png">
                <p class="section-landlord__service--title">3 Bedroom</p>
                <p class="section-landlord__service--price">£150</p>
            </div>
        </div>
    </div>
</section>

     

    @include('partials/contact-strip')

    
@endsection