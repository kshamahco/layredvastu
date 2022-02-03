<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * StaticInformations Entity.
 */
class StaticInformations extends Entity{

   protected $_accessible = [
      'logo' => true,
      'logo_alt' => true,
      'facebook_url' => true,
      'utube_url' => true,
      'twiter_url' => true,
      'insta_url' => true,
      'phone' => true,
      'whatsapp_no' => true,
      'email' => true,
      'tawkto' => true,
   ];
}

?>