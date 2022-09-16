# How To Use

 require_once( dirname(__DIR__) . '/classes/class-tb-customizer.php' );

 $test_panel = new TB_Customizer();
 
 $test_panel->add_section(array(
	'id'	=> 'test_section',
	'title'	=> __('Test Section', 'adara'),
	'controls'	=> array(
		array(
			'id'	=> 'test_control',
			'title'	=> __('Test Control', 'adara'),
			'type'	=> 'text',
		),

		array(
			'id'	=> 'test_control_2',
			'title'	=> __('Test Control 2', 'adara'),
			'type'	=> 'checkbox',
		),

		array(
			'id'	=> 'test_control_3',
			'title'	=> __('Test Control 3', 'adara'),
			'type'	=> 'textarea',
		),

		array(
			'id'	=> 'test_control_6',
			'title'	=> __('Test Control 6', 'adara'),
			'type'	=> 'number',
		),

		array(
			'id'	=> 'test_control_7',
			'title'	=> __('Test Control 7', 'adara'),
			'type'	=> 'range',
		),

		array(
			'id'	=> 'test_control_8',
			'title'	=> __('Test Control 8', 'adara'),
			'type'	=> 'date',
		),

		array(
			'id'	=> 'test_control_9',
			'title'	=> __('Test Control 9', 'adara'),
			'type'	=> 'time',
			'attrs'	=> array(
				'class' => 'form-control'
			)
		),

		array(
			'id'	=> 'test_control_11',
			'title'	=> __('Test Control 11', 'adara'),
			'type'	=> 'image',
		),

		array(
			'id'	=> 'test_control_12',
			'title'	=> __('Test Control 12', 'adara'),
			'type'	=> 'audio',
		),

		array(
			'id'	=> 'test_control_10',
			'title'	=> __('Test Control 10', 'adara'),
			'type'	=> 'search',
		),

		array(
			'id'	=> 'test_control_4',
			'title'	=> __('Test Control 4', 'adara'),
			'type'	=> 'select',
			'choices'	=> array(
				'1' => 'One',
				'2'	=> 'Two'
			)
		),

		array(
			'id'	=> 'test_control_5',
			'title'	=> __('Test Control 5', 'adara'),
			'type'	=> 'radio',
			'choices'	=> array(
				'male' => 'Male',
				'female'	=> 'Female'
			)
		)

	)
 ));
