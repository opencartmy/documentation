<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Better Option Readme - by Opencart.my</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css" />
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../js/scrollspy.js"></script>
</head>
<body>
<?php include "../control.php"; ?>
<div id="container">
	<div id="board" class="fleft">
		<div id="menu" class="fleft">
			<p>OpenCart Extension by <a href="http://opencart.my/" title="More Extensions" target="_blank">Opencart.my</a></p>
			<h1>Better Option</h1>
			<ul class="links">
				<li><a name="chap1">Welcome</a></li>
				<li><a name="chap2">Features</a></li>
				<li><a name="chap3">Installation</a></li>
				<li><a name="chap4">Upgrade</a></li>
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
				<p>Thank you for purchasing Better Option extension!</p>
				<p>This document contains information for Better Option extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(September 2018):<strong> <a href="http://opencart.my/documentation/betteroption/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Better Option</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=18692" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=18692</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.4 / <a href="http://opencart.my/documentation/betteroption/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">16th November 2016</td>
						</tr>
						<tr>
							<td class="attrib">OpenCart version<br />compatibility:</td>
							<td class="vals">
								1.5.0.5<br />
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
							<td class="vals">OpenCart v2.3.0.2: <a href="http://demo.opencart.my/boption2" target="_blank">demo.opencart.my/boption2</a><br />
								Admin Login: <a href="http://demo.opencart.my/boption2/admin/index.php?route=module/myocbo" target="_blank">demo.opencart.my/boption2/admin</a><br />
								OpenCart v1.5.6.x: <a href="http://demo.opencart.my/boption" target="_blank">demo.opencart.my/boption</a><br />
								Admin Login: <a href="http://demo.opencart.my/boption/admin/index.php?route=module/myocbo" target="_blank">demo.opencart.my/boption/admin</a><br />
								Username: demo<br />
								Password: demo
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
				<p>Enable extra features on product options.</p>
				<p>Add option descriptions, option SKU, hide option price, set default option value, set minimum option quantity, replace product image with option image.</p>
				<h3>What's New in v1.4</h3>
				<ol>
					<li>Added Customer Group limitation</li>
					<li>Added multiline support for option value description</li>
				</ol>
				<h3>Features Highlight</h3>
				<ol>
					<li>Add option &amp; option value descriptions</li>
					<li>Add option value SKU (searchable)</li>
					<li>Set default option value</li>
					<li>Hide option price</li>
					<li>Set minimum option quantity</li>
					<li>Replace product image with option image</li>
					<li>Limit option values to specific Customer Group</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<h3>Prerequisite</h3>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
					<li>Skip to <em>Install</em> only if vQmod is installed and working on your store.</li>
					<li>Requires vQmod 2.4.1 minimum for OpenCart v1.5.x. (vQmod 2.5.1 for OpenCart v2.0.x) Get it from here: <a href="http://code.google.com/p/vqmod/">http://code.google.com/p/vqmod/</a></li>
					<li>Follow instruction in <a href="http://code.google.com/p/vqmod/wiki/Install_OpenCart">http://code.google.com/p/vqmod/wiki/Install_OpenCart</a></li>
				</ol>
				<h3>Install</h3>
				<ol>
					<li>Copy all contents in 'upload' folder into your store. No files will be replaced.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Install</strong> button for 'Better Option' module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for 'Better Option'.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Navigate to Catalog &gt; Options &gt; to start creating Option Description or Catalog &gt; Products to start editing Better Options features in each product.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<h3>From Better Option v1.2 to v1.3</h3>
				<ol>
					<li>Please <strong>BACKUP</strong> your store database before continuing with the upgrade process.</li>
					<li>Upload all files from the 'upload' folder to your store root folder. Only extension files will be replaced.</li>
					<li>There's no need to uninstall or reinstall.</li>
				</ol>
				<h3>From Better Option v1.1 to v1.2</h3>
				<ol>
					<li>Please <strong>BACKUP</strong> your store database before continuing with the upgrade process.</li>
					<li>Upload all files from the 'upload' folder to your store root folder. Only extension files will be replaced.</li>
					<li>Navigate to Extensions &gt; Modules &gt; Better Option &amp; click on the <strong>Edit</strong> button(There's no need to uninstall or reinstall). At this point the upgrade process will be running in the background. No further action required.</li>
				</ol>
				<p>If you encounter any error during the upgrade, please contact support for further assistance.</p>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>

				<h3>Setting Up Option and Option Values Descriptions</h3>
				<h4>Option Description</h4>
				<ol>
					<li>Login to your store admin, navigate to Catalog &gt; Options and <strong>Edit</strong> an option that you want to add option or option value descriptions to it.</li>
					<li>Insert Option Description for this Option in the Rich Text Editor.
						<div class="screenshot"><img src="resource/usage_option_description.png" /></div>
					</li>
					<li>The Option Description will appear on store front as popup upon mouse over on the [i] icon next to the option name:
					<div class="screenshot"><img src="resource/eg_option_description.png" /></div>
					</li>
				</ol>

				<h4>Option Value Description</h4>
				<ol>
					<li>On the Option Edit page, scroll down to add Option Values(only for Select, Radio, Checkbox, and Image type options).</li>
					<li>Insert Option Value Description for the Option Values in the textarea under Option Value Description column.
						<div class="screenshot"><img src="resource/usage_option_value_description.png" /></div>
					</li>
					<li>The Option Value Description will appear on store front as popup upon mouse over on the [i] icon next to the option value selections:
					<div class="screenshot"><img src="resource/eg_option_value_description.png" /></div>
					</li>
				</ol>

				<h3>Setting Up Better Option Features in Product Options</h3>
				<p>Navigate to Catalog &gt; Products and <strong>Edit</strong> a Product and click on <strong>Option</strong> tab to reveal product options.</p>
				<p>Add a <strong>Choose</strong> type option such as Select, Radio, Checkbox, &amp; Image with their respective Option Values. You will then notice there are addtional Option Values settings beneath each Option Value row.</p>

				<h4>SKU</h4>
				<div class="screenshot"><img src="resource/usage_sku.png" /></div>
				<p>Set a SKU value for this Option Value. This value is searchable from the OpenCart default search feature on the strore front.</p>
				<p>Example
					<div class="screenshot"><img src="resource/eg_sku.png" /></div>
				</p>

				<h4>Set as Default</h4>
				<div class="screenshot"><img src="resource/usage_set_default.png" /></div>
				<p>If set to <strong>Yes</strong>, this option value will be pre-selected when the product page loads.</p>
				<p>For example, the option value "Small" is set to <strong>Yes</strong>.
					<div class="screenshot"><img src="resource/eg_set_default.png" /></div>
				</p>

				<h4>Hide Option Price(in brackets)</h4>
				<div class="screenshot"><img src="resource/usage_hide_option_price.png" /></div>
				<p>If set to Yes, option price will be hidden on the product page.</p>
				<p>For example, the option value "Small" is set to <strong>Yes</strong> while other option values are set to <strong>No</strong>.
					<div class="screenshot"><img src="resource/eg_hide_option_price.png" /></div>
				</p>

				<h4>Minimum Quantity</h4>
				<div class="screenshot"><img src="resource/usage_minqty.png" /></div>
				<p>Set a minimum order quantity for this option value.</p>
				<p>For example, the option value "Small" Minimum Quantity is set to 2 but there's only 1 in cart, prompting OpenCart to issue a warning to customer and preventing them from checkout.
					<div class="screenshot"><img src="resource/eg_minqty.png" /></div>
				</p>

				<h4>Replace Product Image</h4>
				<div class="screenshot"><img src="resource/usage_imgreplace.png" /></div>
				<p>If set to Yes, this option value's image will replace the product main image on product page upon selection by customer.</p>
				<p>For example:
					<div class="screenshot"><img src="resource/eg_imgreplace.png" /></div>
				</p>

				<h3>Save</h3>
				<p>Click on the <strong>Save</strong> button on the product edit page to save the Better Option settings.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<div class="screenshot"><img src="resource/usage_option_value_description.png" /></div>
				<p>Better Option readily supports multi languages. Once you have setup custom languages for your store, Better Option will automatically accepts custom language for Option &amp; Option Value Descriptions, and displays the appropriate language on your store front depending on chosen language.</p>

				<p>To customize admin module text, please perform the following steps (assuming 'spanish' is the custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><span class="code">/admin/language/english/module/myocbo.php</span></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><span class="code">/admin/language/spanish/module/myocbo.php</span></li>
					</ul></li>
					<li>Open and edit the text in the newly copied file <span class="code">/admin/language/spanish/module/myocpod.php</span> according to your custom language.</li>
				</ol>

				<h3>Custom Template</h3>
				<p>The following steps provide a basic guide in customizing Better Option for your custom template on your store.</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>If option discount price is not showing on cart page or cart pop-up, open and edit <span class="code">/vqmod/xml/myoc_better_option.xml</span></li>
					<li>Search for line 417:
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&gt;&lt;?php echo $option['name']; ?&gt;&lt;/label&gt;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/product.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&gt;&lt;?php echo $option['name']; ?&gt;&lt;/label&gt;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your respective custom template file.</li>
					<li>Do the same for line 421, 425, 429, 433, 437, 441, 445.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'INSERT', SHOW', 'RENAME', 'ALTER', and 'DROP' tables in your MySQL database.</p>

				<p class="q">Q: Extension is not working or not showing correctly after installation.</p>
				<p class="ans">A: Please make sure the following:
					<ol><li>vQmod is installed and working correctly.</li>
						<li>The settings for Better Option is set correctly. Please see Usage section for more details on setting up Better Option.</li>
						<li>If you are using a custom template, you might require to customize the extension. Please see Customization &gt; Custom Template.</li>
					</ol>
				</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Better Option from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on the <strong>Uninstall</strong> button for <strong>Better Option</strong> module. <strong>WARNING:</strong> All Better Option data will be erased.</li>
					<li>Remove the following 5 files from your store.
						<ol type="i">
							<li>/admin/controller/module/myocbo.php</li>
							<li>/admin/language/english/module/myocbo.php</li>
							<li>/admin/model/myoc/bo.php</li>
							<li>/admin/view/template/myoc/bo.tpl</li>
							<li>/vqmod/xml/myoc_better_option.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>16th November 2016</strong>
					<ol>
						<li>Support for OCMOD installation option</li>
						<li>Support minimum quantity in Product Option Discount extension</li>
						<li>Added Customer Group limitation</li>
						<li>Added multiline support for option value description</li>
					</ol></p></div>
				<h3>Version 1.3.3</h3>
				<div class="info"><p>Release Date: <strong>10th November 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.2.</li>
					</ol></p></div>
				<h3>Version 1.3.2</h3>
				<div class="info"><p>Release Date: <strong>18th May 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.0.0.</li>
					</ol></p></div>
				<h3>Version 1.3.1</h3>
				<div class="info"><p>Release Date: <strong>16th March 2016</strong>
					<ol>
						<li>Fixed vqmod api/cart.php match not found error.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>29th June 2015</strong>
					<ol>
						<li>Added product image replace with option image on cart page.</li>
						<li>Fixed admin option value row delete problem.</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>23rd May 2015</strong>
					<ol>
						<li>Added product image replace with option image.</li>
						<li>Added searchable option SKU.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>19th January 2015</strong>
					<ol>
						<li>Fixed admin model errors.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>27th September 2014</strong>
					<ol>
						<li>Better Option released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=18692" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=18692</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer" class="clear">
		<p>Copyright &copy; 2014-2016 Opencart.my. All rights reserved.</p>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
	$('.links li a').click(function() {
		$('.links li a').removeClass('active');
		$(this).addClass('active');
		$.scrollTo($('#' + $(this).attr('name')), 'slow', {offset:-65});
	});
	var current_chap = 0;
	$('.chapter h2').on('scrollSpy:enter', function() {
		//console.log('enter:', $(this).attr('id'));
		$('.links li a').removeClass('active');
		current_chap = $(this).attr('id');
		$('.links li a[name="' + current_chap + '"]').addClass('active');
	});

	$('.chapter h2').on('scrollSpy:exit', function() {
		//console.log('exit:', $(this).attr('id'));
	});

	$('.chapter h2').scrollSpy();
});
</script>
</body>
</html>
