<?php
/*
 *  widget template for creating widgets
 *  @link https://developer.wordpress.org/themes/functionality/widgets/ &
 *  @link https://premium.wpmudev.org/blog/create-custom-wordpress-widget/
 */

/** Create a widget function and extend the WP_Widget class. */
//our widget function his called dc_widget (name your widget function relative to your theme or generically)

class testingarea_widget extends WP_Widget
{

    /** The __construct() method is used to assign an id, title, classname and description to the widget.  */
    public function __construct()
    {
        parent::__construct(
            'testingarea_widget', // Base ID
            'testingarea_widget', // Name
            array('description' => __('testingarea_widget', 'text_domain'),) // Args
        );
    }

    /** argument to display html around the widget areas - change these if need be*/
    public $args = array(
        'wrapper_open' =>  '<aside>',
        'wrapper_close' => '</aside>',
        'before_title'  => '<h3 class="widget-heading">',
        'after_title'   => '</h3>',
        'before_widget' => '<div class="widget-container">',
        'after_widget'  => '</div>'
    );

    /** the widget() method is used to define the output that will displayed on the front-end (wp dashboard)*/
    public function widget($args, $instance)
    {
        echo $args['wrapper_open'];
        echo $args['before_widget'];

        if (!empty($instance['title'])) {
            echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
        }

        echo '<div class="widget_content_wrapper">';
        echo esc_html__($instance['text'], 'text_domain');
        echo '</div>';

        echo $args['after_widget'];
        echo $args['wrapper_close'];
    }
    /** the form() menthod is used to add settings fields (i.e Title, text areas) which will be displayed in the front-end*/
    public function form($instance)
    {

        $title = !empty($instance['title']) ? $instance['title'] : esc_html__('', 'text_domain');
        $text = !empty($instance['text']) ? $instance['text'] : esc_html__('', 'text_domain');
?>
        <p>
            <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_attr_e('Title:', 'text_domain'); ?></label>
            <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($title); ?>">
        </p>
        <p>
            <textarea class="widefat" id="<?php echo esc_attr($this->get_field_id('text')); ?>" name="<?php echo esc_attr($this->get_field_name('text')); ?>" type="text" cols="30" rows="10"><?php echo esc_attr($text); ?></textarea>
        </p>
<?php

    }
    /** Allows the update of new content within the widget area.  */
    public function update($new_instance, $old_instance)
    {

        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';
        $instance['text'] = (!empty($new_instance['text'])) ? $new_instance['text'] : '';

        return $instance;
    }
} // class Foo_Widget

//register the widget
add_action('widgets_init', 'testingarea_widget_areas');

if (!function_exists('testingarea_widget_areas')) {

    /** Initializes themes widgets.*/
    function testingarea_widget_areas()
    {


        //  ======================= footer ===================
        // ========= top ==========
        register_sidebar(
            array(
                'name'          => __('Upper footer', 'testingarea'),
                'id'            => 'upper-footer-logo',
                'description'   => __('Logo for Autism Today', 'testingarea'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        // ========= mid ==========
        register_sidebar(
            array(
                'name'          => __('Mid left footer', 'testingarea'),
                'id'            => 'mid-footer-col-one',
                'description'   => __('3 main pillars', 'testingarea'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => __('Mid second footer', 'testingarea'),
                'id'            => 'mid-footer-col-two',
                'description'   => __('Promos', 'testingarea'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        register_sidebar(
            array(
                'name'          => __('Mid third footer', 'testingarea'),
                'id'            => 'mid-footer-col-three',
                'description'   => __('About', 'testingarea'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );


        register_sidebar(
            array(
                'name'          => __('Mid right footer', 'testingarea'),
                'id'            => 'mid-footer-col-four',
                'description'   => __('Privacy', 'testingarea'),
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );

        // // ======================== right sidebar ====================
        // // sidebars
        // register_sidebar(
        //     array(
        //         'name'          => __('Right Sidebar', 'wpdemos'),
        //         'id'            => 'primary-right-sidebar',
        //         'description'   => __('Right Sidebar - go within Blog post widget area', 'wpdemos'),
        //         'before_widget' => '<div id="%1$s" class="widget %2$s">',
        //         'after_widget'  => '</div>',
        //         'before_title'  => '<h4 class="widget-title">',
        //         'after_title'   => '</h4>',
        //     )
        // );
    }
} // endif function_exists( 'codefish_widgets_init' ).