<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Global Quantity Readme - by Opencart.my</title>
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
			<h1>Global Quantity Drop Down List</h1>
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
				<p>Thank you for purchasing Global Quantity extension!</p>
				<p>This document contains information for Global Quantity extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(August 2018):<strong> <a href="http://opencart.my/documentation/globalqty/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Global Quantity</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1886" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1886</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.6.8 / <a href="http://opencart.my/documentation/globalqty/" target="_blank">v2 for OpenCart v3.0.x Documentation</a></td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">25th November 2016</td>
						</tr>
						<tr>
							<td class="attrib">OpenCart version<br />compatibility:</td>
							<td class="vals">
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
							<td class="vals">OpenCart v2.3.0.x: <a href="http://demo.opencart.my/globalqty" target="_blank">demo.opencart.my/globalqty</a><br />
								Admin Login: <a href="http://demo.opencart.my/globalqty/admin/index.php?route=extension/module/myocglobalqty" target="_blank">demo.opencart.my/globalqty/admin</a><br />
								OpenCart v1.5.6.x: <a href="http://demo.opencart.my/gqs" target="_blank">demo.opencart.my/gqs</a><br />
								Admin Login: <a href="http://demo.opencart.my/gqs/admin/index.php?route=module/myocglobalqty" target="_blank">demo.opencart.my/gqs/admin</a><br />
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
				<p>Enable quantity to be displayed as drop down menu or radio buttons.</p>
				<p>This extension is useful if you want to make it convenient for your customer to purchase your product in large quantities. Example products such as printing cards, stationaries, medicine pills, and many more. You can also use for wholesale as well.</p>
				<h3>What's New in v1.6.1</h3>
				<ol>
					<li>Fixed order quantity exceeding max quantity set due to customer login bug</li>
					<li>Added persistent quantity set across store products</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Replace product quantity input field as drop down menu or radio buttons.</li>
					<li>Drop down list will be displayed on Shopping Cart page.</li>
					<li>Quantity set can be globally configured from the admin back-end easily.</li>
					<li>Customer will not be able to choose any other quantity outside of the quantity set.</li>
					<li>Multi languages and multi currency supported.</li>
					<li>Multi Customer Groups and Multistores supported.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<h3>Prerequisite</h3>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
					<li>Skip to <em>Install</em> only if vQmod is installed and working on your store.</li>
					<li>Requires vQmod 2.4.1 minimum. (vQmod v2.5.1 for OpenCart v2.0.x) Get it from here: <a href="http://code.google.com/p/vqmod/">http://code.google.com/p/vqmod/</a></li>
					<li>Follow instruction in <a href="http://code.google.com/p/vqmod/wiki/Install_OpenCart">http://code.google.com/p/vqmod/wiki/Install_OpenCart</a></li>
				</ol>
				<h3>Install</h3>
				<ol>
					<li>Copy all contents from 'upload' folder into your store. No files will be replaced.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>Login to your admin page, navigate to Extensions &gt; Modules, and click on the <strong>Install</strong> button for <strong>Global Quantity</strong> module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for <strong>Global Quantity</strong>.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Click ob the <strong>Add New</strong> button to start creating quantity sets. Please see Usage &gt; Creating a Quantity Set for further info.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<h3>Upgrading from Global Quantity version 1.4.x &amp; 1.5.x</h3>
				<ol>
					<li>Copy all contents in 'upload' folder into your store. Only extension files from previous version will be replaced.</li>
					<li>Start using Global Quantity. There's no need to uninstall or re-install as the upgrading process will take place in the background.</li>
				</ol>
				<h3>Upgrading from Global Quantity version 1.3</h3>
				<ol>
					<li>Please note that all your previous quantity sets data and their associate products will be retained. However, you are advised to backup your store database before continuing with the upgrade process.</li>
					<li>Copy all contents in 'upload' folder into your store. Only extension files from previous version will be replaced.</li>
					<li>Login to your admin page, navigate to Extensions &gt; Modules, and click on [ <u>Install</u> ] for <strong>Global Quantity</strong> module. At this point, the upgrade will be done automatically in the background.</li>
					<li>If you are using 'option1' installation method previously, please restore the following files in your store from the original OpenCart installation folder according to your store version.
						<ol type="i">
							<li>/system/library/cart.php</li>
							<li>/admin/language/english/common/header.php</li>
							<li>/admin/controller/common/header.php</li>
							<li>/admin/view/template/common/header.tpl</li>
							<li>/catalog/controller/checkout/cart.php</li>
							<li>/catalog/view/theme/default/template/checkout/cart.tpl</li>
							<li>/catalog/model/catalog/product.php</li>
							<li>/catalog/language/english/product/product.php</li>
							<li>/catalog/controller/product/product.php</li>
							<li>/catalog/view/theme/default/template/product/product.tpl</li>
						</ol></li>
					<li>If you are using 'option2 (vqmod)' installation method previously, please remove the following unwanted files from your store.
						<ol type="i">
							<li>/vqmod/xml/global_quantity.xml</li>
							<li>/admin/controller/catalog/global_quantity.php</li>
							<li>/admin/language/english/catalog/global_quantity.php</li>
							<li>/admin/model/catalog/global_quantity.php</li>
							<li>/admin/view/image/global_quantity.png</li>
							<li>/admin/view/template/catalog/global_quantity_form.tpl</li>
							<li>/admin/view/template/catalog/global_quantity_list.tpl</li>
						</ol></li>
					<li>Follow the steps under Installation to install Global Quantity.</li>
					<li>After installation is successful, you may notice that all your previous quantity sets data are left intact. However, you are still required to [ Edit ] each of them for various settings such as Customer Groups and Stores due to new features. Please refer to Usage for further info.</li>
					<li>If you encounter any error during the upgrade, please contact support for further assistance.</li>
				</ol>
				<h3>Upgrading from Global Quantity version 1.4</h3>
				<ol>
					<li>Copy all contents in 'upload' folder into your store. Only extension files from previous version will be replaced.</li>
					<li>Navigate to your admin Extensions &gt; Module &gt; Global Quantity &gt; [ <u>Edit</u> ]. Upgrading process will take place in the background.</li>
				</ol>
				<h3>Upgrading from Global Quantity version 1.5</h3>
				<p>Global Quantity v1.6 is only compatible with OpenCart v2.0.x. A fresh installation is required.</p>
				<h3>Upgrading from Global Quantity version 1.6</h3>
				<p>Copy all contents in 'upload' folder into your store. Only extension files from previous version will be replaced.</p>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>

				<h3>Creating a Quantity Set</h3>
				<div class="screenshot"><img src="resource/usage_addnew.png" /></div>
				<p>Click on the <strong>Add New</strong> button to create a new quantity set.</p>
				<h4>Quantity Set</h4>
				<div class="screenshot"><img src="resource/usage_quantityset.png" /></div>
				<p>Quantity values separated by commas. For example: 2,4,6,8,10. This field is required.</p>

				<h4>Thousand Separator</h4>
				<div class="screenshot"><img src="resource/usage_thousandseparator.png" /></div>
				<p>Select a Thousand Separator to be used in your quantity set for quantities 1000 &amp; above.</p>

				<h4>View Style</h4>
				<div class="screenshot"><img src="resource/usage_viewstyle.png" /></div>
				<p>Select the display type of quantity values either as a drop-down list or in a table format.</p>
				<p>Drop-down List example:</p>
				<div class="screenshot"><img src="resource/eg_viewstyle_list.png" /></div>
				<p>Table example:</p>
				<div class="screenshot"><img src="resource/eg_viewstyle_table.png" /></div>

				<h4>Show Default Discount List</h4>
				<div class="screenshot"><img src="resource/usage_default_disclist.png" /></div>
				<p>Set to <strong>No</strong> to hide the OpenCart default discount list.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_default_disclist.png" /></div>

				<h4>Show Total Price Estimate</h4>
				<div class="screenshot"><img src="resource/usage_show_price.png" /></div>
				<p>Display total product price estimate based on quantity selected and discount prices. The calculated price does not include any option price, hence, an estimate of the total price.</p>
				<p>However, if you need to return the correct price including option prices, please checkout the following <strong>Live Price Update</strong> extension:<br />
					<a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489" target="_blank">http://www.opencart.com/index.php?route=extension/extension/info&extension_id=12489</a></p>

				<h4>Show Price per Item</h4>
				<div class="screenshot"><img src="resource/usage_price_per_item.png" /></div>
				<p>Display the price per item. If enabled, customer can view the price of each item according to discount price, if any.</p>

				<h4>Show Discount(%)</h4>
				<div class="screenshot"><img src="resource/usage_show_discount.png" /></div>
				<p>Display the discounted value in percentage if product discount is set. If enabled, customer can view discount in percentage instead of fixed price.</p>

				<h4>Show "You Save"</h4>
				<div class="screenshot"><img src="resource/usage_show_yousave.png" /></div>
				<p>Display the amount deducted from product discount. If enabled, customer can see exactly how much they will save for each of the different quantity values before they buy.</p>

				<h4>Show Quantity Drop Down on Product List Pages &amp; Modules</h4>
				<div class="screenshot"><img src="resource/usage_show_dropdown_prod_list.png" /></div>
				<p>If set to yes, a quantity drop-down select list will be available on each product for the following pages &amp; modules for products that has quantity value set on them:
					<ul>
						<li><strong>Pages</strong>:
							<ul>
								<li>Category (route=product/category)</li>
								<li>Manufacturer Info (route=product/manufacturer/info)</li>
								<li>Search (route=product/search)</li>
								<li>Special (route=product/special)</li>
								<li>Related Products (route=product/product)</li>
							</ul></li>
						<li><strong>Modules</strong>:
							<ul>
								<li>Bestseller</li>
								<li>Featured</li>
								<li>Latest</li>
								<li>Special</li>
							</ul></li>
					</ul></p>
					<p>For example: <div class="screenshot"><img src="resource/eg_dropdown_prodlist.png" /></div></p>

				<h4>Product</h4>
				<div class="screenshot"><img src="resource/usage_product.png" /></div>
				<p>Select the products to be associated with the current quantity set.</p>

				<h4>Category</h4>
				<div class="screenshot"><img src="resource/usage_category.png" /></div>
				<p>Select the categories to be associated with the current quantity set. All products under selected categories will be associated with the current quantity set. If there are overlaps, priority will always be given to individual product set explicitly.</p>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/usage_login.png" /></div>
				<p>Set quantity set to display only when customers are logged in.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>Set quantity set to appear only to selected customer groups if <strong>Login Required</strong> above is set to Yes.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Set quantity set to appear only to selected stores.</p>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or disable the current quantity set.</p>

				<h3>Save</h3>
				<div class="screenshot"><img src="resource/usage_save.png" /></div>
				<p>Please click on the <strong>Save</strong> or <strong>Save &amp; Exit</strong> button above the page after you are done with the settings.</p>

				<h3>Copying and Deleting</h3>
				<div class="screenshot"><img src="resource/usage_copy.png" /></div>
				<p>To make a copy your quantity sets, simply select them by checking the checkboxes and click the <strong>Copy</strong> button.</p>
				<div class="screenshot"><img src="resource/usage_delete.png" /></div>
				<p>To delete your quantity sets, simply select them by checking the checkboxes and click the <strong>Delete</strong> button.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<p>To customize admin module text such as table column names and button text, please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><em>/admin/language/english/module/myocglobalqty.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/admin/language/spanish/module/myocglobalqty.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/admin/language/spanish/module/myocglobalqty.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>
				<p>To customize store front table columns text such as 'Quantity', 'Total Price Estimate', 'You Save', etc., please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Make a copy of the following file:<ul>
						<li><em>/catalog/language/english/myoc/globalqty.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:</li><ul>
						<li><em>/catalog/language/spanish/myoc/globalqty.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/catalog/language/spanish/myoc/globalqty.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>

				<h3>Custom Template</h3>
				<h4>OpenCart v2.0.2.x</h4>
				<p>The following steps provide a basic guide in customizing Global Quantity for your custom template on your OpenCart v2.0.2.x store.</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>Copy the folder 'myoc' in <span class="code">/catalog/view/theme/default/template/</span> and paste it into <span class="code">/catalog/view/theme/custom_theme/template/</span></li>
					<li>Open and edit the file you just copied: <span class="code">/catalog/view/theme/custom_theme/template/myoc/globalqty.tpl</span></li>
					<li>Modify the html or css to suit your custom template.</li>
					<li>If quantity set drop down list is not showing on cart page, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 68:
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&lt;input type=&quot;text&quot; name=&quot;quantity[&lt;?php echo $product['key']; ?&gt;]&quot;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/checkout/cart.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;input type=&quot;text&quot; name=&quot;quantity[&lt;?php echo $product['key']; ?&gt;]&quot;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">cart.tpl</span> file.</li>
					<li>If quantity set drop down list is not showing on any product list pages such as category, manufacturer info, search, special, related products, or module such as bestseller, featured, latest, special, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 103(OpenCart v2.0.1.1):
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[cart.add('&lt;?php echo $product['product_id']; ?&gt;')]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/[category.tpl,manufacturer_info.tpl,<br />search.tpl,special.tpl,product.tpl]</span> <br />or<br /> <span class="code">/catalog/view/theme/custom_theme/template/module/[bestseller.tpl,featured.tpl,<br />latest.tpl,special.tpl]</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>cart.add('&lt;?php echo $product['product_id']; ?&gt;')</pre></div>
					</li>
					<li>Search for line 107(OpenCart v2.0.2.0):
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA['&lt;?php echo $product['minimum']; ?&gt;']]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/[category.tpl,manufacturer_info.tpl,<br />search.tpl,special.tpl,product.tpl]</span> <br />or<br /> <span class="code">/catalog/view/theme/custom_theme/template/module/[bestseller.tpl,featured.tpl,<br />latest.tpl,special.tpl]</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>'&lt;?php echo $product['minimum']; ?&gt;'</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your respective custom template file.</li>
					<li>If quantity set drop down list or table is not showing on product page, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 124:
						<div class="info code"><pre>
