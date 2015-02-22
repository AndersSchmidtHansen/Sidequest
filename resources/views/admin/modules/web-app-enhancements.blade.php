{!! Html::accordionOpen('Web App Enhancements', false, 'tablet') !!}
                
<p>It is possible to make your application behave much like a native app, simply by uploading a few, specific images below. Remember to upload the images in the correct sizes shown in the headlines. If the images are correct when a user uses the "Add to Homescreen" function on an iOS device, they will be delivered a more native app experience.</p>

<div class="form-group">
{!! Form::label('apple_touch_icon_152x152','Apple Touch Icon .PNG (152x152)') !!}
{!! Html::fileExists('img/apple_touch_icon_152x152.png') !!}
{!! Form::file('apple_touch_icon_152x152', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_640x920','Apple Startup Image .PNG (640x920)') !!}
{!! Html::fileExists('img/apple_touch_startup_image_640x920.png') !!}
{!! Form::file('apple_touch_startup_image_640x920', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_640x1096','Apple Startup Image .PNG (640x1096)') !!}
{!! Html::fileExists('img/apple_touch_startup_image_640x1096.png') !!}
{!! Form::file('apple_touch_startup_image_640x1096', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_750x1334','Apple Startup Image .PNG (750x1334)') !!}
{!! Html::fileExists('img/apple_touch_startup_image_750x1334.png') !!}
{!! Form::file('apple_touch_startup_image_750x1334', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_1242x2208','Apple Startup Image .PNG (1242x2208)') !!}
{!! Html::fileExists('img/apple_touch_startup_image_1242x2208.png') !!}
{!! Form::file('apple_touch_startup_image_1242x2208', ['accept' => 'image/png']) !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_1536x2008','Apple Startup Image .PNG (1536x2008)') !!}
{!! Html::fileExists('img/apple_touch_startup_image_1536x2008.png') !!}
{!! Form::file('apple_touch_startup_image_1536x2008', ['accept' => 'image/png']) !!}
</div>                            

{!! Html::accordionClose() !!}