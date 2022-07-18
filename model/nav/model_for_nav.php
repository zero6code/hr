<div class="modal modal-xl fade" id="navmodel1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel">เอกสาร/แบบฟอร์ม</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-I" type="button" role="tab" aria-controls="pills-home" aria-selected="true">ข้าราชการ</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-II" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">พนักงานราชการ</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-III" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">พกส</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-IV" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >ลูกจ้างประจำ</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-V" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >ลูกจ้างชั่วคราว</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-VI" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >อื่นๆ</button>
            </li>
          </ul>
          <?php
                  require_once('tableData/table-doc-form-view.php');
                  $table_data = new TABLE_DOC_FORM();
          ?>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-I" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <?php 
                  printf($table_data->main("data-doc-form-I"));
              ?>
            </div>
            <div class="tab-pane fade" id="pills-II" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <?php 
                  printf($table_data->main("data-doc-form-II"));
              ?>
            </div>
            <div class="tab-pane fade" id="pills-III" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php 
                 printf($table_data->main("data-doc-form-III"));
              ?>
            </div>
            <div class="tab-pane fade" id="pills-IV" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
            <?php 
                 printf($table_data->main("data-doc-form-IV"));
              ?>
            </div>
            <div class="tab-pane fade" id="pills-V" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php 
                  printf($table_data->main("data-doc-form-V"));
              ?>
            </div>
            <div class="tab-pane fade" id="pills-VI" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
            <?php 
                  printf($table_data->main("data-doc-form-VI"));
              ?>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button> -->
      </div>
    </div>
  </div>
</div>


<div class="modal modal-xl fade" id="navmodel2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalToggleLabel2">กฎระเบียบ/ข้อบังคับ/หลักเกณฑ์ต่างๆ</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body fs-6">
          <ul class="nav nav-pills mb-3 overflow-auto" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pillsI-I" type="button" role="tab" aria-controls="pills-home" aria-selected="true">บรรจุ/เลื่อน/โอน/ย้าย</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pillsI-II" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">เงินเดือน/ค่าตอบแทน/เงินประจำตำแหน่ง</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pillsI-III" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">การพัฒนาบุคลากร/IDP/CareerPath</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pillsI-IV" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >การประเมินผลปฏิบัติราชการ</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pillsI-V" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >สิทธิประโยชน์/สวัสดิการ</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pillsI-VI" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >วินัย/นิติการ</button>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pillsI-I" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
              <?php
                 printf($table_data->main("low_I"));
              ?>
            </div>
            <div class="tab-pane fade" id="pillsI-II" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
            <?php
                 printf($table_data->main("low_II"));
              ?>
            </div>
            <div class="tab-pane fade" id="pillsI-III" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php
                 printf($table_data->main("low_III"));
              ?>
            </div>
            <div class="tab-pane fade" id="pillsI-IV" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
            <?php
                 printf($table_data->main("low_IV"));
              ?>
            </div>
            <div class="tab-pane fade" id="pillsI-V" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
            <?php
                 printf($table_data->main("low_V"));
              ?>
            </div>
            <div class="tab-pane fade" id="pillsI-VI" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">
            <?php
                 printf($table_data->main("low_VI"));
              ?>
            </div>
          </div>
      </div>
      <div class="modal-footer">
        <!-- <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Back to first</button> -->
      </div>
    </div>
  </div>
</div>