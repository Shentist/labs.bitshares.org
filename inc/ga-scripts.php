
<!--  Facebook / Retargeting -->

<script>(function() {
var _fbq = window._fbq || (window._fbq = []);
if (!_fbq.loaded) {
var fbds = document.createElement('script');
fbds.async = true;
fbds.src = '//connect.facebook.net/en_US/fbds.js';
var s = document.getElementsByTagName('script')[0];
s.parentNode.insertBefore(fbds, s);
_fbq.loaded = true;
}
_fbq.push(['addPixelId', '1437462266498952']);
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', 'PixelInitialized', {}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?id=1437462266498952&ev=PixelInitialized" /></noscript>

<!--//  Facebook / Retargeting -->



<!-- Google Analytics / Analytics -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-49934532-1', 'auto');
ga('require', 'linkid', 'linkid.js');
ga('require', 'displayfeatures');
ga('send', 'pageview');

</script>

<!--// Google Analytics / Analytics -->


<!-- Google AdWords - Remarketing  -->

<!-- Google Code for All Visitors -->
<!-- Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. For instructions on adding this tag and more information on the above requirements, read the setup guide: google.com/ads/remarketingsetup -->



<!--//  Google AdWords - Remarketing  -->


<!-- Faucet.BitShares.org  - Referral Tracking -->

 <script>
var BTSW = window.BTSW || {};
(function () {
var script = document.createElement('script');
script.type = 'text/javascript';
script.async = true;
script.src = 'http://faucet.bitshares.org/widgets/1/w.js?ref='+encodeURIComponent(document.referrer);
var entry = document.getElementsByTagName('script')[0];
entry.parentNode.insertBefore(script, entry);
}());
</script>


<!--// Faucet.BitShares.org -->


<!-- Google Analytics - Custom JQuery Tracking Code To Track Downloads and External Links In Google Analytics As Events -->
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type='text/javascript'>
if (typeof jQuery != 'undefined') {
var filetypes = /\.(zip|exe|dmg|pdf|doc.*|xls.*|ppt.*|mp3|txt|rar|wma|mov|avi|wmv|flv|wav)$/i;
var baseHref = '';
if (jQuery('base').attr('href') != undefined) baseHref = jQuery('base').attr('href');
var hrefRedirect = '';

jQuery('body').on('click', 'a', function(event) {
var el = jQuery(this);
var track = true;
var href = (typeof(el.attr('href')) != 'undefined' ) ? el.attr('href') : '';
var isThisDomain = href.match(document.domain.split('.').reverse()[1] + '.' + document.domain.split('.').reverse()[0]);
if (!href.match(/^javascript:/i)) {
var elEv = []; elEv.value=0, elEv.non_i=false;
if (href.match(/^mailto\:/i)) {
elEv.category = 'email';
elEv.action = 'click';
elEv.label = href.replace(/^mailto\:/i, '');
elEv.loc = href;
}
else if (href.match(filetypes)) {
var extension = (/[.]/.exec(href)) ? /[^.]+$/.exec(href) : undefined;
elEv.category = 'download';
elEv.action = 'click-' + extension[0];
elEv.label = href.replace(/ /g,'-');
elEv.loc = baseHref + href;
}
else if (href.match(/^https?\:/i) && !isThisDomain) {
elEv.category = 'external';
elEv.action = 'click';
elEv.label = href.replace(/^https?\:\/\//i, '');
elEv.non_i = true;
elEv.loc = href;
}
else if (href.match(/^tel\:/i)) {
elEv.category = 'telephone';
elEv.action = 'click';
elEv.label = href.replace(/^tel\:/i, '');
elEv.loc = href;
}
else track = false;

if (track) {
var ret = true;

if((elEv.category == 'external' || elEv.category == 'download') && (el.attr('target') == undefined || el.attr('target').toLowerCase() != '_blank') ) {
hrefRedirect = elEv.loc;

ga('send','event', elEv.category.toLowerCase(),elEv.action.toLowerCase(),elEv.label.toLowerCase(),elEv.value,{
'nonInteraction': elEv.non_i ,
'hitCallback':gaHitCallbackHandler
});

ret = false;
}
else {
ga('send','event', elEv.category.toLowerCase(),elEv.action.toLowerCase(),elEv.label.toLowerCase(),elEv.value,{
'nonInteraction': elEv.non_i
});
}

return ret;
}
}
});

gaHitCallbackHandler = function() {
window.location.href = hrefRedirect;
}
}
</script>


<!--//  Google Analytics - Custom JQuery Tracking Code To Track Downloads and External Links In Google Analytics As Events -->

