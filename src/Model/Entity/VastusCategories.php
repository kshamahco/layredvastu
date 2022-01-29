<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * VastusCategories Entity.
 */
class VastusCategories extends Entity{

   protected $_accessible = [
      'category_url' => true,
      'name' => true,
      'seo_title' => true,
      'seo_description' => true,
      'heading_1' => true,
      'heading_2' => true,
      'listing_image' => true,
      'video_url' => true,
      'banner_image' => true,
      'merged_image' => true,
      'description' => true,
   ];
}

?>