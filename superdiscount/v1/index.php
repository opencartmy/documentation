<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<title>Super Discount Readme - by Opencart.my</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="../../css/style.css" />
	<script type="text/javascript" src="../../js/jquery.min.js"></script>
	<script type="text/javascript" src="../../js/jquery.scrollTo.min.js"></script>
	<script type="text/javascript" src="../../js/scrollspy.js"></script>
</head>
<body>
<?php include "../../control.php"; ?>
<div id="container">
	<div id="board" class="fleft">
		<div id="menu" class="fleft">
			<p>OpenCart Extension by <a href="http://opencart.my/" title="More Extensions" target="_blank">Opencart.my</a></p>
			<h1>Super Discount</h1>
			<ul class="links">
				<li><a name="chap1">Welcome</a></li>
				<li><a name="chap2">Features</a></li>
				<li><a name="chap3">Installation</a></li>
				<li><a name="chap4">Usage</a></li>
				<li><a name="chap5">Customization</a></li>
				<li><a name="chap6">Troubleshoot / FAQ</a></li>
				<li><a name="chap7">Uninstall</a></li>
				<li><a name="chap8">Changelog</a></li>
				<li><a name="chap9">Support</a></li>
			</ul>
		</div>
		<div id="content" class="fleft">
			<div class="chapter">
				<h2 id="chap1">Welcome</h2>
				<p>Thank you for purchasing Super Discount extension!</p>
				<p>This document contains information for Super Discount extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(May 2018): </strong> <a href="../" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Super Discount</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=21751" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=21751</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.1</td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">8th May 2016</td>
						</tr>
						<tr>
							<td class="attrib">OpenCart version<br />compatibility:</td>
							<td class="vals"><!--
								1.5.1, 1.5.1.1, 1.5.1.2, 1.5.1.3<br />
								1.5.2, 1.5.2.1<br />
								1.5.3, 1.5.3.1<br />
								1.5.4, 1.5.4.1<br />
								1.5.5, 1.5.5.1<br />
								1.5.6, 1.5.6.1, 1.5.6.2, 1.5.6.3, 1.5.6.4<br />-->
								2.0.0.0, 2.0.1.0, 2.0.1.1, 2.0.2.0, 2.0.3.1<br />
								2.1.0.1, 2.1.0.2<br />
								2.2.0.0<br />
							</td>
							</tr>
						<tr>
							<td class="attrib">Demo: </td>
							<td class="vals"><a href="http://demo.opencart.my/superdiscount" target="_blank">demo.opencart.my/superdiscount</a><br />
								Admin Login: <a href="http://demo.opencart.my/superdiscount/admin" target="_blank">demo.opencart.my/superdiscount/admin</a><br />
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
				<p>Set total discount or fees based on rules in cart.</p>
				<p>This extension enables store owner to setup multiple discounts or fees on the cart total based on specific rules such as Products, Options, Categories, Manufacturers, Customer, Customer Group, Payment &amp; Shipping method, Customer's Past Order, Weight, Cart Total, &amp; Date.</p>
				<h3>Highlights</h3>
				<ol>
					<li>Create multiple discounts &amp; fees easily.</li>
					<li>No vQmod require. Works with any custom theme.</li>
					<li>Multiple rules available such as Products, Options, Categories, Manufacturers, Customer, Customer Group, Payment &amp; Shipping method, Customer's Past Order, Weight, Cart Total, &amp; Date.</li>
					<li>Mix multiple rules together.</li>
					<li>Multi languages and multi currency supported.</li>
				</ol>
				<h3>What's New in v1.1?</h3>
				<ol>
					<li>Added GeoZone discount criteria.</li>
					<li>Added Total Range discount criteria.</li>
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
					<li>Copy all contents from 'upload' folder into your store. No files will be replaced.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>Login to your admin page, navigate to Extensions &gt; Order Totals, and click on <strong>Install</strong> button for <strong>Super Discount</strong> module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for 'Super Discount'.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Under <strong>Settings</strong> tab, set the Status to <strong>Enabled</strong>.
						<div class="screenshot"><img src="resource/setup_status.png" /></div>
					</li>
					<li>Set the Sort Order to the highest value among all other existing Total modules. E.g. <strong>99</strong>.
						<div class="screenshot"><img src="resource/setup_sortorder.png" /></div>
					</li>
					<li>Click on the <strong>Save</strong> button to save the Super Discount settings.
						<div class="screenshot"><img src="resource/setup_save.png" /></div>
					</li>
					<li>Please see Usage &gt; Creating a Super Discount for further info.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Usage</h2>
				
				<h3>Creating a Super Discount</h3>
				<div class="screenshot"><img src="resource/usage_discount_tab.png" /></div>
				<p>Click <strong>Discount</strong> tab to show all Super Discount.</p>
				<div class="screenshot"><img src="resource/usage_addnew.png" /></div>
				<p>Click <strong>Add New</strong> button to create a new Super Discount.</p>
				<h4>Name</h4>
				<div class="screenshot"><img src="resource/usage_name.png" /></div>
				<p>Type a name for this discount. It will appear in the cart total as such:</p>
				<div class="screenshot"><img src="resource/eg_name.png" /></div>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or Disable this Super Discount entry.</p>

				<h4>Sort Order</h4>
				<div class="screenshot"><img src="resource/usage_sort_order.png" /></div>
				<p>Set a Sort Order for this Super Discount entry. This sort order value is related to the sort orders of other Order Totals modules in your store.</p>
				<p>For example, you can set a sort order value after <strong>Sub-Total</strong> module's sort order, so that OpenCart will apply this discount based on the Sub-Total module's total value right after Sub-Total module.</p>

				<h4>Product</h4>
				<div class="screenshot"><img src="resource/usage_product.png" /></div>
				<p>Add products as rule for this discount. Any products added here will become a criteria for this current discount. The product together with its prefix &amp; quantity must match the existing products in the current shopping cart.</p>
				<p>Prefix guide:
					<br/>(<strong>=</strong>) exactly equals to
					<br/>(<strong>&lt;</strong>) less than
					<br/>(<strong>&lt;=</strong>) less than or equals to
					<br/>(<strong>&gt;</strong>) greater than
					<br/>(<strong>&gt;=</strong>) greater than or equals to</p>
				<p>Example: Adding a 'iPhone' product with <strong>&gt;=</strong>(greater than or equals to) and quantity of <strong>1</strong> means that the shopping cart must contain at least 1 or more 'iPhone' product for this Super Discount entry to be applied to the cart total.</p>

				<h4>Option</h4>
				<div class="screenshot"><img src="resource/usage_option.png" /></div>
				<p>Select the options or option values as rule for this discount. Any options or option values selected here will become a criteria for this current discount. The options or option values selected must be present in the current shopping cart for this Super Discount entry to be applied to the cart total.</p>
				<p>Example: Select <strong>Radio: &gt;= 3 Small option value</strong> means that the shopping cart must contain at least 3 of the Small option value from Radio option, regardless if that option value is under one or multiple different products.</p>

				<h4>Category</h4>
				<div class="screenshot"><img src="resource/usage_category.png" /></div>
				<p>Select categories as rule for this discount. Any categories selected will become a criteria for this current discount. Existing products in the current shopping cart must match with all the products under all the selected categories here.</p>

				<h4>Manufacturer</h4>
				<div class="screenshot"><img src="resource/usage_manufacturer.png" /></div>
				<p>Select manufacturers as rule for this discount. Any manufacturers selected will become a criteria for this current discount. Existing products in the current shopping cart must match with the product under all the selected manufacturers here.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>If selected, customer must sign in as the relevant customer group for this discount to be applied to the cart total.</p>

				<h4>Customer</h4>
				<div class="screenshot"><img src="resource/usage_customer.png" /></div>
				<p>Any individual customer added here will become a rule for this discount. Only the customers added here in the list will get this discount to be applied in the cart total if they sign in to their account.</p>

				<h4>Geo Zones</h4>
				<div class="screenshot"><img src="resource/usage_geozone.png" /></div>
				<p>Any Geo Zone selected here will become a rule for this discount. However, this discount will only get applied to the cart total after the customer enters their Country, Region / State, &amp; Post Code on the cart page(Estimate Shipping &amp; Taxes) or on the checkout page.</p>

				<h4>Shipping Method</h4>
				<div class="screenshot"><img src="resource/usage_shipping.png" /></div>
				<p>Any Shipping method selected here will become a rule for this discount. However, this discount will only get applied to the cart total after customer selected a Shipping method on the cart page or on the checkout page.</p>

				<h4>Payment Method</h4>
				<div class="screenshot"><img src="resource/usage_payment.png" /></div>
				<p>Any Payment method selected here will become a rule for this discount. However, this discount will only get applied to the cart total after customer selected a Payment method on the checkout page. So, customer will only see this discount(if applied) on the checkout page at the last step "Confirm" in the cart total summary table.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Any store selected here will become a rule for this discount. This discount will only get applied to the cart total if the current store matches the selected stores here. Therefore, at least 1 store must be selected for this discount to be applied.</p>

				<h4>Past Order</h4>
				<div class="screenshot"><img src="resource/usage_pastorder2.png" /></div>
				<p>If set to Yes, this discount will be applied to the cart total only if the customer has past orders made before in the store.</p>
				<p>If set to No, this discount will be applied to the cart total only if the customer has NEVER made any past orders before in the store(First time order in the store).</p>
				<p>But of course, customer must be logged in for Super Discount to check for customer's past orders.</p>

				<h4>Weight</h4>
				<div class="screenshot"><img src="resource/usage_weight.png" /></div>
				<p>Set a weight value as a rule for this discount. Remember to specify the weight unit on the right. Value will be automatically converted for calculations if unit is different.</p>
				<p>Prefix guide:
					<br/>(<strong>Disabled</strong>) Please set to Disable if not using weight as criteria.
					<br/>(<strong>=</strong>) exactly equals to
					<br/>(<strong>&lt;</strong>) less than
					<br/>(<strong>&lt;=</strong>) less than or equals to
					<br/>(<strong>&gt;</strong>) greater than
					<br/>(<strong>&gt;=</strong>) greater than or equals to</p>
				<p>Example: (<strong>&gt;= 5 kg</strong>) means that the total cart items weight must be at least 5 kg or more for this discount to be applied to the cart total.</p>

				<h4>Total</h4>
				<div class="screenshot"><img src="resource/usage_total2.png" /></div>
				<p>Set a cart total value or range value as a rule for this discount. The preceding cart total value for this discount to be applied on will depend on the Sort Order of this Super Discount entry.</p>
				<p>Prefix guide (From):
					<br/>(<strong>Disabled</strong>) Please set to Disable if not using cart total as criteria.
					<br/>(<strong>=</strong>) exactly equals to
					<br/>(<strong>&gt;</strong>) greater than
					<br/>(<strong>&gt;=</strong>) greater than or equals to</p>
					<br/>Prefix guide (To):
					<br/>(<strong>Disabled</strong>) Please set to Disable if not using cart total range or high value as criteria.
					<br/>(<strong>&lt;</strong>) less than
					<br/>(<strong>&lt;=</strong>) less than or equals to
				<p>Example:
					<ol>
						<li>(From <strong>&gt;= 100</strong>, To <strong>Disabled</strong>) means that this discount will only be applied if the cart total value is at least $100 or more in value.</li>
						<li>(From <strong>&gt;= 100</strong>, To <strong>&lt; 900</strong>) means that this discount will only be applied if the cart total value is between the range of $99 and $900 in value.</li>
					</ol></p>

				<h4>Price</h4>
				<div class="screenshot"><img src="resource/usage_price.png" /></div>
				<p>Set a discount or fee when all the rules are met.</p>
				<p>Prefix guide:
					<br/>(<strong>=</strong>) set the cart total equal to the price value
					<br/>(<strong>+</strong>) add a fixed fee
					<br/>(<strong>-</strong>) discount or less a fixed price
					<br/>(<strong>+%</strong>) add a fee based on a percentage of the cart total
					<br/>(<strong>-%</strong>) discount or less based on a percentage of the cart total</p>
				<p>Example: (<strong>-% 25</strong>) means apply a 25% discount less to the cart total.</p>

				<h4>Date Start</h4>
				<div class="screenshot"><img src="resource/usage_datestart.png" /></div>
				<p>Set a start date for this discount to be active, if applicable.</p>

				<h4>Date End</h4>
				<div class="screenshot"><img src="resource/usage_dateend.png" /></div>
				<p>Set an end date for this discount to be active, if applicable.</p>

				<h3>Save</h3>
				<div class="screenshot"><img src="resource/usage_save.png" /></div>
				<p>Please click the <strong>Save</strong> or <strong>Save &amp; Exit</strong> button above the page after you are done with the settings.</p>

				<h3>Deleting and Copying</h3>
				<div class="screenshot"><img src="resource/usage_delete.png" /></div>
				<p>To delete a Super Discount entry, simply select them by checking the checkboxes and click on the <strong>Delete</strong> button.</p>
				<div class="screenshot"><img src="resource/usage_copy.png" /></div>
				<p>To make a copy of a Super Discount entry, simply select them by checking the checkboxes and click on the <strong>Copy</strong> button.</p>
			</div>
			<div class="chapter">
				<h2 id="chap5">Customization</h2>
				<h3>Custom Language</h3>
				<p>Super Discount readily supports multi languages. Simply enter the discount name in different languages and they will appear on the store front cart total according to customer's selected language.</p>
				<p>To customize admin module text such as table column names and button text, please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><em>/admin/language/english/total/myoc_super_discount.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/admin/language/spanish/total/myoc_super_discount.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/admin/language/spanish/total/myoc_super_discount.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>
				
				<h3>Custom Template</h3>
				<p>Super Discount should work in any OpenCart custom template as it is a Total module without any template or vqmod modification.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Troubleshoot</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'SHOW', 'ALTER', 'RENAME' and 'DROP' tables in your MySQL database.</p>
			
				<p class="q">Q: Extension is not working or not showing correctly after installation.</p>
				<p class="ans">A: Please make sure the following:
					<ol><li>Make sure you have set the extension settings properly in your admin. Please see Usage > Creating a Super Discount.</li>
					</ol>
				</p>
			</div>
			<div class="chapter">
				<h2 id="chap7">Uninstall</h2>
				<p>Please follow the steps below to uninstall Super Discount from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Order Totals.</li>
					<li>Click on <strong>Uninstall</strong> button for <strong>Super Discount</strong> module. <strong>WARNING:</strong> All Super Discount data data will be erased.</li>
					<li>Remove the following 9 files from your store. This step is optional.
						<ol type="i">
							<li>/admin/controller/total/myoc_super_discount.php</li>
							<li>/admin/language/english/total/myoc_super_discount.php</li>
							<li>/admin/model/myoc/super_discount.php</li>
							<li>/admin/view/template/myoc/super_discount.tpl</li>
							<li>/admin/view/template/myoc/super_discount_form.tpl</li>
							<li>/catalog/model/total/myoc_super_discount.php</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap8">Changelog</h2>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>8th May 2016</strong>
					<ol>
						<li>Added GeoZone discount criteria.</li>
						<li>Added Total Range discount criteria.</li>
						<li>Updated to support latest OpenCart v2.1.0.x &amp; v2.2.0.0.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>12th April 2015</strong>
					<ol>
						<li>Super Discount released.</li>
					</ol></p></div>
			</div>
			<div class="chapter">
				<h2 id="chap9">Support</h2>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=21751" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=21751</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer" class="clear">
		<p>Copyright &copy; 2015-2016 Opencart.my. All rights reserved.</p>
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