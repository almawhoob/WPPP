<?php
/**
 * Base class which others extend on. Contains functions shared across all WPPP objects.
 *
 */
class WPPP_Object {
	var $fields = array();
	var $required_fields = array();
	var $feedback_message = "";
	var $errors = array();
	var $mime_types = array(1 => 'gif', 2 => 'jpg', 3 => 'png');

