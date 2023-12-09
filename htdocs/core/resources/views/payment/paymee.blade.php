<html>
<head>
    {!! load_google_fonts() !!}
    {!! render_favicon_by_id(get_static_option('site_favicon')) !!}
    <title> {{get_static_option('site_title')}}
        - {{get_static_option('site_'.get_default_language().'_tag_line')}}</title>
</head>
<body>
<div class="paymee-payment-wrapper">
    <h3>Vous allez être redirigé vers Paymee.</h3>
    <div class="paymee-payment-inner-wrapper">
        <form action="{{ $gateway_url }}" method="post" id="paymee_payment_form">
            @foreach($paymee_data as $key => $value)
                <input type="hidden" name="{{ $key }}" value="{{ $value }}" />
            @endforeach
            <input type="submit" class="button" id="submit_paymee_payment_form" value="Payer" />
        </form>
    </div>
</div>
<script src="{{global_asset('assets/tenant/frontend/js/jquery-3.6.1.min.js')}}"></script>

<script>
    (function(){
    "use strict";
        jQuery("#submit_paymee_payment_form").click();
    })();
</script>
</body>
</html>
