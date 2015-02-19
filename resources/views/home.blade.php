@extends('app')

@section('content')

@if( $user->subscribed() )
  <p>You are subscribed, thanks!</p>
  @include('modules.forms.account')
@else
  <p>Looks like you're not subscribed. Why not join now?</p>
  @include('modules.forms.join')
@endif


<a href="/auth/logout">Sign Out</a>
@endsection

@section('additional-scripts')
  <script src="https://js.stripe.com/v2/"></script> 
  <script>
    $(document).ready(function(){
      var form              = $('[role="payment-form"]'),
          stripeApiKey      = form.attr('data-gateway-publishable-key'),
          submit            = form.find('[role="submit"]'),
          submitInitialText = submit.text();

      Stripe.setPublishableKey(stripeApiKey);

      $(submit).on('click', function(e){
        e.preventDefault();
        $(this)
        .attr('disabled', 'disabled')
        .text('Just one moment...');

        Stripe.card.createToken(form, function(status, response) {
          var token;

          if(response.error)
          {
            form
            .find('.payment-errors')
            .text(response.error.message)
            .show();
            
            submit
            .removeAttr('disabled')
            .text(submitInitialText);

          } else {
            token = response.id;
            
            form
            .append($('<input type="hidden" name="token" />').val(token))
            .submit();
          }

        });
      });
    });
  </script>
@endsection
