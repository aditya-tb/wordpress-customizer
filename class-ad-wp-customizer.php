<?php
/**
 * Customizer Class
 */

 class AD_Customizer {

    private $id;
    private $args;
    private $section_args = array();

    public function __construct($panel_id = '', $panel_args = array()){
        $this->id = $panel_id;
        $this->args = $panel_args;
        add_action('admin_enqueue_scripts', array($this, 'customizer_styles'), 10 );
    }

    public function customizer_styles(){
        wp_enqueue_style('customizer-style',get_template_directory_uri() . '/assets/css/customizer.css',array(),time(),'all');
    }


    public function add_section($section_args){
        $this->section_args[] = $section_args;
        add_action( 'customize_register', array($this, 'init') );
    }

    public function init( $customizer ){
        // theme option panel
        (!empty($this->id) && !empty($this->args)) ? $customizer->add_panel($this->id, $this->args) : '';
        foreach( $this->section_args as $section ){
            $customizer->add_section($section['id'], array(
                'title'     => $section['title'],
                'priority'  => $section['priority'] ?? 10,
                'panel'     => $section['panel'] ?? $this->id,
            ));
    
            foreach( $section['controls'] as $control ){
                $customizer->add_setting($control['id'], array(
                    'default' 		=> $control['default'] ?? 'Your text',
                    'sanitize_callback' => 'esc_attr',
                    'transport' 	=> $control['transport'] ?? 'refresh'
                ));
                
                if( in_array($control['type'], array('image', 'audio', 'file')) ){
                    $customizer->add_control(new WP_Customize_Media_Control($customizer, $control['id'], array(
                        'label' 	=> $control['title'],
                        'section' 	=> $section['id'],
                        'mime_type' 		=> $control['type'],
                        'active_callback'	=> $control['callback'] ?? ''
                    )));
                }else{
                    $customizer->add_control($control['id'], array(
                        'label' 	=> $control['title'],
                        'section' 	=> $section['id'],
                        'type' 		=> $control['type'],
                        'choices'   => $control['choices'] ?? array(),
                        'input_attrs' => $control['attrs'] ?? array(),
                        'active_callback'	=> $control['callback'] ?? ''
                    ));
                }
            }
        }
    }
 }

?>
