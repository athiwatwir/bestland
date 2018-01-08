<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    โซน
                </h2>
                <?=$this->Html->link('<button type="button" class="btn w-xs btn-success">เพิ่ม</button>',['action'=>'add','search'=>true],['escape'=>false])?>
                
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                
                <table id="datatable1" class="table table-striped table-bordered table-hover">
                    <thead>
                        <tr>
                            <th style="width: 50px;" class="text-center">#</th>
                            <th style="width: 10%">ชื่อ</th>
                            <th>รายละเอียด</th>
                            <th class="">วันที่สร้าง</th>
                            <th style="width: 100px;" class="text-center"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $count=1;?>
                        <?php foreach ($zones as $a): ?>
                        <tr>
                            <td class="text-center"><?=$count++?></td>
                            <td><?=h($a->name)?></td>
                            <td><?=h($a->description)?></td>
                            <td class="hidden-xs"><?=h(date("d-m-Y H:m", strtotime($a->created)))?></td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <?= $this->Html->link(BUTTON_EDIT, ['action' => 'edit', $a->id],['escape'=>false]) ?>
                                    <?= $this->Form->postLink(BUTTON_DELETE, ['action' => 'delete', $a->id], ['confirm' => __('คุณต้องการลบ {0}?', $a->name),'escape'=>false]) ?>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

