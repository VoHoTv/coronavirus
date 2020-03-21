<article class="panel" style="max-width: 18rem; background-color: <?php echo get_option('general_background_color'); ?>;">
  <p class="panel-heading" style=" color: <?php echo get_option('header_text_color'); ?>; background-color: <?php echo get_option('header_background_color'); ?>;">
    <?php echo $country_data['country']; ?>
  </p>
  <div style="color: <?php echo get_option('general_text_color'); ?>;">
  <?php foreach ($corona_data_options as $key => $option) : $pieces = preg_split('/(?=[A-Z])/',$key);?>
                
                <?php if ($option === 'on') : ?>
                    <a class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>;"><?php echo $pieces[1] . " " . strtolower($pieces[0])  . ": $country_data[$key]"; ?></a>
                <?php endif; ?>
            <?php endforeach; ?>
            </div>
</article>

