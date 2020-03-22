<article class="panel" style="max-width: 18rem; background-color: <?php echo get_option('general_background_color'); ?>;">
  <p class="panel-heading" style=" color: <?php echo get_option('header_text_color'); ?>; background-color: <?php echo get_option('header_background_color'); ?>;">
    <?php echo empty($country_data->country) ? __('Globally', 'coronavirus') : $country_data->country; ?>
  </p>
  <div>
  <?php foreach ($corona_data_options as $key => $option) : $string = preg_replace('/[A-Z]/', ' $0', $key);?>
    <?php if ($option === 'on' && !empty($country_data->country)) : ?>
        <?php if (substr($key, 0, 5) !== 'today') : ?>
            <label class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>; color: <?php echo get_option('general_text_color'); ?>!important;"><?php echo ucfirst(strtolower($string)) . ": " . $country_data->$key; ?></label>
          <?php elseif (substr($key, 0, 5) === 'today') : $pieces = preg_split('/(?=[A-Z])/',$key); ?>
            <label class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>; color: <?php echo get_option('general_text_color'); ?>!important;"><?php echo ucfirst($pieces[1]) . ' ' . strtolower($pieces[0]) . ": " . $country_data->$key; ?></label>
        <?php endif ?>  
    <?php elseif (empty($country_data->country)) : ?>
        <?php foreach ($country_data as $key => $value) : ?>
            <label class="panel-block" style="border-color: <?php echo get_option('border_color'); ?>; color: <?php echo get_option('general_text_color'); ?>!important;"><?php echo ucfirst($key) . ": $value"; ?></label>
        <?php endforeach; ?>
        <?php break;?>
    <?php endif; ?>
  <?php endforeach; ?>
  </div>
</article>

