<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<?php 
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://rgd.ecominfinity.com/");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$_output = curl_exec($ch);
curl_close($ch);
$slices = explode('<div class="fullwidthbanner-container">', $_output);
$head = explode('</head>', $slices[0]);
echo $head[0];
?>
<?php wp_head(); ?>
</head>
<?php echo $head[1]; ?>
<div class="page">
  <div class="main-container col1-layout">
    <div class="main">
