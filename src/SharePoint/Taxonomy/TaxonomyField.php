<?php

/**
 * Generated  2022-10-08T10:32:22+03:00 16.0.22921.12007
 */
namespace Office365\SharePoint\Taxonomy;

use Office365\SharePoint\FieldLookup;
class TaxonomyField extends FieldLookup
{
    /**
     * @return string
     */
    public function getAnchorId()
    {
        if (!$this->isPropertyAvailable("AnchorId")) {
            return null;
        }
        return $this->getProperty("AnchorId");
    }
    /**
     * @var string
     */
    public function setAnchorId($value)
    {
        $this->setProperty("AnchorId", $value, true);
    }
    /**
     * @return bool
     */
    public function getCreateValuesInEditForm()
    {
        if (!$this->isPropertyAvailable("CreateValuesInEditForm")) {
            return null;
        }
        return $this->getProperty("CreateValuesInEditForm");
    }
    /**
     * @var bool
     */
    public function setCreateValuesInEditForm($value)
    {
        $this->setProperty("CreateValuesInEditForm", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsAnchorValid()
    {
        if (!$this->isPropertyAvailable("IsAnchorValid")) {
            return null;
        }
        return $this->getProperty("IsAnchorValid");
    }
    /**
     * @var bool
     */
    public function setIsAnchorValid($value)
    {
        $this->setProperty("IsAnchorValid", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsKeyword()
    {
        if (!$this->isPropertyAvailable("IsKeyword")) {
            return null;
        }
        return $this->getProperty("IsKeyword");
    }
    /**
     * @var bool
     */
    public function setIsKeyword($value)
    {
        $this->setProperty("IsKeyword", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsPathRendered()
    {
        if (!$this->isPropertyAvailable("IsPathRendered")) {
            return null;
        }
        return $this->getProperty("IsPathRendered");
    }
    /**
     * @var bool
     */
    public function setIsPathRendered($value)
    {
        $this->setProperty("IsPathRendered", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsTermSetValid()
    {
        if (!$this->isPropertyAvailable("IsTermSetValid")) {
            return null;
        }
        return $this->getProperty("IsTermSetValid");
    }
    /**
     * @var bool
     */
    public function setIsTermSetValid($value)
    {
        $this->setProperty("IsTermSetValid", $value, true);
    }
    /**
     * @return bool
     */
    public function getOpen()
    {
        if (!$this->isPropertyAvailable("Open")) {
            return null;
        }
        return $this->getProperty("Open");
    }
    /**
     * @var bool
     */
    public function setOpen($value)
    {
        $this->setProperty("Open", $value, true);
    }
    /**
     * @return string
     */
    public function getSspId()
    {
        if (!$this->isPropertyAvailable("SspId")) {
            return null;
        }
        return $this->getProperty("SspId");
    }
    /**
     * @var string
     */
    public function setSspId($value)
    {
        $this->setProperty("SspId", $value, true);
    }
    /**
     * @return string
     */
    public function getTargetTemplate()
    {
        if (!$this->isPropertyAvailable("TargetTemplate")) {
            return null;
        }
        return $this->getProperty("TargetTemplate");
    }
    /**
     * @var string
     */
    public function setTargetTemplate($value)
    {
        $this->setProperty("TargetTemplate", $value, true);
    }
    /**
     * @return string
     */
    public function getTermSetId()
    {
        if (!$this->isPropertyAvailable("TermSetId")) {
            return null;
        }
        return $this->getProperty("TermSetId");
    }
    /**
     * @var string
     */
    public function setTermSetId($value)
    {
        $this->setProperty("TermSetId", $value, true);
    }
    /**
     * @return string
     */
    public function getTextField()
    {
        if (!$this->isPropertyAvailable("TextField")) {
            return null;
        }
        return $this->getProperty("TextField");
    }
    /**
     * @var string
     */
    public function setTextField($value)
    {
        $this->setProperty("TextField", $value, true);
    }
    /**
     * @return bool
     */
    public function getUserCreated()
    {
        if (!$this->isPropertyAvailable("UserCreated")) {
            return null;
        }
        return $this->getProperty("UserCreated");
    }
    /**
     * @var bool
     */
    public function setUserCreated($value)
    {
        $this->setProperty("UserCreated", $value, true);
    }
    /**
     * @return bool
     */
    public function getIsDocTagsEnabled()
    {
        return $this->getProperty("IsDocTagsEnabled");
    }
    /**
     * @var bool
     */
    public function setIsDocTagsEnabled($value)
    {
        return $this->setProperty("IsDocTagsEnabled", $value, true);
    }
}