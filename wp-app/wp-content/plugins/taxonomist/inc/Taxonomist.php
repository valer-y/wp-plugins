<?php

class Taxonomist {

	public static function activation() : void {
		flush_rewrite_rules();
	}

	public static function deactivation() : void {
		flush_rewrite_rules();
	}
}