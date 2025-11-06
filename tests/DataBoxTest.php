<?php

namespace Defr\CzechDataBox;

use Defr\CzechDataBox\Api\tGetOwnInfoOutput;
use Defr\CzechDataBox\DataBox;
use Defr\CzechDataBox\DataBoxException;
use Defr\CzechDataBox\DataBoxHelper;
use Defr\CzechDataBox\Api\tDummyInput;
use PHPUnit\Framework\TestCase;

class DataBoxTest extends TestCase
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

    public function testLogin(): void
    {
        $info = $this->__getDataBox()->DataBoxAccess()->GetOwnerInfoFromLogin(new tDummyInput(null));
        $this->assertInstanceOf(\Defr\CzechDataBox\Api\tGetOwnInfoOutput::class, $info);
    }


    public function testLoginFailure(): void
    {
        self::expectException(DataBoxException::class);
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword("fakeLogin", "fakePassword", false);
        $dataBox->testConnection();
    }
}
