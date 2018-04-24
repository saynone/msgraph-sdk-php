<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EventMessageRequest File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 0.1.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;

/**
* EventMessageRequest class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class EventMessageRequest extends EventMessage
{
    /**
    * Gets the previousLocation
    *
    * @return Location The previousLocation
    */
    public function getPreviousLocation()
    {
        if (array_key_exists("previousLocation", $this->_propDict)) {
            if (is_a($this->_propDict["previousLocation"], "Microsoft\Graph\Beta\Model\Location")) {
                return $this->_propDict["previousLocation"];
            } else {
                $this->_propDict["previousLocation"] = new Location($this->_propDict["previousLocation"]);
                return $this->_propDict["previousLocation"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousLocation
    *
    * @param Location $val The previousLocation
    *
    * @return EventMessageRequest
    */
    public function setPreviousLocation($val)
    {
        $this->_propDict["previousLocation"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousStartDateTime
    *
    * @return DateTimeTimeZone The previousStartDateTime
    */
    public function getPreviousStartDateTime()
    {
        if (array_key_exists("previousStartDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["previousStartDateTime"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
                return $this->_propDict["previousStartDateTime"];
            } else {
                $this->_propDict["previousStartDateTime"] = new DateTimeTimeZone($this->_propDict["previousStartDateTime"]);
                return $this->_propDict["previousStartDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousStartDateTime
    *
    * @param DateTimeTimeZone $val The previousStartDateTime
    *
    * @return EventMessageRequest
    */
    public function setPreviousStartDateTime($val)
    {
        $this->_propDict["previousStartDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the previousEndDateTime
    *
    * @return DateTimeTimeZone The previousEndDateTime
    */
    public function getPreviousEndDateTime()
    {
        if (array_key_exists("previousEndDateTime", $this->_propDict)) {
            if (is_a($this->_propDict["previousEndDateTime"], "Microsoft\Graph\Beta\Model\DateTimeTimeZone")) {
                return $this->_propDict["previousEndDateTime"];
            } else {
                $this->_propDict["previousEndDateTime"] = new DateTimeTimeZone($this->_propDict["previousEndDateTime"]);
                return $this->_propDict["previousEndDateTime"];
            }
        }
        return null;
    }
    
    /**
    * Sets the previousEndDateTime
    *
    * @param DateTimeTimeZone $val The previousEndDateTime
    *
    * @return EventMessageRequest
    */
    public function setPreviousEndDateTime($val)
    {
        $this->_propDict["previousEndDateTime"] = $val;
        return $this;
    }
    
    /**
    * Gets the responseRequested
    *
    * @return bool The responseRequested
    */
    public function getResponseRequested()
    {
        if (array_key_exists("responseRequested", $this->_propDict)) {
            return $this->_propDict["responseRequested"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the responseRequested
    *
    * @param bool $val The responseRequested
    *
    * @return EventMessageRequest
    */
    public function setResponseRequested($val)
    {
        $this->_propDict["responseRequested"] = boolval($val);
        return $this;
    }
    
}