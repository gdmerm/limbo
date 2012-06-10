<?php

class Members extends LMBPageController
{
	public function initialize()
	{
		session_destroy();
		Limbo::redirect();
	}
}
