<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* MediaContentRatingUnitedStates File
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
* MediaContentRatingUnitedStates class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright 2016 Microsoft Corporation
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 0.1.0
* @link      https://graph.microsoft.io/
*/
class MediaContentRatingUnitedStates extends Entity
{

    /**
    * Gets the movieRating
    * Movies rating selected for United States Possible values are: allAllowed, allBlocked, general, parentalGuidance, parentalGuidance13, restricted, adults.
    *
    * @return RatingUnitedStatesMoviesType The movieRating
    */
    public function getMovieRating()
    {
        if (array_key_exists("movieRating", $this->_propDict)) {
            if (is_a($this->_propDict["movieRating"], "Microsoft\Graph\Beta\Model\RatingUnitedStatesMoviesType")) {
                return $this->_propDict["movieRating"];
            } else {
                $this->_propDict["movieRating"] = new RatingUnitedStatesMoviesType($this->_propDict["movieRating"]);
                return $this->_propDict["movieRating"];
            }
        }
        return null;
    }

    /**
    * Sets the movieRating
    * Movies rating selected for United States Possible values are: allAllowed, allBlocked, general, parentalGuidance, parentalGuidance13, restricted, adults.
    *
    * @param RatingUnitedStatesMoviesType $val The value to assign to the movieRating
    *
    * @return MediaContentRatingUnitedStates The MediaContentRatingUnitedStates
    */
    public function setMovieRating($val)
    {
        $this->_propDict["movieRating"] = $val;
         return $this;
    }

    /**
    * Gets the tvRating
    * TV rating selected for United States Possible values are: allAllowed, allBlocked, childrenAll, childrenAbove7, general, parentalGuidance, childrenAbove14, adults.
    *
    * @return RatingUnitedStatesTelevisionType The tvRating
    */
    public function getTvRating()
    {
        if (array_key_exists("tvRating", $this->_propDict)) {
            if (is_a($this->_propDict["tvRating"], "Microsoft\Graph\Beta\Model\RatingUnitedStatesTelevisionType")) {
                return $this->_propDict["tvRating"];
            } else {
                $this->_propDict["tvRating"] = new RatingUnitedStatesTelevisionType($this->_propDict["tvRating"]);
                return $this->_propDict["tvRating"];
            }
        }
        return null;
    }

    /**
    * Sets the tvRating
    * TV rating selected for United States Possible values are: allAllowed, allBlocked, childrenAll, childrenAbove7, general, parentalGuidance, childrenAbove14, adults.
    *
    * @param RatingUnitedStatesTelevisionType $val The value to assign to the tvRating
    *
    * @return MediaContentRatingUnitedStates The MediaContentRatingUnitedStates
    */
    public function setTvRating($val)
    {
        $this->_propDict["tvRating"] = $val;
         return $this;
    }
}