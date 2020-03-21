<?php

/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       https://mikezuidhoek.com/
 * @since      1.0.0
 *
 * @package    Coronavirus
 * @subpackage Coronavirus/public/partials
 */

$country_data = $this->get_corona_data($country);
$corona_data_options = json_decode(get_option('corona_data_options'), true);
?>

<article class="panel" style="max-width: 18rem; background-color: <?php echo get_option('general_background_color'); ?>;">
  <p class="panel-heading" style=" color: <?php echo get_option('header_text_color'); ?>; background-color: <?php echo get_option('header_background_color'); ?>;">
    <?php echo $country_data['country']; ?>
  </p>
  <div style="color: <?php echo get_option('general_text_color'); ?>;">
  <?php foreach ($corona_data_options as $key => $option) : $pieces = preg_split('/(?=[A-Z])/',$key);?>
                
                <?php if ($option === 'on') : ?>
                    <a class="panel-block"><?php echo $pieces[1] . " " . strtolower($pieces[0])  . ": $country_data[$key]"; ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
</article>