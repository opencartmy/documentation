<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<title>Price Rounding Readme - by Opencart.my</title>
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
			<h1>Price Rounding</h1>
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
				<p>Thank you for purchasing Price Rounding extension!</p>
				<p>This document contains information for Price Rounding extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(March 2018): </strong> <a href="http://opencart.my/documentation/rounding" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Price Rounding</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=10016" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=10016</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.3.2 / <a href="http://opencart.my/documentation/rounding" target="_blank">v2 for OpenCart v3.0.x Documentation</a></td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">9th November 2016</td>
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
							<td class="vals">OpenCart v2.3.0.x: <a href="http://demo.opencart.my/round" target="_blank">demo.opencart.my/round</a><br />
								Admin Login: <a href="http://demo.opencart.my/round/admin/index.php?route=total/myoc_price_rounding" target="_blank">demo.opencart.my/round/admin</a><br />
								<br />
								OpenCart v1.5.6.x: <a href="http://demo.opencart.my/rounding" target="_blank">demo.opencart.my/rounding</a><br />
								Admin Login: <a href="http://demo.opencart.my/rounding/admin" target="_blank">demo.opencart.my/rounding/admin</a><br />
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
				<p>Price Rounding enables advance and precise rounding on the cart total price. Useful for rounding off price as discount or required by law in certain countries.</p>
				<h3>What's New in v1.3.2</h3>
				<ol>
					<li>Support for latest OpenCart v2.3.0.x</li>
					<li>Added setting to hide rounding when value = $0.00</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Can be sorted with other cart total modules such as Sub-total and Taxes.</li>
					<li>Enable to set multiple rounding rules based on price range, customer groups, and currencies.</li>
					<li>Advance customization in rounding rules enables complete rounding control and precise price rounding.</li>
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
					<li>Login to your admin page, go to Extensions &gt; Order Totals, and click on the <strong>Install</strong> button for 'Price Rounding' module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for 'Price Rounding'.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Please see <strong>Usage</strong> section for further instructions.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<h3>From v1.1 to v1.2/v1.3</h3>
				<ol>
					<li>Fresh install is required for OpenCart v2.x</li>
				</ol>
				<h3>From v1.0 to v1.1</h3>
				<ol>
					<li>Upload all contents from the 'upload' folder to your store root folder. This will replace all previous version's extension files.</li>
					<li>Login to your store administration and navigate to admin > Extensions > Order Totals > Price Rounding [ <u>Edit</u> ].</li>
					<li>Under <strong>Rounding Rules</strong> tab, select the necessary currencies for each rounding rule and Save. Please see Usage section for more information on settings.</li>
					<li>There's NO need to Uninstall and re-install the Price Rounding extension.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>
				
				<h3>Settings</h3>
				<div class="screenshot"><img src="resource/tab_settings.png" /></div>
				<p>Click on the <strong>Settings</strong> tab to reveal Price Rounding settings.</p>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/settings_status.png" /></div>
				<p>Enable or disable Price Rounding.</p>

				<h4>Title</h4>
				<div class="screenshot"><img src="resource/settings_title.png" /></div>
				<p>Set a title text for display in cart total. For example: Rounding Adjust, Round Off, Further Discount, etc.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_title.png" /></div>

				<h4>Display Type</h4>
				<div class="screenshot"><img src="resource/settings_display.png" /></div>
				<p>Set the rounding amount to be displayed in difference or total.</p>

				<h4>Display $0.00 Rounding</h4>
				<div class="screenshot"><img src="resource/settings_zero.png" /></div>
				<p>If set to No, rounding will be hidden when rounding value = $0.00.</p>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/settings_login.png" /></div>
				<p>If set to Yes, only logged in customer are able to see the rounding.</p>

				<h4>Sort Order</h4>
				<div class="screenshot"><img src="resource/settings_sort.png" /></div>
				<p>Enter a numerical value to sort rounding by order. This value is related to the sort order of other total modules. This means that you can sort this rounding module in any order with other total modules such as Sub Total and Taxes etc.</p>
				<p>For example, if you want to round off price before tax is applied, then you must set the sort order of Price Rounding lower value than Taxes module.</p>
				<p>However, please make sure that Price Rounding sort order must always be higher value than Sub-Total module, and always be lower value than Total module.</p>

				<h3>Rounding Rules</h3>
				<div class="screenshot"><img src="resource/tab_rounding_rules.png" /></div>
				<p>Click on the <strong>Rounding Rules</strong> tab to add rounding rules.</p>

				<h4>Add New Rounding Rule</h4>
				<div class="screenshot"><img src="resource/rules_add.png" /></div>
				<p>Click on the <strong>Add Rounding Rule</strong> button to add a new rounding rule entry.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/rules_store.png" /></div>
				<p>Set price rounding only for selected stores.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/rules_customer_group.png" /></div>
				<p>Set price rounding only for selected customer group if <strong>Login Required</strong> under the Settings tab is set to Yes.</p>

				<h4>Currency</h4>
				<div class="screenshot"><img src="resource/rules_currency.png" /></div>
				<p>Set price rounding only for selected currency.</p>

				<h4>Price Range From</h4>
				<div class="screenshot"><img src="resource/rules_range_from.png" /></div>
				<p>Set a starting price range where the price rounding will take effect. Value is inclusive.</p>

				<h4>Price Range To</h4>
				<div class="screenshot"><img src="resource/rules_range_to.png" /></div>
				<p>Set a maximum price range where the price rounding will take effect. Value is inclusive.</p>

				<h4>Rounding Method</h4>
				<div class="screenshot"><img src="resource/rules_rounding_method.png" /></div>
				<p><strong>Fixed</strong> - Price will be rounded to the fixed rounding value.</p>
				<p><strong>Multiple</strong> - Price will be rounded to the multiple of rounding value.</p>
				<p>Scroll down to see rounding examples.</p>

				<h4>Rounding Direction</h4>
				<div class="screenshot"><img src="resource/rules_rounding_direction.png" /></div>
				<p>Rounding can be set to round up, round down, or to the nearest rounding value.</p>
				<p>Scroll down to see rounding examples.</p>

				<h4>Rounding Value</h4>
				<div class="screenshot"><img src="resource/rules_rounding_value.png" /></div>
				<p>Set a rounding value. Rounding will not apply if rounding value is higher than the price total.</p>

				<h4>Remove</h4>
				<div class="screenshot"><img src="resource/rules_remove.png" /></div>
				<p>Click on the <strong>Remove</strong> button to remove a rounding rule row.</p>

				<h3>Rounding Rules Examples</h3>
				<table class="example">
					<tr>
						<th>Price Range From</th>
						<th>Price Range To</th>
						<th>Rounding Method</th>
						<th>Rounding Direction</th>
						<th>Rounding Value</th>
						<th>Price</th>
						<th>Rounding Difference</th>
						<th>Rounding Total</th>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Fixed</td>
						<td>Up</td>
						<td>0.99</td>
						<td>123.38</td>
						<td>0.61</td>
						<td>123.99</td>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Fixed</td>
						<td>Nearest</td>
						<td>0.99</td>
						<td>123.38</td>
						<td>-0.39</td>
						<td>122.99</td>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Fixed</td>
						<td>Down</td>
						<td>0.99</td>
						<td>123.38</td>
						<td>-0.39</td>
						<td>122.99</td>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Multiple</td>
						<td>Up</td>
						<td>0.05</td>
						<td>123.38</td>
						<td>0.02</td>
						<td>123.40</td>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Multiple</td>
						<td>Nearest</td>
						<td>0.05</td>
						<td>123.38</td>
						<td>0.02</td>
						<td>123.40</td>
					</tr>
					<tr>
						<td>0.00</td>
						<td>999.99</td>
						<td>Multiple</td>
						<td>Down</td>
						<td>0.05</td>
						<td>123.38</td>
						<td>-0.03</td>
						<td>123.35</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Fixed</td>
						<td>Up</td>
						<td>9.90</td>
						<td>3456.78</td>
						<td>3.12</td>
						<td>3459.90</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Fixed</td>
						<td>Nearest</td>
						<td>9.90</td>
						<td>3456.78</td>
						<td>3.12</td>
						<td>3459.90</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Fixed</td>
						<td>Down</td>
						<td>9.90</td>
						<td>3456.78</td>
						<td>-6.88</td>
						<td>3449.90</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Multiple</td>
						<td>Up</td>
						<td>10.00</td>
						<td>3456.78</td>
						<td>3.22</td>
						<td>3460.00</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Multiple</td>
						<td>Nearest</td>
						<td>10.00</td>
						<td>3456.78</td>
						<td>3.22</td>
						<td>3460.00</td>
					</tr>
					<tr>
						<td>1000.00</td>
						<td>9999.99</td>
						<td>Multiple</td>
						<td>Down</td>
						<td>10.00</td>
						<td>3456.78</td>
						<td>-6.78</td>
						<td>3450.00</td>
					</tr>
				</table>

				<h4>Save</h4>
				<p>Click the <strong>Save</strong> button after you are done with the settings.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<p>Price Rounding extension readily supports multi languages.</p>
				<div class="screenshot"><img src="resource/settings_title.png" /></div>
				<p>Just enter the relevant title for each custom language installed on your store, and it will be displayed on the cart total according to the selected language.</p>

				<p>To customize other module text such as table column names and button text, please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><em>/admin/language/english/total/myoc_price_rounding.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/admin/language/spanish/total/myoc_price_rounding.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/admin/language/spanish/total/myoc_price_rounding.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>

				<h3>Custom Template</h3>
				<p>Price Rounding should work in any custom template as it is only a cart total module.</p>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot / FAQ</h2>
				<p class="q">Q: Extension is not showing up on cart total.</p>
				<p class="ans">A: Make sure you have set the extension settings properly in your admin. The following settings can cause Price Rounding to not appear on cart total:
					<ul>
						<li>Status is Disabled.</li>
						<li>Login Required is set to Yes but customer is not logged in on store front.</li>
						<li>Required Store is not selected in Rounding Rules.</li>
						<li>Required Customer Group is not selected in Rounding Rules.</li>
						<li>Total price is not in range.</li>
					</ul>
					Please see Usage section for detailed settings instruction.</p>

				<p class="q">Q: Are the Price Range inclusive?</p>
				<p class="ans">A: Yes.</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Price Rounding from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Order Totals.</li>
					<li>Click on [ <u>Uninstall</u> ] for 'Price Rounding' module. <strong>WARNING:</strong> All file Rounding Rules data will be erased.</li>
					<li>Remove the following files from your store (optional).
						<ol type="i">
							<li>/admin/controller/total/myoc_price_rounding.php</li>
							<li>/admin/language/english/total/myoc_price_rounding.php</li>
							<li>/admin/view/template/myoc/price_rounding.tpl</li>
							<li>/catalog/model/total/myoc_price_rounding.php</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.3.2</h3>
				<div class="info"><p>Release Date: <strong>9th November 2016</strong>
					<ol>
						<li>Added display $0.00 for non rounding value.</li>
						<li>Support for latest OpenCart v2.3.0.x</li>
					</ol></p></div>
				<h3>Version 1.3.1</h3>
				<div class="info"><p>Release Date: <strong>3rd May 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.0.x</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>23rd January 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.1.0.x</li>
						<li>Added setting to hide rounding when value = $0.00</li>
						<li>Fixed display total</li>
						<li>Replaces un/serialize with json_en/decode</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>27th October 2014</strong>
					<ol>
						<li>Support for latest OpenCart v2.0</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>18th February 2013</strong>
					<ol>
						<li>Fixed incorrect calculation for non-default currencies.</li>
						<li>Added multi currencies selection in rounding rules.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>11th January 2013</strong>
					<ol>
						<li>Price Rounding released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=10016" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=10016</a></p>
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