<?php

/**
 * Order details table shown in emails.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-order-details.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 3.7.0
 */

defined('ABSPATH') || exit;

$text_align = is_rtl() ? 'right' : 'left';
?>
<tr>
	<td>

		<?php do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
	</td>
</tr>

<h2>
	<?php
	if ($sent_to_admin) {
		$order_url = $order->get_edit_order_url();
	} else {
		$order_url = $order->get_view_order_url();
	}
	/* translators: %s: Order ID. */
	echo wp_kses_post($before . sprintf(__('[Order #%s]', 'woocommerce') . $after . ' (<time datetime="%s">%s</time>)', $order->get_order_number(), $order->get_date_created()->format('c'), wc_format_datetime($order->get_date_created())));
	?>
</h2>

<tr>
	<td class="box box-ext order-summary-box" style="
                                                background: #757575;
                                                padding: 0 25px;
                                                text-align: center;
                                            ">
		<table class="two-col ledger" style="
                                                    background: #000000;
                                                    margin: 0 auto;
                                                    font-size: 14px;
                                                    line-height: 22px;
                                                    width: 100%;
                                                    text-align: left;
                                                ">
			<tbody>
				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>
				<tr></tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 30px;
                                                                text-align: left;
                                                                color: #fff;
                                                                font-size: 14px;
                                                                font-weight: thin;
                                                                padding-bottom: 10px;
                                                            ">
						Hi <?php echo $order->get_billing_first_name(); ?>,
					</td>
				</tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 30px;
                                                                text-align: left;
                                                                color: #fff;
                                                                font-size: 14px;
                                                                padding-bottom: 30px;
                                                            ">
						Just to let you know
						--we've received
						your order #<?php echo $order->get_order_number(); ?>,
						and it is now being
						processed:
					</td>
				</tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 30px;
                                                                text-align: left;
                                                                color: #fff;
                                                                font-size: 14px;
                                                                padding-bottom: 10px;
                                                            ">
						<a href="<?php echo $order_url; ?>" style="
                                                                    text-decoration: none;
                                                                    background: #dabb4c;
                                                                    color: #fff;
                                                                    padding: 12px;
                                                                    border-radius: 5px;
                                                                ">View your
							order</a>
						&nbsp;&nbsp;
						<a href="#" style="
                                                                    color: #dabb4c;
                                                                "><strong>Visit our
								store</strong></a>
					</td>
				</tr>

				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td class="em-spacer-1" style="height: 13px"></td>
</tr>


<tr>
	<td class="box box-ext order-summary-box" style="
                                                background: #757575;
                                                padding: 0 25px;
                                                text-align: center;
                                            ">
		<table class="order-summary" style="
                                                    background: #000000;
                                                    margin: 0 auto;
                                                    text-align: left;
                                                    width: 100%;
                                                ">
			<tbody>
				<tr>
					<td class="em-spacer-0" style="height: 20px"></td>
				</tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 50px;
                                                                text-align: left;
                                                                color: #fff;
                                                            ">
						<strong>
							Order
							<span style="
                                                                        color: #dabb4c;
                                                                    "><?php echo $order->get_order_number() ?></span>
							summary</strong>
					</td>
				</tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 50px;
                                                                padding-top: 10px;
                                                                text-align: left;
                                                                font-size: small;
                                                            ">
						<?php echo wc_format_datetime($order->get_date_created()); ?>
						<br />
						<br />
					</td>
				</tr>
				<!-- Add email order items here  -->
				<?php
				echo wc_get_email_order_items( // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
					$order,
					array(
						'show_sku'      => $sent_to_admin,
						'show_image'    => true,
						'image_size'    => array(32, 32),
						'plain_text'    => $plain_text,
						'sent_to_admin' => $sent_to_admin,
					)
				);
				?>

				<tr>
					<td class="em-spacer-0" style="height: 20px"></td>
				</tr>
				<tr>
					<td colspan="3" style="
                                                                padding-left: 30px;
                                                                padding-right: 30px;
                                                            ">
						<table width="100%">
							<tr>
								<td class="divider" colspan="3" style="
                                                                            border-bottom: 1px
                                                                                solid
                                                                                grey;
                                                                        "></td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>

				<tr class="total-row" style="font-size: 14px">
					<td class="copy" colspan="2" style="
                                                                text-align: left;
                                                                padding: 7px;
                                                                padding-left: 45%;
                                                            ">
						Shipping:
					</td>
					<td class="value" style="
                                                                text-align: right;
                                                                padding-right: 30px;
                                                                color: #fff;
                                                            ">
						<?php echo $order->get_shipping_total(); ?>
					</td>
				</tr>
				<?php
				$item_totals = $order->get_order_item_totals();

				if ($item_totals) {
					$i = 0;
					foreach ($item_totals as $total) {
						$i++;
				?>

						<?php if ("Total:" === $total['label']) : ?>
							<tr>
								<td colspan="3" style="
                                                                padding-left: 45%;
                                                                padding-right: 30px;
                                                                padding-top: 20px;
                                                            ">
									<table width="100%">
										<tr>
											<td class="divider" colspan="3" style="
                                                                            border-bottom: 1px
                                                                                solid
                                                                                grey;
                                                                        "></td>
										</tr>
									</table>
								</td>
							</tr>
						<?php endif; ?>

						<tr class="total-row" style="font-size: 14px">
							<td class="copy" colspan="2" style="
                                                                text-align: left;
                                                                padding: 7px;
                                                                padding-left: 45%;
                                                            ">
								<?php echo wp_kses_post($total['label']); ?>
							</td>
							<td class="value" style="
                                                                text-align: right;
                                                                padding-right: 30px;
                                                                color: #fff;
                                                            ">
								<?php echo wp_kses_post($total['value']); ?>
							</td>
						</tr>

					<?php
					}
				}
				if ($order->get_customer_note()) {
					?>
					<tr>
						<th class="td" scope="row" colspan="2" style="text-align:left;"><?php esc_html_e('Note:', 'woocommerce'); ?></th>
						<td class="td" style="text-align:<?php echo esc_attr($text_align); ?>;"><?php echo wp_kses_post(nl2br(wptexturize($order->get_customer_note()))); ?></td>
					</tr>
				<?php
				}
				?>

				<tr>
					<td class="em-spacer-0" style="height: 20px"></td>
				</tr>
				<!-- <tr>
                                                        <td
                                                            class="divider"
                                                            colspan="3"
                                                            style="
                                                                border-bottom: 2px
                                                                    solid #eee;
                                                            "
                                                        ></td>
                                                    </tr> -->
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td class="em-spacer-1" style="height: 26px"></td>
</tr>



<tr>
	<td>
		<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
	</td>
</tr>