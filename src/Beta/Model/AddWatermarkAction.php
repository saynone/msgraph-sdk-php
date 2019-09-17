<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AddWatermarkAction File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Beta\Model;
/**
* AddWatermarkAction class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class AddWatermarkAction extends InformationProtectionAction
{
    /**
    * Gets the uiElementName
    *
    * @return string The uiElementName
    */
    public function getUiElementName()
    {
        if (array_key_exists("uiElementName", $this->_propDict)) {
            return $this->_propDict["uiElementName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the uiElementName
    *
    * @param string $val The value of the uiElementName
    *
    * @return AddWatermarkAction
    */
    public function setUiElementName($val)
    {
        $this->_propDict["uiElementName"] = $val;
        return $this;
    }

    /**
    * Gets the layout
    *
    * @return WatermarkLayout The layout
    */
    public function getLayout()
    {
        if (array_key_exists("layout", $this->_propDict)) {
            if (is_a($this->_propDict["layout"], "Microsoft\Graph\Beta\Model\WatermarkLayout")) {
                return $this->_propDict["layout"];
            } else {
                $this->_propDict["layout"] = new WatermarkLayout($this->_propDict["layout"]);
                return $this->_propDict["layout"];
            }
        }
        return null;
    }

    /**
    * Sets the layout
    *
    * @param WatermarkLayout $val The value to assign to the layout
    *
    * @return AddWatermarkAction The AddWatermarkAction
    */
    public function setLayout($val)
    {
        $this->_propDict["layout"] = $val;
         return $this;
    }
    /**
    * Gets the text
    *
    * @return string The text
    */
    public function getText()
    {
        if (array_key_exists("text", $this->_propDict)) {
            return $this->_propDict["text"];
        } else {
            return null;
        }
    }

    /**
    * Sets the text
    *
    * @param string $val The value of the text
    *
    * @return AddWatermarkAction
    */
    public function setText($val)
    {
        $this->_propDict["text"] = $val;
        return $this;
    }
    /**
    * Gets the fontName
    *
    * @return string The fontName
    */
    public function getFontName()
    {
        if (array_key_exists("fontName", $this->_propDict)) {
            return $this->_propDict["fontName"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontName
    *
    * @param string $val The value of the fontName
    *
    * @return AddWatermarkAction
    */
    public function setFontName($val)
    {
        $this->_propDict["fontName"] = $val;
        return $this;
    }
    /**
    * Gets the fontSize
    *
    * @return int The fontSize
    */
    public function getFontSize()
    {
        if (array_key_exists("fontSize", $this->_propDict)) {
            return $this->_propDict["fontSize"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontSize
    *
    * @param int $val The value of the fontSize
    *
    * @return AddWatermarkAction
    */
    public function setFontSize($val)
    {
        $this->_propDict["fontSize"] = $val;
        return $this;
    }
    /**
    * Gets the fontColor
    *
    * @return string The fontColor
    */
    public function getFontColor()
    {
        if (array_key_exists("fontColor", $this->_propDict)) {
            return $this->_propDict["fontColor"];
        } else {
            return null;
        }
    }

    /**
    * Sets the fontColor
    *
    * @param string $val The value of the fontColor
    *
    * @return AddWatermarkAction
    */
    public function setFontColor($val)
    {
        $this->_propDict["fontColor"] = $val;
        return $this;
    }
}
