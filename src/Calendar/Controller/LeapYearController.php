<?php
namespace Calendar\Controller;

use Silex\Application;
use Calendar\Model\LeapYear;

class LeapYearController
{
	public function indexAction(Application $app, $year)
	{
		$leapyear = new LeapYear();
		if ($leapyear->isLeapYear($year)) {
			return 'Yep, this is a leap year!';
		}

		return 'None, this is not a leap year.';
	}
}

