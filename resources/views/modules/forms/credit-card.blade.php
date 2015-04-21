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
      placeholder="CVC" 
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
      type="text" 
      class="cc-exp" 
      placeholder="MM/YY" 
      size="6" 
      autocomplete="cc-exp" 
      required
    />
  
  </label>
</div>