<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Custom Unit Readme - by Opencart.my</title>
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
			<h1>Custom Unit</h1>
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
				<p>Thank you for purchasing Custom Unit extension!</p>
				<p>This document contains information for Custom Unit extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(August 2018):<strong> <a href="http://opencart.my/documentation/customunit/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Custom Unit</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=10463" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=10463</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.3.8 / <a href="http://opencart.my/documentation/customunit/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">21st November 2016</td>
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
							<td class="vals">OpenCart v2.3.0.x<br />
								<a href="http://demo.opencart.my/cunit2" target="_blank">demo.opencart.my/cunit2</a><br />
								Admin Login: <a href="http://demo.opencart.my/cunit2/admin/index.php?route=extension/module/myoccunit" target="_blank">demo.opencart.my/cunit2/admin</a><br />
								<br />
								OpenCart v1.5.6.x<br />
								<a href="http://demo.opencart.my/cunit" target="_blank">demo.opencart.my/cunit</a><br />
								Admin Login: <a href="http://demo.opencart.my/cunit/admin/index.php?route=module/myoc_cunit" target="_blank">demo.opencart.my/cunit/admin</a><br />
								Username: demo<br />
								Password: demo
							</td>
						</tr>
						<tr>
							<td class="attrib">Author: </td>
							<td class="vals">Hydrowire - <a href="http://www.opencart.com/index.php?route=marketplace/extension&filter_username=hydrowire" target="_blank">More extensions</a></td>
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
				<p>Custom Unit enables custom quantity unit to be set on each individual product. Useful for products that needs to be collectively purchased in large quantities such as boxes, dozens, packs, cartons, cases, strips, etc. Simple single quantity units are also possible such as litre, centimetre, inches, feet, kilogram, pound, bottles, etc.</p>
				<h3>Highlights</h3>
				<ol>
					<li>Custom Units with any quantity multiplier can be set.</li>
					<li>Each custom unit can be set on each individual product or all products from a category conveniently.</li>
					<li>Works best with product discount pricing.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<p>Choose either vQmod or OCMOD installation method</p>
				<h3>vQmod</h3>
				<h4>Prerequisite</h4>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
					<li>Skip to <em>Install</em> only if vQmod is installed and working on your store.</li>
					<li>vQmod version compatibility:<ul>
						<li>Requires vQmod v2.1.5 minimum for OpenCart v1.5.3.1 and below</li>
						<li>Requires vQmod v2.1.7 for OpenCart 1.5.4 and above</li>
						<li>Requires vQmod v2.6.1 for OpenCart v2.x and above</li>
					</ul></li>
					<li>Get it from here: <a href="https://github.com/vqmod/vqmod/releases">https://github.com/vqmod/vqmod/releases</a></li>
					<li>Follow instruction in <a href="https://github.com/vqmod/vqmod/wiki/Installing-vQmod-on-OpenCart">https://github.com/vqmod/vqmod/wiki/Installing-vQmod-on-OpenCart</a></li>
				</ol>
				<h4>Install</h4>
				<ol>
					<li>Upload all contents from 'upload' folder into your OpenCart store root folder with an FTP software. No files will be replaced.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on [ <u>Install</u> ] for 'Custom Unit' module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>OCMOD</h3>
				<ol>
					<li>Login to your store admin page, navigate to Extensions > Extension Installer > Upload the extension.ocmod.zip file.</li>
					<li>Navigate to Extensions > Modifications > Clear/Refresh.</li>
					<li>Navigate to Extensions > Extensions > Modules, and click on [ <u>Install</u> ] for <strong>Custom Unit</strong> module.</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click [ <u>Edit</u> ] on 'Custom Unit'.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Please see <strong>Usage</strong> section for further instructions.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>

				<h3>Insert New Custom Unit</h3>
				<div class="screenshot"><img src="resource/cunit_add.png" /></div>
				<p>Click on the <strong>Insert</strong> button to insert new Custom Unit.</p>

				<h4>Unit Title</h4>
				<div class="screenshot"><img src="resource/usage_add_unit_title.png" /></div>
				<p>Set a title for the unit.</p>

				<h4>Quantity Unit</h4>
				<div class="screenshot"><img src="resource/usage_add_quantity_unit.png" /></div>
				<p>Set a text for the quantity unit. This text will be displayed next to the actual quantity unit. E.g. 1dozen. Note that there is no space at the front, so you may insert a space before and after the quantity unit. E.g. 1 dozen .</p>

				<h4>Unit Suffix</h4>
				<div class="screenshot"><img src="resource/usage_add_unit_suffix.png" /></div>
				<p>Set a suffix text for single unit. E.g. 12 <strong>pcs</strong> make a dozen. As like Quantity Unit, you may insert a space before the Unit Suffix.</p>

				<h4>Unit Value</h4>
				<div class="screenshot"><img src="resource/usage_add_unit_value.png" /></div>
				<p>Set a numeric value of the unit. Value can be a positive number or decimal. Every 1 quantity item that a customer orders equals to this actual Unit Value quantity. E.g. 1 dozen = <strong>12</strong> actual qty unit.</p>

				<h4>Allow Decimal Quantity</h4>
				<div class="screenshot"><img src="resource/usage_allow_decimal.png" /></div>
				<p>If set to Yes, customer will be able to key in decimal quantity value. E.g. <strong>1.25</strong></p>

				<h4>Products</h4>
				<div class="screenshot"><img src="resource/usage_products.png" /></div>
				<p>Assign products for this Custom Unit. Type in the name of the product in the autocomplete text field and select the product from the drop down list.</p>

				<h4>Categories</h4>
				<div class="screenshot"><img src="resource/usage_categories.png" /></div>
				<p>Assign the categories of products for this Custom Unit. Select the desire categories by checking the checkboxes.</p>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Set the status of this Custom Unit.</p>

				<h3>Save</h3>
				<div class="screenshot"><img src="resource/usage_save.png" /></div>
				<p>Click on the <strong>Save</strong> button to save the new Custom Unit entry.</p>

				<h3>Delete</h3>
				<div class="screenshot"><img src="resource/usage_delete.png" /></div>
				<p>Select the Custom Unit that you want to delete by checking the checkboxes on the left and click on the <strong>Delete</strong> button. Click OK on the confirmation window to confirm the deletion.</p>

				<h3>Product Discount</h3>
				<p>You can also take advantage of OpenCart existing Product Discount feature to work with Custom Unit.</p>
				<div class="screenshot"><img src="resource/admin_product_discount.png" /></div>
				<p>Setup the product discount based on actual quantity value.</p>
				<p>Result (product page):</p>
				<div class="screenshot"><img src="resource/example_product_discount.png" /></div>
				<p>Shopping Cart:</p>
				<div class="screenshot"><img src="resource/example_cart_discount.png" /></div>

				<h3>Custom Unit Examples</h3>
				<table class="example">
					<tr>
						<th>Unit Title</th>
						<th>Quantity Unit</th>
						<th>Unit Suffix</th>
						<th>Unit Value</th>
						<th>Display</th>
					</tr>
					<tr>
						<td>Dozen</td>
						<td>&nbsp;dozen&nbsp;</td>
						<td>&nbsp;pcs</td>
						<td>12</td>
						<td>x 1 dozen (12 pcs)</td>
					</tr>
					<tr>
						<td>Carton</td>
						<td>&nbsp;ctn.&nbsp;</td>
						<td>btl.</td>
						<td>24</td>
						<td>x 1 ctn. (24btl.)</td>
					</tr>
					<tr>
						<td>Box</td>
						<td>&nbsp;box&nbsp;</td>
						<td>s</td>
						<td>100</td>
						<td>x 1 box (100s)</td>
					</tr>
					<tr>
						<td>Centimetre</td>
						<td>cm</td>
						<td></td>
						<td>1</td>
						<td>x 1cm</td>
					</tr>
					<tr>
						<td>Litre</td>
						<td>L</td>
						<td></td>
						<td>1</td>
						<td>x 1L</td>
					</tr>
				</table>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<p>Custom Unit extension readily supports multi languages.</p>
				<div class="screenshot"><img src="resource/multi_lang.png" /></div>
				<p>Just enter the relevant custom unit text for each custom language installed on your store, and it will be displayed on the store front end according to the selected language.</p>

				<p>To customize other module text such as table column names and button text, please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><em>/admin/language/english/module/myoc_cunit.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/admin/language/spanish/module/myoc_cunit.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/admin/language/spanish/module/myoc_cunit.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
					<li>Make a copy of the following file:<ul>
						<li><em>/catalog/language/english/myoc/cunit.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/catalog/language/spanish/myoc/cunit.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/catalog/language/spanish/myoc/cunit.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>

				<h3>Custom Template</h3>
				<p>Please follow the basic guideline below to customize Custom Unit for non default custom template.</p>
				<ol>
					<li>Open and edit /vqmod/xml/myoc_cunit.xml.</li>
					<li>Look for the following code:
						<div class="info code"><pre>&lt;file name="catalog/view/theme/*/template/checkout/cart.tpl"&gt;</pre></div>
						</li>
					<li>Make sure the code/text content in between the <pre>&lt;search&gt;</pre> tag exist in your corresponding custom template file. If not, you have to modify it to match with your custom template file.</li>
					<li>Do the same for every <pre>&lt;search&gt;</pre> tags in every <pre>&lt;file&gt;</pre> tags with file name that points to a template(.tpl) file:
						<ul>
							<li><pre>&lt;file name="catalog/view/theme/*/template/checkout/cart.tpl"&gt;</pre></li>
							<li><pre>&lt;file name="catalog/view/theme/*/template/checkout/confirm.tpl"&gt;</pre></li>
							<li><pre>&lt;file name="catalog/view/theme/*/template/product/compare.tpl"&gt;</pre></li>
							<li><pre>&lt;file name="catalog/view/theme/*/template/product/product.tpl"&gt;</pre></li>
						</ul>
					</li>
					<li>Please contact support if you need any further assistant in customization.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot / FAQ</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE' and 'DROP' tables in your MySQL database.</p>

				<p class="q">Q: Extension is not working after installation.</p>
				<p class="ans">A: Please make sure the following:
					<ul>
						<li>vQmod is installed on your store.</li>
						<li>If you are using a custom template, you might require to customize the extension. Please see Customization > Custom Template.</li>
						<li>That particular Custom Unit Status is Enabled</li>
						<li>Categories and Products are set correctly in the Custom Unit.</li>
					</ul>
					Please see Usage section for detailed settings instruction.</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Custom Unit from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on [ <u>Uninstall</u> ] for 'Custom Unit' module. <strong>WARNING:</strong> All Custom Unit data will be erased.</li>
					<li>Remove the following files from your store (optional).
						<ol type="i">
							<li>/admin/controller/module/myoc_cunit.php</li>
							<li>/admin/language/english/module/myoc_cunit.php</li>
							<li>/admin/model/myoc/cunit.php</li>
							<li>/admin/view/template/myoc/cunit_form.tpl</li>
							<li>/admin/view/template/myoc/cunit_list.tpl</li>
							<li>/catalog/language/english/myoc/cunit.php</li>
							<li>/system/library/myoc_cunit.php</li>
							<li>/vqmod/xml/myoc_cunit.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.3.8</h3>
				<div class="info"><p>Release Date: <strong>21st November 2016</strong>
					<ol>
						<li>Support for OCMOD installation option</li>
						<li>Fixed Custom Unit under Related Products is same as current product page custom unit.</li>
					</ol></p></div>
				<h3>Version 1.3.7</h3>
				<div class="info"><p>Release Date: <strong>9th November 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.x.</li>
					</ol></p></div>
				<h3>Version 1.3.6</h3>
				<div class="info"><p>Release Date: <strong>21st April 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.0.0.</li>
					</ol></p></div>
				<h3>Version 1.3.5</h3>
				<div class="info"><p>Release Date: <strong>21st April 2016</strong>
					<ol>
						<li>Fixed reorder quantity</li>
					</ol></p></div>
				<h3>Version 1.3.4</h3>
				<div class="info"><p>Release Date: <strong>16th March 2016</strong>
					<ol>
						<li>Fixed products taking precedence over categories.</li>
					</ol></p></div>
				<h3>Version 1.3.3</h3>
				<div class="info"><p>Release Date: <strong>3rd March 2016</strong>
					<ol>
						<li>Fixed cart quantity reset.</li>
						<li>Fixed admin order edit.</li>
					</ol></p></div>
				<h3>Version 1.3.2</h3>
				<div class="info"><p>Release Date: <strong>11th November 2015</strong>
					<ol>
						<li>Support latest OpenCart v2.1.0.1</li>
					</ol></p></div>
				<h3>Version 1.3.1</h3>
				<div class="info"><p>Release Date: <strong>7th September 2015</strong>
					<ol>
						<li>Fixed admin error when products &amp; categories are empty.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>11th July 2015</strong>
					<ol>
						<li>Support latest OpenCart v2.0.x</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>25th January 2015</strong>
					<ol>
						<li>Added decimal unit value.</li>
						<li>Added "/unit" in discount prices.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>23rd April 2014</strong>
					<ol>
						<li>Support for OpenCart v1.5.6.x.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>9th February 2013</strong>
					<ol>
						<li>Custom Unit released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=10463" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=10463</a></p>
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
