<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 05/02/2017
 * Time: 10:26
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Class Episode
 * @package AppBundle\Entity
 * @ORM\Entity
 */
class Episode
{
    /**
     * @var
     *
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="UUID")
     * @ORM\Column(type="guid")
     */
    private $id;

    /**
     * @var
     * @ORM\Column(nullable=true)
     */
    private $name;

    /**
     * @var TvSeries
     *
     * @ORM\ManyToOne(targetEntity="TvSeries", inversedBy="episode")
     * @ORM\JoinColumn(name="tvSeries_id", referencedColumnName="id")
     */
    private $tvSeries;

    /**
     * @var integer
     * 
     * @ORM\Column(nullable=false)
     */
    private $episodeNumber;
    /**
     * @var \DateTimeInterface
     * 
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datePublished;
    /**
     * @var string
     */
    private $description;
    /**
     * @var string
     */
    private $image;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return TvSeries
     */
    public function getTvSeries()
    {
        return $this->tvSeries;
    }

    /**
     * @param TvSeries $tvSeries
     */
    public function setTvSeries(TvSeries $tvSeries)
    {
        $this->tvSeries = $tvSeries;
    }

    /**
     * @return int
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }

    /**
     * @param int $episodeNumber
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDatePublished()
    {
        return $this->datePublished;
    }

    /**
     * @param \DateTimeInterface $datePublished
     */
    public function setDatePublished($datePublished)
    {
        $this->datePublished = $datePublished;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
    
}
