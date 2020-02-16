<div class="u-color-contact">
    <div class="container u-section-padding">
        <div class="row">
            <section class="section-contact col-6">
                <h2 class="heading-tertiary heading-tertiary--type-2 u-center-left u-margin-small">Get A Quote</h2>
                    
                <form class="contact-form" method="POST" action="/contact-request">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <input name="name" placeholder="Name" class="contact-form__input form-control">
                        </div>
                        <div class="col-6">
                            <input name="email" placeholder="Email Address" class="contact-form__input form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <input name="number" placeholder="Phone Number" class="contact-form__input form-control">
                        </div>
                        <div class="col-6">
                            <input name="service" placeholder="Service" class="contact-form__input form-control">
                        </div>
                    </div>
                    <div class="row">
                        <input name="location" placeholder="Location" class="contact-form__input form-control">
                    </div>
    
                    <div class="row">
                        <input name="message" placeholder="Message"  class="contact-form__input contact-form__input--message form-control">
                    </div>
                    <button class="button__submit btn btn--black" type="submit">Get A Quote</button>
                </form>
            </section>
    
            <section class="section-testimonial col-6">
            <h2 class="u-margin-important heading-tertiary u-center-left">Testimonials</h2>
                
                <div class="section-testimonial__testimonial">
                    <p class="section-testimonial__testimonial--text paragraph">"JMS have been cleaning 2 of my office for some time now. We always come into work and the place is smelling beautiful and everything organised neatly! Would always recommend JMS"</p>
                    <p class="section-testimonial__testimonial--author paragraph">Liv Harris</p>
                    <p class="section-testimonial__testimonial--position paragraph">June. 22, 2018</p>
                </div>
            </section>
        </div>
    </div>
</div>





@push('footer-scripts')

<script type="text/javascript">
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".button__submit").click(function(e){
        e.preventDefault();
        var name = $("input[name=name]").val();
        var number = $("input[name=number]").val();
        var email = $("input[name=email]").val();
        var service = $("input[name=service]").val();
        var location = $("input[name=location]").val();
        var message = $("input[name=message]").val();
        $.ajax({
            data: $('form').serialize(),
            type:'POST',
            url:'/contact-request',
            data:{
                name:name, 
                number:number, 
                email:email,
                location:location,
                message:message,
                service:service  
            },
            success:function(data){

                Swal.fire({
                    title: 'Thanks for getting in touch!',
                    icon: 'success',
                    confirmButtonText: 'Close'
                });     
                $('.contact-form')[0].reset();
            },
            error:function(data){
                Swal.fire({
                    title: 'Opps, There seems to have been a problem.',
                    text: 'Check all fields have been completed and try again.',
                    icon: 'error',
                    confirmButtonText: 'Close'
                })
            }
        });
	});
</script>

@endpush