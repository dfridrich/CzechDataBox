<?php

use Defr\CzechDataBox\DataBox;
use PHPUnit\Framework\TestCase;

/**
 * Tested on my personal data box.
 *
 * Class DataBoxSimpleApiTest
 */
class DataBoxSimpleApiTest extends TestCase
{

	/**
	 * @return DataBox
	 */
	private function __getDataBox()
	{
		$dataBox = new DataBox();
		$dataBox->loginWithUsernameAndPassword(
			getenv('DATABOX_LOGIN'),
			getenv('DATABOX_PASSWORD'),
			getenv('DATABOX_PRODUCTION')
		);

		return $dataBox;
	}

	public function testSimpleApiFindDataBox()
	{
		$api = $this->__getDataBox()->getSimpleApi();
		$foundDataBox = $api->findDataBoxById('wucb4dd')->getDbOwnerInfo();
		$this->assertEquals("Dennis", $foundDataBox->getPnFirstName());
		$this->assertEquals("Fridrich", $foundDataBox->getPnLastName());
	}

	public function testSimpleApiStats()
	{
		$api = $this->__getDataBox()->getSimpleApi();
		$this->assertIsInt($api->getStats());
	}

	public function testSimpleApiPasswordChange()
	{
		$api = $this->__getDataBox()->getSimpleApi();
		$this->assertNull($api->getPasswordExpires());
	}
}
