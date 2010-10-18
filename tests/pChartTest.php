<?php

require_once 'PHPUnit/Framework/TestCase.php';

require_once 'lib/pChart.php';

class pChartTest extends PHPUnit_Framework_TestCase {
	/**
	 * Trivial test: can we construct a pChart?
	 */
	public function testConstruct() {
		$chart = new pChart(320, 240);
	}
}