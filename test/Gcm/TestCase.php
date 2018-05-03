<?php
/**
 * @see       https://github.com/zendframework/ZendService_Google_Gcm for the canonical source repository
 * @copyright Copyright (c) 2018 Zend Technologies USA Inc. (https://www.zend.com)
 * @license   https://github.com/zendframework/ZendService_Google_Gcm/blob/master/LICENSE.md New BSD License
 */

namespace ZendServiceTest\Google\Gcm;

class TestCase extends \PHPUnit\Framework\TestCase
{
    public function setExpectedException($exceptionName, $exceptionMessage = '', $exceptionCode = null)
    {
        if (method_exists($this, 'expectException')) {
            $this->expectException($exceptionName);
            if ($exceptionMessage) {
                $this->expectExceptionMessage($exceptionMessage);
            }
            if ($exceptionCode) {
                $this->expectExceptionCode($exceptionCode);
            }

            return;
        }

        parent::setExpectedException($exceptionName, $exceptionMessage, $exceptionCode);
    }
}
