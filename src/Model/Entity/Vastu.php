<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Vastu Entity.
 */
class Vastu extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
   protected $_accessible = [
      'category_id' => true,
      'url' => true,
      'name' => true,
      'heading_1' => true,
      'heading_2' => true,
      'short_post' => true,
      'first_para' => true,
      'first_para_image' => true,
      'second_para' => true,
      'second_para_image' => true,
      'third_para' => true,
      'third_para_image' => true,
      'fourth_para' => true,
      'fourth_para_image' => true,
      'fifth_para' => true,
      'fifth_para_image' => true,
      'sixth_para' => true,
      'sixth_para_image' => true,
      'seo_title' => true,
      'seo_description' => true,
      'listing_image' => true,
      'video_url' => true,
      'ping_on_home' => true,
      'mark_as_similar' => true,
   ];
}
