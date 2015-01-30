@extends('app')

@section('content')
<h1>{{ $title }}</h1>
<article>
<div>
  <p><strong>{{ env('APP_NAME') }} Terms of Service (&#8220;Agreement&#8221;)</strong></p>
  <p>This Agreement was last modified on January 1st, 2015.</p>
  <p>Please read these Terms of Service (&#8220;Agreement&#8221;, &#8220;Terms of Service&#8221;) carefully before using http:{{ url() }} (&#8220;the Site&#8221;) operated by {{ env('APP_NAME') }} (&#8220;us&#8221;, &#8220;we&#8221;, or &#8220;our&#8221;). This Agreement sets forth the legally binding terms and conditions for your use of the Site at http:{{ url() }}.</p>
  <p>By accessing or using the Site in any manner, including, but not limited to, visiting or browsing the Site or contributing content or other materials to the Site, you agree to be bound by these Terms of Service. Capitalized terms are defined in this Agreement.</p>
  <h3>Intellectual Property</h3>
  <p>{{ env('APP_NAME') }} does not claim any ownership rights over content published in the Site.</p>
  <p>Even though we don’t claim ownership of the content you publish in our Site, we do need certain licenses to your content in order to operate and enable the Services. When you upload or submit content to our Services, you grant {{ env('APP_NAME') }} a worldwide license to communicate, distribute, host, publicly display, publicly perform, publish, reproduce, store, and use such content.</p>
  <p>By submitting your content to our Services, you also give other {{ env('APP_NAME') }} users the right to share your content via various social medial platforms integrated with {{ env('APP_NAME') }}. We do not monitor or control what others do with your content.</p>
  <h3>Termination</h3>
  <p>We may terminate your access to the Site, without cause or notice, which may result in the forfeiture and destruction of all information associated with you. All provisions of this Agreement that by their nature should survive termination shall survive termination, including, without limitation, ownership provisions, warranty disclaimers, indemnity, and limitations of liability.</p>
  <h3>Links To Other Sites</h3>
  <p><strong></strong>Our Site may contain links to third-party sites that are not owned or controlled by {{ env('APP_NAME') }}.</p>
  <p>{{ env('APP_NAME') }} has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services. We strongly advise you to read the terms and conditions and privacy policy of any third-party site that you visit.</p>
  <h3>Disclaimer of Warranties</h3>
  <p><strong></strong>YOU EXPRESSLY UNDERSTAND AND AGREE THAT, TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW, THE SERVICES ARE PROVIDED TO YOU “AS IS,” WITHOUT WARRANTY OF ANY KIND, EXPRESS, IMPLIED, STATUTORY, OR OTHERWISE. FOR EXAMPLE, WE MAKE NO WARRANTY THAT (a) THE SERVICES WILL MEET YOUR REQUIREMENTS OR WILL BE CONSTANTLY AVAILABLE, UNINTERRUPTED, TIMELY, SECURE, OR ERROR-FREE; (b) THE RESULTS THAT MAY BE OBTAINED FROM THE USE OF THE SITE WILL BE EFFECTIVE, ACCURATE, OR RELIABLE; OR THAT (c) ANY ERRORS OR DEFECTS IN THE SITE WILL BE CORRECTED.</p>
  <h3>Limitation of Liability</h3>
  <p><strong></strong>IN NO EVENT SHALL {{ env('APP_NAME') }} BE LIABLE TO YOU OR ANYONE ELSE FOR ANY SPECIAL, INCIDENTAL, INDIRECT, CONSEQUENTIAL, OR PUNITIVE DAMAGES WHATSOEVER. THE LIMITATIONS AND EXCLUSIONS IN THIS SECTION APPLY TO THE MAXIMUM EXTENT PERMITTED BY APPLICABLE LAW IN YOUR JURISDICTION.</p>
  <h3>Changes To This Agreement</h3>
  <p><strong></strong>We reserve the right, at our sole discretion, to modify or replace these Terms of Service by posting the updated terms on the Site. Your continued use of the Site after any such changes constitutes your acceptance of the new Terms of Service.</p>
  <p>Please review this Agreement periodically for changes. If you do not agree to any of this Agreement or any changes to this Agreement, do not use, access or continue to access the Site or discontinue any use of the Site immediately.</p>
  <h3>Contact Us</h3>
  <p>If you have any questions about this Agreement, please contact us.</p>
</div>                                       
</article>
@endsection
