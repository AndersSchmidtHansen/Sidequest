<?php
  
  /*
  |--------------------------------------------------------------------------
  | Form Macro
  |--------------------------------------------------------------------------
  |
  */

  $form = $this->app['form'];

  $form->macro('textField', function($name, $label = null, $value = null, $attributes = array(), $hint = null) use ($form)
  {
      $element = $form->text($name, $value, array_merge(['class' => 'form-control', 'id' => 'id-field-' . str_replace('[]', '', $name), 'help'=>''], $attributes));
      return $form->fieldWrapper($name, $label, $element, $attributes, $hint);
  });

  $form->macro( 'passwordField', function ($name, $label = null, $value = null, $attributes = array(), $hint = null) use ($form)
  {
    $element = $form->password ( $name, $attributes );  
    return $form->fieldWrapper ( $name, $label, $element, $attributes, $hint);
  });

  $form->macro('fieldWrapper', function($name, $label, $element, $attributes, $hint)
  {
      $errors = Session::get('errors');
      $errorMsg = null;

      if ($errors && ($errors->has($name))) {
          $errorMsg = $errors->first($name);
      }

      // Get a version of the name that will be good for properties
      $simpleName = str_replace('[]', '', $name);
      
      // Generate some HTML
      $out = '<div class="form-group';
      $out .= $errorMsg ? ' has-error has-feedback' : '';
      $out .= '">';
      
      // Add a label if there is one
      if (!is_null($label)) {
          $out .= '<label for="id-field-' . $simpleName . '" class="control-label">';
        
          $out .= $label;

          // Add a * to the label for required fields
          if (in_array('required', $attributes)) {
              $out .= '  <span class="text-danger" title="Required">*</span>';
          }

          if (!is_null($hint))
          {
            $out .= '<br><small>'. $hint .'</small>';
          }    

          $out .= '</label>';

      }
      
      // Add the field
      $out .= $element;
      
      // Add error messages
      if ($errorMsg) {
          $out .= '<span class="help-block">'.$errorMsg.'</span>';
      }
      
      // Add in help text...
      if (array_key_exists('help', $attributes)) {
          $out .= '<span class="help-block">'.$attributes['help'].'</span>';
      }
      
      // Finish
      $out .= '</div>';
      return $out;
      
  });