<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://mikezuidhoek.com/
 * @since      1.0.0
 *
 * @package    Coronavirus
 * @subpackage Coronavirus/admin/partials
 */

$checkbox_ids = [
    'cases' => __('Total cases', 'coronavirus'), 
    'todayCases' => __('Today\'s cases', 'coronavirus'),
    'deaths' => __('Total deaths', 'coronavirus'),
    'todayDeaths' => __('Today\'s deaths', 'coronavirus'),
    'recovered' => __('Recovered', 'coronavirus'),
    'active' => __('Active cases', 'coronavirus'),
    'critical' => __('Critical', 'coronavirus'),
    'casesPerOneMillion' => __('Cases per one million', 'coronavirus')
];

$this->save_settings($checkbox_ids);

$country_data = $this->shared_functionality->get_corona_data('China');
$corona_data_options = json_decode(get_option('corona_data_options'), true);
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

<div class="container-fluid">
    <h1 class="font-weight-bold"><?php _e('Coronavirus Settings', 'coronavirus'); ?></h1>

    <form class="mb-3 mt-2" action="" method="POST">
        <div class="row">

            <div class="col-12 col-md-6 col-xl-4">
                <h4><?php _e('Modify the widgets color', 'coronavirus'); ?></h4>
                <div class="form-group">
                    <label for="header-background-color"><?php _e('Header Background Color', 'coronavirus'); ?></label>
                    <input type="color" name="header-background-color" id="header-background-color" value="<?php echo empty(get_option('header_background_color')) ? '#F7F7F7': get_option('header_background_color'); ?>">
                </div>
                <div class="form-group">
                    <label for="header-text-color"><?php _e('Header Text Color', 'coronavirus'); ?></label>
                    <input type="color" name="header-text-color" id="header-text-color" value="<?php echo get_option('header_text_color'); ?>">
                </div>
                <div class="form-group">
                    <label for="general-background-color"><?php _e('General Background Color', 'coronavirus'); ?></label>
                    <input type="color" name="general-background-color" id="general-background-color" value="<?php echo empty(get_option('general_background_color')) ? '#FFFFFF': get_option('general_background_color'); ?>">
                </div>
                <div class="form-group">
                    <label for="general-text-color"><?php _e('Text Color', 'coronavirus'); ?></label>
                    <input type="color" name="general-text-color" id="general-text-color" value="<?php echo get_option('general_text_color'); ?>">
                </div>
                <div class="form-group">
                    <label for="border-color"><?php _e('Seperator color', 'coronavirus'); ?></label>
                    <input type="color" name="border-color" id="border-color" value="<?php echo empty(get_option('border_color')) ? '#ededed': get_option('border_color'); ?>">
                </div>
            </div>

            <div class="form-group col-12 col-md-6 col-xl-4">
                <h4><?php _e('Choose what information to display', 'coronavirus'); ?></h4>
                <?php foreach ($checkbox_ids as $id => $display_value) : ?>
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="<?php echo $id; ?>" name="<?php echo $id; ?>" <?php if ($corona_data_options[$id] === 'on') echo 'checked'; ?>>
                        <label class="custom-control-label" for="<?php echo $id; ?>"><?php echo $display_value; ?></label>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
        <div class="btn-group">
            <button type="submit" class="btn btn-success" name="save-settings"><?php _e('Save', 'coronavirus'); ?></button>       
            <button type="submit" class="btn btn-danger" name="reset-settings"><?php _e('Reset to default config', 'coronavirus'); ?></button>       
        </div>
    </form>

    <?php require_once dirname(plugin_dir_path( dirname( __FILE__ ) )) . '/includes/shared-partials/coronavirus-info.php'; ?>

</div>