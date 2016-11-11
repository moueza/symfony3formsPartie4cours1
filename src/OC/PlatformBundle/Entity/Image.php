<?php
// src/OC/PlatformBundle/Entity/Image

namespace OC\PlatformBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
// N'oubliez pas ce use :
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * @ORM\Table(name="oc_image")
 * @ORM\Entity
 */
class Image
{
  /**
   * @ORM\Column(name="id", type="integer")
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  private $id;

  /**
   * @ORM\Column(name="url", type="string", length=255)
   */
  private $url;

  /**
   * @ORM\Column(name="alt", type="string", length=255)
   */
  private $alt;

  /**
   * @return int
   */
  public function getId()
  {
    return $this->id;
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
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * @param string $alt
   */
  public function setAlt($alt)
  {
    $this->alt = $alt;
  }

  /**
   * @return string
   */
  public function getAlt()
  {
    return $this->alt;
  }
  
  
  private $file;

  

  public function getFile()

  {

    return $this->file;

  }


  public function setFile(UploadedFile $file = null)

  {

    $this->file = $file;

  }
}
