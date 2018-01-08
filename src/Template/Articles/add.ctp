<?= $this->Html->script('tinymce/tinymce.min.js') ?>
<script>
    tinymce.init({
        selector: 'textarea',
        height: 500,
        theme: 'modern',
        menubar: true,
        plugins: [
    'advlist autolink lists link image charmap print preview anchor',
    'searchreplace visualblocks code fullscreen',
    'insertdatetime media table contextmenu paste code textcolor'
  ],
        toolbar: 'undo redo | insert | styleselect | forecolor backcolor | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
        content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
    });
</script>

<div class="row">
    <div class="col-md-12">
        <div class="hpanel">
            <div class="panel-body">
                <h2 class="font-light m-b-xs">
                    เพิ่มบทความ
                </h2>


            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        
        <div class="hpanel">
            
            <div class="panel-body">
               
                <?= $this->Form->create($article,['id'=>'frm','novalidate' => true]) ?>
                <div class="form-group">
                    <label for="example-nf-email">ลำดับที่ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('seq', ['class' => 'form-control', 'label' => false,'id'=>'seq']); ?>

                </div>
                <div class="form-group">
                    <label for="">ประเภทบทความ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('category_id', ['class' => 'form-control', 'label' => false,'options' => $categories]); ?>

                </div>
                <div class="form-group">
                    <label for="example-nf-email">ชื่อ <?= REQ_FIELD ?></label>
                    <?= $this->Form->input('name', ['class' => 'form-control', 'label' => false]); ?>

                </div>
                <div class="form-group">
                    <label for="">เนื้อหา</label>
                    <?= $this->Form->input('text', ['class' => 'form-control', 'label' => false,'rows' => '30']); ?>

                </div>
                <div class="form-group m-b-0">
                    <?= $this->Form->button('บันทึก', ['class' => 'btn w-xs btn-success']) ?>
                </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>


