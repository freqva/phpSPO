<?php

/**
 * Generated by phpSPO model generator 2020-05-24T21:39:44+00:00 
 */
namespace Office365\Graph;

use Office365\Runtime\ClientObject;
use Office365\Runtime\ResourcePath;
class RestrictedSignIn extends ClientObject
{
    /**
     * @return string
     */
    public function getTargetTenantId()
    {
        if (!$this->isPropertyAvailable("TargetTenantId")) {
            return null;
        }
        return $this->getProperty("TargetTenantId");
    }
    /**
     * @var string
     */
    public function setTargetTenantId($value)
    {
        $this->setProperty("TargetTenantId", $value, true);
    }
}