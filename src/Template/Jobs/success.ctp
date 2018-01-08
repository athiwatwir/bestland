<div class="row">
    <div class="col-md-12">
        <?= $this->Flash->render() ?>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <h4 class="font-mitr400">**ก่อนเรียกสัมภาษณ์งาน กรุณาดาวโหลดแบบฟอร์มและกรอกรายละเอียดให้ครบถ้วน</h4>
    </div>
</div>
<div class="row">
    <div class="col-md-12 text-center">
        <?=$this->Html->link('<i class="et-icon-download g-mr-5"></i> ดาวน์โหลดเอกสาร',PDF_SITE_URL.'job_regis2017.pdf',
                ['class'=>'btn btn-lg u-btn-primary g-mr-10 g-mb-15','escape'=>false,'target'=>'_blank'])?>
    </div>
</div>
