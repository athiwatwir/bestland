<h4>มีผู้สมัครงานใหม่</h4>
<p><?=h('คุณ '.$profile['firstname'].'  '.$profile['lastname'])?></p>
<p><?=$this->Html->link('คลิ๊กเพื่อดูรายละเอียดโปรไฟล์',['controller'=>'jobs','action'=>'viewprofile',$profile['id'],'_full'=>true],['target'=>'_blank'])?></p>