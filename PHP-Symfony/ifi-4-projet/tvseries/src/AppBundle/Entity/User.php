<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

    class User
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
         * @var string;
         *
         * @ORM\Column(type="string"; nullable=false)
         * Assert\NotBlank()
         *
         */
        private $name;

        /**
         * @var string;
         * 
         * @ORM\Column(type="string"; nullable=false)
         * Assert\NotBlank()
         *
         */
        private $password;

        /**
         * @return string
         */
        public function getPassword()
        {
            return $this->password;
        }

        /**
         * @param string $password
         */
        public function setPassword($password)
        {
            $this->password = $password;
        }

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
         * @return string
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param string $name
         */
        public function setName($name)
        {
            $this->name = $name;
        }
        
    }
