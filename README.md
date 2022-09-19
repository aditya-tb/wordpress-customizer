# How To Use
 ```php
 require_once( dirname(__DIR__) . '/classes/class-ad-wp-customizer.php' );

 $test_panel = new AD_Customizer();
 
 $test_panel->add_section(array(
	'id'	=> 'test_section',
	'title'	=> __('Test Section', 'adara'),
	'controls'	=> array(
		array(
			'id'	=> 'test_control',
			'title'	=> __('Test Control', 'text-domain'),
			'type'	=> 'text',
		),

		array(
			'id'	=> 'test_control_2',
			'title'	=> __('Test Control 2', 'text-domain'),
			'type'	=> 'checkbox',
		),

		array(
			'id'	=> 'test_control_3',
			'title'	=> __('Test Control 3', 'text-domain'),
			'type'	=> 'textarea',
		),

		array(
			'id'	=> 'test_control_6',
			'title'	=> __('Test Control 6', 'text-domain'),
			'type'	=> 'number',
		),

		array(
			'id'	=> 'test_control_7',
			'title'	=> __('Test Control 7', 'text-domain'),
			'type'	=> 'range',
		),

		array(
			'id'	=> 'test_control_8',
			'title'	=> __('Test Control 8', 'text-domain'),
			'type'	=> 'date',
		),

		array(
			'id'	=> 'test_control_9',
			'title'	=> __('Test Control 9', 'text-domain'),
			'type'	=> 'time',
			'attrs'	=> array(
				'class' => 'form-control'
			)
		),

		array(
			'id'	=> 'test_control_11',
			'title'	=> __('Test Control 11', 'text-domain'),
			'type'	=> 'image',
		),

		array(
			'id'	=> 'test_control_12',
			'title'	=> __('Test Control 12', 'text-domain'),
			'type'	=> 'audio',
		),

		array(
			'id'	=> 'test_control_10',
			'title'	=> __('Test Control 10', 'text-domain'),
			'type'	=> 'search',
		),

		array(
			'id'	=> 'test_control_4',
			'title'	=> __('Test Control 4', 'text-domain'),
			'type'	=> 'select',
			'choices'	=> array(
				'1' => 'One',
				'2'	=> 'Two'
			)
		),

		array(
			'id'	=> 'test_control_5',
			'title'	=> __('Test Control 5', 'text-domain'),
			'type'	=> 'radio',
			'choices'	=> array(
				'male' => 'Male',
				'female'	=> 'Female'
			)
		)

	)
 ));

 ```
 
 ## You can add your section and controls under a panel
  ```php
 require_once( dirname(__DIR__) . '/classes/class-ad-wp-customizer.php' );

 $test_panel = new AD_Customizer('panel_id', array(
 	'title'	=> __('Panel Title'),
	'priority	=> 20
 ));
 
 $test_panel->add_section(array(
	'id'	=> 'test_section',
	'title'	=> __('Test Section', 'text-domain'),
	'controls'	=> array(
		array(
			'id'	=> 'test_control',
			'title'	=> __('Test Control', 'text-domain'),
			'type'	=> 'text',
		)
	)
 ));

 ```
 
