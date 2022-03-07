<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Blog Entity.
 */
class Blog extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'url' => true,        
        'heading_1' => true,
        'heading_2' => true,
        'post' => true,
        'seo_title' => true,
        'seo_description' => true,
        'type' => true,
        'status' => true,
	    'listing_image' => true,
	    'banner_image' => true,
        'status' => true,
	    'created' => true,
    ];
}

?>