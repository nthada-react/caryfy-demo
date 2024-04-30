<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Streamline SFC Care in Georgia with Caryfy</title>
    <meta name="keywords" itemProp="keywords" content="Structured Family Caregiving Onboarding"/>
    <meta name="description" content="SFC, Onboarding, Home Health Care, Georgia, Agency Owners, Administrators, Medicaid, Financial Assistance, Caregivers, Training, Support, Application Process">
    <!-- JSON LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Structured Family Caregiving Onboarding",
      "description": "SFC, Onboarding, Home Health Care, Georgia, Agency Owners, Administrators, Medicaid, Financial Assistance, Caregivers, Training, Support, Application Process",
      "url": "http://localhost/caryfy/",
      "mainEntity": {
        "@type": "Organization",
        "name": "Caryfy"
      }
    }
    </script>
    <link rel="icon" type="image/png" href="<?php echo get_stylesheet_directory_uri(); ?>/images/fav/favicon-32x32.png" sizes="32x32" />
    <!---====== Bootstrap Css =====-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.css">
    <!---====== Animate Style Css =====-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/animate.css">
	<!---====== Animate Style Css =====-->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/common-style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

