<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemError extends \Google\AdsApi\Dfp\v201608\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $reason
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $reason = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString);
      $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\Dfp\v201608\LineItemError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}