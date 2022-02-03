<?php
namespace App\Model\Table;

use App\Model\Entity\VastusCategories;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VastusCategories Model
 */
class VastusCategoriesTable extends Table{

   public function initialize(array $config){
      $this->table('vastu_categories');
      $this->displayField('name');
      $this->primaryKey('id');
      $this->hasMany('Vastus', [
         'foreignKey' => 'category_id'
      ]);
   }

   
   public function validationDefault(Validator $validator){
      $validator
      ->add('id', 'valid', ['rule' => 'numeric'])
      ->allowEmpty('id', 'create')
      ->requirePresence('category_url', 'create')
      ->notEmpty('category_url')
      ->requirePresence('seo_title', 'create')
      ->notEmpty('seo_title')
      ->requirePresence('seo_description', 'create')
      ->notEmpty('seo_description')
      ->requirePresence('heading_1', 'create')
      ->notEmpty('heading_1')
      ->requirePresence('heading_2', 'create')
      ->notEmpty('heading_2')
      ->notEmpty('image', 'create');

      return $validator;
   }

    
}

?>