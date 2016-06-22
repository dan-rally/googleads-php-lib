<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignSharedSetReturnValue extends \Google\AdsApi\AdWords\v201605\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\CampaignSharedSet[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201605\cm\CampaignSharedSet[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\CampaignSharedSet[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\CampaignSharedSet[] $value
     * @return \Google\AdsApi\AdWords\v201605\cm\CampaignSharedSetReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}