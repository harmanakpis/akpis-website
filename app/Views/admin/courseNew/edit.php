<?php 
   $steps = $pdfs = $features = $glimpe_features = $extra_features = [];
   if($course->steps){
      $steps = json_decode($course->steps);
   }
   if($course->class_Schedules_PDF){
      $pdfs = json_decode($course->class_Schedules_PDF,true);
   }

   if($course->features){
       $features = json_decode($course->features, true);
   }
   if($course->glimpe_features){
       $glimpe_features = json_decode($course->glimpe_features, true);
   }
   if($course->extrafeature){
       $extra_features = json_decode($course->extrafeature, true);
   }
   ?>
<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-lg-10">
      <h2>Course</h2>
   </div>
   <div class="col-lg-2">
      <a href="admin/course" class="btn btn-sm btn-primary float-right mt-3"><i class="fa fa-list"></i></a>
   </div>
</div>
<div class="wrapper wrapper-content">
   <div class="row">
      <div class="col-lg-12">
         <div class="ibox ">
            <div class="ibox-title">
               <h5>Edit Course</h5>
               <div class="ibox-tools">
                  <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                  </a>
               </div>
            </div>
            <div class="ibox-content">
               <form method="post" action="" enctype="multipart/form-data">
                  <input type="hidden" name="id" value="<?= $course->id ?>" required>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Type :</label>
                     <div class="col-sm-10">
                        <select class="form-control" required name="type">
                           <option value="all" <?=$course->type=='all'?'selected':''?>>All</option>
                           <option value="domestic" <?=$course->type=='domestic'?'selected':''?>>Domestic</option>
                           <option value="international" <?=$course->type=='international'?'selected':''?>>Internatioal</option>
                        </select>
                     </div>
                  </div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Title :</label>
                     <div class="col-sm-10">
                        <input type="text" name="title" class="form-control" placeholder="Enter Here" required value="<?= $course->title ?>" onchange="replicate(this.value)">
                     </div>
                  </div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">URL Slug :</label>
                     <div class="col-sm-10">
                        <input type="text" name="slug" class="form-control" placeholder="Enter Here" required id="slug" value="<?= $course->slug ?>">
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Meta Title :</label>
                     <div class="col-sm-10">
                        <input type="text" name="meta_title" class="form-control" placeholder="Enter Here" value="<?= $course->meta_title ?>" id="meta_title">
                     </div>
                  </div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Meta Description :</label>
                     <div class="col-sm-10">
                        <textarea name="meta_description" class="form-control" placeholder="Enter Here"><?= $course->meta_description ?></textarea>
                     </div>
                  </div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Meta Keywords :</label>
                     <div class="col-sm-10">
                        <textarea name="meta_keywords" class="form-control" placeholder="Enter Here"><?= $course->meta_keywords ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Banner Image :</label>
                     <div class="col-sm-8">
                        <div class="custom-file">
                           <input id="logo" type="file" class="custom-file-input" name="image">
                           <label for="logo" class="custom-file-label">Choose file...</label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <input type="hidden" name="old_file" value="<?= COURSE_IMAGE.$course->banner_image ?>">
                        <img src="<?= COURSE_IMAGE . $course->banner_image ?>" height="50px">
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Banner Section :</label>
                     <div class="col-sm-5">
                        <textarea name="banner_title"  class="form-control" placeholder="Enter Here"><?= $course->banner_title ?></textarea>
                     </div>
                     <div class="col-sm-4">
                        <textarea name="banner_subtitle"  class="form-control" placeholder="Enter Here"><?= $course->banner_subtitle ?></textarea>
                     </div>
                  </div>
                   <div class="hr-line-dashed"></div>
                    <div class="row">
                        <label class="col-sm-2 col-form-label">Banner Section Video:</label>
                        <div class="col-sm-6">
                                <input type="text" name="banner_video" class="form-control" placeholder="Enter Youtube Link Here" value="<?= $course->banner_video ?? '' ?>" id="banner_video">
                        </div>
                    </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Enrol Section :</label>
                     <div class="col-sm-5">
                        <textarea name="enrol_title"  class="form-control" placeholder="Enter Here"><?= $course->enrol_title ?></textarea>
                     </div>
                     <div class="col-sm-4">
                        <textarea name="enrol_description"  class="form-control" placeholder="Enter Here"><?= $course->enrol_description ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Course Step1 :</label>
                     <div class="col-sm-5">
                        <textarea  name="steps[1][title]"  class="form-control" placeholder="Enter Title"><?= $steps->{1}->title ?? '' ?></textarea>
                     </div>
                     <div class="col-sm-5">
                        <textarea  name="steps[1][brief]" class="form-control" placeholder="Enter Brief"><?= $steps->{1}->brief ?? '' ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Course Step 2 :</label>
                     <div class="col-sm-5">
                        <textarea name="steps[2][title]" class="form-control" placeholder="Enter Title"><?= $steps->{2}->title ?? ''; ?></textarea>
                     </div>
                     <div class="col-sm-5">
                        <textarea name="steps[2][brief]"  class="form-control" placeholder="Enter Brief"><?= $steps->{2}->brief ?? ''; ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Course Step 3 :</label>
                     <div class="col-sm-5">
                        <textarea name="steps[3][title]" class="form-control" placeholder="Enter Title"><?= $steps->{3}->title ?? ''; ?></textarea>
                     </div>
                     <div class="col-sm-5">
                        <textarea name="steps[3][brief]" class="form-control" placeholder="Enter Brief"><?= $steps->{3}->brief ?? ''; ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Course Step 4 :</label>
                     <div class="col-sm-5">
                        <textarea name="steps[4][title]" class="form-control" placeholder="Enter Title"><?= $steps->{4}->title ?? ''; ?></textarea>
                     </div>
                     <div class="col-sm-5">
                        <textarea name="steps[4][brief]"  class="form-control" placeholder="Enter Brief"><?= $steps->{4}->brief ?? ''; ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Prospectus :</label>
                     <div class="col-sm-6">
                        <div class="custom-file">
                           <input id="prospectus" type="file" class="custom-file-input" name="prospectus" >
                           <label for="prospectus" class="custom-file-label">Choose Prospectus file...</label>
                        </div>
                     </div>
                     <div class="col-sm-2">
                        <input type="hidden" name="prospectus_old_file" value="<?= COURSE_IMAGE . $course->prospectus ?>" >
                        <iframe src="<?= COURSE_IMAGE . $course->prospectus ?>" width="100%" height="80px" ></iframe>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group row">
                     <label class="col-sm-2 col-form-label">Class Schedules PDF's:</label>
                     <div class="col-sm-10">
                        <div id="pdffile-wrapper">
                           <!-- Existing PDFs -->
                           <?php if (!empty($course->class_Schedules_PDF)) : ?>
                           <?php foreach ($pdfs as $i => $pdf) : ?>
                           <div class="row pdffile-row mb-2">
                              <div class="col-sm-4">
                                 <!-- Show existing title if available -->
                                 <input type="text" 
                                    name="pdffile[<?= $i ?>][title]" 
                                    value="<?= $pdf['title'] ?? '' ?>" 
                                    class="form-control" 
                                    placeholder="Enter Title">
                              </div>
                              <div class="col-sm-5">
                                 <!-- Hidden input to keep old file -->
                                 <input type="hidden" 
                                    name="pdffile[<?= $i ?>][old_file]" 
                                    value="<?= $pdf['file'] ?>">
                                 <!-- Show file icon -->
                                 <a href="<?= COURSE_IMAGE . $pdf['file'] ?>" target="_blank">
                                 <img src="<?= base_url('assets/images/pdf-icon.png') ?>" 
                                    alt="PDF File" height="40">
                                 </a>
                                 <!-- Upload new file (replace old) -->
                                 <input type="file" 
                                    class="custom-file-input mt-1" 
                                    name="pdffile[<?= $i ?>][file]" 
                                    accept="application/pdf">
                              </div>
                              <div class="col-sm-2">
                                 <!-- Delete button -->
                                 <button type="button" class="btn btn-danger remove-pdffile">Remove</button>
                              </div>
                           </div>
                           <?php endforeach; ?>
                           <?php endif; ?>
                        </div>
                        <!-- Add More Button -->
                        <button type="button" id="add-pdf" class="btn btn-primary mt-2">+ Add PDF</button>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Why Choose Akpis Features :</label>
                     <div class="col-sm-5">
                        <textarea name="choose_title"  class="form-control" placeholder="Enter Title Here"><?= $course->choose_title ?? '' ?></textarea>
                     </div>
                     <div class="col-sm-4">
                        <textarea name="choose_description"  class="form-control" placeholder="Enter Subtitle Here"><?= $course->choose_description ?? '' ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Why Choose Akpis Features :</label>
                     <div class="col-sm-10">
                        <div id="features-wrapper">
                           <?php if (!empty($features)): ?>
                           <?php foreach ($features as $i => $feature): ?>
                           <div class="row feature-row mb-2">
                              <div class="col-sm-5">
                                 <input type="text" name="features[<?= $i ?>][title]" 
                                    value="<?= esc($feature['title']) ?>" 
                                    class="form-control" placeholder="Enter Title">
                              </div>
                              <div class="col-sm-5">
                                 <input type="text" name="features[<?= $i ?>][description]" 
                                    value="<?= esc($feature['description']) ?>" 
                                    class="form-control" placeholder="Enter Description">
                              </div>
                              <div class="col-sm-2">
                                 <button type="button" class="btn btn-danger remove-feature">Remove</button>
                              </div>
                           </div>
                           <?php endforeach; ?>
                           <?php endif; ?>
                        </div>
                        <button type="button" id="add-feature" class="btn btn-primary mt-2">+ Add More</button>
                     </div>
                  </div>
                  <div class="row">
                     <label class="col-sm-2 col-form-label">Glimpe Section Title :</label>
                     <div class="col-sm-3">
                        <textarea name="glimp_title"  class="form-control" placeholder="Enter Title Here"><?= $course->glimp_title ?? '' ?></textarea>
                     </div>
                     <div class="col-sm-3">
                        <textarea name="glimp_subtitle"  class="form-control" placeholder="Enter Subtitle Here"><?= $course->glimp_subtitle ?? '' ?></textarea>
                     </div>
                     <div class="col-sm-3">
                        <textarea name="glimp_description"  class="form-control" placeholder="Enter Subtitle Here"><?= $course->glimp_description ?? '' ?></textarea>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Glimpe Section  Features :</label>
                     <div class="col-sm-10">
                        <div id="glimpe-features-wrapper">
                           <?php 
                              if (!empty($glimpe_features)): ?>
                           <?php foreach ($glimpe_features as $key => $gfeature): ?>
                           <div class="row glimplefeature-row mb-2">
                              <div class="col-sm-3">
                                 <input type="text" name="glimpe_features[<?= $key ?>][icon]" class="form-control"  value="<?= esc($gfeature['icon']) ?>"  placeholder="Enter Icon">
                              </div>
                              <div class="col-sm-4">
                                 <input type="text" name="glimpe_features[<?= $key ?>][title]" class="form-control"  value="<?= esc($gfeature['title']) ?>"  placeholder="Enter Title">
                              </div>
                              <div class="col-sm-3">
                                 <input type="text" name="glimpe_features[<?= $key ?>][description]" class="form-control"  value="<?= esc($gfeature['description']) ?>"  placeholder="Enter Description">
                              </div>
                              <div class="col-sm-2">
                                 <button type="button" class="btn btn-danger remove-glimple-feature">Remove</button>
                              </div>
                           </div>
                           <?php endforeach; ?>
                           <?php endif; ?>
                        </div>
                        <button type="button" id="add-glimple-feature" class="btn btn-primary mt-2">+ Add More</button>
                     </div>
                  </div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">Features With Pictures :</label>
                     <div class="col-sm-10">
                        <div id="extra-features-wrapper">
                           <?php 
                              if (!empty($extra_features)): ?>
                           <?php foreach ($extra_features as $key => $efeature): ?>
                           <div class="row extrafeature-row mb-2">
                              <div class="col-sm-2">
                                 <?php if (!empty($efeature['image'])): ?>
                                 <input type="hidden" name="extra_features[<?= $key ?>][image]" value="<?= $efeature['image'] ?>">
                                 <img src="<?= COURSE_IMAGE . $efeature['image'] ?>" alt="img" height="40" class="mb-2 d-block">
                                 <?php else: ?>
                                 <img src="<?= COURSE_IMAGE . 'default.png' ?>" alt="img" height="40" class="mb-2 d-block">
                                 <?php endif; ?>
                                 <!-- File input for new image -->
                                 <!-- <input type="file" name="extra_features[<?//= $key ?>][new_image]" class="form-control form-control-sm"> -->
                              </div>
                              <div class="col-sm-4">
                                 <input type="text" name="extra_features[<?= $key ?>][title]" class="form-control"  value="<?= esc($efeature['title']) ?>"  placeholder="Enter Title">
                              </div>
                              <div class="col-sm-4">
                                 <input type="text" name="extra_features[<?= $key ?>][description]" class="form-control"  value="<?= esc($efeature['description']) ?>"  placeholder="Enter Description">
                              </div>
                              <div class="col-sm-2">
                                 <button type="button" class="btn btn-danger remove-extra-feature">Remove</button>
                              </div>
                           </div>
                           <?php endforeach; ?>
                           <?php endif; ?>
                        </div>
                        <button type="button" id="add-extra-feature" class="btn btn-primary mt-2">+ Add More</button>
                     </div>
                  </div>
                  <div class="hr-line-dashed"></div>
                  <div class="form-group  row">
                     <label class="col-sm-2 col-form-label">FAQ :</label>
                     <div class="col-sm-10">
                        <textarea name="faq" id="faq" class="form-control" placeholder="Enter Here"><?= $course->faq ?? '' ?></textarea>
                     </div>
                  </div>
                  <div class="form-group row">
                     <div class="col-sm-12 col-sm-offset-2">
                        <button class="btn btn-white btn-sm" type="reset">Clear</button>
                        <button class="btn btn-primary btn-sm float-right" name="addForm" type="submit">Update</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Add jQuery (must be before your script) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript">
   window.onload = function() {
      $(document).ready(function() {
          load_editor('faq', '300');
      });
   }
   
   
   function replicate(value) {
      if ($('#slug').val() === '') {
          var title = value.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, '-').replace(/ /g, "-").toLowerCase();
          $('#slug').val(title);
      }
      if ($('#meta_title').val() === '') {
          $('#meta_title').val(value);
      }
   }
   
   document.addEventListener("DOMContentLoaded", function () {
   document.querySelectorAll(".remove-pdf").forEach(function (btn) {
      btn.addEventListener("click", function () {
          let parent = btn.closest(".pdf-item");
   
          // Find hidden input safely
          let oldInput = parent.querySelector("input[name='old_pdfs[]']");
          if (oldInput) {
              oldInput.remove();
          }
   
          // Add deleted input for server
          let deleted = document.createElement("input");
          deleted.type = "hidden";
          deleted.name = "deleted_pdfs[]";
          deleted.value = btn.dataset.file;
          parent.appendChild(deleted);
   
          // Hide from UI
          parent.style.display = "none";
      });
   });
   });
   
   /*****Add Feature row */
   let featureCount = $("#features-wrapper .feature-row").length ;
   if (featureCount == 0) featureCount = 0;
   // Add feature row
   $("#add-feature").on("click", function () {
   featureCount++;
   let html = `
   <div class="row feature-row mb-2">
      <div class="col-sm-5">
          <input type="text" name="features[${featureCount}][title]" class="form-control" placeholder="Enter Title">
      </div>
      <div class="col-sm-5">
          <input type="text" name="features[${featureCount}][description]" class="form-control" placeholder="Enter Description">
      </div>
      <div class="col-sm-2">
          <button type="button" class="btn btn-danger remove-feature">Remove</button>
      </div>
   </div>`;
   $("#features-wrapper").append(html);
   });
   /***********Delete Features */
   
   $(document).on("click", ".remove-feature", function () {
   $(this).closest(".feature-row").remove();
   });
   
   /********GLIMPLE FEATURES */
   // Initialize counter based on existing rows
   let glimplefeatureCount = $("#glimpe-features-wrapper .glimplefeature-row").length;
   if (glimplefeatureCount == 0) glimplefeatureCount = 0;
   
   // Add new row
   $("#add-glimple-feature").on("click", function () {
   glimplefeatureCount++;
   let html = `
   <div class="row glimplefeature-row mb-2">
      <div class="col-sm-3">
          <input type="text" name="glimpe_features[${glimplefeatureCount}][icon]" required class="form-control" placeholder="Enter Icon">
      </div>
      <div class="col-sm-4">
          <input type="text" name="glimpe_features[${glimplefeatureCount}][title]" required class="form-control" placeholder="Enter Title">
      </div>
      <div class="col-sm-3">
          <input type="text" name="glimpe_features[${glimplefeatureCount}][description]" required class="form-control" placeholder="Enter Description">
      </div>
      <div class="col-sm-2">
          <button type="button" class="btn btn-danger remove-glimple-feature">Remove</button>
      </div>
   </div>`;
   $("#glimpe-features-wrapper").append(html);
   });
   
   // Remove dynamically added rows
   $(document).on("click", ".remove-glimple-feature", function () {
   $(this).closest(".glimplefeature-row").remove();
   });
   
   // ADD EXTRA FEATURES MORE ITEMS
   // Initialize counter based on existing rows
   let extrafeatureCount = $("#extra-features-wrapper .extrafeature-row").length;
   if (extrafeatureCount == 0) extrafeatureCount = 0;
   
   // Add new row
   $("#add-extra-feature").on("click", function () {
   extrafeatureCount++;
   let html = `
   <div class="row extrafeature-row mb-2">
      <div class="col-sm-3">
          <input id="logo" type="file" class="custom-file-input" name="extra_features[${extrafeatureCount}][image]">
          <label for="logo" class="custom-file-label">Choose file...</label>
      </div>
      <div class="col-sm-4">
          <input type="text" name="extra_features[${extrafeatureCount}][title]" class="form-control"    placeholder="Enter Title">
      </div>
      <div class="col-sm-3">
          <input type="text" name="extra_features[${extrafeatureCount}][description]" class="form-control"    placeholder="Enter Description">
      </div>
      <div class="col-sm-2">
          <button type="button" class="btn btn-danger remove-extra-feature">Remove</button>
      </div>
   </div>`;
   $("#extra-features-wrapper").append(html);
   });
   
   // Remove dynamically added rows
   $(document).on("click", ".remove-extra-feature", function () {
   $(this).closest(".extrafeature-row").remove();
   });
   
   
   
   let pdfCount = <?= !empty($pdfs) ? count($pdfs) : 0 ?>;
   
   $("#add-pdf").on("click", function () {
   pdfCount++;
   let html = `
   <div class="row pdffile-row mb-2">
      <div class="col-sm-4">
          <input type="text" name="pdffile[${pdfCount}][title]" class="form-control" placeholder="Enter Title">
      </div>
      <div class="col-sm-5">
          <input type="file" class="custom-file-input" name="pdffile[${pdfCount}][file]" accept="application/pdf">
          <label class="custom-file-label">Choose PDF file...</label>
      </div>
      <div class="col-sm-2">
          <button type="button" class="btn btn-danger remove-pdffile">Remove</button>
      </div>
   </div>`;
   $("#pdffile-wrapper").append(html);
   });
   
   $(document).on("click", ".remove-pdffile", function () {
   $(this).closest(".pdffile-row").remove();
   });
   
</script>