<?php

require_once 'PHPUnit/Framework/TestCase.php';

require_once 'lib/pData.php';

class pDataTest extends PHPUnit_Framework_TestCase {
	public function testAddPoint() {
		$data = new pData();

		$data->addPoint(array(3 => 4, 4 => 5));

		/* NB: Key values passed in the array to addPoint are
		 discarded */
		$this->assertEquals(array(0 => array('Series1' => 4,
											 'Name' => 0),
								  1 => array('Series1' => 5,
											 'Name' => 1)),
							$data->getData());
	}
}