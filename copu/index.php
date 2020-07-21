<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Customer Order Product Upload Readme - by Opencart.my</title>
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
			<h1>Customer Order Product Upload</h1>
			<ul class="links">
				<li><a name="chap1">Welcome</a></li>
				<li><a name="chap2">Features</a></li>
				<li><a name="chap3">Installation</a></li>
				<li><a name="chap4">Upgrade</a></li>
				<li><a name="chap5">Usage</a></li>
				<li><a name="chap6">Retrieving Uploaded Files</a></li>
				<li><a name="chap7">Customization</a></li>
				<li><a name="chap8">Troubleshoot / FAQ</a></li>
				<li><a name="chap9">Uninstall</a></li>
				<li><a name="chap10">Changelog</a></li>
				<li><a name="chap11">Support</a></li>
			</ul>
		</div>
		<div id="content" class="fleft">
			<div class="chapter">
				<h2 id="chap1">Welcome</h2>
				<p>Thank you for purchasing Customer Order Product Upload extension!</p>
				<p>This document contains information for Customer Order Product Upload extension. If you have any questions that are not found in this readme document, please look for contact information in the support section.</p>
				<h3>Extension info</h3>
				<div class="info">
					<p><strong>Customer Order Product Upload</strong></p>
					<table>
						<tr>
							<td class="attrib">Download Page:</td>
							<td class="vals"><a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1887" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1887</a></td>
						</tr>
						<tr>
							<td class="attrib">Version: </td>
							<td class="vals">1.6.9 (OCMOD release)</td></tr>
						<tr>
							<td class="attrib">Release Date: </td>
							<td class="vals">26th November 2016</td>
						</tr>
						<tr>
							<td class="attrib">OpenCart version<br />compatibility:</td>
							<td class="vals">
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
							<td class="vals">OpenCart v2.3.0.x: <a href="http://demo.opencart.my/copu" target="_blank">demo.opencart.my/copu</a><br />
								Admin Login: <a href="http://demo.opencart.my/copu/admin/index.php?route=module/myoccopu" target="_blank">demo.opencart.my/copu/admin</a><br />
								Username: demo<br />
								Password: demo<br />
								OpenCart v1.5.6.x: <a href="http://demo.opencart.my/copu2" target="_blank">demo.opencart.my/copu2</a><br />
								Admin Login: <a href="http://demo.opencart.my/copu2/admin" target="_blank">demo.opencart.my/copu2/admin</a><br />
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
				<p>Extends the basic upload functionality in OpenCart to customer account, in an order, and on product page with many useful features including image preview, progress bar, and file size display.</p>
				<h3>What's New in v1.6.3 / v1.6.2</h3>
				<ol>
					<li>Fixed customer account upload error</li>
					<li>Fixed large image file upload preview</li>
					<li>Fixed same filename issue in image cache</li>
					<li>Fixed custom template not found issue</li>
					<li>Fixed image preview crop off issue</li>
					<li>Fixed image replace issue</li>
					<li>Improved failed file deletion alert message</li>
				</ol>
				<h3>Highlights</h3>
				<ol>
					<li>Enable customers to upload files to:
						<ul>
							<li>own customer account</li>
							<li>an order</li>
							<li>products</li>
						</ul></li>
					<li>Thumbnail preview and pop-up available for image file type uploads.</li>
					<li>Product image can be replaced with uploaded image file.</li>
					<li>Progress bar available to indicate uploading progress.</li>
					<li>Supports multiple files with drag &amp; drop ability.</li>
					<li>Display HTML text upload instruction for customers.</li>
					<li>All files uploaded by customer can be previewed and downloaded from the admin page easily.</li>
					<li>Added Email Alert for customer order history and account upload.</li>
					<li>Added Send Files as Email Attachments feature.</li>
					<li>Enable to set the following rules:
						<ul>
							<li>Maximum and minimum number of files</li>
							<li>File size limit</li>
							<li>File types and MIME(optional)</li>
							<li>Customer group</li>
							<li>Store</li>
						</ul></li>
					<li>Added security features:
						<ul>
							<li>MIME check to reduce risk of hidden script in files</li>
							<li>Uploaded files are stored in masked filename to prevent unauthorized access</li>
						</ul></li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap3">Installation</h2>
				<h3>Prerequisite</h3>
				<ol>
					<li>OpenCart version must be a compatible version. Please refer to the 'OpenCart version compatibility' list stated above in the Extension Info.</li>
					<li>Skip to <em>Install</em> only if vQmod is installed and working on your store.</li>
					<li>Requires vQmod 2.4.1 minimum.(v2.5.1 for OpenCart v2.0.x) Get it from here: <a href="https://github.com/vqmod/vqmod/releases">https://github.com/vqmod/vqmod/releases</a></li>
					<li>Follow instruction in <a href="https://github.com/vqmod/vqmod/wiki/Installing-vQmod-on-OpenCart">https://github.com/vqmod/vqmod/wiki/Installing-vQmod-on-OpenCart</a></li>
				</ol>
				<h3>Important Bug Fix for OpenCart v2.0.2.0</h3>
				<p>There's a bug in OpenCart v2.0.2.0 that will affect Customer Order Product Upload extension. Please do the following to fix the bug.</p>
				<ol>
					<li>Visit the official OpenCart source code repository <a href="https://github.com/opencart/opencart/blob/master/upload/catalog/model/account/customer.php" target="_blank">https://github.com/opencart/opencart/blob/master/upload/catalog/model/account/customer.php</a> and download this file(Click on RAW button).</li>
					<li>Upload the file <em>customer.php</em> to your OpenCart store host <em>/catalog/model/account/customer.php</em> and replace it.</li>
				</ol>
				<h3>Install</h3>
				<ol>
					<li>Upload all contents from <strong>upload</strong> folder into your OpenCart store root folder with an FTP software.
						<div class="screenshot"><img src="resource/install_copy.png" /></div>
					</li>
					<li>For OpenCart v1.5.x, the following file will be replaced if present in your store:
						<ul>
							<li>/catalog/view/theme/default/image/remove.png</li>
						</ul>
					</li>
					<li>For OpenCart v2.0.x, no files will be replaced.</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Install</strong> button for <strong>Customer Order Product Upload</strong> module.
						<div class="screenshot"><img src="resource/install_module.png" /></div>
					</li>
				</ol>
				<h3>Setup</h3>
				<ol>
					<li>Click on the <strong>Edit</strong> button for <strong>Customer Order Product Upload</strong> to set upload settings.
						<div class="screenshot"><img src="resource/install_edit.png" /></div>
					</li>
					<li>Please see <strong>Usage</strong> section for further instructions.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap4">Upgrade</h2>
				<p>Please follow the steps below if you are upgrading from a previous Customer Order Product Upload version.</p>
				<h3>Upgrading from Customer Order Product Upload v1.6.x to v1.6.5</h3>
				<ol>
					<li>Copy all contents from <strong>upload</strong> folder into your store. Only files from previous version of Customer Order Product Upload will be replaced.</li>
				</ol>
				<h3>Upgrading from Customer Order Product Upload v1.5.x to v1.6-beta</h3>
				<p>Fresh install of extension is required for OpenCart v2.0.x.</p>
				<h3>Upgrading from Customer Order Product Upload v1.5.x to v1.5.5</h3>
				<ol>
					<li>Copy all contents from <strong>upload</strong> folder into your store. Only files from previous version of Customer Order Product Upload will be replaced.</li>
					<li>That's all. There's no need to uninstall or re-install the extension from the admin module page.</li>
				</ol>
				<h3>Upgrading from Customer Order Product Upload v1.4.x</h3>
				<p><strong>Attention:</strong> All existing file upload settings data from previous version will be lost. But uploaded files and data will be retained and accessible as before from the admin. However, as a precautionary step, please <strong>backup</strong> your store database and files before continuing this upgrade process.</p>
				<ol>
					<li>Copy all contents from <strong>upload</strong> folder into your store. Only files from previous version of Customer Order Product Upload will be replaced.</li>
					<li>Login to your admin page, navigate to Extensions &gt; Modules &gt; Customer Order Product Upload &gt; [ <u>Edit</u> ].</li>
					<li>Setup your upload settings again. You can refer to the <strong>Usage</strong> section if required.</li>
				</ol>
				<h3>Upgrading from Customer Order Product Upload v1.3 and lower</h3>
				<ol>
					<li>Copy all contents from <strong>upload</strong> folder into your store. Only files from previous version of Customer Order Product Upload will be replaced.</li>
					<li>Remove the following folders from your store:
						<ol type="i">
							<li>/admin/controller/upload/</li>
							<li>/admin/language/english/upload/</li>
							<li>/admin/model/upload/</li>
							<li>/admin/view/template/upload/</li>
						</ol>
					</li>
					<li>Remove the following files from your store:
						<ol type="i">
							<li>/admin/view/image/upload.png</li>
							<li>/catalog/controller/account/upload.php</li>
							<li>/catalog/language/english/account/upload.php</li>
							<li>/catalog/model/account/upload.php</li>
							<li>/catalog/model/checkout/upload.php</li>
							<li>/catalog/view/theme/default/template/account/upload.tpl</li>
							<li>/system/helper/upload.php</li>
							<li>/vqmod/xml/copu.xml</li>
						</ol>
					</li>
					<li>Login to your admin page, go to Extensions &gt; Modules, and click on the <strong>Install</strong> for <strong>Customer Order Product Upload</strong> module. At this point, the upgrade will be done automatically in the background.</li>
					<li>Click on the <strong>Edit</strong> for <strong>Customer Order Product Upload</strong> module to setup your upload settings again. You can refer to the <strong>Usage</strong> section if required.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap5">Usage</h2>

				<h3>Customer Upload</h3>
				<p>Customer Upload enables customers to upload files to their account.</p>
				<div class="screenshot"><img src="resource/eg_customer_upload.png" /></div>
				<p>Click on <strong>Customer</strong> tab button to reveal Customer Upload settings.</p>
				<div class="screenshot"><img src="resource/usage_customer_tab.png" /></div>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or disable customer upload.</p>

				<h4>Enable Upload in Registration</h4>
				<div class="screenshot"><img src="resource/usage_upload_register.png" /></div>
				<p>Enable file upload on new customer registration page.</p>

				<h4>Enable Email Alert</h4>
				<div class="screenshot"><img src="resource/usage_customer_email_alert.png" /></div>
				<p>Enable Admin email alert whenever a file is uploaded by a customer from their account upload page.</p>

				<h4>Enable Drag &amp; Drop</h4>
				<div class="screenshot"><img src="resource/usage_drag_drop.png" /></div>
				<p>Enable files to be dragged from desktop &amp; dropped into the upload area drop zone.</p>

				<h4>Enable Multiple/Batch Files Upload</h4>
				<div class="screenshot"><img src="resource/usage_multiple.png" /></div>
				<p>Enable multiple files selection upon browsing.</p>

				<h4>Maximum Number of File Upload</h4>
				<div class="screenshot"><img src="resource/usage_max_upload.png" /></div>
				<p>Maximum number of files allowed to upload.</p>

				<h4>Minimum Required Upload</h4>
				<div class="screenshot"><img src="resource/usage_minimum_upload.png" /></div>
				<p>Minimum number of files required to upload. Customer will not be able to proceed with registration if minimum number of uploaded files is not met.</p>

				<h4>Number of Files per Page</h4>
				<div class="screenshot"><img src="resource/usage_files_per_page.png" /></div>
				<p>Number of files per page in customer's account upload page.</p>

				<h4>Maximum File Size</h4>
				<div class="screenshot"><img src="resource/usage_max_filesize.png" /></div>
				<p>Set a maximum file size limit for file upload.</p>
				<p>Please note that larger file size limit may not work as file size limit is ultimately depending on server configuration. Please see <strong>Troubleshoot / FAQ</strong> section for more details.</p>

				<h4>Maximum Image Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_max_dimension.png" /></div>
				<p>Set a maximum image dimension limit for image file types. Insert 0 x 0 to disable image dimension limit.</p>

				<h4>Image Color Channel</h4>
				<div class="screenshot"><img src="resource/usage_color_channel.png" /></div>
				<p>Select between <strong>RGB</strong> &amp; <strong>CMYK</strong> as a color channel restriction for image file types.</p>
				<p>Select <strong>Any</strong> to disable color channel restriction.</p>

				<h4>Maximum Filename Cut-off Length</h4>
				<div class="screenshot"><img src="resource/usage_max_filename_length.png" /></div>
				<p>Set a maximum length for filenames to be displayed on store front in number of characters.</p>
				<p>Actual physical filename on server will not be shorten.</p>

				<h4>File Upload Folder</h4>
				<div class="screenshot"><img src="resource/usage_customer_file_location.png" /></div>
				<p>Set a custom folder path to store customer's file uploads. Relative to store root folder.</p>
				<ul>
					<li>If left blank, OpenCart's default <span class="code">DIR_DOWNLOAD</span> path in <em>/config.php</em> ("/download/" folder will be used for OpenCart v1.5.x, while "/system/upload/" will be used for OpenCart v2.0.x).</li>
					<li>NO trailing slash(/) required.</li>
					<li>Use "%customer_id%" to organize customer's uploads into different folders according to their <span class="code">customer_id</span>.</li>
					<li><strong>Examples:</strong>
						<ul>
							<li>photos</li>
							<li>upload/files</li>
							<li>images/%customer_id%</li>
							<li>uploads/%customer_id%/file</li>
						</ul></li>
				</ul>

				<h4>Send Files as Email Attachments</h4>
				<div class="screenshot"><img src="resource/usage_email_attachment.png" /></div>
				<p>Include the customer uploaded files in the admin email alert as attachment files.</p>
				<p>You will first need to enable "New Account Alert Email" in System &gt; Settings &gt; Your Store [Edit] &gt; Mail tab(OCv1.5.x) or Option tab(OCv2.0.x).
				<p>(Please check with your hosting provider if sending out emails with attachment is not allowed.)</p>

				<h4>Upload Instruction</h4>
				<div class="screenshot"><img src="resource/usage_html_editor.png" /></div>
				<p>Insert HTML text to display above the upload area. Useful for providing uploading instruction or any other messages to store customers.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_customer_html_editor.png" /></div>

				<h4>Preview Uploaded Image</h4>
				<div class="screenshot"><img src="resource/usage_preview.png" /></div>
				<p>Display a thumbnail preview of uploaded image file type. A larger pop-up image is also available when customer clicks on the thumbnail.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_customer_preview.png" /></div>

				<h4>Image Preview Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_preview_dimension.png" /></div>
				<p>Set the width and height value in pixels for image preview dimension size.</p>

				<h4>Allowed File Type</h4>
				<div class="screenshot"><img src="resource/usage_filetype_select.png" /></div>
				<p>Select the allowed file types for files upload.</p>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/usage_customer_login.png" /></div>
				<p>If set to Yes, only logged in customer are allowed to upload files.</p>
				<p>In this case for Customer Upload, 'No' option has been disabled because only logged in customer are allowed to upload files to their account.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>Select customer groups that are allowed to upload files <em>if</em> <strong>Login Required</strong> is set to Yes.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Enable file upload to selected stores only.</p>

				<h3>Order Upload</h3>
				<p>Order Upload enables customers to upload files to an order on cart page.</p>
				<div class="screenshot"><img src="resource/eg_order_upload.png" /></div>
				<p>Click <strong>Order</strong> tab button to reveal Order Upload settings.</p>
				<div class="screenshot"><img src="resource/usage_order_tab.png" /></div>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or disable order upload.</p>

				<h4>Enable Upload in Customer Orders History</h4>
				<div class="screenshot"><img src="resource/usage_order_history_upload.png" /></div>
				<p>If set to Yes, customer will be able to upload additional files to their orders that have been made in customer's account Order History. This is useful in cases where missing or wrong files uploaded by customer when making their orders.</p>
				<p>For example:</p>
				<div class="screenshot"><img src="resource/eg_order_history_upload.png" /></div>

				<h4>Customer Order History Update Status</h4>
				<div class="screenshot"><img src="resource/usage_order_history_update.png" /></div>
				<p>Select an Order Status to be used when customer uploads a file to an order in their account order history page. (Only when <strong>Enable Upload in Customer Orders History</strong> above is set to <strong>Yes</strong>.)</p>
				<p>Recommended to create a new order status(under System &gt; Localisation &gt; <strong>Order Statuses</strong>) for this so that you as a store admin will know when a customer has uploaded a new file to a particular order by its updated order status.</p>

				<h4>Enable Order History Upload Email Alert</h4>
				<div class="screenshot"><img src="resource/usage_order_history_email_alert.png" /></div>
				<p>Enable Admin email alert whenever a file is uploaded by a customer to an existing order from their account order history info page.</p>

				<h4>Enable Drag &amp; Drop</h4>
				<div class="screenshot"><img src="resource/usage_drag_drop.png" /></div>
				<p>Enable files to be dragged from desktop &amp; dropped into the upload area drop zone.</p>

				<h4>Enable Multiple/Batch Files Upload</h4>
				<div class="screenshot"><img src="resource/usage_multiple.png" /></div>
				<p>Enable multiple files selection upon browsing.</p>

				<h4>Maximum Number of File Upload</h4>
				<div class="screenshot"><img src="resource/usage_max_upload.png" /></div>
				<p>Maximum number of files allowed to upload.</p>

				<h4>Minimum Required Upload</h4>
				<div class="screenshot"><img src="resource/usage_minimum_upload.png" /></div>
				<p>Minimum number of files required to upload. Customer will not be able to proceed to Checkout if minimum number of uploaded files in an order is not met.</p>

				<h4>Maximum File Size</h4>
				<div class="screenshot"><img src="resource/usage_max_filesize.png" /></div>
				<p>Set a maximum file size limit for file upload.</p>
				<p>Please note that larger file size limit may not work as file size limit is ultimately depending on server configuration. Please see <strong>Troubleshoot / FAQ</strong> section for more details.</p>

				<h4>Maximum Image Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_max_dimension.png" /></div>
				<p>Set a maximum image dimension limit for image file types. Insert 0 x 0 to disable image dimension limit.</p>

				<h4>Image Color Channel</h4>
				<div class="screenshot"><img src="resource/usage_color_channel.png" /></div>
				<p>Select between <strong>RGB</strong> &amp; <strong>CMYK</strong> as a color channel restriction for image file types.</p>
				<p>Select <strong>Any</strong> to disable color channel restriction.</p>

				<h4>Maximum Filename Cut-off Length</h4>
				<div class="screenshot"><img src="resource/usage_max_filename_length.png" /></div>
				<p>Set a maximum length for filenames to be displayed on store front in number of characters.</p>
				<p>Actual filename will not be shorten.</p>

				<h4>File Upload Folder</h4>
				<div class="screenshot"><img src="resource/usage_order_file_location.png" /></div>
				<p>Set a custom folder path to store customer's order file uploads. Relative to store root folder.</p>
				<ul>
					<li>If left blank, OpenCart's default <span class="code">DIR_DOWNLOAD</span> path in <em>/config.php</em> ("/download/" folder will be used for OpenCart v1.5.x, while "/system/upload/" will be used for OpenCart v2.0.x).</li>
					<li>NO trailing slash(/) required.</li>
					<li>Use "%customer_id%" to organize customer's order uploads into different folders according to their <span class="code">customer_id</span>.
					<li>Use "%order_id%" to organize customer's order uploads into different folders according to the Order #ID.</li>
					<li><strong>Examples:</strong>
						<ul>
							<li>photos</li>
							<li>upload/files</li>
							<li>images/%order_id%</li>
							<li>uploads/%customer_id%/%order_id%</li>
							<li>extras/%customer_id%/%order_id%/files</li>
						</ul></li>
				</ul>

				<h4>Send Files as Email Attachments</h4>
				<div class="screenshot"><img src="resource/usage_email_attachment.png" /></div>
				<p>Include the order upload files in the admin email alert as attachment files.</p>
				<p>You will first need to enable "New Order Alert Email" in System &gt; Settings &gt; Your Store [Edit] &gt; Mail tab(OCv1.5.x) or Option tab(OCv2.0.x).
				<p>(Please check with your hosting provider if sending out emails with attachment is not allowed.)</p>

				<h4>Upload Instruction</h4>
				<div class="screenshot"><img src="resource/usage_order_html_editor.png" /></div>
				<p>Insert HTML text to display before the upload section. Useful for providing uploading instruction or any other messages for store customers.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_order_html_editor.png" /></div>

				<h4>Preview Uploaded Image</h4>
				<div class="screenshot"><img src="resource/usage_preview.png" /></div>
				<p>Display a thumbnail preview of uploaded image file type. A larger pop-up image is also available when customer clicks on the thumbnail.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_order_preview.png" /></div>

				<h4>Image Preview Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_preview_dimension.png" /></div>
				<p>Set the width and height value in pixels for image preview dimension size.</p>

				<h4>Allowed File Type</h4>
				<div class="screenshot"><img src="resource/usage_filetype_select.png" /></div>
				<p>Select the allowed file types for files upload.</p>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/usage_login.png" /></div>
				<p>If set to Yes, only logged in customer are allowed to upload files.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>Select customer groups that are allowed to upload files <em>if</em> <strong>Login Required</strong> is set to Yes.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Enable file upload to selected stores only.</p>

				<h3>Product Upload</h3>
				<p>Product Upload extends the basic 'File' type option upload functionality on product page with extra controls and useful features.</p>
				<p>Click on <strong>Product</strong> tab button to reveal Product Upload settings.</p>
				<div class="screenshot"><img src="resource/usage_product_tab.png" /></div>

				<h4>Add Product Upload</h4>
				<div class="screenshot"><img src="resource/usage_product_add.png" /></div>
				<p>Click on the <strong>(+) Add Product Upload</strong> button to add new Product Upload settings entry. You can add different product upload for different 'File' type upload option that can be added to the same or different product.</p>
				<div class="screenshot"><img src="resource/usage_product_remove.png" /></div>
				<p>Click on the <strong>(-) Upload <em>n</em>th</strong> button to remove unwanted Product Upload settings entry.</p>

				<h4>Status</h4>
				<div class="screenshot"><img src="resource/usage_status.png" /></div>
				<p>Enable or disable product upload.</p>

				<h4>Enable Drag &amp; Drop</h4>
				<div class="screenshot"><img src="resource/usage_drag_drop.png" /></div>
				<p>Enable files to be dragged from desktop &amp; dropped into the upload area drop zone.</p>

				<h4>Enable Multiple/Batch Files Upload</h4>
				<div class="screenshot"><img src="resource/usage_multiple.png" /></div>
				<p>Enable multiple files selection upon browsing.</p>

				<h4>Maximum Number of File Upload</h4>
				<div class="screenshot"><img src="resource/usage_max_upload.png" /></div>
				<p>Maximum number of files allowed to upload.</p>

				<h4>Minimum Required Upload</h4>
				<div class="screenshot"><img src="resource/usage_minimum_upload.png" /></div>
				<p>Minimum number of files required to upload. Customer will not be able to add the product to cart if minimum number of uploaded files for that option is not met.</p>

				<h4>Force Quantity</h4>
				<div class="screenshot"><img src="resource/usage_force_qty.png" /></div>
				<p>If set to Yes, the order quantity of a product will be forced to equals with the total number of files uploaded by a customer.</p>

				<h4>Maximum File Size</h4>
				<div class="screenshot"><img src="resource/usage_max_filesize.png" /></div>
				<p>Set a maximum file size limit for file upload.</p>
				<p>Please note that larger file size limit may not work as file size limit is ultimately depending on server configuration. Please see <strong>Troubleshoot / FAQ</strong> section for more details.</p>

				<h4>Maximum Image Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_max_dimension.png" /></div>
				<p>Set a maximum image dimension limit for image file types. Insert 0 x 0 to disable image dimension limit.</p>

				<h4>Image Color Channel</h4>
				<div class="screenshot"><img src="resource/usage_color_channel.png" /></div>
				<p>Select between <strong>RGB</strong> &amp; <strong>CMYK</strong> as a color channel restriction for image file types.</p>
				<p>Select <strong>Any</strong> to disable color channel restriction.</p>

				<h4>Maximum Filename Cut-off Length</h4>
				<div class="screenshot"><img src="resource/usage_max_filename_length.png" /></div>
				<p>Set a maximum length for filenames to be displayed on store front in number of characters.</p>
				<p>Actual filename will not be shorten.</p>

				<h4>File Upload Folder</h4>
				<div class="screenshot"><img src="resource/usage_product_file_location.png" /></div>
				<p>Set a custom folder path to save customer's product file uploads. Relative to store root folder.</p>
				<ul>
					<li>If left blank, OpenCart's default <span class="code">DIR_DOWNLOAD</span> path in <em>/config.php</em> ("/download/" folder will be used for OpenCart v1.5.x, while "/system/upload/" will be used for OpenCart v2.0.x).</li>
					<li>NO trailing slash(/) required.</li>
					<li>Use "%customer_id%" to organize customer's product uploads into different folders according to their <span class="code">customer_id</span>.
					<li>Use "%order_id%" to organize customer's product uploads into different folders according to the Order #ID.</li>
					<li>Use "%product_id%" to organize customer's product uploads into different folders according to each Product #ID.</li>
					<li><strong>Examples:</strong>
						<ul>
							<li>photos</li>
							<li>upload/files</li>
							<li>artwork/%product_id%</li>
							<li>images/%product_id%/%order_id%</li>
							<li>uploads/%customer_id%/%order_id%/%product_id%</li>
							<li>extras/%product_id%/files/%customer_id%</li>
						</ul></li>
				</ul>

				<h4>Send Files as Email Attachments</h4>
				<div class="screenshot"><img src="resource/usage_email_attachment.png" /></div>
				<p>Include the product upload files in the admin email alert as attachment files.</p>
				<p>You will first need to enable "New Order Alert Email" in System &gt; Settings &gt; Your Store [Edit] &gt; Mail tab(OCv1.5.x) or Option tab(OCv2.0.x).
				<p>(Please check with your hosting provider if sending out emails with attachment is not allowed.)</p>

				<h4>Upload Instruction</h4>
				<div class="screenshot"><img src="resource/usage_product_html_editor.png" /></div>
				<p>Insert HTML text to display before the upload section. Useful for providing uploading instruction or any other messages for store customers.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_product_html_editor.png" /></div>

				<h4>Preview Uploaded Image</h4>
				<div class="screenshot"><img src="resource/usage_preview.png" /></div>
				<p>Display a thumbnail preview of uploaded image file type. A larger pop-up image is also available when customer clicks on the thumbnail.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_product_preview.png" /></div>

				<h4>Image Preview Dimension (W x H)</h4>
				<div class="screenshot"><img src="resource/usage_preview_dimension.png" /></div>
				<p>Set the width and height value in pixels for image preview dimension size.</p>

				<h4>Replace Product Image</h4>
				<div class="screenshot"><img src="resource/usage_product_replace.png" /></div>
				<p>Replaces product image with uploaded image file. This only works for image file types.</p>
				<p>Example:</p>
				<div class="screenshot"><img src="resource/eg_product_replace.png" /></div>

				<h4>Allowed File Type</h4>
				<div class="screenshot"><img src="resource/usage_filetype_select.png" /></div>
				<p>Select the allowed file types for files upload.</p>

				<h4>Product Options</h4>
				<div class="screenshot"><img src="resource/usage_product_options.png" /></div>
				<p>All 'File' type options will be listed here. If any of the 'File' type options are selected, the normal file upload button of any product that contains the selected options will be replaced with this custom file upload module.</p>
				<p>Please follow the steps below to add a file type upload module on product page:</p>
				<ol>
					<li>Navigate to Catalog > Options and click the on the <strong>Add New</strong> button to create a new Option.
						<div class="screenshot"><img src="resource/usage_po_step1.png" /></div>
					</li>
					<li>Insert an Option Name and make sure to select Type as 'File'.
						<div class="screenshot"><img src="resource/usage_po_step3.png" /></div>
						You can use the Sort Order value to position the upload module between other product options on a product page.<br />
					</li>
					<li>Click the <strong>Save</strong> button to save it.</li>
					<li>Navigate to Catalog > Products and <strong>Edit</strong> or <strong>Add New</strong> product.
						<div class="screenshot"><img src="resource/usage_po_step4.png" /></div>
					</li>
					<li>Under 'Option' tab, add the File type option created in step 3 by typing the Option Name in the text field and selecting it from the drop down that appears.
						<div class="screenshot"><img src="resource/usage_po_step5.png" /></div>
					</li>
					<li>Click the <strong>Save</strong> button to save the product.</li>
					<li>Navigate back to Extensions > Modules, and click on the <strong>Edit</strong> button for 'Customer Order Product Upload' to configure the settings.
						<div class="screenshot"><img src="resource/install_edit.png" /></div></li>
					<li>Under Product tab, scroll down to Product Options and select the File type Option Name created in step 3.
						<div class="screenshot"><img src="resource/usage_product_options.png" /></div></li>
					<li>Click the <strong>Save</strong> button to save the settings.</li>
				</ol>

				<h4>Login Required</h4>
				<div class="screenshot"><img src="resource/usage_login.png" /></div>
				<p>If set to Yes, only logged in customer are allowed to upload files.</p>

				<h4>Customer Group</h4>
				<div class="screenshot"><img src="resource/usage_customer_group.png" /></div>
				<p>Select customer groups that are allowed to upload files <em>if</em> <strong>Login Required</strong> is set to Yes.</p>

				<h4>Store</h4>
				<div class="screenshot"><img src="resource/usage_store.png" /></div>
				<p>Enable file upload to selected stores only.</p>

				<h3>Managing File Types</h3>
				<p>Click <strong>File Types</strong> tab button to reveal File Types list.</p>
				<div class="screenshot"><img src="resource/usage_filetype_tab.png" /></div>

				<h4>Adding a File Type</h4>
				<ol>
					<li>Scroll down to the bottom of the list and you will see a form to enter new file type.</li>
					<li>Key in the file extension on the left and MIME(optional) on the right and click on the Add button to add a new file type entry.
						<div class="screenshot"><img src="resource/usage_filetype_add.png" /></div></li>
				</ol>

				<h4>Utilizing MIME</h4>
				<ol>
					<li>Adding MIME to a file type provides an added level of security in file uploads. With MIME, the server is able to recognize a file content type beyond the existing file extension. This feature will reduce the risk of files with incorrect file extension being uploaded, usually with malicious purposes.</li>
					<li>To find out a file type MIME, visit <a href="http://filext.com/" target="_blank">filext.com</a> and search for the file type.</li>

					<li>However, for some reason, not all hosting servers will return the appropriate file type. If your hosting server is facing difficulties in uploading certain file types even though the correct MIME has been entered, and you are not allowed to make any changes to your server due to shared hosting or hosting provider policy, then you have to disable MIME checking.</li>

					<li>To disable MIME, just leave the MIME entry blank when adding a new file type.</li>
					<li>To erase existing file type MIME, you will need to delete the existing file type entry and re-create a new one with the same extension but without any MIME.</li>
				</ol>

				<h4>Deleting a File Type</h4>
				<ol>
					<li>Click on the <strong>Delete</strong> button on the file type that you wish to remove.
						<div class="screenshot"><img src="resource/usage_filetype_delete.png" /></div></li>
					<li>A message window will appear, prompting for delete confirmation.</li>
				</ol>

				<h3>Save</h3>
				<p>Click the <strong>Save</strong> button after you are done with the settings.</p>
			</div>
			<div class="chapter">
				<h2 id="chap6">Retrieving Uploaded Files</h2>
				<h3>Accessing Customer Upload</h3>
				<ol>
					<li>To access customer uploaded files from the admin, navigate to Sales > Customers > Customers, and <strong>Edit</strong> a customer.
						<div class="screenshot"><img src="resource/usage_navigate_customer.png" /></div></li>
					<li>While editing a customer, click on the <strong>Uploads</strong> tab to reveal the list of files uploaded by the customer to their account.
						<div class="screenshot"><img src="resource/usage_customer_uploads.png" /></div></li>
					<li>On this page, you can perform the following actions:<ul>
							<li><strong>Download:</strong> Click on the filenames to download a copy of the file</li>
							<li><strong>Delete:</strong> Click on the <strong>Delete</strong> button to delete a file</li>
							<li><strong>Upload:</strong> Click on the <strong>Upload File</strong> button to upload a new file. This customer will then be able to download the file from their account.</li>
						</ul></li>
					<li>Click the <strong>Save</strong> button to save the changes or <strong>Cancel</strong> to discard any changes.</li>
				</ol>

				<h3>Accessing Order Upload</h3>
				<ol>
					<li>To access uploaded files in an order from the admin, navigate to Sales > Orders.
						<div class="screenshot"><img src="resource/usage_navigate_order.png" /></div></li>
					<li>If you just want to download files uploaded by customer, click on the <strong>View</strong> button to view an order.</li>
					<li>While viewing an order, click on the <strong>Uploads</strong> tab to reveal the list of files uploaded by the customer.
						<div class="screenshot"><img src="resource/usage_order_uploads_view.png" /></div></li>
					<li>To download a file, click on the filenames to download a copy of the file.</li>
					<li>If you want to delete or add a new file, go back to the Order List and and click on the <strong>Edit</strong> button to edit an order instead. (However, editing an order is only available for OpenCart v1.5.2 and newer.)</li>
					<li>While editing an order, click on the <strong>Uploads</strong> tab to reveal the list of files uploaded by the customer.
						<div class="screenshot"><img src="resource/usage_order_uploads_edit.png" /></div></li>
					<li>After going through Step 1 to 5, the <strong>Uploads</strong> page will be on the last tab. On this page, you can perform the following actions:<ul>
							<li><strong>Download:</strong> Click on the filenames to download a copy of the file.</li>
							<li><strong>Delete:</strong> Click on the <strong>Delete</strong> button to delete a file.</li>
							<li><strong>Upload:</strong> Click on the <strong>Upload File</strong> button to upload a new file. Customer will then be able to download the file from their account order history.</li>
						</ul></li>
					<li>Click the <strong>Save</strong> button to save the changes or <strong>Cancel</strong> to discard any changes.</li>
				</ol>

				<h3>Accessing Product Upload</h3>
				<ol>
					<li>To access uploaded files on products in an order from the admin, navigate to Sales > Orders.
						<div class="screenshot"><img src="resource/usage_navigate_order.png" /></div></li>
					<li>If you just want to download files uploaded by customer, click on the <strong>View</strong> button to view an order.</li>
					<li>While viewing an order, click on the <strong>Products</strong> tab to reveal the list of files uploaded by the customer within each product.
						<div class="screenshot"><img src="resource/usage_product_uploads_view.png" /></div></li>
					<li>To download a file, click on the filenames to download a copy of the file.</li>
					<li>If you want to delete or add a new file, go back to the Order List and and click on the <strong>Edit</strong> button to edit an order instead. (However, editing an order is only available for OpenCart v1.5.2 and newer.)</li>
					<li>While editing an order, click on the <strong>Products</strong> tab to reveal the list of files uploaded by the customer within each product.
						<div class="screenshot"><img src="resource/usage_product_uploads_edit.png" /></div></li>
					<li>On this page, you can perform the following actions:<ul>
							<li><strong>Delete:</strong> Click on the delete icon to delete a product and its associate files.</li>
							<li><strong>Upload:</strong> Add a new product by typing the product name in the Choose Product field. If the product contains a file type options and it's selected in the Product Upload Product Options list, click on the <strong>Upload File</strong> button to upload new files, and click on the <strong>Add Product</strong> button to add a new product to the order.</li>
						</ul></li>
					<li>Click the <strong>Continue</strong> button to complete the form and save the changes or <strong>Cancel</strong> to discard any changes.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap7">Customization</h2>
				<h3>Custom Language</h3>
				<p>The Upload Instruction HTML text editor readily supports multi languages. Any custom language present on your store will be listed as tabs above each Upload Instruction HTML text editor.</p>
				<div class="screenshot"><img src="resource/usage_html_editor.png" /></div>
				<p>Just click on the tabs to insert different custom language text into the editor, and the relevant text will be displayed on the front end depending on the language chosen by a customer.</p>

				<p>To customize other module text such as table column names and button text, please perform the following steps (assuming 'spanish' is custom language folder name):</p>
				<ol>
					<li>Open and edit your admin custom language main file:<ul>
						<li><em>/admin/language/spanish/spanish.php</em></li>
					</ul></li>
					<li>Add the following code at the bottom of the page right <strong>before</strong> the php closing tag '<span class="code">?&gt;</span>':
						<div class="info code"><pre>$_['tab_copu'] = 'Uploads'; //or any text that matches your custom language</pre></div>
					</li>
					<li>Make a copy of the following file:<ul>
						<li><em>/admin/language/english/module/myoccopu.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:<ul>
						<li><em>/admin/language/spanish/module/myoccopu.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/admin/language/spanish/module/myoccopu.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
					<li>Make a copy of the following file:<ul>
						<li><em>/catalog/language/english/myoc/copu.php</em></li>
					</ul></li>
					<li>Paste it into your custom language folder:</li><ul>
						<li><em>/catalog/language/spanish/myoc/copu.php</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/catalog/language/spanish/myoc/copu.php</em></li>
					<li>Edit the text in the file to your custom language accordingly.</li>
				</ol>


				<h3>Custom Template</h3>
				<p>The following steps provide a basic guide in customizing Customer Order Product Upload for your custom template on your store.</p>
				<p>Please note that:</p>
				<ul>
					<li>It is to be performed after installation.</li>
					<li>All files listed below are from your store server.</li>
					<li>Assuming custom template folder is 'custom_theme'.</li>
					<li>Might not work on some custom template.</li>
				</ul>
				<ol>
					<li>Make a copy of the following folder:<ul>
						<li><em>/catalog/view/theme/default/template/myoc/</em></li>
					</ul></li>
					<li>Paste it into your custom template folder:<ul>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/</em></li>
					</ul></li>
					<li>Open and edit the following files to suit your custom template if required:<ul>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/copu.tpl</em><br /> - File upload module on account, register, and cart page</li>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/copu_cart.tpl</em><br /> - List of uploaded files on shopping cart items</li>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/copu_customer.tpl</em><br /> - Customer account upload page</li>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/copu_mail.tpl</em><br /> - Email template for order summary sent to customer and admin</li>
						<li><em>/catalog/view/theme/custom_theme/template/myoc/copu_product.tpl</em><br /> - File upload module on product page</li>
					</ul></li>
					<li>Make a copy of the following stylesheet:<ul>
						<li><em>/catalog/view/theme/default/stylesheet/copu.css</em></li>
					</ul></li>
					<li>Paste it into your custom template folder:<ul>
						<li><em>/catalog/view/theme/custom_theme/stylesheet/copu.css</em></li>
					</ul></li>
					<li>Open and edit the newly copied file <em>/catalog/view/theme/custom_theme/stylesheet/copu.css</em> with your custom css styles.</li>
					<li>If certain upload module element is not loading on certain pages on your custom template, you need to open and edit <em>/vqmod/xml/myoc_copu.xml</em></li>
					<li>Search for the matching file name in the <span class="code">&lt;file&gt;</span> tag with your custom template file.</li>
					<li>In this example, we will try to edit <em>/catalog/view/theme/*/template/product/product.tpl</em> file in this vQmod <span class="code">&lt;file&gt;</span> tag entry:
						<div class="info code"><pre>&lt;file name=&quot;catalog/view/theme/*/template/product/product.tpl&quot;&gt;
	&lt;operation&gt;
		&lt;search position=&quot;before&quot;&gt;&lt;![CDATA[&lt;?php echo $button_upload; ?&gt;]]&gt;&lt;/search&gt;
		&lt;add&gt;&lt;![CDATA[&lt;?php } if($option['type'] == 'file' &amp;&amp; $copu_product &amp;&amp; isset($copu_product[$option['product_option_id']])) {
			echo $copu_product[$option['product_option_id']];
		} elseif($option['type'] == 'file') { ?&gt;]]&gt;&lt;/add&gt;
	&lt;/operation&gt;
	...
