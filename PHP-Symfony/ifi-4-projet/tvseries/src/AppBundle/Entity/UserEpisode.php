<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 17/02/2017
 * Time: 17:42
 */

namespace AppBundle\Entity;


class UserEpisode
{
    /**
     * @var string;
     * @ORM\OneToOne(targetEntity="User")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;

    /**
     * @var
     */
    private $episode_id;

    /**
     * @var \bool
     */
    private $current;

    /**
     * @var \DateTimeInterface
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $watchedAt;
}