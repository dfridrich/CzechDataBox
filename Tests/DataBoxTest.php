<?php

use Defr\CzechDataBox\Api\tDummyInput;
use Defr\CzechDataBox\DataBox;
use PHPUnit\Framework\TestCase;

/**
 * Tested on my personal data box.
 *
 * Class DataBoxTest
 */
class DataBoxTest extends TestCase
{
    /**
     * @return DataBox
     */
    private function __getDataBox()
    {
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword(getenv('DATABOX_LOGIN'), getenv('DATABOX_PASSWORD'), getenv('DATABOX_PRODUCTION'));

        return $dataBox;
    }


    public function testLogin()
    {
        $info = $this->__getDataBox()->DataBoxAccess()->GetOwnerInfoFromLogin(new tDummyInput(null));
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
