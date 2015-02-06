@include('errors.check')

<form class="form-horizontal" role="form" method="POST" action="/user/upgrade/{{Auth::user()->id}}">
  <input type="hidden" name="_token" value="{{ csrf_token() }}">

 <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="pk_test_ikUJBrT2f2tMdQ8FSnq2MJC0"
    data-amount="2000"
    data-email="{{ Auth::user()->email }}"
    data-name="PRO Account"
    data-label="Upgrade To PRO"
    data-description="Annual Subscription ($20.00)"
    data-panel-label="Upgrade Now ($20.00)"
    data-image="{{ '/public/img/icons-touch/apple-touch-icon.png' }}">
  </script>

</form>