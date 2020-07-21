<style type="text/css">
#control {
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	height: 50px;
	z-index: 9999;
	background-color: #333;
	color: #fff;
}
#control .title {
	padding: 15px;
}
#control .title h2 {
	margin: 0px;
	color: #fff;
}

#control .control {
	padding: 11px 40px;
	font-size: 1.4em;
}

#control .control select {
	padding: 6px;
}
</style>
<?php
$uri = explode("/", $_SERVER['REQUEST_URI']);
$pop = "";
while (empty($pop)) {
	$pop = array_pop($uri);
}
?>
<div id="control">
	<div class="title fleft">
		<h2>OpenCart.my Extension Documentation Collection</h2>
	</div>
	<div class="control fright">
		<label>Select Extension: </label>
		<select name="extension" onchange="this.options[this.selectedIndex].value && (window.location = this.options[this.selectedIndex].value);">
			<option value="">Select..</option>
			<option value="/documentation/boption/"<?php if($pop == "boption") { ?> selected="selected"<?php } ?>>Better Option</option>
			<option value="/documentation/custommenu/"<?php if($pop == "cmenu") { ?> selected="selected"<?php } ?>>Custom Menu</option>
			<option value="/documentation/customunit/"<?php if($pop == "cunit") { ?> selected="selected"<?php } ?>>Custom Unit</option>
			<option value="/documentation/copu/"<?php if($pop == "copu") { ?> selected="selected"<?php } ?>>Customer Order Product Upload</option>
			<option value="/documentation/globalqty/"<?php if($pop == "globalqty") { ?> selected="selected"<?php } ?>>Global Quantity Drop Down List</option>
			<option value="/documentation/livepriceupdate/"<?php if($pop == "livepriceupdate") { ?> selected="selected"<?php } ?>>Live Price Update</option>
			<option value="/documentation/pod/"<?php if($pop == "pod") { ?> selected="selected"<?php } ?>>Product Option Discount</option>
			<option value="/documentation/rounding/"<?php if($pop == "round") { ?> selected="selected"<?php } ?>>Price Rounding</option>
			<option value="/documentation/superdiscount/"<?php if($pop == "superdiscount") { ?> selected="selected"<?php } ?>>Super Discount</option>
			<option value="/documentation/wplpro/"<?php if($pop == "wplpro") { ?> selected="selected"<?php } ?>>Wholesale Price List Pro</option>
		</select>
	</div>
</div>