&lt;search position=&quot;before&quot; index=&quot;1&quot;&gt;&lt;![CDATA[name=&quot;quantity&quot;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/product.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>name=&quot;quantity&quot;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">product.tpl</span> file.</li>
					<li>Do the same for line 130 &amp; 134.</li>
				</ol>

				<h4>OpenCart v1.5.6.x</h4>
				<p>The following steps provide a basic guide in customizing Global Quantity for your custom template on your OpenCart v1.5.6.x store.</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>Copy the folder 'myoc' in <span class="code">/catalog/view/theme/default/template/</span> and paste it into <span class="code">/catalog/view/theme/custom_theme/template/</span></li>
					<li>Open and edit the file you just copied: <span class="code">/catalog/view/theme/custom_theme/template/myoc/globalqty.tpl</span></li>
					<li>Modify the html or css to suit your custom template.</li>
					<li>If quantity set drop down list is not showing on cart page, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 42:
						<div class="info code"><pre>
&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&lt;input type=&quot;text&quot; name=&quot;quantity[&lt;?php echo $product['key']; ?&gt;]&quot;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/checkout/cart.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;input type=&quot;text&quot; name=&quot;quantity[&lt;?php echo $product['key']; ?&gt;]&quot;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">cart.tpl</span> file.</li>
					<li>If quantity set drop down list is not showing on any product list pages such as category, manufacturer info, search, special, related products, or module such as bestseller, featured, latest, special, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 54:
						<div class="info code"><pre>
&lt;search position=&quot;before&quot;&gt;&lt;![CDATA[addToCart(]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/[category.tpl,manufacturer_info.tpl,<br />search.tpl,special.tpl,product.tpl]</span> <br />or<br /> <span class="code">/catalog/view/theme/custom_theme/template/module/[bestseller.tpl,featured.tpl,<br />latest.tpl,special.tpl]</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>addToCart(</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your respective custom template file.</li>
					<li>Do the same for line 66 &amp; 70(optional).</li>
					<li>If quantity set drop down list or table is not showing on product page, open and edit <span class="code">/vqmod/xml/myoc_gqs.xml</span></li>
					<li>Search for line 78:
						<div class="info code"><pre>
&lt;search position=&quot;before&quot; index=&quot;1&quot;&gt;&lt;![CDATA[name=&quot;quantity&quot;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <span class="code">/catalog/view/theme/custom_theme/template/product/product.tpl</span> file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>name=&quot;quantity&quot;</pre></div>
					</li>
					<li>If not, you need to modify the text to match exactly with the code that exists in your custom template <span class="code">product.tpl</span> file.</li>
					<li>Do the same for line 84 &amp; 88.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'SHOW', 'ALTER', 'RENAME' and 'DROP' tables in your MySQL database.</p>

				<p class="q">Q: Extension is not working or not showing correctly after installation.</p>
				<p class="ans">A: Please make sure the following:
					<ol><li>vQmod is installed and working properly on your store.</li>
						<li>Make sure you have set the extension settings properly in your admin. Please see Usage > Creating a Quantity Set.</li>
						<li>If you are using a custom template, you might require to customize the extension. Please see Customization > Custom Template.</li>
					</ol>
				</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Global Quantity from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on the <strong>Uninstall</strong> button for <strong>Global Quantity</strong> module. <strong>WARNING:</strong> All quantity sets data will be erased.</li>
					<li>Remove the following 9 files from your store. This step is optional.
						<ol type="i">
							<li>/admin/controller/module/myocglobalqty.php</li>
							<li>/admin/language/english/module/myocglobalqty.php</li>
							<li>/admin/model/myoc/globalqty.php</li>
							<li>/admin/view/template/module/myocglobalqty_form.tpl</li>
							<li>/admin/view/template/module/myocglobalqty_list.tpl</li>
							<li>/catalog/controller/myoc/globalqty.php</li>
							<li>/catalog/language/english/myoc/globalqty.php</li>
							<li>/catalog/view/theme/default/template/myoc/globalqty.tpl</li>
							<li>/system/library/myoc_globalqty.xml</li>
							<li>/vqmod/xml/myoc_gqs.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version 1.6.8</h3>
				<div class="info"><p>Release Date: <strong>25th November 2016</strong>
					<ol>
						<li>Support for OCMOD installation option</li>
						<li>Support for <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=11466" target="_blank">Wholesale Price List Pro</a> extension compatibility</li>
					</ol></p></div>
				<h3>Version 1.6.7</h3>
				<div class="info"><p>Release Date: <strong>3rd November 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.x</li>
					</ol></p></div>
				<h3>Version 1.6.6</h3>
				<div class="info"><p>Release Date: <strong>3rd April 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.0.x</li>
					</ol></p></div>
				<h3>Version 1.6.5</h3>
				<div class="info"><p>Release Date: <strong>3rd March 2016</strong>
					<ol>
						<li>Fixed integration with Custom Unit extension.</li>
					</ol></p></div>
				<h3>Version 1.6.4</h3>
				<div class="info"><p>Release Date: <strong>15th January 2016</strong>
					<ol>
						<li>Fixed caching issue with logged in customer group.</li>
						<li>Support for latest OpenCart v2.1.0.x</li>
					</ol></p></div>
				<h3>Version 1.6.3</h3>
				<div class="info"><p>Release Date: <strong>7th September 2015</strong>
					<ol>
						<li>Fixed vQmod conflict with Custom Unit extension.</li>
					</ol></p></div>
				<h3>Version 1.6.2</h3>
				<div class="info"><p>Release Date: <strong>29th June 2015</strong>
					<ol>
						<li>Fixed cache no refreshing for multistore.</li>
					</ol></p></div>
				<h3>Version 1.6.1</h3>
				<div class="info"><p>Release Date: <strong>13th April 2015</strong>
					<ol>
						<li>Fixed order quantity exceeding max quantity set due to customer login bug</li>
						<li>Added persistent quantity set across store products</li>
					</ol></p></div>
				<h3>Version 1.6</h3>
				<div class="info"><p>Release Date: <strong>26th November 2014</strong>
					<ol>
						<li>Added support for latest OpenCart v2.0</li>
						<li>Added thousand decimal selection</li>
						<li>Added default discount list view control</li>
					</ol></p></div>
				<h3>Version 1.5.2</h3>
				<div class="info"><p>Release Date: <strong>28th October 2013</strong>
					<ol>
						<li>product.tpl template related products bug fix</li>
					</ol></p></div>
				<h3>Version 1.5.1</h3>
				<div class="info"><p>Release Date: <strong>12th August 2013</strong>
					<ol>
						<li>Support for latest OpenCart v1.5.6.</li>
					</ol></p></div>
				<h3>Version 1.5</h3>
				<div class="info"><p>Release Date: <strong>21st July 2013</strong>
					<ol>
						<li>Quantity drop-down available for product list pages such as Category, Manufacturer Info, Search, Special, Related Products,  &amp; modules such Bestsellers, Featured, Latest, Special.</li>
						<li>Added Price per Item column.</li>
					</ol></p></div>
				<h3>Version 1.4.2</h3>
				<div class="info"><p>Release Date: <strong>28th February 2013</strong>
					<ol>
						<li>Support for latest OpenCart v1.5.5.x.</li>
					</ol></p></div>
				<h3>Version 1.4.1</h3>
				<div class="info"><p>Release Date: <strong>13th October 2012</strong>
					<ol>
						<li>Able to copy existing Global Quantity entry.</li>
					</ol></p></div>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>2nd July 2012</strong>
					<ol>
						<li>Product category supported.</li>
						<li>Multi customer groups supported.</li>
						<li>Multi stores supported.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>21st March 2012</strong>
					<ol>
						<li>Fixed cart not displaying drop down for non-default customer group.</li>
						<li>Added support for OpenCart 1.5.2.x.</li>
					</ol></p></div>
				<h3>Version 1.2.1</h3>
				<div class="info"><p>Release Date: <strong>23rd October 2011</strong>
					<ol>
						<li>Added support for OpenCart 1.5.1.3</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>12th September 2011</strong>
					<ol>
						<li>Added Show Price Estimate.</li>
						<li>Added Show Discount(%).</li>
						<li>Added support for OpenCart 1.5.1.2</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>28th June 2011</strong>
					<ol>
						<li>Added Customer Group support.</li>
						<li>Added table view style.</li>
						<li>Added support for OpenCart 1.5.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>21st April 2011</strong>
					<ol>
						<li>Global Quantity released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1886" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1886</a></p>
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
