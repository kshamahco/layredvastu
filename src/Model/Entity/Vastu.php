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
      'post' => true,
      'seo_title' => true,
      'seo_description' => true,
   ];
}
