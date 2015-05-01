<div class="payment-errors"></div>

<div class="form-group">

  <label for="cc-num">
    <div>Card Number</div>
  </label>
    
    <input 
      type="tel"
      id="cc-num"
      class="cc-num form-control input-lg" 
      data-stripe="number"
      placeholder="•••• •••• •••• ••••" 
      autocomplete="cc-number"
      required 
    />

</div>

<div class="form-group">
  <div class="row">
    
    <div class="col-xs-6">
      <label for="cc-exp">
        <div>Expires</div>
      </label> 
        
        <input 
          type="tel"
          id="cc-exp"
          class="cc-exp form-control input-lg" 
          placeholder="•• / ••" 
          size="6" 
          autocomplete="cc-exp" 
          required
        />

        <input type="hidden" data-stripe="exp-month">
        <input type="hidden" data-stripe="exp-year">    
           
    </div>

    <div class="col-xs-4">
      
      <label for="cc-cvc">
        <div>CVC</div>
      </label>

        <input 
          type="tel"
          id="cc-cvc"
          class="cc-cvc form-control input-lg"
          data-stripe="cvc" 
          placeholder="•••" 
          size="4" 
          autocomplete="off"
          required
        />
   
    </div>
  </div>
</div>
