<?php
/**
 * Created by JetBrains PhpStorm.
 * User: gdmerm
 * Date: 5/5/12
 * Time: 2:22 PM
 * To change this template use File | Settings | File Templates.
 */
class Members extends LMBPageController
{
	public function initialize()
	{
		session_destroy();
		header('Location: /limbo');
	}
}
