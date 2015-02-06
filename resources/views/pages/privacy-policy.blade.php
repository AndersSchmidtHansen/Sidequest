@extends('app')

@section('content')
<h1>{{ $title }}</h1>
<article>
<div>
  <p><strong>This Privacy Policy was last modified on January 1st, 2015.</strong></p>
  <p>{{ $app_settings->name }} (&#8220;us&#8221;, &#8220;we&#8221;, or &#8220;our&#8221;) operates http:{{ url() }} (the &#8220;Site&#8221;). This page informs you of our policies regarding the collection, use and disclosure of Personal Information we receive from users of the Site.</p>
  <p>We use your Personal Information only for providing and improving the Site. By using the Site, you agree to the collection and use of information in accordance with this policy. Unless otherwise defined in this Privacy Policy, terms used in this Privacy Policy have the same meanings as in our Terms and Conditions, accessible at http:{{ url() }}.</p>
  <h3>Information Collection And Use</h3>
  <p>While using our Site, we may ask you to provide us with certain personally identifiable information that can be used to contact or identify you. Personally identifiable information may include, but is not limited to, your name, email address and social media profile (&#8220;Personal Information&#8221;).</p>
  <h3>Log Data</h3>
  <p><strong></strong>Like many site operators, we collect information that your browser sends whenever you visit our Site (&#8220;Log Data&#8221;). This Log Data may include information such as your computer&#8217;s Internet Protocol (&#8220;IP&#8221;) address, browser type, browser version, the pages of our Site that you visit, the time and date of your visit, the time spent on those pages and other statistics.</p>
  <h3>Cookies</h3>
  <p><strong></strong>Cookies are files with small amount of data, which may include an anonymous unique identifier. Cookies are sent to your browser from a web site and stored on your computer&#8217;s hard drive.</p>
  <p>Like many sites, we use &#8220;cookies&#8221; to collect information. You can instruct your browser to refuse all cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may not be able to use some portions of our Site.</p>
  <h3>Security</h3>
  <p><strong></strong>The security of your Personal Information is important to us, but remember that no method of transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to use commercially acceptable means to protect your Personal Information, we cannot guarantee its absolute security.</p>
  <h3>Links To Other Sites</h3>
  <p><strong></strong>Our Site may contain links to other sites that are not operated by us. If you click on a third party link, you will be directed to that third party&#8217;s site. We strongly advise you to review the Privacy Policy of every site you visit.</p>
  <p>{{ $app_settings->name }} has no control over, and assumes no responsibility for, the content, privacy policies, or practices of any third party sites or services.</p>
  <h3>Terms and Conditions</h3>
  <p><strong></strong>Please also visit our Terms and Conditions section establishing the use, disclaimers, and limitations of liability governing the use of our website at <a href="http:{{ url() }}/terms-use">http:{{ url() }}/terms-use</a></p>
  <h3>Changes To This Privacy Policy</h3>
  <p>{{ $app_settings->name }} may update this Privacy Policy from time to time. We will notify you of any changes by posting the new Privacy Policy on the Site. You are advised to review this Privacy Policy periodically for any changes.</p>
  <h3>Contact Us</h3>
  <p>If you have any questions about this Privacy Policy, please contact us.</p>
</div>                                       
</article>
@endsection
