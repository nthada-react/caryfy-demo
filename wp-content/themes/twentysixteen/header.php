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
    <meta name="description" content="Streamline SFC care in Georgia with Caryfy, a comprehensive solution for agency admins and owners. Simplify management, improve caregiver support, and maximize reimbursement with features tailored for Georgia's SFC waiver program. Learn more about long term service and support for SFC, Georgia Medicaid SFC services, SFC support services in Georgia, and more.">
    <!-- JSON LD Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "name": "Streamline SFC Care in Georgia with Caryfy",
      "description": "Caryfy offers streamlined management solutions for the Georgia Structured Family Caregiving (SFC) program. Simplify caregiver support and maximize reimbursement. Learn about Georgia SFC LTSS today.",
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
	<header>
    <?php $template_slug = get_page_template_slug(); ?>
    <div class="logo">
       <a href="#"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/caryfy-logo.png" alt="" /></a>
    </div>
	<h1 class="animated zoomIn">Streamline SFC Care in Georgia with Caryfy</h1>
    <h2>Simplify Management, Improve Caregiver Support, Maximize Reimbursement</h2>
	<div class="container">
	<div class="videoSection">
		<div class="videoWrapper">
			<iframe class="responsive-iframe" src="https://www.youtube.com/embed/tkiXqA-QkDc?si=N9pltvZ8tKBxBwvX"></iframe>
		</div>
			</div>
	</div>
</header>
