<?php

/**
 * Email Order Items
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-items.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;



foreach ($items as $item_id => $item) :
	$product       = $item->get_product();
	$sku           = '';
	$purchase_note = '';
	$image         = '';

	if (!apply_filters('woocommerce_order_item_visible', true, $item)) {
		continue;
	}

	if (is_object($product)) {
		$sku           = $product->get_sku();
		$purchase_note = $product->get_purchase_note();
		$image         = $product->get_image($image_size);

		$image_id  = $product->get_image_id();
		$image_url = wp_get_attachment_image_url($image_id, 'full');
	}

?>

	<tr class="line-item">
		<td class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 30px;
                                                                text-align: center;
                                                            ">
			<img alt="Queen" class="product-thumb" height="150" width="150" src="<?php echo $image_url; ?>" style="
                                                                    width: 150px;
                                                                    height: 150px;
                                                                " />
			<div class="row-spacer" style="
                                                                    height: 8px;
                                                                "></div>
		</td>
		<td class="line-item product-info-column" style="
                                                                width: 200px;
                                                                color: #fff;
                                                            ">
			<div class="title" style="
                                                                    margin-bottom: 5px;
                                                                ">
				<?php

				echo wp_kses_post(apply_filters('woocommerce_order_item_name', $item->get_name(), $item, false));

				if ($show_sku && $sku) {
					echo wp_kses_post(' (#' . $sku . ')');
				}

				do_action('woocommerce_order_item_meta_start', $item_id, $item, $order, $plain_text);

				wc_display_item_meta(
					$item,
					array(
						'label_before' => '<strong class="wc-item-meta-label" style="float: ' . esc_attr($text_align) . '; margin-' . esc_attr($margin_side) . ': .25em; clear: both">',
					)
				);

				// allow other plugins to add additional product information here.
				do_action('woocommerce_order_item_meta_end', $item_id, $item, $order, $plain_text);

				?>


			</div>
			<br />
			<div class="sub" style="
                                                                    font-size: 13px;
                                                                    margin-bottom: 3px;
                                                                ">
				Qty: <?php
						$qty          = $item->get_quantity();
						$refunded_qty = $order->get_qty_refunded_for_item($item_id);

						if ($refunded_qty) {
							$qty_display = '<del>' . esc_html($qty) . '</del> <ins>' . esc_html($qty - ($refunded_qty * -1)) . '</ins>';
						} else {
							$qty_display = esc_html($qty);
						}
						echo wp_kses_post(apply_filters('woocommerce_email_order_item_quantity', $qty_display, $item));
						?>
			</div>
		</td>
		<td class="line-item product-price-column" style="
                                                                width: 100px;
                                                                text-align: right;
                                                                vertical-align: top;
                                                                color: #fff;
                                                                padding-right: 30px;
                                                            ">
			<div class="sub price" style="
                                                                    font-size: 13px;
                                                                    margin-bottom: 3px;
                                                                    margin-top: 18px;
                                                                ">
				<?php echo wp_kses_post($order->get_formatted_line_subtotal($item)); ?>
			</div>
		</td>
	</tr>


	<?php

	if ($show_purchase_note && $purchase_note) {
	?>
		<tr>
			<td colspan="3" style="text-align:left; vertical-align:middle; font-family: 'Helvetica Neue', Helvetica, Roboto, Arial, sans-serif;">
				<?php
				echo wp_kses_post(wpautop(do_shortcode($purchase_note)));
				?>
			</td>
		</tr>
	<?php
	}
	?>



<?php endforeach; ?>