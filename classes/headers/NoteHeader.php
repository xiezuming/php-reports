<?php
class NoteHeader extends HeaderBase {
	static $validation = array(
		'value'=>array(
			'required'=>true,
			'type'=>'string'
		)
	);
	
	public static function init($params, &$report) {
		$report->options['Note'] = $params['value'];
	}
	
	public static function parseShortcut($value) {
		return array(
			'value'=>$value
		);
	}
}