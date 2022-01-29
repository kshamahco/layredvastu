<?php
namespace App\Model\Table;

use App\Model\Entity\Page;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pages Model
 */
class PagesTable extends Table{

   
   public function initialize(array $config){
      $this->table('pages');
      $this->displayField('seo_title');
      $this->primaryKey('id');
   }

   
   public function validationDefault(Validator $validator){
      $validator
      ->add('id', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('id', 'create')
      ->allowEmpty('seo_title')
      ->requirePresence('seo_description', 'create')
      ->notEmpty('seo_description')
      ->requirePresence('heading_1', 'create')
      ->notEmpty('heading_1');
      return $validator;
   }
}
