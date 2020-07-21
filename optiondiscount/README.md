---
search: optiondiscount
---
## Welcome

Thank you for purchasing Option Discount extension!

This document contains information for **Option Discount** extension. If this is not what you are looking for, please go back to [Documentation List](https://opencart.my/documentation).

> If you have any questions that are not found in this documentation, you may contact me through email from the [Support](#support) section at the bottom.

### Extension Info

#### Option Discount

|||
| --- | --- |
| Download Page:                  | <https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=1888> |
| Latest Version:                 | 2.0.0 <br>([v1.7.5 Documentation](https://opencart.my/documentation/pod)) |
| Release Date:                   | 13th July 2020 |
| Demo:                           | OpenCart v3.0.3.x: <https://demo.opencart.my/optiondiscount><br>OpenCart v2.3.0.x: <https://demo.opencart.my/pod> |
| Author:                         | opencart.my - [More extensions](https://www.opencart.com/index.php?route=marketplace/extension&filter_member=opencart.my) |
| Contact:                        | support@opencart.my |

#### Version Compatiblity

| Option Discount version | OpenCart version |
| --- | --- |
| 1.0.2 | 1.4.8.x, 1.4.9.x |
| 1.5.3 | 1.5.1, 1.5.1.1, 1.5.1.2, 1.5.1.3<br>1.5.2, 1.5.2.1<br>1.5.3, 1.5.3.1<br>1.5.4, 1.5.4.1<br>1.5.5, 1.5.5.1<br>1.5.6, 1.5.6.1, 1.5.6.2, 1.5.6.3, 1.5.6.4 |
| 1.7.5 | 2.0.0.0, 2.0.1.0, 2.0.1.1, 2.0.2.0, 2.0.3.1<br>2.1.0.1, 2.1.0.2<br>2.2.0.0<br>2.3.0.0, 2.3.0.1, 2.3.0.2 |
| 2.0.0 | 3.0.0.0, 3.0.1.1, 3.0.1.2, 3.0.2.0, 3.0.3.0, 3.0.3.1, 3.0.3.2, 3.0.3.3 |

## Features

### Overview

#### Enable quantity discount on product options.

Option Discount enables store owner to setup discount on individual product option values.
This extension is useful if you need to apply quantity discount to each option value in a product.

![overview](images/overview.png)

### Highlights

1. Option Discount prices appear as table format on product page.
2. Able to show option price of each individual option in cart and order.
3. Able to set option price to calculate based on flat rate or quantity.
4. Can be used with existing product quantity discount, special price, tax, and other existing pricing related functionality.
5. Multiple price prefixes to choose from: (`+`, `-`, `=`, `+%`, `-%`)
6. Works well with the following extensions:
 - [Live Price Update](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=12489) extension.
 - [Better Option](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=18692) extension.
 - [Global Fixed Quantity](https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=1886) extension.

### What's New in v2.0.0

1. Support for latest OpenCart v3.0.x. [See changelog](#changelog)

2. Option Discount can be set globally and apply to multiple products, categories, or manufacturers.

3. Added improved compatibility with Live Price Update, Better Option, and Global Fixed Quantity extensions.

## Installation

### Prerequisite

1. OpenCart version must be a compatible version. Please refer to the [Version Compatiblity](#version-compatiblity) table above.

### Install

1. Login as admin to your store administration back-end.

2. Navigate to `Extensions` \> `Installer`.

  ![install upload](images/install_upload.png)

3. Click on the `Upload` button and browse the extension file **myoc.optiondiscount.ocmod.zip** that you have downloaded from your purchase on opencart.com marketplace.

  ![install progress](images/install_progress.png)

4. Once `Install Progress` is successful, navigate to `Extensions` \> `Extensions` \> under `Choose the extension type` \> select **Modules**.

  ![install module](images/install_module.png)

5. Under `Modules`, look for the `Module Name` **OpenCart.my Extension Installer** and check if it has been installed. Otherwise, just click on the green <button class="docute-button docute-button-success"><i class="fa fa-plus-circle"></i></button> button to install it.

6. After that, you should see the list of **OpenCart.my Extensions** automatically loaded on your page. Otherwise, just refresh the page by navigating to `Extensions` \> `Extensions` \> under `Choose the extension type` \> select **OpenCart.my Extensions**.

  ![install extension](images/install_ext.png)

7. Under `OpenCart.my Extensions`, look for the `Module Name` **Option Discount** and click on the green <button class="docute-button docute-button-success"><i class="fa fa-plus-circle"></i></button> button to install it.

8. After installation is successful, you may click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-pencil"></i></button> button to start using **Option Discount** extension. (See [Usage](#usage))

  ![install successful](images/install_success.png)

## Upgrade

### From v1.x to v2.0.0

Previous versions of this extension are not compatible with OpenCart v3.0.x. Therefore, a new installation is required.

## Usage

### Add New

1. Select an Option to add Option Discount by entering the Option name in the text field.

  ![usage Add New](images/usage_add_new.png)

2. Click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-plus"></i></button> **Add New** button to create a new option discount entry.

### Option

  ![usage Option](images/usage_option.png)

Under the `Settings` tab, confirm that the Option field is showing the Option name that you want to add discount to.

### Status

  ![usage Status](images/usage_status.png)

`Enable` or `Disable` this option discount entry.

### Sort Order

  ![usage Sort Order](images/usage_sort_order.png)

Enter a numerical value to sort option discount by order. When 2 or more option discount is matched with a product, the one with the higher sort order(lower value) will be selected to use.

### Show Option Discount Price on Product Page

  ![usage Show Option Discount Price on Product Page](images/usage_show_price_product.png)

If set to **No**, the option discount table will not be shown on the product page for this option. But the option discount calculation will still be enabled in cart total calculation.

### Show Option Price on Cart

  ![usage Show Option Price on Cart](images/usage_show_price_cart.png)

If set to **Yes**, discount price for each option will be displayed next to the option value in cart.

Example: 

  ![example Show Option Price on Cart](images/eg_show_price_cart.png)


### Show Final Price

  ![usage Show Final Price](images/usage_show_final.png)

If set to **Yes**, prices in the option discount table will appear as the total calculated price of product and option, without any price prefix.

Example: 

  ![example Show Final Price](images/eg_show_final.png)

### Use Flat Rate on Price & Points

  ![usage Use Flat Rate on Price & Points](images/usage_flat_rate.png)

If set to **Yes**, option price & points will be calculated as flat rate regardless of quantity ordered.

For example: 

- product A price = **$100**
- Option B = **$20**

i) Use Flat Rate on Price & Points = **No**: 3x product A with Option B

= ($100 + $20) x 3 = **$360**

ii) Use Flat Rate on Price & Points = **Yes**: 3x product A with Option B

= ($100 x 3) + $20 = **$320**

### Use Flat Rate on Weight

  ![usage Use Flat Rate on Weight](images/usage_flat_rate_weight.png)

If set to Yes, option weight will be calculated as flat rate regardless of quantity ordered.

For example: 

- product A weight = **10 Kg**
- Option B weight = **3 Kg**

i) Use Flat Rate on Weight = **No**: 3x product A with Option B

= (10 + 3)Kg x 3 = **39 Kg**

ii) Use Flat Rate on Weight = **Yes**: 3x product A with Option B

= (10 Kg x 3) + 3 Kg = **33 Kg**

### Apply Discount Across Cart

  ![usage Apply Discount Across Cart](images/usage_cart_discount.png)

If set to **Yes**, option discount will be applied based on the total quantity of the same product added to shopping cart that contains identical options.

### Prices Include Tax

  ![usage Prices Include Tax](images/usage_inc_tax.png)

Set the option discount prices to be displayed either with or without tax included, or both.

Example:

  ![example Prices Include Tax](images/eg_inc_tax.png)

### Price Table Style

  ![usage Price Table Style](images/usage_table_style.png)

Set the style of the option discount pricing table.

Example:

  ![example Price Table Style](images/eg_table_style.png)

### Price Format

  ![usage Price Format](images/usage_price_format.png)

Set the price format of the option discount price in table.

i) **Unit** - Option discount prices will be displayed as the amount of each item divided by quantity.

ii) **Total** - Option discount prices will be displayed as the total price multiplied by quantity.

iii) **Both** - Show both Unit & Total prices.

