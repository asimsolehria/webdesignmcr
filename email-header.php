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
        <meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>" />
        <title><?php echo get_bloginfo( 'name', 'display' ); ?></title>
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
  
                                <tr>
                                    <td class="em-spacer-1" style="height: 26px;background: #757575;"></td>
                                </tr>

                                <tr>
                                    <td class="box" style="
                                                background: #757575;
                                                padding: 0 25px;
                                            ">
                                        <table bgcolor="#000000" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="margin: 0 auto">
                                            <tbody>
                                                <!-- HERE to add background  -->
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
                                                                        <a href="#" target="_blank">
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
                                                                <?php if ("customer_processing_order" === $email->id) : ?>
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
                                                                <?php endif; ?>
                                                                <?php if (!("customer_reset_password" === $email->id || "customer_new_account" === $email->id)) : ?>
                                                                    <tr>
                                                                        <td class="em-spacer-1" style="
                                                                                height: 26px;
                                                                            "></td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td style="
                                                                                padding: 0px;
                                                                            " align="center" class="em_hero_td">
                                                                            
                                                                                <img width="250" src="https://seemynewwebsite.co.uk/emails/wp-content/uploads/2022/08/truck.png" style="height: auto;" />
                                                                
                                                                        </td>
                                                                    </tr>
                                                                <?php endif; ?>
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
                                    <td class="em-spacer-1" style="height: 13px;background: #757575;"></td>
                                </tr>