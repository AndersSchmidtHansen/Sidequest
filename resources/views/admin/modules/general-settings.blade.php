{!! Html::accordionOpen('General Settings', false, 'wrench') !!}
{!! Form::textField('name', 'Application Name', $settings->name, ['class' => 'form-control']) !!}

<div class="form-group">
{!! Form::label('application_shortcut_icon_196x196','Shortcut Icon .PNG (196x196)') !!}
{!! Html::fileExists('img/application_shortcut_icon_196x196.png') !!}
{!! Form::file('application_shortcut_icon_196x196', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('application_favicon_ico_32x32','Favicon .ICO (32x32)') !!}
{!! Html::fileExists('img/application_favicon_ico_32x32.ico') !!}
{!! Form::file('application_favicon_ico_32x32', ['accept' => 'image/ico']) !!}
</div>   

<div class="form-group">
{!! Form::label('application_favicon_png_32x32','Favicon .PNG (32x32)') !!}
{!! Html::fileExists('img/application_favicon_png_32x32.png') !!}
{!! Form::file('application_favicon_png_32x32', ['accept' => 'image/png']) !!}
</div>              

{!! Html::accordionClose() !!}
