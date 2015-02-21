{!! Html::accordionOpen('Web App Enhancements', false, 'tablet') !!}
                
<p>It is possible to make your application behave much like a native app, simply by uploading a few, specific images below. Remember to upload the images in the correct sizes shown in the headlines. If the images are correct when a user uses the "Add to Homescreen" function on an iOS device, they will be delivered a more native app experience.</p>

<div class="form-group">
{!! Form::label('apple_touch_icon_152x152','Apple Touch Icon (152x152)') !!}
{!! Form::file('apple_touch_icon_152x152') !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_640x920','Apple Startup Image (640x920)') !!}
{!! Form::file('apple_touch_startup_image_640x920') !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_640x1096','Apple Startup Image (640x1096)') !!}
{!! Form::file('apple_touch_startup_image_640x1096') !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_750x1334','Apple Startup Image (750x1334)') !!}
{!! Form::file('apple_touch_startup_image_750x1334') !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_1242x2208','Apple Startup Image (1242x2208)') !!}
{!! Form::file('apple_touch_startup_image_1242x2208') !!}
</div>

<div class="form-group">
{!! Form::label('apple_touch_startup_image_1536x2008','Apple Startup Image (1536x2008)') !!}
{!! Form::file('apple_touch_startup_image_1536x2008') !!}
</div>                            

{!! Html::accordionClose() !!}