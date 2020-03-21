<article class="panel" style="max-width: 18rem; background-color: <?php echo get_option('general_background_color'); ?>;">
  <p class="panel-heading" style=" color: <?php echo get_option('header_text_color'); ?>; background-color: <?php echo get_option('header_background_color'); ?>;">
    <?php echo empty($country_data->country) ? __('Globally', 'coronavirus') : $country_data->country; ?>
  </p>
  <div>
  <?php foreach ($corona_data_options as $key => $option) : $pieces = preg_split('/(?=[A-Z])/',$key);?>
                <?php if ($option === 'on' && !empty($country_data->country)) : ?>
                    <label class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>; color: <?php echo get_option('general_text_color'); ?>!important;"><?php echo $pieces[1] . " " . strtolower($pieces[0])  . ": " . $country_data->$key; ?></label>
                <?php elseif (empty($country_data->country)) : ?>
                  <?php foreach ($country_data as $key => $value) : ?>
                      <label class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>; color: <?php echo get_option('general_text_color'); ?>!important;"><?php echo "$key: $value"; ?></label>
                  <?php endforeach; ?>
                <?php break;?>
              <?php endif; ?>
            <?php endforeach; ?>
  </div>
</article>