Example:

  ![example Price Format](images/eg_price_format.png)

### Show Quantity Column

  ![usage Show Quantity Column](images/usage_column_qty.png)

Set the Quantity column on or off. It is recommended to set it to **No** only when there is a single quantity price column.

Example:

  ![example Show Quantity Column](images/eg_column_qty.png)
  
### Quantity Format

  ![usage Quantity Format](images/usage_qty_format.png)

Set the format of the quantity values.

Example:

  ![example Quantity Format](images/eg_qty_format.png)
  
### Show Stock Column

  ![usage Show Stock Column](images/usage_column_stock.png)

Set **Yes** to display the stock availability column for each option value.

Example:

  ![example Show Stock Column](images/eg_column_stock.png)
  
### Show 'Add to Cart' Column

  ![usage Show Add to Cart Column](images/usage_column_addtocart.png)

Allow each individual option value to have its own Add to Cart button.

Example:

  ![example Show Add to Cart Column](images/eg_column_addtocart.png)

For example, the Model option values in the screenshot above can now be added to cart individually with the additional `Order` column that contains the **quantity text field and Add to Cart button**. You will also notice that the option values control(radio buttons) have been removed together with the default quantity text field and default Add to Cart button for the product as they are no longer necessary in such setup.

### Product

Assign this option discount to specific products. The selected products must have the current option setup in them.

  ![usage Product](images/usage_product.png)

