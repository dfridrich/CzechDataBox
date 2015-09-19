<?php

use Defr\CzechDataBox\DataBox;

/**
 * Tested on my personal data box.
 *
 * Class DataBoxTest
 */
class DataBoxTest extends PHPUnit_Framework_TestCase
{
    /**
     * @return DataBox
     */
    private function __getDataBox()
    {
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword(DATABOX_LOGIN, DATABOX_PASSWORD, DATABOX_PRODUCTION);

        return $dataBox;
    }

    public function testLogin()
    {
        $info = $this->__getDataBox()->DataBoxAccess()->GetOwnerInfoFromLogin(new \Defr\CzechDataBox\Api\tDummyInput(null));
        $this->assertInstanceOf("Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput", $info);
    }

    /**
     * @expectedException \Defr\CzechDataBox\DataBoxException
     */
    public function testLoginFailure()
    {
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword("fakeLogin", "fakePassword", false);
        $dataBox->testConnection();
    }

}