&lt;/file&gt;</pre></div>
					</li>
					<li>Make sure in your custom template <em>/catalog/view/theme/custom_theme/template/common/product.tpl</em> file that the text in between the <span class="code">&lt;search&gt;&gt;&lt;![CDATA[ ... ]]&gt;&lt;/search&gt;</span> tag exists.
						<div class="info code"><pre>&lt;?php echo $button_upload; ?&gt;</pre></div>
					</li>
					<li>If not, you need to modify the text in between the <span class="code">&lt;search&gt;</span> tag into something else similar that exists in your custom template file.</li>
					<li>Repeat step 8 to 11 for other custom template files if required.</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap8">Troubleshoot / FAQ</h2>
				<p class="q">Q: Installation failed.</p>
				<p class="ans">A: Make sure your current store database user account have permission to 'CREATE', 'DELETE', 'DROP', 'SHOW', and 'RENAME' tables in your MySQL database.</p>

				<p class="q">Q: Extension is not working after installation.</p>
				<p class="ans">A: Make sure vQmod is installed and running fine on your store. If you are using a custom template, you might require to customize the extension. Please see Customization > Custom Template.</p>

				<p class="q">Q: Upload module is not showing up.</p>
				<p class="ans">A: Make sure you have set the extension settings properly in your admin. Please see Usage section on settings instruction.</p>

				<p class="q">Q: Upload Instruction HTML text editor is showing a blank/grey page instead of text.</p>
				<p class="ans">A: Click the 'Source' button on the top left corner of the editor twice to reveal the text again.</p>

				<p class="q">Q: Image preview is not showing on IE.</p>
				<p class="ans">A: Image preview is tested to work in Chrome, Firefox, Safari, and IE10. IE9 and below may not be supported due to browser limitation.</p>

				<p class="q">Q: Progress Bar is not showing or working properly on IE.</p>
				<p class="ans">A: Progress bar is tested to work in Chrome, Firefox, Safari, and IE10. IE9 and below is not supported due to browser limitation.</p>

				<p class="q">Q: Drag &amp; Drop files is not working on IE.</p>
				<p class="ans">A: Drag &amp; Drop is tested to work in Chrome, Firefox, Safari, and IE10. IE9 and below may not be supported due to browser limitation.</p>

				<p class="q">Q: Progress Bar is not showing or working properly on IE.</p>
				<p class="ans">A: Progress bar is tested to work in Chrome, Firefox, Safari, and IE10. IE9 and below is not supported due to browser limitation.</p>

				<p class="q">Q: Progress Bar is not showing or working properly on any browser.</p>
				<p class="ans">A: Make sure your store template is loading the Bootstrap Javascript file and its CSS file.</p>

				<p class="q">Q: Progress Bar stuck at 100% and not completing.</p>
				<p class="ans">A: Make sure your store hosting server has enough memory and resources to process the uploaded file especially for large image files. Here's a list of all possible php.ini settings that might affect file upload:</p>
				<ol type="i">
					<li>upload_max_filesize (in bytes, example value: 999M)</li>
					<li>post_max_size (must be larger than <em>upload_max_filesize</em>)</li>
					<li>memory_limit (must be larger than <em>post_max_size</em>)</li>
					<li>max_execution_time (in seconds)</li>
					<li>max_input_time (in seconds)</li>
				</ol></p>

				<p class="q">Q: Unable to upload certain file types even though the correct extension and MIME has been set.</p>
				<p class="ans">A1: Please make sure you have also selected it in the 'Allowed File Types' list in the settings.</p>
				<p class="ans">A2: Some hosting server might be returning incorrect MIME, so you may want to remove the MIME in the filetype list. Please see Usage > Managing File Types > Utilizing MIME for further details.</p>

				<p class="q">Q: Unable to upload large file even though File Size Limit has been set to very large value.</p>
				<p class="ans">A: Some server may limit user from uploading large file size with server side settings. Here's a list of all possible php.ini settings that might affect file upload:</p>
				<ol type="i">
					<li>upload_max_filesize (in bytes, example value: 999M)</li>
					<li>post_max_size (must be larger than <em>upload_max_filesize</em>)</li>
					<li>memory_limit (must be larger than <em>post_max_size</em>)</li>
					<li>max_execution_time (in seconds)</li>
					<li>max_input_time (in seconds)</li>
				</ol>
				<p class="ans">You can try to change the above values in the provided php.ini &amp; .htaccess file found in OpenCart root folder or check with your hosting provider for further information.</p>

				<p class="q">Q: Where are all the uploaded files stored by default?</p>
				<p class="ans">A: OpenCart v1.5.x: <span class="code">DIR_DOWNLOAD</span> path as in <span class="code">/config.php</span> or <em>/download/</em> folder.</p>
				<p class="ans">A: OpenCart v2.0.x: <span class="code">DIR_DOWNLOAD</span> path as in <span class="code">/config.php</span> or <em>/system/upload/</em> folder.</p>

				<p class="q">Q: How to change the default file upload folder? (For OpenCart v1.5.x &amp; v1.4.x only)</p>
				<p class="ans">A(FOR Customer Order Product Upload v1.5): Just use the <strong>File Upload Folder</strong> setting to customize file upload folder location.</p>
				<p class="ans">A(FOR Customer Order Product Upload v1.4.x and below ONLY): Since the upload folder is sharing the same folder with OpenCart default download folder, you can change the folder location in the <span class="code">/config.php</span> file. Please note that modifying the upload folder will also changes the default download folder.</p>
				<ol>
					<li>Open and edit the following file:<ul>
						<li><em>/config.php</em></li>
					</ul></li>
					<li>Look for the following similar line of code:
						<div class="info code"><pre>define('DIR_DOWNLOAD', '/home/user/public_html/ocstore/download/');</pre></div></li>
					<li>Modify the 'download' folder to your prefer location, for example 'myupload':
						<div class="info code"><pre>define('DIR_DOWNLOAD', '/home/user/public_html/ocstore/myupload/');</pre></div></li>
					<li>Open and edit the following file:<ul>
						<li><em>/admin/config.php</em></li>
					</ul></li>
					<li>Look for the following similar line of code:
						<div class="info code"><pre>define('DIR_DOWNLOAD', '/home/user/public_html/ocstore/download/');</pre></div></li>
					<li>Modify the 'download' folder to the same location as in step 3 above:
						<div class="info code"><pre>define('DIR_DOWNLOAD', '/home/user/public_html/ocstore/myupload/');</pre></div></li>
				</ol>
			</div>
			<div class="chapter ">
				<h2 id="chap9">Uninstall</h2>
				<p>Please follow the steps below to uninstall Customer Order Product Upload from your store.</p>
				<ol>
					<li>Login to your store admin and navigate to Extensions &gt; Modules.</li>
					<li>Click on the <strong>Uninstall</strong> button for 'Customer Order Product Upload' module. <strong>WARNING:</strong> All file upload data will be erased.</li>
					<li>Remove the following files from your store.
						<ol type="i">
							<li>/admin/controller/module/myoccopu.php</li>
							<li>/admin/controller/myoc/copu.php</li>
							<li>/admin/language/english/module/myoccopu.php</li>
							<li>/admin/model/myoc/copu.php</li>
							<li>/admin/view/stylesheet/myoc/copu.css</li>
							<li>/admin/view/template/myoc/copu.tpl</li>
							<li>/admin/view/template/myoc/copu_invoice.tpl</li>
							<li>/admin/view/template/myoc/copu_product.tpl</li>
							<li>/admin/view/template/myoc/copu_upload.tpl</li>
							<li>/catalog/controller/myoc/copu.php</li>
							<li>/catalog/language/english/myoc/copu.php</li>
							<li>/catalog/model/myoc/copu.php</li>
							<li>/catalog/view/javascript/jquery/myoc/canvas-to-blob.min.js</li>
							<li>/catalog/view/javascript/jquery/myoc/copu-helper.js</li>
							<li>/catalog/view/javascript/jquery/myoc/jquery.fileupload.js</li>
							<li>/catalog/view/javascript/jquery/myoc/jquery.fileupload-image.js</li>
							<li>/catalog/view/javascript/jquery/myoc/jquery.fileupload-process.js</li>
							<li>/catalog/view/javascript/jquery/myoc/jquery.iframe-transport.js</li>
							<li>/catalog/view/javascript/jquery/myoc/jquery.ui.widget.js</li>
							<li>/catalog/view/javascript/jquery/myoc/load-image.all.min.js</li>
							<li>/catalog/view/javascript/jquery/myoc/load-image.min.js</li>
							<li>/catalog/view/theme/default/stylesheet/myoc/copu.css</li>
							<li>/catalog/view/theme/default/template/myoc/copu.tpl</li>
							<li>/catalog/view/theme/default/template/myoc/copu_cart.tpl</li>
							<li>/catalog/view/theme/default/template/myoc/copu_customer.tpl</li>
							<li>/catalog/view/theme/default/template/myoc/copu_mail.tpl</li>
							<li>/catalog/view/theme/default/template/myoc/copu_product.tpl</li>
							<li>/system/helper/copu.php</li>
							<li>/vqmod/xml/myoc_copu.xml</li>
						</ol>
					</li>
				</ol>
			</div>
			<div class="chapter">
				<h2 id="chap10">Changelog</h2>
				<h3>Version 1.6.9 (OCMOD release)</h3>
				<div class="info"><p>Release Date: <strong>26th November 2016</strong>
					<ol>
						<li>Support for OCMOD installation option</li>
					</ol></p></div>
				<h3>Version 1.6.9</h3>
				<div class="info"><p>Release Date: <strong>26th October 2016</strong>
					<ol>
						<li>Support for latest OpenCart v2.3.0.2</li>
					</ol></p></div>
				<h3>Version 1.6.8</h3>
				<div class="info"><p>Release Date: <strong>18th June 2016</strong>
					<ol>
						<li>Added Minimum File Size.</li>
						<li>Support for latest OpenCart v2.2.0.0</li>
					</ol></p></div>
				<h3>Version 1.6.7</h3>
				<div class="info"><p>Release Date: <strong>8th February 2016</strong>
					<ol>
						<li>Fixed SSL file delete link bug</li>
					</ol></p></div>
				<h3>Version 1.6.5</h3>
				<div class="info"><p>Release Date: <strong>8th November 2015</strong>
					<ol>
						<li>Support for latest OpenCart v2.1.0.1</li>
					</ol></p></div>
				<h3>Version 1.6.4</h3>
				<div class="info"><p>Release Date: <strong>29th June 2015</strong>
					<ol>
						<li>Fixed image replace error.</li>
					</ol></p></div>
				<h3>Version 1.6.3</h3>
				<div class="info"><p>Release Date: <strong>9th June 2015</strong>
					<ol>
						<li>Fixed customer account upload error</li>
						<li>Fixed large image file upload preview</li>
					</ol></p></div>
				<h3>Version 1.6.2</h3>
				<div class="info"><p>Release Date: <strong>26th April 2015</strong>
					<ol>
						<li>Fixed same filename issue in image cache</li>
						<li>Fixed custom template not found issue</li>
						<li>Fixed image preview crop off issue</li>
						<li>Fixed image replace issue</li>
						<li>Improved failed file deletion alert message</li>
					</ol></p></div>
				<h3>Version 1.6.1</h3>
				<div class="info"><p>Release Date: <strong>8th January 2015</strong>
					<ol>
						<li>Fixed Upload button not responding in Firefox, IE</li>
						<li>Fixed database installation(update) error</li>
						<li>Fixed unicode filename encoding in IE</li>
					</ol></p></div>
				<h3>Version 1.6</h3>
				<div class="info"><p>Release Date: <strong>4th January 2015</strong>
					<ol>
						<li>File uploads in existing order can be edited from admin order edit.</li>
					</ol></p></div>
				<h3>Version 1.6-beta</h3>
				<div class="info"><p>Release Date: <strong>2nd January 2015</strong>
					<ol>
						<li>Added support for latest OpenCart v2.0.x.</li>
						<li>Filenames now support Unicode(UTF-8).</li>
					</ol></p></div>
				<h3>Version 1.5.8</h3>
				<div class="info"><p>Release Date: <strong>23rd April 2014</strong>
					<ol>
						<li>Fixed ambiguity in table name.</li>
					</ol></p></div>
				<h3>Version 1.5.7</h3>
				<div class="info"><p>Release Date: <strong>18th January 2014</strong>
					<ol>
						<li>Added Email Alert for customer order history and account upload.</li>
						<li>Added Send Files as Email Attachments feature.</li>
					</ol></p></div>
				<h3>Version 1.5.6</h3>
				<div class="info"><p>Release Date: <strong>28th October 2013</strong>
					<ol>
						<li>Fixed force quantity error.</li>
						<li>Fixed admin template to allow strings with single quote character.</li>
					</ol></p></div>
				<h3>Version 1.5.5</h3>
				<div class="info"><p>Release Date: <strong>28th September 2013</strong>
					<ol>
						<li>Fixed empty filetype_ids error</li>
						<li>Fixed missing upload description in customer order history upload</li>
						<li>Fixed new file type entry not saved for Customer &amp; Order upload when being added dynamically</li>
						<li>Fixed customer upload path duplicate when no %customer_id% is used</li>
						<li>Added image dimension limit</li>
						<li>Added image color channel validation check</li>
						<li>Added order status change when customer modify order upload</li>
					</ol></p></div>
				<h3>Version 1.5.4</h3>
				<div class="info"><p>Release Date: <strong>14th July 2013</strong>
					<ol>
						<li>Fix mime validation error.</li>
					</ol></p></div>
				<h3>Version 1.5.3</h3>
				<div class="info"><p>Release Date: <strong>13th July 2013</strong>
					<ol>
						<li>Fix missing order upload in order notification emails.</li>
					</ol></p></div>
				<h3>Version 1.5.2</h3>
				<div class="info"><p>Release Date: <strong>10th July 2013</strong>
					<ol>
						<li>Fix missing javascripts in admin customer upload.</li>
						<li>Fix duplicate admin order edit order upload.</li>
					</ol></p></div>
				<h3>Version 1.5.1</h3>
				<div class="info"><p>Release Date: <strong>7th July 2013</strong>
					<ol>
						<li>Fix missing Order Upload.</li>
					</ol></p></div>
				<h3>Version 1.5.0</h3>
				<div class="info"><p>Release Date: <strong>1st July 2013</strong>
					<ol>
						<li>Upload Progress Bar</li>
						<li>Multi files/batch upload</li>
						<li>Drag &amp; Drop support</li>
						<li>Custom folder</li>
						<li>Custom image preview thumbnail dimension</li>
						<li>Individual product option upload settings</li>
					</ol></p></div>
				<h3>Version 1.4.2</h3>
				<div class="info"><p>Release Date: <strong>13th February 2013</strong>
					<ol>
						<li>Fixed error message variable 'error_minimum' to 'error_upload_minimum' to avoid conflict.</li>
					</ol></p></div>
				<h3>Version 1.4.1</h3>
				<div class="info"><p>Release Date: <strong>27th January 2013</strong>
					<ol>
						<li>Support for latest OpenCart v1.5.5.1</li>
					</ol></p></div>
				<h3>Version 1.4</h3>
				<div class="info"><p>Release Date: <strong>17th November 2012</strong>
					<ol>
						<li>Customer Group restriction</li>
						<li>Store restriction</li>
						<li>Full HTML rich text editor for upload description text</li>
						<li>Force product quantity to match with number of files uploaded</li>
						<li>Product file upload are now associated with current 'file' type options</li>
						<li>Product file upload can be sorted among other product options</li>
					</ol></p></div>
				<h3>Version 1.3</h3>
				<div class="info"><p>Release Date: <strong>21st March 2012</strong>
					<ol>
						<li>Fix order upload minimum when 0 error.</li>
						<li>Fix approve new customer causes empty upload.</li>
						<li>Fix duplicate language 'text_empty'.</li>
						<li>Fix admin delete customer upload not complete.</li>
						<li>Added display uploaded image in shopping cart if 'Replace product image' is set to Yes under product upload.</li>
					</ol></p></div>
				<h3>Version 1.2.1</h3>
				<div class="info"><p>Release Date: <strong>3rd January 2012</strong>
					<ol>
						<li>Fix several missing variables error.</li>
						<li>Fix file type delete validation - file type in use cannot be deleted.</li>
						<li>Fix upload not being deleted when a customer or an order is removed.</li>
						<li>Fix empty file type and extension error.</li>
						<li>Fix MIME check - just leave blank on MIME field to disable MIME checking.</li>
					</ol></p></div>
				<h3>Version 1.2</h3>
				<div class="info"><p>Release Date: <strong>17th December 2011</strong>
					<ol>
						<li>Added support for OpenCart 1.5.0.x - 1.5.1.3</li>
						<li>Added file types management to allow adding own custom file types.</li>
						<li>All features from previous versions are implemented.</li>
					</ol></p></div>
				<h3>Version 1.1</h3>
				<div class="info"><p>Release Date: <strong>25th May 2011</strong>
					<ol>
						<li>Image preview now available upon file upload, limited to image file type (jpeg, png, gif) only.</li>
						<li>Product image can be replaced with uploaded image file.</li>
						<li>Enable custom text message above upload box, useful when you want to give a short instruction or info to your customer.</li>
					</ol></p></div>
				<h3>Version 1.02</h3>
				<div class="info"><p>Release Date: <strong>13th May 2011</strong>
					<ol>
						<li>Fixed guest checkout missing upload.</li>
						<li>Fixed order upload list appear in admin orders even when upload order is disabled.</li>
						<li>Fixed truncated filename and missing file type when downloading files that contains spaces in filename in Firefox.</li>
						<li>Added new popular file extension support: .psd (photoshop).</li>
						<li>Added 2 extra file size limits.</li>
					</ol></p></div>
				<h3>Version 1.01</h3>
				<div class="info"><p>Release Date: <strong>1st May 2011</strong>
					<ol>
						<li>Fixed new registration missing file size bug.</li>
						<li>Added two new popular file extension support: .ai, .eps</li>
					</ol></p></div>
				<h3>Version 1.0</h3>
				<div class="info"><p>Release Date: <strong>29th April 2011</strong>
					<ol>
						<li>Customer Order Product Upload released.</li>
					</ol></p></div>
			</div>
			<div class="chapter">
				<h2 id="chap11">Support</h2>
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
				<p>You can always post your comments, feedback, or suggestion on the extension page here: <a href="http://www.opencart.com/index.php?route=extension/extension/info&extension_id=1887" target="_blank">www.opencart.com/index.php?route=extension/extension/info&extension_id=1887</a></p>
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
