<?php
/**
 * Customizer Class
 */

 class TB_Customizer {

    private $id;
    private $args;
    private $section_args;

    public function __construct($panel_id = '', $panel_args = array()){
        $this->id = $panel_id;
        $this->args = $panel_args;
    }


    public function add_section($section_args){
        $this->section_args = $section_args;
        add_action( 'customize_register', array($this, 'init') );
    }

    public function init( $customizer ){
        // theme option panel
        (!empty($this->id) && !empty($this->args)) ? $customizer->add_panel($this->id, $this->args) : '';
        $customizer->add_section($this->section_args['id'], array(
            'title'     => $this->section_args['title'],
            'priority'  => $this->section_args['priority'] ?? 10,
            'panel'     => $this->section_args['panel'] ?? $this->id,
        ));

        foreach( $this->section_args['controls'] as $control ){
            $customizer->add_setting($control['id'], array(
                'default' 		=> $control['default'] ?? 'Your text',
                'sanitize_callback' => 'esc_attr',
                'transport' 	=> $control['transport'] ?? 'refresh'
            ));
            
            if( in_array($control['type'], array('image', 'audio', 'file')) ){
                $customizer->add_control(new WP_Customize_Media_Control($customizer, $control['id'], array(
                    'label' 	=> $control['title'],
                    'section' 	=> $this->section_args['id'],
                    'mime_type' 		=> $control['type'],
                    'active_callback'	=> $control['callback'] ?? ''
                )));
            }else{
                $customizer->add_control($control['id'], array(
                    'label' 	=> $control['title'],
                    'section' 	=> $this->section_args['id'],
                    'type' 		=> $control['type'],
                    'choices'   => $control['choices'] ?? array(),
                    'input_attrs' => $control['attrs'] ?? array(),
                    'active_callback'	=> $control['callback'] ?? ''
                ));
            }
        }
    }
 }

?>