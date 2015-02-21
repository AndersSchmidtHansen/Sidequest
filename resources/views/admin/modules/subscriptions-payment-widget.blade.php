{!! Html::accordionOpen('Subscriptions & Payment Widget', false, 'credit-card') !!}

{!! Form::textField('subscriptions_plans', 'Subscription Plans', $app_settings->subscription_plans_name, ['class' => 'form-control', 'disabled' => 'disabled'], '<a href="{{ url("admin/import-subscription-plans") }}">Import plans from Stripe</a>.') !!}

<hr>

<h4>Only if you're using the Stripe Payment Widget</h4>

{!! Form::textField('payment_widget_company_name', 'Widget Title', $app_settings->name, ['class' => 'form-control'], 'Often the name of your company or website.') !!}
{!! Form::textField('payment_widget_description', 'Description', null, ['class' => 'form-control', 'placeholder' => 'Monthly Subscription ($20.00)'], 'A description of the product or service being purchased.') !!}              
{!! Form::textField('payment_widget_plan_price', 'Price Amount', null, ['class' => 'form-control', 'placeholder' => '2000'], 'The amount (in cents) that\'s shown to the user. Example: $20 equals 2000.') !!}
{!! Form::textField('payment_widget_button_text', 'Widget Button Text', null, ['class' => 'form-control', 'placeholder' => 'Upgrade to PRO'], 'The text to be shown on the default blue button.') !!}
{!! Form::textField('payment_widget_purchase_button_text', 'Purchase Button Text', null, ['class' => 'form-control', 'placeholder' => 'Pay $20'], 'The label of the payment button in the Checkout form (e.g. “Subscribe”, “Pay $20”, etc.).') !!}                                          
{!! Html::accordionClose() !!}