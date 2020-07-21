<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Live Price Update Documentation - by Opencart.my</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="/documentation/css/style.css" />
	<script type="text/javascript" src="/documentation/js/jquery.min.js"></script>
	<script type="text/javascript" src="/documentation/js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="/documentation/js/scrollspy.js"></script>  <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42602799-6"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-42602799-6');
	</script>
</head>
<body>
<?php include "../../control.php"; ?>
<div id="container">
	<div id="board" class="fleft">
		<div id="menu" class="fleft">
			<p>OpenCart Extension by <a href="http://opencart.my/" title="More Extensions" target="_blank">Opencart.my</a></p>
			<h1>Live Price Update</h1>
			<ul class="links">
				<li><a name="chap1">Welcome</a></li>
				<li><a name="chap2">Features</a></li>
				<li><a name="chap3">Installation</a></li>
				<li><a name="chap5">Usage</a></li>
				<li><a name="chap6">Customization</a></li>
				<li><a name="chap7">Troubleshoot / FAQ</a></li>
				<li><a name="chap8">Uninstall</a></li>
				<li><a name="chap9">Changelog</a></li>
				<li><a name="chap10">Support</a></li>
			</ul>
		</div>
		<div id="content" class="fleft">
			<div class="chapter">
				<h2 id="chap1">Welcome</h2>
				<p>Thank you for purchasing Live Price Update extension!</p>
				<p>This document contains information for Live Price Update extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(Jan 2018):</strong> <a href="../" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Live Price Update</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=12489</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.5.7 (OCMOD release) / <a href="../" target="_blank">v2 for OpenCart v3.0.x Documentation</a></td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">26th November 2016</td>
						</tr>
						<tr>
							<td class="attrib">OpenCart version<br />compatibility:</td>
							<td class="vals">
								1.5.0, 1.5.0.1, 1.5.0.2, 1.5.0.3, 1.5.0.4, 1.5.0.5<br />
								1.5.1, 1.5.1.1, 1.5.1.2, 1.5.1.3<br />
								1.5.2, 1.5.2.1<br />
								1.5.3, 1.5.3.1<br />
								1.5.4, 1.5.4.1<br />
								1.5.5, 1.5.5.1<br />
								1.5.6, 1.5.6.1, 1.5.6.2, 1.5.6.3, 1.5.6.4<br />
								2.0.0.0, 2.0.1.0, 2.0.1.1, 2.0.2.0, 2.0.3.1<br />
								2.1.0.1, 2.1.0.2<br />
								2.2.0.0<br />
								2.3.0.0, 2.3.0.1, 2.3.0.2<br />
							</td>
							</tr>
						<tr>
							<td class="attrib">Demo: </td>
							<td class="vals">
								OpenCart v2.3.0.x: <a href="http://demo.opencart.my/livepriceupdate" target="_blank">demo.opencart.my/livepriceupdate</a>
								<br/>
								OpenCart v1.5.x: <a href="http://demo.opencart.my/lpu" target="_blank">demo.opencart.my/lpu</a>
							</td>
						</tr>
						<tr>
							<td class="attrib">Author: </td>
							<td class="vals">Hydrowire - <a href="http://www.opencart.com/index.php?route=extension/extension&filter_username=hydrowire" target="_blank">More extensions</a></td>
						</tr>
						<tr>
							<td class="attrib">Contact: </td>
							<td class="vals">support@opencart.my</td>
						</tr>
					</table>
				</div>
			</div>
			<div class="chapter">
				<h2 id="chap2">Features</h2>
				<h3>Overview</h3>
				<p>Provides live update on product price automatically upon options selection and quantity change.</p>
				<h3>What's New in v1.5.3</h3>
				<ol>
					<li>Added text customization for 0 prices.</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Works with the following major quantity &amp; options extensions:
						<ul>
							<li>Global Quantity<br />Link: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1886" target="_blank">http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1886</a></li>
							<li>Product Option Discount<br />Link: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1888" target="_blank">http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1888</a></li>
							<li>Option Combination<br />Link: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=3706" target="_blank">http://www.opencart.com/index.php?route=extension/extension/info&extension_id=3706</a></li>
						</ul></li>
					<li>Plug &amp; Play. No settings needed.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<h3>Prerequisite</h3>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
				</ol>
				<h3>Install</h3>
				<ol>
					<li>Upload all contents from 'upload' folder into your OpenCart store root folder with an FTP software. No files will be replaced.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>

				<p>Just go to your product page to see the Live Price Update in action by selecting the options or modifying the quantity.</p>

				<p>You can customize the text to be displayed when price equals to $0.00. Please see <strong>Customization &gt; Custom Text</strong> in the next section.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>

				<h3>Custom Text</h3>
				<p>In certain cases the resulting price may return $0.00. To avoid giving your customers to wrong idea of the product price, you may customize the text to be displayed when price equals $0.00.</p>
				<ol>
					<li>Open and edit <em>/catalog/language/english/myoc/live_price_update.php</em></li>
					<li>Look for the following code from line 3 to 5:
						<div class="info code"><pre>$_['price_zero']		= false; //crossed-out price when there's special set
