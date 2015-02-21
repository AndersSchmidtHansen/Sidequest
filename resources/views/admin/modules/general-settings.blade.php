{!! Html::accordionOpen('General Settings', false, 'wrench') !!}
{!! Form::textField('name', 'Application Name', null, ['class' => 'form-control']) !!}

<div class="form-group">
{!! Form::label('application_shortcut_icon_196x196','Shortcut Icon (196x196)') !!}
{!! Form::file('application_shortcut_icon_196x196') !!}
</div>

<div class="form-group">
{!! Form::label('application_favicon_ico_32x32','Favicon .ICO (32x32)') !!}
{!! Form::file('application_favicon_ico_32x32') !!}
</div>   

<div class="form-group">
{!! Form::label('application_favicon_png_32x32','Favicon .PNG (32x32)') !!}
{!! Form::file('application_favicon_png_32x32') !!}
</div>              

{!! Html::accordionClose() !!}
