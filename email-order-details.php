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

// Email specific strings


$email_subheadings = array(
	"new_order" => "You’ve received the following order from {$order->get_billing_first_name()} {$order->get_billing_last_name()}:",
	"cancelled_order" => "Notification to let you know — order #{$order->get_order_number()} from {$order->get_billing_first_name()} {$order->get_billing_last_name()} has been cancelled:",
	"failed_order" => "Payment for order #{$order->get_order_number()} from {$order->get_billing_first_name()} {$order->get_billing_last_name()} has failed. The order was as follows:",
	"customer_on_hold_order" => "Thanks for your order. It’s on-hold until we confirm that payment has been received. In the meantime, here’s a reminder of what you ordered:",
	"customer_processing_order" => "Just to let you know — we've received your order #{$order->get_order_number()}, and it is now being processed:",
	"customer_completed_order" => "We have finished processing your order.",
	"customer_refunded_order" => "Your order on  has been refunded. There are more details below for your reference:",
	"customer_invoice" => "An order has been created for you on. Your invoice is below, with a link to make payment when you’re ready: <a href='{$order->get_checkout_payment_url()}'>Pay for this order</a>",
)
?>
<!-- <tr>
	<td>

		<?php do_action('woocommerce_email_before_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
	</td>
</tr> -->

<h2>
	<?php
	if ($sent_to_admin) {
		$order_url = $order->get_edit_order_url();
	} else {
		$order_url = $order->get_view_order_url();
	}
	/* translators: %s: Order ID. */
	// echo wp_kses_post($before . sprintf(__('[Order #%s]', 'woocommerce') . $after . ' (<time datetime="%s">%s</time>)', $order->get_order_number(), $order->get_date_created()->format('c'), wc_format_datetime($order->get_date_created())));
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
					<td colspan="3" class="em-spacer-1" style="height: 26px;background: #000000;"></td>
				</tr>

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
						<?php echo $email_subheadings[$email->id]; ?>
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
						<!-- <a href="<?php echo $order_url; ?>" style="
                                                                    text-decoration: none;
                                                                    background: #dabb4c;
                                                                    color: #fff;
                                                                    padding: 12px;
                                                                    border-radius: 5px;
                                                                ">View your
							order</a> -->
						<div>
							<!--[if mso]>

    <v:roundrect 
      xmlns:v="urn:schemas-microsoft-com:vml" 
      xmlns:w="urn:schemas-microsoft-com:office:word" 
      href="<?php echo $order_url; ?>" 
      style="height:52px;v-text-anchor:middle;width:250px; " 
      arcsize="10%" 
      stroke="f" 
      fillcolor="#dabb4c">
    <w:anchorlock/>
    <center>
  <![endif]-->
							<a href="<?php echo $order_url; ?>" style="background-color:#dabb4c;
                border-radius:5px;
                color:#ffffff;
                display:inline-block;
                font-family:sans-serif;
                font-size:13px;
                font-weight:bold;
                /* line-height:40px; */
				padding: 20px;
				padding-top: 10px;
				padding-bottom: 10px;
                text-align:center;
                text-decoration:none;
                width:150px;
                -webkit-text-size-adjust:none;">
								View your order
							</a>
							<!--[if mso]>

    </center>
  </v:roundrect>
<![endif]-->
							<!--[if mso]>

    <v:roundrect 
      xmlns:v="urn:schemas-microsoft-com:vml" 
      xmlns:w="urn:schemas-microsoft-com:office:word" 
      href="<?php echo site_url(); ?>" 
      style="height:52px;v-text-anchor:middle;width:250px; display:block" 
      arcsize="10%" 
      stroke="f" 
      fillcolor="#000000">
    <w:anchorlock/>
    <center>
  <![endif]-->
							<a href="<?php echo site_url(); ?>" style="
                border-radius:5px;
                color:#dabb4c;
                display:inline-block;
                font-family:sans-serif;
				padding-top: 10px;
				padding-bottom: 10px;
                font-weight:bold;
                /* line-height:40px; */
				padding:20px;
                text-align:center;
                
                width:150px;
                -webkit-text-size-adjust:none;">
								Visit our store
							</a>
							<!--[if mso]>

    </center>
  </v:roundrect>
<![endif]-->
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
	<td class="em-spacer-1" style="height: 13px;background: #757575;"></td>
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
					<td colspan="3" class="em-spacer-0" style="height: 20px"></td>
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
                                                                    ">#<?php echo $order->get_order_number() ?></span>
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
                                                                                gray;
                                                                        "> </td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>

				<!-- <tr class="total-row" style="font-size: 14px">
					<td class="copy" colspan="2" style="
                                                                text-align: left;
                                                                padding: 7px;
                                                                padding-left: 40%;
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
				</tr> -->
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
                                                                padding-left: 40%;
                                                                padding-right: 30px;
                                                                padding-top: 20px;
                                                            ">
									<table width="100%">
										<tr>
											<td class="divider" colspan="3" style="
                                                                            border-bottom: 1px
                                                                                solid
                                                                                gray;
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
                                                                padding-left: 40%;
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
				<tr>
					<td>
						<?php do_action('woocommerce_email_after_order_table', $order, $sent_to_admin, $plain_text, $email); ?>
					</td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>
<tr>
	<td class="em-spacer-1" style="height: 26px;background: #757575;"></td>
</tr>