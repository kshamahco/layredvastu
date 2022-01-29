<? use Cake\Datasource\ConnectionManager; $connection = ConnectionManager::get('default'); ?>
<div class="col-md-9 order-xl-first">
<div class="pp_content">
<h2>Gallery Images - <? echo $projects[0]['name'] ; ?></h2></div>

<? $count=0; $gallery=$connection->execute("select gall.* from property_galleries as gall where  gall.property_id=:pid and type=:type",['pid'=>$projects[0]['id'],'type'=>$this->request->params['pass'][1]])->fetchAll('assoc');?>

<div class="row">
<? if(!empty($gallery)) { foreach($gallery as $gall) {?>

<figure class="col-md-4 thumb_list"><a href="<?=SITE_PATH?>img/property/gallery/orig/<?=$gall['image']?>" data-fancybox="gallery" data-caption="Dynamic"><img src="<?=SITE_PATH?>img/property/gallery/orig/<?=$gall['image']?>" class="img-fluid" alt="<? echo $projects[0]['name']; ?>"> <figcaption><?=$value3['name']?></figcaption></a></figure>

<? $count++;} }  ?>
<div class="clearfix"></div>
</div>
</div>
