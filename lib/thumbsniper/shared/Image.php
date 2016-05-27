<?php

/*
 * Copyright (C) 2015  Thomas Schulte <thomas@cupracer.de>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
*/

namespace ThumbSniper\shared;


class Image
{
	/** @var string */
    private $id;

	/** @var string */
    private $targetId;

	/** @var int */
    private $width;

	/** @var int */
	private $height;

	/** @var string */
    private $effect;

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

	/** @var string */
    private $imageData;

	/** @var int */
    private $numRequests;

	/** @var string */
	private $amazonS3url;

    /** @var string */
    private $localPath;

    

    function __construct()
    {
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
	public function getTargetId()
	{
		return $this->targetId;
	}

	/**
	 * @param string $targetId
	 */
	public function setTargetId($targetId)
	{
		$this->targetId = $targetId;
	}

	/**
	 * @return int
	 */
	public function getWidth()
	{
		return $this->width;
	}

	/**
	 * @param int $width
	 */
	public function setWidth($width)
	{
		$this->width = $width;
	}

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

	/**
	 * @return string
	 */
	public function getEffect()
	{
		return $this->effect;
	}

	/**
	 * @param string $effect
	 */
	public function setEffect($effect)
	{
		$this->effect = $effect;
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
	 * @return string
	 */
	public function getImageData()
	{
		return $this->imageData;
	}

	/**
	 * @param string $imageData
	 */
	public function setImageData($imageData)
	{
		$this->imageData = $imageData;
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
    public function getAmazonS3url()
    {
        return $this->amazonS3url;
    }

    /**
     * @param string $amazonS3url
     */
    public function setAmazonS3url($amazonS3url)
    {
        $this->amazonS3url = $amazonS3url;
    }

    /**
     * @return string
     */
    public function getLocalPath()
    {
        return $this->localPath;
    }

    /**
     * @param string $localPath
     */
    public function setLocalPath($localPath)
    {
        $this->localPath = $localPath;
    }
}
