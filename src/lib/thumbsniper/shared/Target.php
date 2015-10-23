<?php

/*
* This file is part of CupRacer/thumbsniper-shared.
*
* (c) 2015 Thomas Schulte
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace ThumbSniper\shared;



class Target
{
    /** @var string */
    private $id;

    /** @var string */
    private $url;

    /** @var string */
    private $fileId;

    /** @var string */
    private $fileNameBase;

    /** @var string */
    private $fileNameSuffix;

    /** @var int */
    private $tsAdded;

    /** @var int */
    private $tsLastUpdated;

    /** @var int */
    private $tsLastRequested;

    /** @var int */
    private $tsCheckedOut;

    /** @var int */
    private $counterCheckedOut;

    /** @var int */
    private $counterUpdated;

    /** @var int */
    private $counterFailed;

    /** @var boolean */
    private $javaScriptEnabled;

    /** @var int */
    private $tsRobotsCheck;

    /** @var boolean */
    private $robotsAllowed;

    /** @var int */
    private $snipeDuration;

    /** @var string */
    private $weapon;

    /** @var boolean */
    private $forcedUpdate;

    /** @var int */
    private $numRequests;

    /** @var string */
    private $lastErrorMessage;

    /** @var array */
    private $images;

    /** @var Image */
    private $currentImage;

    /** @var string */
    private $masterImage;

    /** @var boolean */
    private $censored;

    /** @var string */
    private $mimeType;



    function __construct()
    {
    } // function



    static function cmp_id($a, $b)
    {
        /**
         * @var Target $a
         * @var Target $b
         */

        if ($a->id == $b->id)
        {
            return 0;
        }
        return ($a->id < $b->id) ? -1 : 1;
    }



    static function cmp_url($a, $b)
    {
        /**
         * @var Target $a
         * @var Target $b
         */

        $al = strtolower($a->url);
        $bl = strtolower($b->url);

        if ($al == $bl) {
            return 0;
        }
        return ($al > $bl) ? +1 : -1;
    }


    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->fileNameBase . "." . $this->fileNameSuffix;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param string $fileId
     */
    public function setFileId($fileId)
    {
        $this->fileId = $fileId;
    }

    /**
     * @return string
     */
    public function getFileNameBase()
    {
        return $this->fileNameBase;
    }

    /**
     * @param string $fileNameBase
     */
    public function setFileNameBase($fileNameBase)
    {
        $this->fileNameBase = $fileNameBase;
    }

    /**
     * @return string
     */
    public function getFileNameSuffix()
    {
        return $this->fileNameSuffix;
    }

    /**
     * @param string $fileNameSuffix
     */
    public function setFileNameSuffix($fileNameSuffix)
    {
        $this->fileNameSuffix = $fileNameSuffix;
    }

    /**
     * @return int
     */
    public function getTsAdded()
    {
        return $this->tsAdded;
    }

    /**
     * @param int $tsAdded
     */
    public function setTsAdded($tsAdded)
    {
        $this->tsAdded = $tsAdded;
    }

    /**
     * @return int
     */
    public function getTsLastUpdated()
    {
        return $this->tsLastUpdated;
    }

    /**
     * @param int $tsLastUpdated
     */
    public function setTsLastUpdated($tsLastUpdated)
    {
        $this->tsLastUpdated = $tsLastUpdated;
    }

    /**
     * @return int
     */
    public function getTsLastRequested()
    {
        return $this->tsLastRequested;
    }

    /**
     * @param int $tsLastRequested
     */
    public function setTsLastRequested($tsLastRequested)
    {
        $this->tsLastRequested = $tsLastRequested;
    }

    /**
     * @return int
     */
    public function getTsCheckedOut()
    {
        return $this->tsCheckedOut;
    }

    /**
     * @param int $tsCheckedOut
     */
    public function setTsCheckedOut($tsCheckedOut)
    {
        $this->tsCheckedOut = $tsCheckedOut;
    }

    /**
     * @return int
     */
    public function getCounterCheckedOut()
    {
        return $this->counterCheckedOut;
    }

    /**
     * @param int $counterCheckedOut
     */
    public function setCounterCheckedOut($counterCheckedOut)
    {
        $this->counterCheckedOut = $counterCheckedOut;
    }

    /**
     * @return int
     */
    public function getCounterUpdated()
    {
        return $this->counterUpdated;
    }

    /**
     * @param int $counterUpdated
     */
    public function setCounterUpdated($counterUpdated)
    {
        $this->counterUpdated = $counterUpdated;
    }

    /**
     * @return int
     */
    public function getCounterFailed()
    {
        return $this->counterFailed;
    }

    /**
     * @param int $counterFailed
     */
    public function setCounterFailed($counterFailed)
    {
        $this->counterFailed = $counterFailed;
    }

    /**
     * @return boolean
     */
    public function isJavaScriptEnabled()
    {
        return $this->javaScriptEnabled;
    }

    /**
     * @param boolean $javaScriptEnabled
     */
    public function setJavaScriptEnabled($javaScriptEnabled)
    {
        $this->javaScriptEnabled = $javaScriptEnabled;
    }

    /**
     * @return int
     */
    public function getTsRobotsCheck()
    {
        return $this->tsRobotsCheck;
    }

    /**
     * @param int $tsRobotsCheck
     */
    public function setTsRobotsCheck($tsRobotsCheck)
    {
        $this->tsRobotsCheck = $tsRobotsCheck;
    }

    /**
     * @return boolean
     */
    public function isRobotsAllowed()
    {
        return $this->robotsAllowed;
    }

    /**
     * @param boolean $robotsAllowed
     */
    public function setRobotsAllowed($robotsAllowed)
    {
        $this->robotsAllowed = $robotsAllowed;
    }

    /**
     * @return int
     */
    public function getSnipeDuration()
    {
        return $this->snipeDuration;
    }

    /**
     * @param int $snipeDuration
     */
    public function setSnipeDuration($snipeDuration)
    {
        $this->snipeDuration = $snipeDuration;
    }

    /**
     * @return string
     */
    public function getWeapon()
    {
        return $this->weapon;
    }

    /**
     * @param string $weapon
     */
    public function setWeapon($weapon)
    {
        $this->weapon = $weapon;
    }

    /**
     * @return boolean
     */
    public function isForcedUpdate()
    {
        return $this->forcedUpdate;
    }

    /**
     * @param boolean $forcedUpdate
     */
    public function setForcedUpdate($forcedUpdate)
    {
        $this->forcedUpdate = $forcedUpdate;
    }

    /**
     * @return int
     */
    public function getNumRequests()
    {
        return $this->numRequests;
    }

    /**
     * @param int $numRequests
     */
    public function setNumRequests($numRequests)
    {
        $this->numRequests = $numRequests;
    }

    /**
     * @return string
     */
    public function getLastErrorMessage()
    {
        return $this->lastErrorMessage;
    }

    /**
     * @param string $lastErrorMessage
     */
    public function setLastErrorMessage($lastErrorMessage)
    {
        $this->lastErrorMessage = $lastErrorMessage;
    }

    /**
     * @return array
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param array $images
     */
    public function setImages($images)
    {
        $this->images = $images;
    }

    /**
     * @return Image
     */
    public function getCurrentImage()
    {
        return $this->currentImage;
    }

    /**
     * @param Image $currentImage
     */
    public function setCurrentImage($currentImage)
    {
        $this->currentImage = $currentImage;
    }

    /**
     * @return string
     */
    public function getMasterImage()
    {
        return $this->masterImage;
    }

    /**
     * @param string $masterImage
     */
    public function setMasterImage($masterImage)
    {
        $this->masterImage = $masterImage;
    }

    /**
     * @return boolean
     */
    public function isCensored()
    {
        return $this->censored;
    }

    /**
     * @param boolean $censored
     */
    public function setCensored($censored)
    {
        $this->censored = $censored;
    }

    /**
     * @return mixed
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param mixed $mimeType
     */
    public function setMimeType($mimeType)
    {
        $this->mimeType = $mimeType;
    }
}