### Category

Assign this option discount to products under specific categories. The selected products must have the current option setup in them.

  ![usage Category](images/usage_category.png)

### Manufacturer

Assign this option discount to products under specific manufacturers(brands). The selected products must have the current option setup in them.

  ![usage Manufacturer](images/usage_manufacturer.png)

### Store

  ![usage Store](images/usage_store.png)

This Option Discount entry will only be Enabled if the current store matches with any of the selected stores here. Therefore, **at least 1** store must be selected for this Option Discount entry to appear.

### Option Values

Click on the `Option Values` tab to proceed setting up the option discount prices for each option value.

  ![usage Option Values](images/usage_tab_option_values.png)

On the left you will see the list of all option values for this option. Click on each of them to setup option discount for different option value.

### Add New Option Value Discount

  ![usage Add New Option Value Discount](images/usage_add_new_option_value_discount.png)

Click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-plus"></i></button> **Add Option Value Discount** button in the bottom right corner of the table to create a new Option Value Discount entry row.

You can add multiple rows for different quantity and prices.

### Customer Groups

  ![usage Customer Groups](images/usage_customer_groups.png)

Apply this discount only to specific Customer Groups. Only customers who are logged-in to the selected Customer Groups will be able to view and get this discount.

If no Customer Group is selected, this discount will be applied to anyone with or without logging in.

### Quantity

  ![usage Quantity](images/usage_quantity.png)

Number of item required to be added into cart for this discount price to take effect. Works just like product discount.

Please note that this is **NOT** for stock quantity control.

### Price Calculation Method

  ![usage Price Calculation Method](images/usage_price_method.png)

Select a calculation method for the option discount.

- `Product` - Use product base price to calculate.
- `Product + Option` - Use product base price and option base price to calculate.
- `Option` - Use option base price to calculate.

