<?php 
	function amader_kotha($one, $two){ 

			$gggg = shortcode_atts( [

				'rong'			=> 'red'

			], $one);

			ob_start();
		?>
		
		out put

	<?php 
		return ob_get_clean();
}
	add_shortcode('kotha','amader_kotha');





	if( function_exists(vc_map) ){
		vc_map([
		'name'				=> 'আমাদের কথা',
		'base'				=> 'kotha',
		'description'		=> 'মনের কথা খুলে বলুন , চিন্তা করবেন না',
		'icon'				=> get_template_directory_uri(). '/assets/images/fol.png',
		'params'			=> [
			[
				'param_name'		=> 'content',
				'type'				=> 'textfield',
				'heading'			=> 'মনের কথা নিচে লিখুন',
				'description'		=> 'কোন চিন্তা করার দরকার নাই '
			],
			[
				'param_name'		=> 'rong',
				'type'				=> 'colorpicker',
				'heading'			=> 'মনে রং'
			],
			[
				'param_name'		=> 'chong',
				'type'				=> 'colorpicker',
				'heading'			=> 'বেকগ্রাউন্ড রং'
			]
		]
	]);
	
	}