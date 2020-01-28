<form class="contact-form" method="POST" action="/contact-request">
    @csrf
    <div class="row">
        <div class="col-1-of-2">
            <input name="name" placeholder="Name" class="contact-form__input">
        </div>
        <div class="col-1-of-2">
            <input name="email" placeholder="Email Address" class="contact-form__input">
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-2">
            <input name="number" placeholder="Phone Number" class="contact-form__input">
        </div>
        <div class="col-1-of-2">
            <input name="service" placeholder="Service" class="contact-form__input">
        </div>
    </div>
    <input name="location" placeholder="Location" class="contact-form__input">

    <input name="message" placeholder="Message"  class="contact-form__input contact-form__input--message u-margin-">

    <button class="button__submit" type="submit">Get A Quote</button>
</form>


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
                alert(data.success);
            }

        });

  

	});

</script>

@endpush