<?php
/**
* Template Name: Contact
*
* @package WordPress
* @subpackage Cherrybomb
*/
get_header();
?>
<style type='text/css'>
	#contact { background: #ccc; border: 1px solid white; border-radius: 5px; }
</style>
<div class="container p-3" id="contact">
	<h1>Contact Us</h1>
	<?=do_shortcode('[wpforms id="14"]');?>
</div>
<?
get_footer();