$_['special_zero']		= false; //main product price
$_['extax_zero']		= false; //Ex-tax price</pre></div></li>
					<li>Modify the values 'false' to your own text. For example:
						<div class="info code"><pre>$_['price_zero']		= 'Invalid Price.'; //crossed-out price when there's special set
$_['special_zero']		= 'Please select an option.'; //main product price
$_['extax_zero']		= ' -- '; //Ex-tax price</pre></div></li>
					<li>The product price will now show the text you set above when the price equals to $0.00.</li>
					<li>You may setup the text for other languages by duplicating the file into your custom language folder as such(assuming 'spanish' is your custom language folder):<br/>
						<em>/catalog/language/spanish/myoc/live_price_update.php</em><br/>
						Then edit the text content in the file with your custom language text.</li>
				</ol>

				<h3>Custom Template</h3>
				<p>Live Price Update only adds <span class="code">&lt;span&gt;</span> tags to the prices. If you would like to change it, please see the following guide:</p>
				<ol>
					<li>Open and edit <em>/vqmod/xml/myoc_live_price_update.xml</em></li>
					<li>Look for the following code on line 13:
					<div class="info code"><pre>&lt;add&gt;&lt;![CDATA[&lt;span id=&quot;myoc-lpu-price&quot;&gt;&lt;?php echo $price; ?&gt;&lt;/span&gt;]]&gt;&lt;/add&gt;</pre></div>
					</li>
					<li>Modify the html between the <span class="code">&lt;add&gt;</span> tag as you like, but the <span class="code">id=&quot;myoc-lpu-price&quot;</span> must remain intact.</li>
					<li>Repeat step 2-3 for line 9, 17, 21, &amp; 25 if needed.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot / FAQ</h2>
				<p class="q">Q: Extension is not working.</p>
				<p class="ans">A: Make sure vQmod has been installed and working properly on your store.</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Live Price Update from your store.</p>
				<ol>
					<li>Remove the following files from your store.
						<ol type="i">
							<li>/catalog/controller/myoc/live_price_update.php</li>
							<li>/catalog/language/english/myoc/live_price_update.php</li>
							<li>/vqmod/xml/myoc_live_price_update.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.5.7 (OCMOD release)</h3>
				<div class="info"><p>Release Date: <strong>26th November 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.x</li>
						<li>Support for OCMOD installation option</li>
					</ol></p></div>
				<h3>Version 1.5.7</h3>
				<div class="info"><p>Release Date: <strong>27th March 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.x</li>
					</ol></p></div>
				<h3>Version 1.5.6</h3>
				<div class="info"><p>Release Date: <strong>27th March 2016</strong>
					<ol>
						<li>Fixed cart refresh issue in OpenCart v2.1.x</li>
					</ol></p></div>
				<h3>Version 1.5.5</h3>
				<div class="info"><p>Release Date: <strong>15th January 2016</strong>
					<ol>
						<li>Fixed cart refresh issue in OpenCart v2.x</li>
					</ol></p></div>
				<h3>Version 1.5.4</h3>
				<div class="info"><p>Release Date: <strong>24th November 2015</strong>
					<ol>
						<li>Added support for latest OpenCart v2.1.x</li>
					</ol></p></div>
				<h3>Version 1.5.3</h3>
				<div class="info"><p>Release Date: <strong>13th April 2015</strong>
					<ol>
						<li>Added text customization for 0 prices.</li>
					</ol></p></div>
				<h3>Version 1.5.2</h3>
				<div class="info"><p>Release Date: <strong>10th January 2015</strong>
					<ol>
						<li>Added support for Global Quantity extension.</li>
					</ol></p></div>
				<h3>Version 1.5</h3>
				<div class="info"><p>Release Date: <strong>29th October 2014</strong>
					<ol>
						<li>Added support for latest OpenCart v2.0.</li>
					</ol></p></div>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>10th August 2014</strong>
					<ol>
						<li>Fixed Special crossed-out price quantity for Product Option Discount extension.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>23rd April 2014</strong>
					<ol>
						<li>Added Reward &amp; Points Live Update.</li>
						<li>Fixed Special crossed-out price quantity.</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>28th October 2013</strong>
					<ol>
						<li>Improved event trigger.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>27th July 2013</strong>
					<ol>
						<li>Added support for latest OpenCart v1.5.6</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>3rd July 2013</strong>
					<ol>
						<li>Live Price Update released.</li>
					</ol></p></div>
			</div>
			<div class="chapter">
				<h2 id="chap10">Support</h2>
				<h3>Questions</h3>
				<p>If you have any questions regarding this extension, please email to support@opencart.my</p>
				<h3>Professional Service</h3>
				<p>We provide a variety of professional services for your OpenCart store.</p>
				<ul>
					<li>Extension Customization</li>
					<li>Extension Integration</li>
					<li>Custom Template Integration</li>
				</ul>
				<p>Please email your request to support@opencart.my and see how we can help you.</p>
				<h3>Comments and Feedbacks</h3>
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=12489</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer" class="clear">
		<p>Copyright &copy; 2013-2016 Opencart.my. All rights reserved.</p>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	var chapters = [];
	var current_chap = "chap1";

	$('.links li a').click(function() {
		$('.links li a').removeClass('active');
		$(this).addClass('active');
		current_chap = $(this).attr('name');
		chapters[0] = current_chap;
		$.scrollTo($('#' + current_chap), 'slow', {offset:{top:-65, left:-1000}});
	});

	$('.chapter h2').on('scrollSpy:enter', function() {
		//console.log('enter:', $(this).attr('id'));
		$('.links li a').removeClass('active');
		chapters.push($(this).attr('id'));
		chapters.sort();
		current_chap = chapters[0];
		//console.log(chapters);
		$('.links li a[name="' + chapters[0] + '"]').addClass('active');
	});

	$('.chapter h2').on('scrollSpy:exit', function() {
		//console.log('exit:', $(this).attr('id'));
		removeA(chapters, $(this).attr('id'));
		chapters.sort();
		if(chapters[0] !== undefined) {
			current_chap = chapters[0];
		}
		//console.log(chapters);
		//console.log(current_chap);
		$('.links li a').removeClass('active');
		$('.links li a[name="' + current_chap + '"]').addClass('active');
	});

	$('.chapter h2').scrollSpy();
});

function removeA(arr) {
	var what, a = arguments, L = a.length, ax;
	while (L > 1 && arr.length) {
		what = a[--L];
		while ((ax= arr.indexOf(what)) !== -1) {
			arr.splice(ax, 1);
		}
	}
	return arr;
}
</script>
</body>
</html>
