<script><?  $conc="";?><? if(count($propertySubtypes->toArray())!=0){ foreach($propertySubtypes as $key=>$value) { $conc.='"'.$value->id.'":"'.$value->name.'",' ;}}?>var subtypes={<?=$conc?>};</script>