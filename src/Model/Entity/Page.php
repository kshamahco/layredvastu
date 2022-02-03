<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Page Entity.
 */
class Page extends Entity{

   
   protected $_accessible = [
      'url_display' => true,
      'seo_title' => true,
      'seo_description' => true,
      'heading_1' => true,
      'heading_2' => true,
      'listing_image' => true,
      'video_url' => true,
      'banner_image' => true,
      'desc_heading' => true,
      'description' => true,
      'created' => true,
   ];
}
