<?php

class Members extends LMBPageController
{
	public function initialize()
	{
		session_destroy();
		header('Location: /limbo');
	}
}
