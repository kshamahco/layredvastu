<li <? if($this->request->params['action']=='edit') { ?>class="submenuselect2" <? } ?> ><?php echo $this->Html->link('Edit', array('controller' => '', 'action' => 'edit',$this->request->params['pass'][0])); ?></li>


