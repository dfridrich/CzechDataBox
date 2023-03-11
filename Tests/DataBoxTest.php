<?php

use Defr\CzechDataBox\Api\tGetOwnInfoOutput;
use Defr\CzechDataBox\DataBox;
use Defr\CzechDataBox\DataBoxException;
use Defr\CzechDataBox\DataBoxHelper;
use Defr\CzechDataBox\Ws\ServiceType\Get;
use Defr\CzechDataBox\Ws\StructType\TDummyInput;
use PHPUnit\Framework\TestCase;

class DataBoxTest extends TestCase
{
    private function provideDataBox(): DataBox
    {
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword(
            getenv('DATABOX_LOGIN'),
            getenv('DATABOX_PASSWORD'),
            getenv('DATABOX_PRODUCTION'),
        );

        return $dataBox;
    }


    public function testLogin(): void
    {
        $info = $this->__getDataBox()->DataBoxAccess()->GetOwnerInfoFromLogin(new \Defr\CzechDataBox\Api\tDummyInput(null));
        $this->assertInstanceOf("Defr\\CzechDataBox\\Api\\tGetOwnInfoOutput", $info);
    }


    public function testLoginFailure(): void
    {
        self::expectException(DataBoxException::class);
        $dataBox = new DataBox();
        $dataBox->loginWithUsernameAndPassword("fakeLogin", "fakePassword", false);
        $dataBox->testConnection();
    }

}
