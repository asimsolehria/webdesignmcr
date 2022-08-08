<?php

/**
 * Email Addresses
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-addresses.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 5.6.0
 */

if (!defined('ABSPATH')) {
	exit;
}

// $text_align = is_rtl() ? 'right' : 'left';
$address    = $order->get_formatted_billing_address();
$shipping   = $order->get_formatted_shipping_address();

?>


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
					<td colspan="3" class="em-spacer-1" style="height: 26px"></td>
				</tr>
				<tr class="line-item">
					<td colspan="3" class="line-item product-thumb-column" style="
                                                                width: 80px;
                                                                padding-left: 50px;
                                                                text-align: left;
                                                                color: #fff;
                                                                font-size: 16px;
                                                            ">
						<strong>
							Customer
							Information</strong>
					</td>
				</tr>
				<tr>
					<td>
						<table align="left" class="column column-1" style="
                                                                    margin: 0;
                                                                    width: 270px;
                                                                ">

							<tbody>
								<tr>
									<td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px
                                                                                    50px;
                                                                            ">
										<strong class="title" style="
                                                                                    display: block;
                                                                                    margin-bottom: 5px;
                                                                                ">
											Shipping
											Address
										</strong>
										<?php if (!wc_ship_to_billing_address_only() && $order->needs_shipping_address() && $shipping) : ?>
											<address class="address" style="font-style: normal;">
												<?php echo wp_kses_post($shipping); ?>
												<?php if ($order->get_shipping_phone()) : ?>
													<br /><?php echo wc_make_phone_clickable($order->get_shipping_phone()); ?>
												<?php endif; ?>
											</address>

										<?php endif; ?>
									</td>
								</tr>
							</tbody>

						</table>
						<table align="left" class="column column-2" style="
                                                                    margin: 0;
                                                                    width: 270px;
                                                                ">
							<tbody>
								<tr>
									<!-- <td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px;
                                                                            "></td> -->
									<td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px
                                                                                    50px;
                                                                            ">
										<strong class="title" style="
                                                                                    display: block;
                                                                                    margin-bottom: 5px;
                                                                                ">
											Billing
											Address
										</strong>
										<address class="address" style="font-style: normal;">
											<?php echo wp_kses_post($address ? $address : esc_html__('N/A', 'woocommerce')); ?>
											<?php if ($order->get_billing_phone()) : ?>
												<br /><?php echo wc_make_phone_clickable($order->get_billing_phone()); ?>
											<?php endif; ?>
											<?php if ($order->get_billing_email()) : ?>
												<br /><?php echo esc_html($order->get_billing_email()); ?>
											<?php endif; ?>
										</address>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>
				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>
				<tr>
					<td>
						<table align="left" class="column column-1" style="
                                                                    margin: 0;
                                                                    width: 270px;
                                                                ">
							<tbody>
								<tr>
									<td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px
                                                                                    50px;
                                                                            ">
										<strong class="title" style="
                                                                                    display: block;
                                                                                    margin-bottom: 5px;
                                                                                ">
											Shipping
											Method <br>
										</strong>
										<span style="
                                                                                    color: #fff;
                                                                                    font-size: smaller;
                                                                                "><?php echo $order->get_shipping_method(); ?></span>
									</td>
								</tr>
							</tbody>
						</table>
						<table align="left" class="column column-2" style="
                                                                    margin: 0;
                                                                    width: 270px;
                                                                ">
							<tbody>
								<tr>
									<!-- <td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px;
                                                                            "></td> -->
									<td style="
                                                                                padding: 10px
                                                                                    10px
                                                                                    10px
                                                                                    50px;
                                                                            ">
										<strong class="title" style="
                                                                                    display: block;
                                                                                    margin-bottom: 5px;
                                                                                ">
											Payment
											Method <br>
										</strong>
										<span style="
                                                                                    color: #fff;
                                                                                    font-size: smaller;
                                                                                "><?php echo $order->get_payment_method_title(); ?></span>
									</td>
								</tr>
							</tbody>
						</table>
					</td>
				</tr>

				<tr>
					<td class="em-spacer-1" style="height: 26px"></td>
				</tr>
			</tbody>
		</table>
	</td>
</tr>