<?php

  use Illuminate\Support\Str;
  
  /*
  |--------------------------------------------------------------------------
  | Twitter Bootstrap Macros
  |--------------------------------------------------------------------------
  |
  */

  $form = $this->app['form'];

  /*
  |--------------------------------------------------------------------------
  | Panel
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

  /*
  |--------------------------------------------------------------------------
  | Accordions
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