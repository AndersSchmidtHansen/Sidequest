<?php

  use Illuminate\Support\Str;
  
  /*
  |--------------------------------------------------------------------------
  | Form Macro
  |--------------------------------------------------------------------------
  |
  */

  $form = $this->app['form'];

  /*
  |--------------------------------------------------------------------------
  | Bootstrap Panel Macros
  |--------------------------------------------------------------------------
  |
  */

  $form->macro('panelOpen', function($heading)
  {
      $html = "";
      $html .= "<div class='panel panel-default'>";
      $html .= "<div class='panel-heading' role='tab'>$heading</div>";

      return $html;
  });

  $form->macro('panelClose', function()
  {
      return "</div>";
  });

  $form->macro('panelBodyOpen', function()
  {
      $html = "";
      $html .= "<div class='panel-body'>";

      return $html;
  });

  $form->macro('panelBodyClose', function()
  {
      return "</div>";
  });


  $form->macro('textField', function($name, $label = null, $value = null, $attributes = array()) use ($form)
  {
      $element = $form->text($name, $value, array_merge(['class' => 'form-control', 'id' => 'id-field-' . str_replace('[]', '', $name), 'help'=>''], $attributes));
      return $form->fieldWrapper($name, $label, $element, $attributes);
  });

  $form->macro( 'passwordField', function ($name, $label = null, $value = null, $attributes = array()) use ($form)
  {
    $element = $form->password ( $name, $attributes );  
    return $form->fieldWrapper ( $name, $label, $element, $attributes );
  });

  $form->macro('fieldWrapper', function($name, $label, $element, $attributes)
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





  /*
  |--------------------------------------------------------------------------
  | Bootstrap Accordion Macro
  |--------------------------------------------------------------------------
  |
  */

  $form->macro('accordionOpen', function($heading, $open = false, $icon = '')
  {

      $id = Str::slug($heading);
      $in = '';

      if ( $open ) {
        $in = 'in';
      }

      $html = "";
      $html .= "<div class='panel panel-default'>";
        $html .= "<div class='panel-heading' role='tab' id='heading-$id'>";
          $html .= "<h4 class='panel-title'>";

          if ( $icon != '' ) {
            $html .= "<i class='fa fa-$icon'></i> ";
          }
          
          $html .= "<a data-toggle='collapse' data-parent='#accordion' href='#collapse-$id'>$heading</a>";
        $html .= "</div>";
        $html .= "<div id='collapse-$id' class='panel-collapse collapse $in'>";
        $html .= "<div class='panel-body'>";

      return $html;
  });

  $form->macro('accordionClose', function()
  {
      return "</div></div></div>";
  });