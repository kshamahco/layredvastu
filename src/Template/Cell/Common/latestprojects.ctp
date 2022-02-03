<? if(iterator_count($latestprojects)) { ?> <div class="col-lg-3 col-md-3 col-sm-4 col-xs-6 col-xsmall">
<div class="action_list1">
<h4>Latest Updated Projects</h4>
<ul>
<? foreach($latestprojects as $latestprojectslinks) {  //$hotproject->Banners['photo'] ?>
<li><a href="<? echo SITE_PATH.'project/'.$latestprojectslinks->url ; ?>/"><? echo $latestprojectslinks->heading3 ; ?></a></li>
<? } ?>
</ul>
<div class="more_item"><a href="<?=SITE_PATH.'project/'?>">More Projects..</a></div>
</div>
</div> <? } ?>