*Details & examples of actual calculation formula can be found in the [examples](#option-discount-pricing-setup-examples) section below.*

### Price

  ![usage Price](images/usage_price.png)

Option discount price & prefix for the current quantity discount.

### Special

  ![usage Special](images/usage_special.png)

Option discount special price for the current quantity. Special price will appear in red while the regular price will be crossed out.

Example:

  ![example Special](images/eg_special.png)

To disable Special price, set the Special prefix to **-**, and price to **0**.

### Points Calculation Method

  ![usage Points Calculation Method](images/usage_points_method.png)

Select a calculation method for the option points discount.

- `Disabled` - Disable option points discount.
- `Product` - Use product base points to calculate.
- `Product + Option` - Use product base points and option base points to calculate.
- `Option` - Use option base points to calculate.

### Points

  ![usage Points](images/usage_points.png)

Points required to purchase the current option.

### Priority

  ![usage Priority](images/usage_priority.png)

Set the sort order of the discount quantity.

### Special Date Start & Date End

  ![usage Special Date Start & Date End](images/usage_special_date.png)

Set the starting & ending date of the current option discount Special price. Only affects Special price, if Special is set.

Leave it blank or as `0000-00-00` to disable limited period for Special price.

### Remove

  ![usage Remove](images/usage_remove.png)

Click on the red <button class="docute-button docute-button-danger"><i class="fa fa-minus-circle"></i></button> button to remove the current option discount entry.

### Save

Once you are done, click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-save"></i></button> button on the top right of the form to save your entry.

## Option Discount Pricing Setup Examples

Assuming the following:

- Product Price: <span class="green">$250.00</span>
- Option Price: <span class="blue">+$20.00</span>

| Use Flat Rate | Quantity | Calculation Method | Option Discount Price Prefix & Price | Calculation | Total |
| --- | --- | --- | --- | --- | --- |
| No  | 3 | Product          | <span class="red">+30</span>  | (<span class="green">$250.00</span> + <span class="red">$30.00</span>) x 3                                                                                                                       | $840.00  |
| No  | 3 | Product          | <span class="red">-30</span>  | (<span class="green">$250.00</span> - <span class="red">$30.00</span>) x 3                                                                                                                       | $660.00  |
| No  | 3 | Product          | <span class="red">=30</span>  | <span class="red">$30.00</span> x 3                                                                                                                                                              | $90.00   |
| No  | 3 | Product          | <span class="red">+%30</span> | [<span class="green">$250.00</span> + (<span class="green">$250.00</span> x <span class="red">30 / 100</span>)] x 3                                                                              | $975.00  |
| No  | 3 | Product          | <span class="red">-%30</span> | [<span class="green">$250.00</span> - (<span class="green">$250.00</span> x <span class="red">30 / 100</span>)] x 3                                                                              | $525.00  |
| No  | 3 | Product + Option | <span class="red">+30</span>  | (<span class="green">$250.00</span> + <span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3                                                                                   | $900.00  |
| No  | 3 | Product + Option | <span class="red">-30</span>  | (<span class="green">$250.00</span> + <span class="blue">$20.00</span> - <span class="red">$30.00</span>) x 3                                                                                   | $720.00  |
| No  | 3 | Product + Option | <span class="red">=30</span>  | (<span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3                                                                                                                        | $150.00  |
| No  | 3 | Product + Option | <span class="red">+%30</span> | [<span class="green">$250.00</span> + <span class="blue">$20.00</span> + ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30 / 100</span>)] x 3    | $1053.00 |
| No  | 3 | Product + Option | <span class="red">-%30</span> | [<span class="green">$250.00</span> + <span class="blue">$20.00</span> - ((<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30 / 100</span>)] x 3    | $567.00  |
| No  | 3 | Option           | <span class="red">+30</span>  | (<span class="green">$250.00</span> + <span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 3                                                                                   | $900.00  |
| No  | 3 | Option           | <span class="red">-30</span>  | (<span class="green">$250.00</span> + <span class="blue">$20.00</span> - <span class="red">$30.00</span>) x 3                                                                                   | $720.00  |
| No  | 3 | Option           | <span class="red">=30</span>  | (<span class="green">$250.00</span> + <span class="red">$30.00</span>) x 3                                                                                                                       | $840.00  |
| No  | 3 | Option           | <span class="red">+%30</span> | [<span class="green">$250.00</span> + <span class="blue">$20.00</span> + (<span class="blue">$20.00</span> x <span class="red">30 / 100</span>)] x 3                                           | $828.00  |
| No  | 3 | Option           | <span class="red">-%30</span> | [<span class="green">$250.00</span> + <span class="blue">$20.00</span> - (<span class="blue">$20.00</span> x <span class="red">30 / 100</span>)] x 3                                           | $792.00  |
| Yes | 3 | Product          | <span class="red">+30</span>  | (<span class="green">$250.00</span> x 3) + <span class="red">$30.00</span>                                                                                                                       | $780.00  |
| Yes | 3 | Product          | <span class="red">-30</span>  | (<span class="green">$250.00</span> x 3) - <span class="red">$30.00</span>                                                                                                                       | $720.00  |
| Yes | 3 | Product          | <span class="red">=30</span>  | <span class="red">$30.00</span> x 1                                                                                                                                                              | $30.00   |
| Yes | 3 | Product          | <span class="red">+%30</span> | (<span class="green">$250.00</span> x 3) + (<span class="green">$250.00</span> x <span class="red">30 / 100</span>)                                                                              | $825.00  |
| Yes | 3 | Product          | <span class="red">-%30</span> | (<span class="green">$250.00</span> x 3) - (<span class="green">$250.00</span> x <span class="red">30 / 100</span>)                                                                              | $675.00  |
| Yes | 3 | Product + Option | <span class="red">+30</span>  | (<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> + <span class="red">$30.00</span>)                                                                                 | $800.00  |
| Yes | 3 | Product + Option | <span class="red">-30</span>  | (<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> - <span class="red">$30.00</span>)                                                                                 | $740.00  |
| Yes | 3 | Product + Option | <span class="red">=30</span>  | (<span class="blue">$20.00</span> + <span class="red">$30.00</span>) x 1                                                                                                                        | $50.00   |
| Yes | 3 | Product + Option | <span class="red">+%30</span> | (<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> + ( (<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30 / 100</span>)] | $851.00  |
| Yes | 3 | Product + Option | <span class="red">-%30</span> | (<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> - ( (<span class="green">$250.00</span> + <span class="blue">$20.00</span>) x <span class="red">30 / 100</span>)] | $689.00  |
| Yes | 3 | Option           | <span class="red">+30</span>  | (<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> + <span class="red">$30.00</span>)                                                                                 | $800.00  |
| Yes | 3 | Option           | <span class="red">-30</span>  | (<span class="green">$250.00</span> x 3) + (<span class="blue">$20.00</span> - <span class="red">$30.00</span>)                                                                                 | $740.00  |
| Yes | 3 | Option           | <span class="red">=30</span>  | (<span class="green">$250.00</span> x 3) + <span class="red">$30.00</span>) x 1                                                                                                                  | $780.00  |
| Yes | 3 | Option           | <span class="red">+%30</span> | (<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> + (<span class="blue">$20.00</span> x <span class="red">30 / 100</span>)]                                         | $776.00  |
| Yes | 3 | Option           | <span class="red">-%30</span> | (<span class="green">$250.00</span> x 3) + [<span class="blue">$20.00</span> - (<span class="blue">$20.00</span> x <span class="red">30 / 100</span>)]                                         | $764.00  |

## Managing Option Discount

After saving your option discount entry, you can manage them on the previous option discount list page with the buttons on the top right corner of the page.

  ![usage Managing Option Discount](images/usage_list_buttons.png)

### Viewing

Click on the table headers to sort the option discount entries by **Option Name**, **Option Type**, or **Sort Order** in the table.

  ![usage Viewing](images/usage_sort_table.png)

### Copy

To make a copy of your option discount entries, simply select them by checking the checkbox and click the white <button class="docute-button docute-button-default"><i class="fa fa-copy"></i></button> **Copy** button.

  ![usage Copy](images/usage_copy.png)

### Delete

To delete your option discount entries, simply select them by checking the checkbox and click the red <button class="docute-button docute-button-danger"><i class="fa fa-trash-o"></i></button> **Delete** button. A confirmation window will appear to confirm on the delete action.

  ![usage Copy](images/usage_delete.png)

## Customization

### Custom Language

To add additional language support, please perform the following steps (assuming `zh-cn` is the custom language folder name):

#### Admin Back-end

1. Make a copy of the following file:
`/admin/language/en-gb/extension/myoc/option_discount.php`

2. Paste it into your custom language folder(you may need to create the folder `myoc` manually):
`/admin/language/zh-cn/extension/myoc/option_discount.php`

3. Open and edit the newly copied file:
`/admin/language/zh-cn/extension/myoc/option_discount.php`

4. Edit the text in the file to your custom language accordingly.

#### Catalog Store Front

1. Make a copy of the following file:
`/catalong/language/en-gb/extension/myoc/option_discount.php`

2. Paste it into your custom language folder(you may need to create the folder `myoc` manually):
`/catalong/language/zh-cn/extension/myoc/option_discount.php`

3. Open and edit the newly copied file:
`/catalong/language/zh-cn/extension/myoc/option_discount.php`

4. Edit the text in the file to your custom language accordingly.

#### Custom Theme

Option Discount extension modifies front-end template files in order to replace the default options with option discount tables. Therefore, further code modifications may be required to integrate it with a 3rd party custom theme on a case-by-case basis. In such cases, you may contact us to request for [customization service](#professional-service).

## Troubleshoot / FAQ

**Q: Option Discount is not appearing on the product page.**

A1: Please clear your theme and modification cache:

> Login to your store admin and navigate to `Dashboard` \> click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-cog"></i></button> **Settings** button \> click on the orange <button class="docute-button docute-button-warning"><i class="fa fa-refresh"></i></button> **Refresh** buttons to refresh both `Theme` & `SASS` Components \> close the **Developer Settings** window.

> Then, navigate to `Extensions` \> `Modifications` \> click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-refresh"></i></button> **Refresh** button.

A2: Please make sure you have set the extension settings properly in your admin. The following settings can cause Option Discount not appearing on the product page:

> * Status is set to `Disabled`.
> * Product is not selected or does not falls under the selected Categories or Manufacturers set in your option discount entry settings.
> * The Option is not present in that particular product.
> * Customer Group is selected but customer is not logged in on store front.
> * Required Store is not selected.

> Please see [Usage](#usage) section for detailed settings instruction.

A3: If you have modified the following template files from the store admin \> `Design` \> **Theme Editor**, then Option Discount will be overwritten by the theme editor and won't be able to work properly:

> * `/catalog/view/theme/*/template/product/product.twig`

> Currently there's no solution for Modification to modify **Theme Editor's** edited template files. It is recommended that you edit the template files directly from the source, or use the OCMOD modification method to do so.

## Uninstall

### Option A: Uninstall only

Please follow the steps below if you want to temporary disable **Option Discount** extension from your store but plan to reinstall later.

1. Login as admin to your store administration back-end.

2. Navigate to `Extensions` \> `Extensions` \> under `Choose the extension type` \> select **OpenCart.my Extensions**.

3. Under `OpenCart.my Extensions`, look for the `Module Name` **Option Discount** and click on the red <button class="docute-button docute-button-danger"><i class="fa fa-minus-circle"></i></button> button to uninstall it.

  <p class="danger">
    **WARNING!** All Option Discount entries will be completely deleted from your store!
  </p>

  ![uninstall module](images/uninstall_module.png)

4. Navigate to `Extensions` \> `Modifications` \> `Option Discount` > click on the red <button class="docute-button docute-button-danger"><i class="fa fa-minus-circle"></i></button> button to disable it.

  ![uninstall module](images/uninstall_modification.png)

5. Click on the blue <button class="docute-button docute-button-primary"><i class="fa fa-refresh"></i></button> **Refresh** button.

### Option B: Uninstall and delete all extension files

Please follow the steps below to completely uninstall and delete **Option Discount** extension files from your store.

<p class="danger">
  **WARNING!** All extension files and configuration settings data will be completely deleted from your store!
</p>

1. Follow the steps above in the [Option A: Uninstall only](#option-a-uninstall-only) section to uninstall the extension.

2. In your store admin, navigate to `Extensions` \> `Installer` \> `Install History` \> under `Filename`, look for `myoc.optiondiscount.ocmod.zip` entry and click on the red <button class="docute-button docute-button-danger"><i class="fa fa-trash-o"></i></button> button to completely delete all **Option Discount** extension files.

  ![uninstall delete](images/uninstall_delete.png)

<p class="warning">
  Please **DO NOT** uninstall and delete the `myoc.installer.ocmod.zip` entry above, as it is required for you to access all other existing OpenCart.my (myoc) extensions that you might have installed and currently in use on your store.
</p>

## Changelog

| Version | Release Date | Features |
| --- | --- | --- |
| v2.0.0 | 13th July 2020 | 1. Support for latest OpenCart v3.0.x.<br>2. Option Discount can be set globally and apply to multiple products, categories, or manufacturers.<br>3. Added improved compatibility with Live Price Update, Better Option, and Global Fixed Quantity extensions. |

## Support

### Questions & Troubleshooting

If you have any questions regarding this extension or require troubleshooting support, please email to `support@opencart.my`

Please include the following in your email:

1. **URL** to the page on your store or **screenshots** showing the issue or error.
2. A temporary admin login to your OpenCart store administration with full **access** & **modify** permissions.
3. A temporary **FTP login** to your store host server with read & write permission.

### Professional Service

We provide a variety of professional services for your OpenCart store.

- Extension Customization
- Extension Integration with other 3rd party extensions
- Custom Theme Integration

Please email your request to `support@opencart.my` to see how we can help you.

### Comments and Feedbacks

You can always post your comments, feedback, or any suggestion on the extension page here: <https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=1888>
