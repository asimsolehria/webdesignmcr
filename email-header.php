<?php

/**
 * Email Header
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/email-header.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates\Emails
 * @version 4.0.0
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
// Call the global $email object
global $email;
// use if needed



?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Thank you for your order (#R650000650)</title>
</head>

<body>

	<head>
		<style>
			table {
				border-collapse: collapse;
				text-indent: initial;
				border-spacing: 0px;
			}
		</style>
	</head>

	<body style="
                font-family: Helvetica, sans-serif;
                padding: 0;
                margin: 0;
                -webkit-font-smoothing: antialiased;
                color: #616161;
            ">
		<table class="wrapper" style="
                    margin: 0;
                    background: #fff;
                    border: 0;
                    width: 100%;
                    text-align: center;
                ">
			<tbody>
				<tr>
					<td class="content-wrap" style="
                                border: 0;
                                width: 650px;
                                text-align: center;
                                background: #000000;
                            ">
						<table class="content" style="
                                    margin: 0 auto;
                                    border: 0;
                                    width: 650px;
                                    text-align: center;
                                ">
							<tbody style="background-color: #757575">
								<!-- <tr>
                                        <td
                                            class="em-spacer-1"
                                            style="height: 26px"
                                        ></td>
                                    </tr> -->
								<!-- <tr class="casper-header-row">
                                        <td
                                            class="casper-header-td"
                                            style="text-align: center"
                                        >
                                            <a
                                                href="https://casper.com?utm_source=casper%20support&amp;utm_campaign=order%20confirmation&amp;utm_medium=email&amp;utm_content=thank%20you%20for%20your%20order"
                                                target="_blank"
                                            >
                                                <img
                                                    src="https://operator-production.herokuapp.com/images/mailer/casper.png"
                                                    class="casper-header-logo"
                                                    margin="0 auto"
                                                    style="
                                                        display: block;
                                                        max-width: 90px;
                                                        width: 90px;
                                                        margin: 0 auto;
                                                        border: 0 !important;
                                                        outline: 0 !important;
                                                    "
                                                />
                                            </a>
                                        </td>
                                    </tr> -->
								<tr>
									<td class="em-spacer-1" style="height: 26px"></td>
								</tr>

								<tr>
									<td class="box" style="
                                                background: #757575;
                                                padding: 0 25px;
                                            ">
										<table bgcolor="#000000" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 auto">
											<tbody>
												<!-- HERE to add background red -->
												<tr>
													<td align="center">
														<table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="
                                                                    margin: 0
                                                                        auto;
                                                                ">
															<tbody>
																<tr>
																	<td style="
                                                                                padding: 20px;
                                                                            " align="center" class="em_hero_td">
																		<a href="https://casper.com/?utm_source=casper%20support&amp;utm_campaign=order%20confirmation&amp;utm_medium=email&amp;utm_content=thank%20you%20for%20your%20order" target="_blank">
																			<img width="250" src="https://seemynewwebsite.co.uk/emails/wp-content/uploads/2022/08/strand-logo-white.png" style="
                                                                                        height: auto;
                                                                                    " />
																		</a>
																	</td>
																</tr>
																<tr>
																	<td align="center">
																		<h1 class="hero-primary" style="
                                                                                    text-transform: uppercase;
                                                                                    font-size: 28px;
                                                                                    color: #ffffff;
                                                                                    margin-top: 9px;
                                                                                ">
																			<?php echo $email_heading; ?>
																		</h1>
																	</td>
																</tr>
																<tr class="lead-wrap" style="
                                                                            text-align: center;
                                                                            width: 100%;
                                                                        ">
																	<td class="lead" style="
                                                                                font-family: Helvetica,
                                                                                    sans-serif;
                                                                                text-align: center;
                                                                                border-collapse: collapse;
                                                                                font-size: 16px;
                                                                                letter-spacing: 0.045em;
                                                                                line-height: 24px;
                                                                                mso-line-height-rule: exactly;
                                                                                color: #ffffff;
                                                                            ">
																		Your
																		order
																		is
																		being
																		processed
																	</td>
																</tr>
																<tr>
																	<td class="em-spacer-1" style="
                                                                                height: 26px;
                                                                            "></td>
																</tr>
																<tr>
																	<td style="
                                                                                padding: 0px;
                                                                            " align="center" class="em_hero_td">
																		<a href="https://casper.com/?utm_source=casper%20support&amp;utm_campaign=order%20confirmation&amp;utm_medium=email&amp;utm_content=thank%20you%20for%20your%20order" target="_blank">
																			<img width="250" src="https://seemynewwebsite.co.uk/emails/wp-content/uploads/2022/08/truck.png" style="
                                                                                        height: auto;
                                                                                    " />
																		</a>
																	</td>
																</tr>
																<!-- <tr>
                                                                        <td
                                                                            class="em-spacer-1"
                                                                            style="
                                                                                height: 26px;
                                                                            "
                                                                        ></td>
                                                                    </tr> -->
																<tr>
																	<td class="em-spacer-2" style="
                                                                                height: 52px;
                                                                            "></td>
																</tr>
															</tbody>
														</table>
													</td>
												</tr>
											</tbody>
										</table>
									</td>
								</tr>
								<tr>
									<td class="em-spacer-1" style="height: 13px"></td>
								</tr>