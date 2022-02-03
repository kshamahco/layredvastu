<?php
namespace App\Model\Table;

use App\Model\Entity\StaticInformations;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * StaticInformations Model
 */
class StaticInformationsTable extends Table{

   public function initialize(array $config){
      $this->table('static_informations');
      $this->displayField('name');
      $this->primaryKey('id');
   }

   
   public function validationDefault(Validator $validator){
      $validator
      ->add('id', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('id', 'create')
      ->requirePresence('facebook_url', 'create')
      ->notEmpty('facebook_url')
      ->requirePresence('utube_url', 'create')
      ->notEmpty('utube_url');
      return $validator;
   }

    
}

?>