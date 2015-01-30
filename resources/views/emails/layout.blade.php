<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

    <head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width" />

      <title>{{ $email_title or env('APP_NAME') }}</title>

      <style type="text/css">

        #outlook a { padding:0; } 
        body { width:100% !important; -webkit-text-size-adjust:100%; -ms-text-size-adjust:100%; margin:0; padding:0; } 
        .ReadMsgBody { width:100%; }
        .ExternalClass { width:100%; } 
        .ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height:100%; }
        #wrappertable { margin:0; padding:0; width:100% !important; line-height:100% !important; }
        a, a:link { color:#3498db; text-decoration:underline; }
        img { border:none; outline:none; text-decoration:none; -ms-interpolation-mode:bicubic; }
        .img-fix { display:block; }
        p { margin:1em 0; }
        h1, h2, h3, h4, h5, h6 { color:black !important;}
        h1 a, h2 a, h3 a, h4 a, h5 a, h6 a { color:blue !important;}
        h1 a:active, h2 a:active, h3 a:active, h4 a:active, h5 a:active, h6 a:active { color:red !important; }
        h1 a:visited, h2 a:visited, h3 a:visited, h4 a:visited, h5 a:visited, h6 a:visited { color:purple !important; }
        table { border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; }
        table td { border-collapse:collapse; }
        span.yshortcuts, a span.yshortcuts { color:#000000; background-color:none; border:none; } 
        span.yshortcuts:hover, span.yshortcuts:active, span.yshortcuts:focus { color:#000000; background-color:transparent; border:none; }
        .appleLinksWhite a, .appleLinksBlack a { text-decoration:none !important; }
        .appleLinksWhite a { color:#ffffff !important; }
        .appleLinksBlack a { color:#000000 !important; }
        
        @media screen and (-webkit-min-device-pixel-ratio:0) {
          /* 
            Detect WebKit based clients. 
            Windows Phone 8.1 GDR1 and above will also parse CSS in this query due to changes to IE Mobile.
          */
        }
        @media only screen and (min-device-width: 768px) and (max-device-width: 1024px) {
          /* Detect tablet devices */
        }
        @media screen and (max-device-width: 480px), screen and (max-width: 480px) {
        
        }

        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) { 
          /* True "Retina" devices 2x */
        }
        @media (-webkit-min-device-pixel-ratio: 1.5), (min-resolution: 144dpi) { 
          /* Not quite "Retina" but high-res */
        }
        
      </style>
            
      <!--[if IEMobile 7]>
        <style type="text/css">
          /* Windows Phone 7 specific styles here */
        </style>
      <![endif]-->

      <!--[if gte mso 9]>
        <style type="text/css">
          /* Outlook specific styles here */
        </style>
      <![endif]-->

      <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
      <![endif]-->

    </head>

    <body>

    <span style="display:none !important; color:#ffffff; font-size:1px; line-height:0; overflow:hidden; mso-hide:all;">{{ $email_preheader or 'Preheader text here' }}</span>

    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="wrappertable" style="table-layout:fixed;">
      <tr>
        <td align="center" valign="top" id="wrappercell">
                    
          {{-- CONTENT CONTAINER TABLE --}}
          <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;font-family:Helvetica, Arial;font-size:15px;line-height:150%;color:#606060;" id="containertable">
            <tr>
              <td align="center" valign="top" id="containercell">

                  <img src="{{ $email_header_image_source or 'http://placehold.it/600x200/34495e/ffffff&text=Sidequest' }}" width="600" height="200" style="display:block; margin-bottom:45px;" />

                  <h1 style="color:#404040 !important;">@yield('title')</h1>

                  @yield('content')

                  <br />

                  <div>All the best,</div>
                  <div style="font-weight:bold;">The {{ env('APP_NAME') }} Team</div>
              </td>
            </tr>
          </table> {{-- END CONTAINER TABLE --}}

          {{-- FOOTER CONTAINER TABLE --}}
          <table border="0" cellpadding="0" cellspacing="0" width="600" align="center" style="width:600px;font-family:Helvetica, Arial;font-size:12px;line-height:150%;color:#606060;text-align:center;border-top: 1px solid #f1eae0;margin-top:35px;" id="containerfootertable">
            <tr>
              <td align="center" valign="top" id="containerfootercell">

                  <br /><br />

                  <img src="{{ $email_footer_image_source or 'http://placehold.it/50x50/34495e/ffffff&text=Sidequest' }}" width="50" height="50" style="display:block; margin-bottom:25px;" />
                  
                  <div style="font-weight:bold;">{{ env('APP_NAME') }}</div>
                  @if ( env('APP_COMPANY_ADDRESS') )
                  <div>{{ env('APP_COMPANY_ADDRESS') }}</div>
                  @endif
                  <br />
                  @if ( env('APP_COMPANY_CUSTOMER_SUPPORT_EMAIL') )
                  <div>Need any help? Contact us at <a href="mailto:{{ env('APP_COMPANY_CUSTOMER_SUPPORT_EMAIL') }}" style="color:#3498db;">{{ env('APP_COMPANY_CUSTOMER_SUPPORT_EMAIL') }}</a></div>
                  @endif

              </td>
            </tr>
          </table> {{-- END CONTAINER TABLE --}}

        </td>
      </tr>
    </table> {{-- END WRAPPER TABLE --}}

    <div itemscope itemtype="http://schema.org/EmailMessage">
      <div itemprop="publisher" itemscope itemtype="http://schema.org/Organization">
        <meta itemprop="name" content="{{ env('APP_NAME') }}"/>
        <link itemprop="url" href="{{ URL::full() }}"/>
        @if( env('SOCIAL_GOOGLE_PLUS_ID') )
        <link itemprop="url/googlePlus" href="https://plus.google.com/{{ env('SOCIAL_GOOGLE_PLUS_ID') }}" />
        @endif
      </div>
    </div>
        
  </body>
</html>

{{-- 
  CHECKLIST TO FOLLOW BEFORE SENDING AN EMAIL CAMPAIGN
  http://www.emailonacid.com/blog/details/C4/your_email_marketingpredeployment_checklist
  https://www.campaignmonitor.com/blog/post/4166/the-essential-email-marketing-checklist
  http://www.displayblock.com/2014/09/22/robust-testing-process-email-campaigns
    
  Check every aspect of an email campaign before sending!
--}}
