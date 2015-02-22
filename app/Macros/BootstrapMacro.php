<?php

  use Illuminate\Support\Str;
  
  /*
  |--------------------------------------------------------------------------
  | Twitter Bootstrap Macros
  |--------------------------------------------------------------------------
  |
  */

  $html = $this->app['html'];

  /*
  |--------------------------------------------------------------------------
  | Helpers
  |--------------------------------------------------------------------------
  |
  */
 
  $html->macro('fileExists', function($file_name)
  { 
    if( file_exists($file_name) )
    { 
      return "<span class='label label-success'><i class='fa fa-check'></i> Uploaded</span>";
    }
    return '';
  });

  $html->macro('active', function($path, $active = 'active')
  {
    return Request::is($path) ? $active : '';
  });

  /*
  |--------------------------------------------------------------------------
  | Navigation
  |--------------------------------------------------------------------------
  |
  */
 
  $html->macro('navItem', function($route = '', $title = '',  $icon = 'cog', $class = '', $active = 'active')
  {
    $html = "";
    $active = Request::is(ltrim($route, '/')) ? $active : '';

    $html .= "<a href='$route' class='nav__item $class $active' rel='tooltip' data-placement='right' title='$title'><i class='fa fa-$icon'></i></a>";

    return $html;
  });

  /*
  |--------------------------------------------------------------------------
  | Panel
  |--------------------------------------------------------------------------
  |
  */
 
  $html->macro('panelOpen', function($heading, $hasSaveButton = true, $saveButtonText = 'Save')
  { 
      $save_button = "";

      if($hasSaveButton)
      {
        $save_button = "<input class='btn btn-default btn-xs btn-success pull-right' type='submit' value='$saveButtonText'>";
      }

      $html = "";
      $html .= "<div class='panel panel-default'>";
      $html .= "<div class='panel-heading' role='tab'>$heading $save_button</div>";

      return $html;
  });

  $html->macro('panelClose', function()
  {
      return "</div>";
  });

  $html->macro('panelBodyOpen', function()
  {
      $html = "";
      $html .= "<div class='panel-body'><div class='panel-group'>";

      return $html;
  });

  $html->macro('panelBodyClose', function()
  {
      return "</div></div>";
  });

  /*
  |--------------------------------------------------------------------------
  | Accordions
  |--------------------------------------------------------------------------
  |
  */

  $html->macro('accordionOpen', function($heading, $open = false, $icon = '')
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

  $html->macro('accordionClose', function()
  {
      return "</div></div></div>";
  });  