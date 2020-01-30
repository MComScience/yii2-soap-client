<?php

namespace mcomscience\soapclient;

/**
 * Class Exception
 *
 * @author Tanakorn Phompak <m-com3@hotmail.com>
 */
class Exception extends \yii\base\Exception
{
    /**
     * @return string the user-friendly name of this exception
     */
    public function getName()
    {
        return 'SOAP Client Exception';
    }
}
