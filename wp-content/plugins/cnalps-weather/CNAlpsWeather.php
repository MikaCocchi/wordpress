<?php

/**
 * Plugin Name: CNAlpsWeather
 * Plugin URI: https://www.CNALPS Weather.com/
 * Description: Test.
 * Version: 0.2
 * Author: your-name
 * Author URI: https://www.CNALPS Weather.com/
 **/
class CNAlpsWeather extends WP_Widget
{
    // Main constructor
    public function __construct()
    {
        parent::__construct(
            'CNAlpsWeather',
            'CNAlpsWeather',
            array(
                'customize_selective_refresh' => true,
            )
        );
    }

    // The widget form (for the backend )
    public function form($instance)
    {

        // Set widget defaults
        $defaults = array(
            'city' => '',
            'country' => '',
        );

        // Parse current settings with defaults
        extract(wp_parse_args(( array )$instance, $defaults)); ?>

        <?php // country
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('city')); ?>"><?php _e('Ville', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('city')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('city')); ?>" type="text"
                   value="<?php echo esc_attr($country); ?>"/>
        </p>

        <?php // country
        ?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('country')); ?>"><?php _e('Pays', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('country')); ?>"
                   name="<?php echo esc_attr($this->get_field_name('country')); ?>" type="text"
                   value="<?php echo esc_attr($country); ?>"/>
        </p>
    <?php }

    // Update widget settings
    public function update($new_instance, $old_instance)
    {
        $instance = $old_instance;
        $instance['city'] = isset($new_instance['city']) ? wp_strip_all_tags($new_instance['city']) : '';
        $instance['country'] = isset($new_instance['country']) ? wp_strip_all_tags($new_instance['country']) : '';
        return $instance;
    }

    // Display the widget
    public function widget($args, $instance)
    {

        extract($args);
        $url = 'https://www.weatherwp.com/api/common/publicWeatherForLocation.php?city=' . $instance['city'] . '&country=' . $instance['country'] . '&language=french';
        $apiResponse = $this->CallAPI("GET", $url,);
        $apiResponse = json_decode($apiResponse, true);
        echo $before_widget;
        echo '<div class="cnalps-weather-widget">
                <div style="text-align: center" class="weather-title">Météo à ' . $instance['city'] . '</div>
                <img style="align-self: center" src="' . $apiResponse['icon'] . '" alt="météo">
                <h4 style="text-align: center; color: white ">' . $apiResponse['temp'] . '°C</h4>
                <p style="text-align: center; color: white ">' . $apiResponse['description'] . '</p>
              </div>
             ';

        echo $after_widget;

    }
    // Method: POST, PUT, GET etc
    // Data: array("param" => "value") ==> index.php?param=value

    function CallAPI($method, $url, $data = false)
    {
        $curl = curl_init();

        switch ($method) {
            case "POST":
                curl_setopt($curl, CURLOPT_POST, 1);

                if ($data)
                    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
                break;
            case "PUT":
                curl_setopt($curl, CURLOPT_PUT, 1);
                break;
            default:
                if ($data)
                    $url = sprintf("%s?%s", $url, http_build_query($data));
        }
        /*
        // Optional Authentication:
        curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($curl, CURLOPT_USERPWD, "username:password");
        */
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


        $result = curl_exec($curl);

        curl_close($curl);

        return $result;
    }
}

// Register the widget
function register_CNAlpsWeather()
{
    register_widget('CNAlpsWeather');
}

add_action('widgets_init', 'register_CNAlpsWeather');