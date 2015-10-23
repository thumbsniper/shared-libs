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


class Image
{
	/** @var string */
    private $id;

	/** @var string */
    private $targetId;

	/** @var string */
    private $fileId;

	/** @var int */
    private $width;

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
}
