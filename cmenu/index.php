<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Custom Menu Readme - by Opencart.my</title>
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
			<h1>Custom Menu</h1>
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
				<p>Thank you for purchasing Custom Menu extension!</p>
				<p>This document contains information for Custom Menu extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<div class="info">
					<p><strong>NEW(June 2018): </strong> <a href="../custommenu" target="_blank">v2 for OpenCart v3.0.x Documentation</a></p>
				</div>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Custom Menu</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=6074" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=6074</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.7.7</td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">9th February 2017</td>
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
							<td class="vals">OpenCart v2.3.0.x: <a href="http://demo.opencart.my/cmenu2" target="_blank">demo.opencart.my/cmenu2</a><br />
								Admin Login: <a href="http://demo.opencart.my/cmenu2/admin/index.php?route=module/myoccmenu" target="_blank">demo.opencart.my/cmenu2/admin</a><br />
								OpenCart v1.5.6.x: <a href="http://demo.opencart.my/cmenu" target="_blank">demo.opencart.my/cmenu</a><br />
								Admin Login: <a href="http://demo.opencart.my/cmenu/admin/index.php?route=module/myoccmenu" target="_blank">demo.opencart.my/cmenu/admin</a><br />
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
				<p>Allow store owner to add own custom links in the top menu.</p>
				<h3>What's New in v1.7</h3>
				<ol>
					<li>Added shortcut links for Manufacturers (Brands).</li>
					<li>Added support for latest OpenCart v2.0.</li>
					<li>Added language as criteria.</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Any type of link can be added including internal and external links.</li>
					<li>Custom links appear side by side with existing category links.</li>
					<li>Custom links can be sorted with existing category links.</li>
					<li>Custom link can be a child of another custom link or an existing category link.</li>
					<li>Custom link can be limited to certain customer groups.</li>
					<li>Custom link can be limited to certain languages.</li>
					<li>Multi languages supported.</li>
					<li>Multistore supported.</li>
					<li>SEO URL supported.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<h3>Prerequisite</h3>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
					<li>Skip to <em>Install</em> only if vQmod is installed and working on your store.</li>
					<li>Requires vQmod 2.4.1 minimum. (vQmod 2.5.1 required for OpenCart v2.0.2.0) Get it from here: <a href="http://code.google.com/p/vqmod/">http://code.google.com/p/vqmod/</a></li>
					<li>Follow instruction in <a href="http://code.google.com/p/vqmod/wiki/Install_OpenCart">http://code.google.com/p/vqmod/wiki/Install_OpenCart</a></li>
				</ol>
				<h3>Install</h3>
				<ol>
					<li>Copy all contents in 'upload' folder into your store. No files will be overridden.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Install</strong> button for <strong>Custom Menu</strong> module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for <strong>Custom Menu</strong>.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Click on the <strong>Add New</strong> button to start creating custom links.
						<div class="screenshot"><img src="resource/usage_addnew.png" /></div>
					</li>
					<li>Please see Usage &gt; Creating a Link for further info.</li></li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<p>Please follow the steps below if you are upgrading from a previous Custom Menu version.</p>
				<ol>
					<li>Make sure vQmod is at least v2.4.1. (vQmod 2.5.1 required for OpenCart v2.0.2.x)</li>
					<li>Copy all contents in 'upload' folder into your store. Only extension files of previous version will be replaced.</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Edit</strong> button for <strong>Custom Menu</strong> module. At this point, the upgrade will be done automatically in the background.</li>
					<li>There's no need to uninstall and reinstall the extension. All previously saved link data will be retained.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>
				
				<h3>Creating a Link</h3>
				<p>Click <strong>Insert</strong> button to create a new custom link.</p>
				<h4>Name</h4>
				<div class="screenshot"><img src="resource/usage_name.png" /></div>
				<p>Name of link. This field is required.</p>

				<h4>Link</h4>
				<div class="screenshot"><img src="resource/usage_link.png" /></div>
				<p>Insert custom link here. It is recommended to include <em>http://</em> in a link. Examples: http://www.amazon.com, http://gmail.google.com</p>
				<p>To create a false or empty link, just insert a hash '#' symbol.</p>
				<p>Alternatively, you can use the shortcut link to insert internal link to your store. Just select from the drop down list of Routes, Informations, Categories, Products(select a category first), &amp; Manufacturers and the link will be automatically inserted into the link text field above it.</p>

				<h4>SEO URL</h4>
				<p>Links will be automatically displayed as SEO URL if it's available and enabled in your store settings.</p>

				<h4>Category Links</h4>
				<p>Category links can still be managed under Catalog > Categories in your admin. You can remove all original category links by navigating to Catalog > Categories > [ <u>Edit</u> ] any unwanted category > under Data tab > uncheck <strong>Top</strong> checkbox > Save.</p>

				<h4>Parent Link</h4>
				<div class="screenshot"><img src="resource/usage_parent_link.png" /></div>
				<p>Select a parent link if you want to make this link appears as a child link.</p>
				<p>Example result:</p>
				<div class="screenshot"><img src="resource/eg_parent_link.png" /></div>

				<h4>Parent Category</h4>
				<div class="screenshot"><img src="resource/usage_parent_category.png" /></div>
				<p>Select a parent category link if you want to make this link appears as a child link under existing top category link. Can be set together with Parent Link.</p>
				<p>Example result:</p>
				<div class="screenshot"><img src="resource/eg_parent_category.png" /></div>

				<h4>Columns</h4>
				<div class="screenshot"><img src="resource/usage_column.png" /></div>
				<p>Number of columns for child links. Works just like the Column setting in category setting. Only relevant for top links without any parent link.</p>
				<p>Example result:</p>
				<div class="screenshot"><img src="resource/eg_column.png" /></div>

				<h4>Open link in new window</h4>
				<div class="screenshot"><img src="resource/usage_popup.png" /></div>
				<p>Set link to open in a new window.</p>

				<h4>Show in Top Navigation</h4>
				<div class="screenshot"><img src="resource/usage_top.png" /></div>
				<p>Set link to appear on the top navigation main menu.</p>

				<h4>Show in Category Module</h4>
				<div class="screenshot"><img src="resource/usage_in_module.png" /></div>
				<p>Set link to appear on the Category module.</p>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/usage_login.png" /></div>
				<p>Set link to appear only when customers are logged in.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>Set link to appear only to selected customer groups.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Set link to appear only to selected stores.</p>

				<h4>Sort Order</h4>
				<div class="screenshot"><img src="resource/usage_sort_order.png" /></div>
				<p>Enter a numerical value to sort link by order. This value is affected by the sort order in categories. This means that you can sort a link in any order in the top menu even between existing categories.</p>
				<p>Alternatively, links can be easily sorted on the previous link list page.</p>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or disable the current link.</p>

				<h3>Save</h3>
				<div class="screenshot"><img src="resource/usage_save.png" /></div>
				<p>Please click the <strong>Save</strong> or <strong>Save &amp; Exit</strong> button after you are done with the settings.</p>

				<h3>Managing Links</h3>
				<p>After saving your links, you can manage them with the buttons on the top right corner of the Custom Menu list.</p>
				<div class="screenshot"><img src="resource/usage_manage.png" /></div>
				<h4>Viewing</h4>
				<p>Click on the table headers to sort the links by Name and Sort Order in the table.</p>
				<div class="screenshot"><img src="resource/usage_manage_header.png" /></div>
				<h4>Copy</h4>
				<div class="screenshot"><img src="resource/usage_manage.png" /></div>
				<p>To make a copy of your links, simply select them by checking the checkbox and click the <strong>Copy</strong> button.</p>
				<h4>Delete</h4>
				<div class="screenshot"><img src="resource/usage_delete.png" /></div>
				<p>To delete your links, simply select them by checking the checkbox and click the <strong>Delete</strong> button.</p>
				<h4>Sorting</h4>
				<p>To set the sort order of your links, simply enter numerical values into the text field under the <strong>Sort Order</strong> column.</p>
				<div class="screenshot"><img src="resource/usage_manage_sort.png" /></div>
				<p>When you are done, click the <strong>Save</strong> button to save all sort order values.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Customization</h2>
				<h3>Custom Language</h3>
				<div class="screenshot"><img src="resource/usage_name.png" /></div>
				<p>Custom Menu readily supports multi languages. Once you have setup custom languages for your store, Custom Menu will automatically accepts custom language for link name, and displays the appropriate language on your store front depending on chosen language.</p>

				<h3>Custom Template (Only for Custom Menu v1.4 and below)</h3>
				<p>The following steps provide a basic guide in customizing Custom Menu for your custom template on your store(Only for v1.4 and below. In v1.5 there is no longer required to customize any template)</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>Copy the folder 'myoc' in /catalog/view/theme/default/template/ and paste it into /catalog/view/theme/custom_theme/template/</li>
					<li>Open and edit the file you just copied to: /catalog/view/theme/custom_theme/template/myoc/cmenu.tpl</li>
					<li>Modify the html to suit your custom template.</li>
					<li>If your custom theme supports 3rd level navigation, remove or comment out the css on line 4 in cmenu.tpl:
						<div class="info code"><pre>display: none; /* hide 3rd level navigation for OpenCart default theme */</pre></div>
					</li>
					<li>If your custom theme supports active navigation, Custom Menu uses 'current' as class name for active links. Rename it if required on line 10, 18, and 26 in cmenu.tpl.</li>
					<li>If custom links is not showing on top menu, open and edit /vqmod/xml/myoc_cmenu.xml</li>
					<li>Search for line 15:
						<div class="info code"><pre>&lt;search position=&quot;replace&quot;&gt;&lt;![CDATA[&lt;?php if ($categories) { ?&gt;]]&gt;&lt;/search&gt;</pre></div>
					</li>
					<li>Make sure in your custom template /catalog/view/theme/custom_theme/template/common/header.tpl file that the text in between the <span class="code">&lt;search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;?php if ($categories) { ?&gt;</pre></div>
					</li>
					<li>If not, you need to modify the text into something that exists in your custom template file.</li>
				</ol>

				<h3>Display Product Count (only for OpenCart v1.5.3.1 and lower)</h3>
				<p>If you are using OpenCart v1.5.3.1 and older, product count on category links will not be available.</p>
				<p>To display product count on category links, please perform the following steps.</p>
				<ol>
					<li>Open and edit /vqmod/xml/myoc_cmenu.xml</li>
					<li>Search for line 101:
						<div class="info code"><pre>'name'    =&gt; $cmenu_gchild['name'] . ($this-&gt;config-&gt;get('config_product_count') ? ' (' . $product_total . ')' : ''),</pre></div>
					</li>
					<li>Modify it to:
						<div class="info code"><pre>'name'    =&gt; $cmenu_gchild['name'] . ' (' . $product_total . ')',</pre></div>
					</li>
					<li>Search for line 133:
						<div class="info code"><pre>'name'     =&gt; $cmenu_child['name'] . ($this-&gt;config-&gt;get('config_product_count') ? ' (' . $product_total . ')' : ''),</pre></div>
					</li>
					<li>Modify it to:
						<div class="info code"><pre>'name'     =&gt; $cmenu_child['name'] . ' (' . $product_total . ')',</pre></div>
					</li>
					<li>Save the modified file.</li>
				</ol>
				<p>For OpenCart 1.5.4 and above, simply enable or disable Category Product Count under store Settings > Option tab.</p>
			</div>
			<div class="chapter">
				<h2 id="chap7">Troubleshoot</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'DELETE', 'ALTER', and 'SHOW' tables in your MySQL database.</p>
			
				<p class="q">Q: Extension is not working after installation.</p>
				<p class="ans">A: Make sure vQmod is installed. If you are using a custom template, you might require to customize the extension. Please see Customization > Custom Template.</p>

				<p class="q">Q: Custom links are not showing on top menu.</p>
				<p class="ans">A: Make sure you have set the extension settings properly in your admin. Please see Usage > Creating a Link.</p>

				<p class="q">Q: I want to remove all the original category links.</p>
				<p class="ans">A: Login to admin > Catalog > Categories > [ <u>Edit</u> ] the unwanted category > under Data tab > uncheck 'Top' checkbox > <strong>Save</strong>.</p>

				<p class="q">Q: Product count is not showing on category links.</p>
				<p class="ans">A: Please see Display Product Count under Customization section on this page.</p>
			</div>
			<div class="chapter">
				<h2 id="chap8">Uninstall</h2>
				<p>Please follow the steps below to uninstall Custom Menu from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on [ <u>Uninstall</u> ] for <strong>Custom Menu</strong> module. <strong>WARNING:</strong> All custom links data will be erased.</li>
					<li>Remove the following files from your store.
						<ol type="i">
							<li>/admin/controller/module/myoccmenu.php</li>
							<li>/admin/language/english/module/myoccmenu.php</li>
							<li>/admin/model/myoc/cmenu.php</li>
							<li>/admin/view/template/myoc/cmenu_form.tpl</li>
							<li>/admin/view/template/myoc/cmenu_list.tpl</li>
							<li>/catalog/controller/myoc/cmenu.php (Custom Menu v1.4 and below)</li>
							<li>/catalog/model/myoc/cmenu.php</li>
							<li>/catalog/view/theme/default/template/myoc/cmenu.tpl (Custom Menu v1.4 and below)</li>
							<li>/vqmod/xml/myoc_cmenu.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap9">Changelog</h2>
				<h3>Version v1.7.7</h3>
				<div class="info"><p>Release Date: <strong>9th February 2017</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.x</li>
					</ol></p></div>
				<h3>Version v1.7.6</h3>
				<div class="info"><p>Release Date: <strong>23rd April 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.2.0.0</li>
					</ol></p></div>
				<h3>Version v1.7.5</h3>
				<div class="info"><p>Release Date: <strong>12th January 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.1.0.x</li>
					</ol></p></div>
				<h3>Version v1.7.3</h3>
				<div class="info"><p>Release Date: <strong>1st June 2015</strong>
					<ol>
						<li>Fixed admin empty language error.</li>
						<li>Added pre-select default language for new entry.</li>
					</ol></p></div>
				<h3>Version v1.7.2</h3>
				<div class="info"><p>Release Date: <strong>25th April 2015</strong>
					<ol>
						<li>Added language as criteria.</li>
					</ol></p></div>
				<h3>Version v1.7.1</h3>
				<div class="info"><p>Release Date: <strong>13th February 2015</strong>
					<ol>
						<li>Fixed non-"top" category not appearing in category module.</li>
					</ol></p></div>
				<h3>Version v1.7</h3>
				<div class="info"><p>Release Date: <strong>29th October 2014</strong>
					<ol>
						<li>Added shortcut links for Manufacturers (Brands).</li>
						<li>Added support for latest OpenCart v2.0.</li>
					</ol></p></div>
				<h3>Version v1.6</h3>
				<div class="info"><p>Release Date: <strong>14th January 2014</strong>
					<ol>
						<li>Added "Show in Top Navigation" setting.</li>
						<li>Fix non "Top" categories not appearing on Category module.</li>
					</ol></p></div>
				<h3>Version v1.5</h3>
				<div class="info"><p>Release Date: <strong>16th October 2013</strong>
					<ol>
						<li>Works on any custom theme as long as they are using the default categories as menu items.</li>
						<li>Custom links can be set to appear in Category module.</li>
					</ol></p></div>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>5th February 2013</strong>
					<ol>
						<li>Added Category shortcut link.</li>
						<li>3rd level navigation(for custom themes that supports 3 levels navigation).</li>
						<li>Added 'current' class for active menu link(for custom themes that supports active navigation link).</li>
					</ol></p></div>
				<h3>Version 1.3.1</h3>
				<div class="info"><p>Release Date: <strong>10th October 2012</strong>
					<ol>
						<li>Added URL validation check.</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>16th September 2012</strong>
					<ol>
						<li>SEO URL supported.</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>27th June 2012</strong>
					<ol>
						<li>Empty links can be created.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>21st April 2012</strong>
					<ol>
						<li>Link can be set to open in a new window.</li>
						<li>Links can be sorted on a single page in admin.</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>20th April 2012</strong>
					<ol>
						<li>Custom Menu released.</li>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=6074" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=6074</a></p>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="footer" class="clear">
		<p>Copyright &copy; 2012-<?php echo date('Y');?> Opencart.my. All rights reserved.</p>
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