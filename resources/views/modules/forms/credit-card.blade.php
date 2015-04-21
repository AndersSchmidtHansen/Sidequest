<div class="payment-errors"></div>

<div class="form-group">
  <label>
    <div>Card Number</div>
    
    <input 
      type="tel"
      class="cc-num" 
      data-stripe="number"
      placeholder="•••• •••• •••• ••••" 
      autocomplete="cc-number"
      required 
    />

  </label>
</div>

<div class="form-group">
  <label>
    <div>CVC</div>
    
    <input 
      type="tel" 
      class="cc-cvc"
      data-stripe="cvc" 
      placeholder="•••" 
      size="4" 
      autocomplete="off"
      required
    />

  </label>
</div>

<div class="form-group">
  <label>
    <div>Expires</div>
    
    <input 
      type="tel" 
      class="cc-exp" 
      placeholder="•• / ••" 
      size="6" 
      autocomplete="cc-exp" 
      required
    />

    <input type="hidden" data-stripe="exp-month">
    <input type="hidden" data-stripe="exp-year">    
  
  </label>
</div>