<?php

require 'vendor/autoload.php'; // Chargement de l'autoloader Composer

                   // Custom code (exemple) :
                   use Symfony\Component\Serializer\Serializer;
                   use Symfony\Component\Serializer\Encoder\JsonEncoder;
                   use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

                   $encoders = array(new XmlEncoder(), new JsonEncoder());
                   $normalizers = array(new ObjectNormalizer());

                   $serializer = new Serializer($normalizers, $encoders);

                   echo $serializer->serializer($myObject, 'json');
