<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="icon" href="data:;base64,iVBORw0KGgo=">
	<title>Product Option Discount Readme - by Opencart.my</title>
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
			<h1>Product Option Discount</h1>
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
				<p>Thank you for purchasing Product Option Discount extension!</p>
				<p>This document contains information for Product Option Discount extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Product Option Discount</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1888" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1888</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.7.5</td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">13th May 2016</td>
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
							</td>
						</tr>
						<tr>
							<td class="attrib">Demo: </td>
							<td class="vals">OpenCart v2.0.3.x<br/>
								<a href="http://demo.opencart.my/pod" target="_blank">demo.opencart.my/pod</a><br />
								Admin Login: <a href="http://demo.opencart.my/pod/admin/index.php?route=module/myocpod" target="_blank">demo.opencart.my/pod/admin</a><br />
								Username: demo<br />
								Password: demo<br />
								OpenCart v1.5.6.x<br/>
								<a href="http://demo.opencart.my/pod2" target="_blank">demo.opencart.my/pod2</a><br />
								Admin Login: <a href="http://demo.opencart.my/pod2/admin" target="_blank">demo.opencart.my/pod2/admin</a><br />
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
				<p>Enable quantity discount on product options.</p>
				<p>This extension is useful if you need to apply discount to individual option value in a product.</p>
				<h3>What's New in v1.7</h3>
				<ol>
					<li>Added Apply Discount Across Cart to calculate option discount based on quantity for same options across cart.</li>
					<li>Added multi customer groups selection.</li>
					<li>Added Calculation Method with extra 2 caculation methods to replace Use Option Price as Base Price.</li>
					<li>Fixed admin product_option_value_id issue with vQmod's 'iafter' attribute.</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Discount prices appear as table format on product page.</li>
					<li>Able to show option price of each individual option in cart and order.</li>
					<li>Able to set option price to calculate based on flat rate or quantity.</li>
					<li>Can be used with existing product quantity discount, special price, tax, and other existing pricing related functionality.</li>
					<li>Multiple price prefixes to choose from (+, -, =, +%, -%)</li>
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
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Install</strong> button for 'Product Option Discount' module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for 'Product Option Discount'.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Navigate to Catalog &gt; Products &gt; Edit any product to start creating Option Discount.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<p>Please <strong>BACKUP</strong> your store database before continuing with the upgrade process.</p>
				<h3>From Product Option Discount v1.7 to v1.7.x</h3>
				<ol>
					<li>Upload all files from the 'upload' folder to your store root folder. Only extension files will be replaced.</li>
					<li>Navigate to Extensions &gt; Modules &gt; Product Option Discount &amp; click on the <strong>Edit</strong> button(There's no need to uninstall or reinstall). At this point the upgrade process will be running in the background.</li>
					<li>Clear vqcache folder and delete 'mods.cache' file in your <em>/vqmod/</em> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.6.x to v1.7</h3>
				<ol>
					<li>Upload all files from the 'upload' folder to your store root folder. Only extension files will be replaced.</li>
					<li>Navigate to Extensions &gt; Modules &gt; Product Option Discount &amp; click on the <strong>Edit</strong> button(There's no need to uninstall or reinstall). At this point the upgrade process will be running in the background.</li>
					<li>Clear vqcache folder and delete 'mods.cache' file in your <em>/vqmod/</em> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.6.x to v1.6.2</h3>
				<ol>
					<li>Upload all files from the 'upload' folder to your store root folder. Only extension files will be replaced.</li>
					<li>Navigate to Extensions &gt; Modules &gt; Product Option Discount &amp; click on the <strong>Edit</strong> button(There's no need to uninstall or reinstall). At this point the upgrade process will be running in the background.</li>
					<li>Clear vqcache folder and delete 'mods.cache' file in your <em>/vqmod/</em> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.5 to v1.6</h3>
				<ol>
					<li>v1.6 only supports OpenCart v2.0.x. Therefore a fresh install is required.</li>
				</ol>
				<h3>From Product Option Discount v1.5 to v1.5.1</h3>
				<ol>
					<li>Please note that all your previous option discount data will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents from 'upload' folder to your store root folder. Only extension files from previous version will be replaced.</li>
					<li>In your admin, navigate to Extensions &gt; Modules &gt; Product Option Discount (MAKE SURE ALL FILES FROM THE LATEST VERSION HAS BEEN UPLOADED COMPLETELY TO YOUR STORE IN STEP 2), click on [ <u>Edit</u> ]. At this point, the extension database will be updated in the background.</li>
					<li>Clear all vqcache files in <span class="code">/vqmod/vqcache/</span> folder and delete '<span class="code">mods.cache</span>' file from <span class="code">/vqmod/</span> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.4 to v1.5</h3>
				<ol>
					<li>Please note that all your previous option discount data will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents from 'upload' folder to your store root folder. Only extension files from previous version will be replaced.</li>
					<li>In your admin, navigate to Extensions &gt; Modules &gt; Product Option Discount (MAKE SURE ALL FILES FROM THE LATEST VERSION HAS BEEN UPLOADED COMPLETELY TO YOUR STORE IN STEP 2), click on [ <u>Edit</u> ]. At this point, the extension database will be updated in the background.</li>
					<li>Clear all vqcache files in <span class="code">/vqmod/vqcache/</span> folder and delete '<span class="code">mods.cache</span>' file from <span class="code">/vqmod/</span> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.3.1 to v1.4</h3>
				<ol>
					<li>Please note that all your previous option discount data will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents from 'upload' folder to your store root folder. Only extension files from previous version will be replaced.</li>
					<li>In your admin, navigate to Extensions &gt; Modules &gt; Product Option Discount (MAKE SURE ALL FILES FROM THE LATEST VERSION HAS BEEN UPLOADED COMPLETELY TO YOUR STORE IN STEP 2), click on [ <u>Uninstall</u> ], then click [ <u>Install</u> ] again.</li>
					<li>Clear all vqcache files in <span class="code">/vqmod/vqcache/</span> folder and delete '<span class="code">mods.cache</span>' file from <span class="code">/vqmod/</span> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.3 to v1.3.1</h3>
				<ol>
					<li>Please note that all your previous option discount data will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents from 'upload' folder to your store root folder. Only extension files from previous version will be replaced.</li>
					<li>There's no need to Uninstall or re-install from the admin Extensions.</li>
					<li>Clear all vqcache files in <span class="code">/vqmod/vqcache/</span> folder and delete '<span class="code">mods.cache</span>' file from <span class="code">/vqmod/</span> folder.</li>
				</ol>
				<h3>From Product Option Discount v1.2.1 to v1.3</h3>
				<ol>
					<li>Please note that all your previous option discount data will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents from 'upload' folder to your store root folder. Only extension files from previous version will be replaced.</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on [ <u>Install</u> ] for 'Product Option Discount' module. At this point, the upgrade will be done automatically in the background.</li>
					<li>Clear all vqcache files in <span class="code">/vqmod/vqcache/</span> folder and delete '<span class="code">mods.cache</span>' file from <span class="code">/vqmod/</span> folder.</li>
					<li>Follow the steps under Installation section to install Product Option Discount.</li>
				</ol>
				<p>If you encounter any error during the upgrade, please contact support for further assistance.</p>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>
				
				<h3>Configuring Option Discount Settings</h3>
				<ol>
					<li>Login to your store admin, navigate to Catalog &gt; Products, and <strong>Edit</strong> a product that you want to add option discount to it.</li>
					<li>While editing a product in admin, click the <strong>Option</strong> tab to edit product options.</li>
					<li>Add an option by typing the option name and click on the drop-down item as such:
						<div class="screenshot"><img src="resource/usage_addoption.png" /></div>
					</li>
					<li>Please keep in mind that Option Discount is only available for the following option types:
						<ul>
							<li>Select</li>
							<li>Radio</li>
							<li>Checkbox</li>
							<li>Image</li>
						</ul>
				</li>
				<li>Upon adding an option, you will immediately notice 11 additional settings.</li>
				</ol>
				
				<h4>Show Option Discount Price on Product Page</h4>
				<div class="screenshot"><img src="resource/usage_showoptionpriceproduct.png" /></div>
				<p>Set to <strong>No</strong> if you do not want to display any option discount price table for this option on product page.</p>
				<p>Please checkout the following extension if you would like to have <strong>Live Price Update</strong> feature which will update the product price upon selection of options:<br />
					<a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489" target="_blank">http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489</a></p>

				<h4>Show Option Price on Cart</h4>
				<div class="screenshot"><img src="resource/usage_showoptionpricecart.png" /></div>
				<p>Set to <strong>Yes</strong> to show option price on shopping cart page, checkout page, and in order history page.</p>
				<p>For example, the Select &amp; Checkbox options are set to <strong>Yes</strong> while the Radio option is set to <strong>No</strong>.
					<div class="screenshot"><img src="resource/eg_showoptionprice1.png" /></div>
				</p>

				<h4>Show Final Price</h4>
				<div class="screenshot"><img src="resource/usage_showfinalprice.png" /></div>
				<p>If set to <strong>Yes</strong>, option price will be displayed as the final calculated price of product price and option price, depending on the option discount price prefix chosen.</p>
				<p>For example, the Radio option is set to <strong>Yes</strong> while the Checkbox option is set to <strong>No</strong>.
					<div class="screenshot"><img src="resource/eg_showfinalprice1.png" /></div>
				</p>

				<h4>Use Flat Rate on Price &amp; Points</h4>
				<div class="screenshot"><img src="resource/usage_flatrate_price.png" /></div>
				<p>If set to Yes, option price &amp; points will be calculated as flat rate regardless of quantity ordered.</p>
				<p>For example: product A price = $100<br />
					Option B = $20<br />
					(Use Flat Rate on Price &amp; Points = <strong>No</strong>) 3x product A with Option B = $360<br />
					(Use Flat Rate on Price &amp; Points = <strong>Yes</strong>) 3x product A with Option B = $320 </p>

				<h4>Use Flat Rate on Weight</h4>
				<div class="screenshot"><img src="resource/usage_flatrate_weight.png" /></div>
				<p>If set to Yes, option weight will be calculated as flat rate regardless of quantity ordered.</p>
				<p>For example: product A weight = 10 kg<br />
					Option B = 3 kg<br />
					(Use Flat Rate on Weight = <strong>No</strong>) 3x product A with Option B = 39 kg <br />
					(Use Flat Rate on Weight = <strong>Yes</strong>) 3x product A with Option B = 33 kg </p>

				<h4>Apply Discount Across Cart</h4>
				<div class="screenshot"><img src="resource/usage_discountcart.png" /></div>
				<p>If set to <strong>Yes</strong>, option discount will be applied based on the total quantity of the same product added to shopping cart that contains identical options.</p>
				
				<h4>Prices Include Tax</h4>
				<div class="screenshot"><img src="resource/usage_inctax.png" /></div>
				<p>Set the option discount prices to be displayed either with or without tax included, or both.</p>
				<p>For example, Radio is set to <strong>Yes</strong>, Select is set to <strong>No</strong>, while Checkbox is set to <strong>Both</strong>.
					<div class="screenshot"><img src="resource/eg_inctax1.png" /></div>
				</p>

				<h4>Price Table Style</h4>
				<div class="screenshot"><img src="resource/usage_tablestyle.png" /></div>
				<p>Set the style of the option discount pricing table.</p>
				<p>For example, Radio is set to <strong>Horizontal</strong> while Checkbox is set to <strong>Vertical</strong>.
					<div class="screenshot"><img src="resource/eg_tablestyle1.png" /></div>
				</p>

				<h4>Price Format</h4>
				<div class="screenshot"><img src="resource/usage_priceformat.png" /></div>
				<p>Set the price format of the option discount price in table.</p>
				<ul>
					<li><strong>Unit</strong> - Option discount prices will be shown as the amount of each item divided by quantity</li>
					<li><strong>Total</strong> - Option discount prices will be shown as the total price multiplied by quantity</li>
					<li><strong>Both</strong> - Show both <strong>Unit</strong> &amp; <strong>Total</strong> price</li>
				</ul>
				<p>For example, Select is set to <strong>Unit</strong>, Radio is set to <strong>Total</strong>, while Checkbox is set to <strong>Both</strong>.
					<div class="screenshot"><img src="resource/eg_priceformat1.png" /></div>
				</p>

				<h4>Show Quantity Column</h4>
				<div class="screenshot"><img src="resource/usage_showqtycolumn.png" /></div>
				<p>Set the <strong>Quantity</strong> column on or off. It is recommend to turn off only when there is a single price column.</p>
				<p>For example, Radio is set to <strong>Yes</strong> while Checkbox is set to <strong>No</strong>.
					<div class="screenshot"><img src="resource/eg_showqtycolumn1.png" /></div>
				</p>

				<h4>Quantity Format</h4>
				<div class="screenshot"><img src="resource/usage_qtyformat.png" /></div>
				<p>Set the format of the quantity values.</p>
				<p>For example, Radio is set to <strong>Single</strong> while Checkbox is set to <strong>Range</strong>.
					<div class="screenshot"><img src="resource/eg_qtyformat1.png" /></div>
				</p>

				<h4>Show Stock Column</h4>
				<div class="screenshot"><img src="resource/usage_showstockcolumn.png" /></div>
				<p>Set the <strong>Stock</strong> column on or off.</p>
				<p>For example, Radio is set to <strong>No</strong> while Checkbox is set to <strong>Yes</strong>.
					<div class="screenshot"><img src="resource/eg_showstockcolumn1.png" /></div>
				</p>
				<p>Option value with out of stock are disabled and cannot be selected by customer as seen in the example screenshot above.</p>

				<h4>Show 'Add to Cart' Column</h4>
				<div class="screenshot"><img src="resource/usage_showqtycart.png" /></div>
				<p>Allow each individual option value to have its own <strong>Add to Cart</strong> button.</p>
				<p>For example, the Radio option values in the screenshot below can now be added to cart individually with the additional 'Order' column that contains the quantity text field and <strong>Add to Cart</strong> button. You will also notice that the option values control(radio buttons) has been removed together with the default quantity text field and default <strong>Add to Cart</strong> button for the product as they are no longer necessary in such setup. 
					<div class="screenshot"><img src="resource/eg_showqtycart1.png" /></div>
				</p>
				<p class="cancel"><strong>Show 'Add to Cart' Column</strong> will not work when there are more than 1 <strong>Required</strong> option in a single product because the option value <strong>Add to Cart</strong> buttons only allow for a single option value to be added at a time. So, any other <strong>Required</strong> option that are not added will cause the 'Add to Cart' process to fail due to missing <strong>Required</strong> option.</p>
				<p>You can now have more than 1 options while using <strong>Show 'Add to Cart' Column</strong>. However, logically, only 1 of the option in a product can have <strong>Show 'Add to Cart' Column</strong> set to Yes.</p>

				<h3>Creating an Option Discount</h3>
				<p>After adding your desire option and option value, you can add option discounts directly under each option value, as shown here:</p>
				<div class="screenshot"><img src="resource/usage_optiondiscount2.png" /></div>
				
				<p>Just click on the <strong>Add Discount</strong> button to add a new row of option discount entry.</p>

				<h4>Customer Group</h4>
				<p>Select Customer Groups to restrict the current option discount for the selected customer groups(login required). If none selected, no Customer Groups restriction will be applied. If all selected, then only logged in customers will be able to view option discount prices.</p>

				<h4>Quantity</h4>
				<p>Number of item required to be added into cart for discount price to take effect. Works just like product discount.</p>
				<p>Please note that the default <strong>Quantity</strong> column field in the original option row is for stock control, while the <strong>Quantity</strong> column field in the option discount rows is for quantity discount.
					<div class="screenshot"><img src="resource/usage_stock_qtydiscount2.png" /></div>
				</p>

				<h4>Calculation Method</h4>
				<p>Select a calculation method for the option discount.
					<div class="screenshot"><img src="resource/usage_calcmethod.png" /></div>
				</p>
				<p><ul>
					<li><strong>Product</strong> - Use product base price to calculate.</li>
					<li><strong>Product + Option</strong> - Use product base price and option base price to calculate.</li>
					<li><strong>Option</strong> - Use option base price to calculate.</li>
				</ul></p>

				<h4>Price</h4>
				<p>Option discount price for the current quantity.</p>
				<p>Please see below for more option discount pricing setup examples.</p>

				<h4>Special</h4>
				<p>Option discount special price for the current quantity. The previous option discount price will appear as crossed out in red. For example, Radio:Large for quantity 2, 3, &amp; 4 has special price added:
					<div class="screenshot"><img src="resource/usage_optionspecial.png" /></div></p>
				<p>To disable option discount Special, just set special to <strong>0</strong> and special prefix to <strong>-</strong>.</p>

				<h4>Use Option Points as Base Points</h4>
				<p>If checked, the option discount points will use the original option value points as a base points for calculation instead of the product points.</p>

				<h4>Points</h4>
				<p>Points required to purchase the current option.</p>

				<h4>Priority</h4>
				<p>Set the display order of discount quantity.</p>

				<h4>Special Date Start / Date End</h4>
				<p>The starting &amp; ending date of the current option discount Special price. Leave it blank or as <strong>0000-00-00</strong> to disable the start or end date.</p>

				<h4>Remove</h4>
				<p>To remove an option discount, simple click on the <strong>Remove</strong> button on each option discount row.</p>

				<h3>Save</h3>
				<p>Please click the <strong>Save</strong> button to save your product after you are done editing.</p>

				<h3>Option Discount Pricing Setup Examples</h3>
				<p>Assuming the following:
					<ul>
						<li>Product Price: <span class="green">$250.00</span></li>
						<li>Option Price: <span class="blue">+$20.00</span></li>
					</ul>
				</p>
				<table class="example">
					<thead>
						<tr>
							<th>Use Flat Rate</th>
							<th>Quantity</th>
							<th>Calculation Method</th>
							<th>Option Discount Price Prefix &amp; Price</th>
							<th>Calculation</th>
							<th>Total</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> + <span class="red">$30.00</span>) x 3</td>
							<td>$840.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> - <span class="red">$30.00</span>) x 3</td>
							<td>$660.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">=30</td>
							<td><span class="red">$30.00</span> x 3</td>
							<td>$90.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">+%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> + (<span class="green">$250.00</span> x <span class="red">30</span> / 100)] x 3</td>
							<td>$975.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">-%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> - (<span class="green">$250.00</span> x <span class="red">30</span> / 100)] x 3</td>
							<td>$525.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> + <span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3</td>
							<td>$900.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> + <span class="blue">$20.00</span> - <span class="red">$30.00</span>) x 3</td>
							<td>$720.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">=30</td>
							<td>(<span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3</td>
							<td>$150.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">+%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> + <span class="blue">$20.00</span> + ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30</span> / 100)] x 3</td>
							<td>$1053.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">-%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> + <span class="blue">$20.00</span> - ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30</span> / 100)] x 3</td>
							<td>$567.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> + <span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3</td>
							<td>$900.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> + <span class="blue">$20.00</span> - <span class="red">$30.00</span>) x 3</td>
							<td>$720.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">=30</td>
							<td>(<span class="green">$250.00</span> + <span class="red">$30.00</span>) x 3</td>
							<td>$840.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">+%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> + <span class="blue">$20.00</span> + (<span class="blue">$20.00</span> x <span class="red">30</span> / 100)] x 3</td>
							<td>$828.00</td>
						</tr>
						<tr>
							<td>No</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">-%30</td>
							<td class="nowrap">[<span class="green">$250.00</span> + <span class="blue">$20.00</span> - (<span class="blue">$20.00</span> x <span class="red">30</span> / 100)] x 3</td>
							<td>$792.00</td>
						</tr>
					</tbody>
					<tbody>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> x 3) + <span class="red">$30.00</span></td>
							<td>$780.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> x 3) - <span class="red">$30.00</span></td>
							<td>$720.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">=30</td>
							<td><span class="red">$30.00</span> x 1</td>
							<td>$30.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">+%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) + (<span class="green">$250.00</span> x <span class="red">30</span> / 100)</td>
							<td>$825.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product</td>
							<td class="red">-%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) - (<span class="green">$250.00</span> x <span class="red">30</span> / 100)</td>
							<td>$675.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> + <span class="red">$30.00</span>)</td>
							<td>$800.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> - <span class="red">$30.00</span>)</td>
							<td>$740.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">=30</td>
							<td>(<span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 1</td>
							<td>$50.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">+%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> + ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30</span> / 100)] </td>
							<td>$851.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Product + Option</td>
							<td class="red">-%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> - ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30</span> / 100)] </td>
							<td>$689.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">+30</td>
							<td>(<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> + <span class="red">$30.00</span>)</td>
							<td>$800.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">-30</td>
							<td>(<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> - <span class="red">$30.00</span>)</td>
							<td>$740.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">=30</td>
							<td>(<span class="green">$250.00</span> x 3) + <span class="red">$30.00</span>) x 1</td>
							<td>$780.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">+%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> + (<span class="blue">$20.00</span> x <span class="red">30</span> / 100)] </td>
							<td>$776.00</td>
						</tr>
						<tr>
							<td>Yes</td>
							<td>3</td>
							<td>Option</td>
							<td class="red">-%30</td>
							<td class="nowrap">(<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> - (<span class="blue">$20.00</span> x <span class="red">30</span> / 100)] </td>
							<td>$764.00</td>
						</tr>
					</tbody>
				</table>

				<h3>Option Value Price</h3>				
				<p>By default, option value name will show its price in bracket if option value price is set. To disable showing option value price in bracket, just set option value price to 0.</p>
				<p>For example, Radio:Small has its price set as +20 while Radio:Medium price is set as +0
					<div class="screenshot"><img src="resource/eg_optionprice1.png" /></div>
					<div class="screenshot"><img src="resource/usage_optionprice2.png" /></div></p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<p>To customize admin module text such as table column names and button text, please perform the following steps (assuming 'spanish' is the custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><span class="code">/admin/language/english/module/myocpod.php</span></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><span class="code">/admin/language/spanish/module/myocpod.php</span></li>
					</ul></li>
					<li>Open and edit the text in the newly copied file <span class="code">/admin/language/spanish/module/myocpod.php</span> according to your custom language.</li>
				</ol>
				<p>To customize store front table text such as 'Quantity', 'Unit', 'Total', etc., please perform the following steps (assuming 'spanish' is the custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><span class="code">/catalog/language/english/myoc/pod.php</span></li>
					</ul></li>
					<li>Paste it into your custom language folder:</li><ul>
						<li><span class="code">/catalog/language/spanish/myoc/pod.php</span></li>
					</ul></li>
					<li>Open and edit the text in the newly copied file <span class="code">/catalog/language/spanish/myoc/pod.php</span> according to your custom language.</li>
				</ol>

				<h3>Custom Template</h3>
				<p>The following steps provide a basic guide in customizing Product Option Discount for your custom template on your store.</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>Copy the folder 'myoc' in <span class="code">/catalog/view/theme/default/template/</span> and paste it into <span class="code">/catalog/view/theme/custom_theme/template/</span></li>
					<li>Open and edit the file you just copied: <span class="code">/catalog/view/theme/custom_theme/template/myoc/pod.tpl</span></li>
					<li>Modify the CSS or HTML table classes to suit your custom template.</li>

					<li>If option discount price is not showing on cart page or cart pop-up, open and edit <span class="code">/vqmod/xml/myoc_pod.xml</span></li>
					<li>Search for line 688:
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&lt;?php echo $option['value']; ?&gt;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/checkout/cart.tpl</span> and <span class="code">/catalog/view/theme/custom_theme/template/module/cart.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;?php echo $option['value']; ?&gt;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">cart.tpl</span> file.</li>
					<li>Do the same for line 714 for <span class="code">/catalog/view/theme/custom_theme/template/checkout/confirm.tpl</span> template file if required.</li>
					<li>If option discount table is not showing on product page, open and edit <span class="code">/vqmod/xml/myoc_pod.xml</span></li>
					<li>Search for line 730:
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&lt;select name=&quot;option[]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/product.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;select name=&quot;option[</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your respective custom template file.</li>
					<li>Do the same for line 737 if required.</li>
					<li>If option discount 'Add to Cart' buttons in the option discount table is not working or there's error on product page, open and edit <span class="code">/vqmod/xml/myoc_pod.xml</span></li>
					<li>Search for line 744:
						<div class="info code"><pre>
&lt;search position=&quot;after&quot;&gt;&lt;![CDATA[cart').on('click', function() {]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/product.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>cart').on('click', function() {</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">product.tpl</span> file.</li>
					<li>Do the same for line 759, 769, 773.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'INSERT', SHOW', 'RENAME', 'ALTER', and 'DROP' tables in your MySQL database.</p>
			
				<p class="q">Q: Extension is not working or not showing correctly after installation.</p>
				<p class="ans">A: Please make sure the following:
					<ol><li>vQmod is installed and working correctly.</li>
						<li>The settings for option discount is set correctly. Please see Usage section for more details on setting up an option discount.</li>
						<li>If you are using a custom template, you might require to customize the extension. Please see Customization > Custom Template.</li>
					</ol>
				</p>

				<p class="q">Q: Option Discount data missing after a certain number of rows reached.</p>
				<p class="ans">A: The problem may due to the number of form elements on the product edit page has exceeded your server PHP config '<span class="code">max_input_vars</span>'. The default is just 1000.
					More info: <a href="http://php.net/manual/en/info.configuration.php#ini.max-input-vars" target="_blank">http://php.net/manual/en/info.configuration.php#ini.max-input-vars</a>
					<br />
					You need to increase it to a higher value in your <span class="code">/admin/php.ini</span> config file. Then, verify it through <span class="code">phpinfo();</span> 
					<br />
					However, some hosting provider may prevent customer from changing the value. You may need to contact your hosting provider for further support if changing through php.ini doesn't work.
				</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Product Option Discount from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on the <strong>Uninstall</strong> button for <strong>Product Option Discount</strong> module. <strong>WARNING:</strong> All option discount data will be erased.</li>
					<li>Remove the following 8 files from your store.
						<ol type="i">
							<li>/admin/controller/module/myocpod.php</li>
							<li>/admin/language/english/module/myocpod.php</li>
							<li>/admin/model/myoc/pod.php</li>
							<li>/admin/view/template/myoc/pod.tpl</li>
							<li>/catalog/controller/myoc/pod.php</li>
							<li>/catalog/language/english/myoc/pod.php</li>
							<li>/catalog/view/theme/default/template/myoc/pod.tpl</li>
							<li>/system/library/myocpod.php</li>
							<li>/vqmod/xml/myoc_pod.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.7.5</h3>
				<div class="info"><p>Release Date: <strong>13th May 2016</strong>
					<ol>
						<li>Support latest OpenCart v2.2.0.0</li>
						<li>Reduced database load by loading option discount data only when needed.</li>
						<li>Fixed checkbox option bug</li>
						<li>Updated Customer Group selection behaviour</li>
						<li>Modified "=" prefix calculation method to increase variations</li>
					</ol></p></div>
				<h3>Version 1.7.4</h3>
				<div class="info"><p>Release Date: <strong>10th March 2016</strong>
					<ol>
						<li>Support latest OpenCart v2.1.0.x</li>
						<li>Fixed addslashes for admin product copy</li>
						<li>Fixed admin copy product options sanitize product name</li>
					</ol></p></div>
				<h3>Version 1.7.3</h3>
				<div class="info"><p>Release Date: <strong>30th June 2015</strong>
					<ol>
						<li>Fixed admin product copy customer group error.</li>
					</ol></p></div>
				<h3>Version 1.7.2</h3>
				<div class="info"><p>Release Date: <strong>29th June 2015</strong>
					<ol>
						<li>Added separate settings for option weight flat rate.</li>
					</ol></p></div>
				<h3>Version 1.7.1</h3>
				<div class="info"><p>Release Date: <strong>19th June 2015</strong>
					<ol>
						<li>Added option discount bulk copy tool.</li>
						<li>Added flat rate calculation for option weight.</li>
					</ol></p></div>
				<h3>Version 1.7</h3>
				<div class="info"><p>Release Date: <strong>8th June 2015</strong>
					<ol>
						<li>Added Apply Discount Across Cart to calculate option discount based on quantity for same options across cart.</li>
						<li>Added multi customer groups selection.</li>
						<li>Added Calculation Method with extra 2 caculation methods to replace Use Option Price as Base Price.</li>
						<li>Fixed admin product_option_value_id issue with vQmod's 'iafter' attribute.</li>
					</ol></p></div>
				<h3>Version 1.6.2</h3>
				<div class="info"><p>Release Date: <strong>23rd April 2015</strong>
					<ol>
						<li>Added setting to include / exclude tax.</li>
						<li>Fixed customer group cache.</li>
						<li>Fixed option without stock not hidden.</li>
						<li>Fixed login display price.</li>
						<li>Fixed error not showing when NaN is entered in qty field.</li>
					</ol></p></div>
				<h3>Version 1.6.1</h3>
				<div class="info"><p>Release Date: <strong>21st January 2015</strong>
					<ol>
						<li>Fixed mysqli_insert_id error.</li>
					</ol></p></div>
				<h3>Version 1.6</h3>
				<div class="info"><p>Release Date: <strong>23rd December 2014</strong>
					<ol>
						<li>Support latest OpenCart v2.0.x</li>
						<li>Added caching to reduce database call</li>
					</ol></p></div>
				<h3>Version 1.5.1</h3>
				<div class="info"><p>Release Date: <strong>19th June 2015</strong>
					<ol>
						<li>Added caching to reduce database call</li>
						<li>Added setting to include / exclude tax.</li>
						<li>Added Calculation Method with extra 2 caculation methods to replace Use Option Price as Base Price.</li>
						<li>Added multi customer groups selection.</li>
						<li>Added Apply Discount Across Cart to calculate option discount based on quantity for same options across cart.</li>
						<li>Fixed mysqli_insert_id error.</li>
						<li>Fixed error not showing when NaN is entered in qty field.</li>
						<li>Fixed login display price.</li>
						<li>Fixed option without stock not hidden.</li>
						<li>Fixed customer group cache.</li>
						<li>Fixed admin product_option_value_id issue with vQmod's 'iafter' attribute.</li>
					</ol></p></div>
				<h3>Version 1.5</h3>
				<div class="info"><p>Release Date: <strong>25th June 2014</strong>
					<ol>
						<li>Added quantity range</li>
						<li>Added stock column</li>
						<li><strong>Add to Cart</strong> button for individual option value can now be used with other options</li>
						<li>Fixed Special price date issue</li>
						<li>Fixed Copy checkbox bug</li>
					</ol></p></div>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>5th September 2013</strong>
					<ol>
						<li>Support latest OpenCart v1.5.6</li>
						<li><strong>Add to Cart</strong> button for individual option value</li>
						<li>Option <strong>Special</strong> price</li>
						<li>New additional price prefixes (=, +%, -%)</li>
						<li>Option Discount prices can be based on option price or product price</li>
					</ol></p></div>
				<h3>Version 1.3.1</h3>
				<div class="info"><p>Release Date: <strong>2nd March 2013</strong>
					<ol>
						<li>Support for latest OpenCart v1.5.5.x.</li>
						<li>Show Option Price setting will now also hides option prices on product page.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>10th October 2012</strong>
					<ol>
						<li>First option column with quantity 1 can be disabled.</li>
					</ol></p></div>
				<h3>Version 1.2.1</h3>
				<div class="info"><p>Release Date: <strong>7th April 2012</strong>
					<ol>
						<li>Fixed option price not showing correctly when option price is 0.</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>26th March 2012</strong>
					<ol>
						<li>Added support for OpenCart 1.5.2.x.</li>
						<li>Added '%' for option value price and option value discount price.</li>
						<li>Fixed product discount calculation.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>3rd January 2012</strong>
					<ol>
						<li>Added support for OpenCart 1.5.0.5 - 1.5.1.3</li>
						<li>Able to show option price of each individual option in cart and order.</li>
						<li>Able to show final price of product + option instead of showing '+' &amp; '-'.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>14th April 2011</strong>
					<ol>
						<li>Product Option Discount released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1888" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1888</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer" class="clear">
		<p>Copyright &copy; 2012-2016 Opencart.my. All rights reserved.</p>
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