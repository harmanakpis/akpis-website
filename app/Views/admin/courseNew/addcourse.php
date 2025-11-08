<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Courses</h2>
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
                    <h5>Add Course</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form method="post" action="" enctype="multipart/form-data">
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Type :</label>
                            <div class="col-sm-10">
                                <select class="form-control" required name="type">
                                    <option value="all">All</option>
                                    <option value="domestic">Domestic</option>
                                    <option value="international">Internatioal</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="title" class="form-control" placeholder="Enter Here" required value="<?=post_value('title')?>" onchange="replicate(this.value)">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">URL Slug :</label>
                            <div class="col-sm-10">
                                <input type="text" name="slug" class="form-control" placeholder="Enter Here" required id="slug" value="<?=post_value('slug')?>">
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Title :</label>
                            <div class="col-sm-10">
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Here" value="<?=post_value('meta_title')?>" id="meta_title">
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Description :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_description" class="form-control" placeholder="Enter Here"><?=post_value('meta_description')?></textarea>
                            </div>
                        </div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Meta Keywords :</label>
                            <div class="col-sm-10">
                                <textarea name="meta_keywords" class="form-control" placeholder="Enter Here"><?=post_value('meta_keywords')?></textarea>
                            </div>
                        </div>

                        <div class="hr-line-dashed"></div>

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Banner Image :</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="image" type="file" class="custom-file-input" name="image">
                                    <label for="image" class="custom-file-label">Choose file...</label>
                                </div>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Banner Section :</label>
                            <div class="col-sm-5">
                                <textarea name="banner_title"  class="form-control" placeholder="Enter Here"><?= post_value('banner_title') ?></textarea>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="banner_subtitle"  class="form-control" placeholder="Enter Here"><?= post_value('video_title') ?></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Enrol Section :</label>
                            <div class="col-sm-5">
                                <textarea name="enrol_title"  class="form-control" placeholder="Enter Here"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="enrol_description"  class="form-control" placeholder="Enter Here"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Course Step1 :</label>
                            <div class="col-sm-5">
                                <textarea  name="steps[1][title]"  class="form-control" placeholder="Enter Title"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <textarea  name="steps[1][brief]" class="form-control" placeholder="Enter Brief"></textarea>
                            </div>
                        </div>
                         <div class="hr-line-dashed"></div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Course Step 2 :</label>
                            <div class="col-sm-5">
                                <textarea name="steps[2][title]" class="form-control" placeholder="Enter Title"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <textarea name="steps[2][brief]"  class="form-control" placeholder="Enter Brief"></textarea>
                            </div>
                        </div>
                         <div class="hr-line-dashed"></div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Course Step 3 :</label>
                            <div class="col-sm-5">
                                <textarea name="steps[3][title]" class="form-control" placeholder="Enter Title"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <textarea name="steps[3][brief]" class="form-control" placeholder="Enter Brief"></textarea>
                            </div>
                        </div>
                         <div class="hr-line-dashed"></div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Course Step 4 :</label>
                            <div class="col-sm-5">
                                <textarea name="steps[4][title]" class="form-control" placeholder="Enter Title"></textarea>
                            </div>
                            <div class="col-sm-5">
                                <textarea name="steps[4][brief]"  class="form-control" placeholder="Enter Brief"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                         <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Prospectus :</label>
                            <div class="col-sm-10">
                                <div class="custom-file">
                                    <input id="prospectus" type="file" class="custom-file-input" name="prospectus">
                                    <label for="prospectus" class="custom-file-label">Choose Prospectus file...</label>
                                </div>
                            </div>

                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Class Schedules PDF's:</label>
                            <div class="col-sm-10">
                                <div id="pdffile-wrapper">
                                    <div class="row pdffile-row mb-2">
                                        <div class="col-sm-4">
                                            <input type="text" name="pdffile[1][title]" class="form-control" placeholder="Enter Title">
                                        </div>
                                        <div class="col-sm-5">
                                            <input id="image" type="file" class="custom-file-input" name="pdffile[1][file]"  accept="application/pdf">
                                            <label for="image" class="custom-file-label">Choose PDF files...</label>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-danger remove-pdffile">Remove</button>
                                        </div>
                                    </div>
                                </div>  
                                <button type="button" id="add-pdf" class="btn btn-primary mt-2">+ Add More</button> 
                                <!-- <div class="custom-file">
                                    <input id="image" type="file" class="custom-file-input" name="class_pdf[]" multiple accept="application/pdf">
                                    <label for="image" class="custom-file-label">Choose PDF files...</label>
                                </div> -->
                            </div>
                        </div>
                         <div class="hr-line-dashed"> </div>
                         <div class="row">
                            <label class="col-sm-2 col-form-label">Why Choose Akpis Features :</label>
                            <div class="col-sm-5">
                                <textarea name="choose_title"  class="form-control" placeholder="Enter Title Here"></textarea>
                            </div>
                            <div class="col-sm-4">
                                <textarea name="choose_description"  class="form-control" placeholder="Enter Subtitle Here"></textarea>
                            </div>
                        </div>
                        <div class="hr-line-dashed"></div>
                        <div class="form-group  row">
                             <label class="col-sm-2 col-form-label">Why Choose Akpis Features :</label>
                            <div class="col-sm-10">
                            <div id="features-wrapper">
                                <div class="row feature-row mb-2">
                                    <div class="col-sm-5">
                                        <input type="text" name="features[1][title]" class="form-control" placeholder="Enter Title">
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" name="features[1][description]" class="form-control" placeholder="Enter Description">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger remove-feature">Remove</button>
                                    </div>
                                </div>
                                
                            </div>  <button type="button" id="add-feature" class="btn btn-primary mt-2">+ Add More</button>
                            </div>
                        </div>
                        <div class="row">
                            <label class="col-sm-2 col-form-label">Glimpe Section Title :</label>
                            <div class="col-sm-3">
                                <textarea name="glimp_title"  class="form-control" placeholder="Enter Title Here"></textarea>
                            </div>
                            <div class="col-sm-3">
                                <textarea name="glimp_subtitle"  class="form-control" placeholder="Enter Subtitle Here"></textarea>
                            </div>
                            <div class="col-sm-3">
                                <textarea name="glimp_description"  class="form-control" placeholder="Enter Subtitle Here"></textarea>
                            </div>
                        </div>
                         <div class="hr-line-dashed"></div> 
                             <div class="form-group  row">
                             <label class="col-sm-2 col-form-label">Glimpe Section  Features :</label>
                            <div class="col-sm-10">
                            <div id="glimpe-features-wrapper">
                                <div class="row glimple_feature-row mb-2">
                                    <div class="col-sm-3">
                                        <input type="text" name="glimpe_features[1][icon]" class="form-control" placeholder="Enter Icon">
                                    </div>
                                    <div class="col-sm-4">
                                        <input type="text" name="glimpe_features[1][title]" class="form-control" placeholder="Enter Title">
                                    </div>
                                    <div class="col-sm-3">
                                        <input type="text" name="glimpe_features[1][description]" class="form-control" placeholder="Enter Description">
                                    </div>
                                    <div class="col-sm-2">
                                        <button type="button" class="btn btn-danger remove-glimple_feature">Remove</button>
                                    </div>
                                </div>
                                
                            </div>  <button type="button" id="add-glimple_feature" class="btn btn-primary mt-2">+ Add More</button>
                            </div>
                        </div>            
                        <div class="hr-line-dashed"></div> 

                        <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">Features With Pictures :</label>
                            <div class="col-sm-10">
                                <div id="extra-features-wrapper">
                                    <div class="row extrafeature-row mb-2">
                                        <div class="col-sm-3">
                                            <input id="logo" type="file" class="custom-file-input" name="extra_features[1][image]">
                                            <label for="logo" class="custom-file-label">Choose file...</label>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="extra_features[1][title]" class="form-control"    placeholder="Enter Title">
                                        </div>
                                        <div class="col-sm-3">
                                            <input type="text" name="extra_features[1][description]" class="form-control"   placeholder="Enter Description">
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="button" class="btn btn-danger remove-extra_feature">Remove</button>
                                        </div>
                                    </div>
                                </div>  <button type="button" id="add-extra-feature" class="btn btn-primary mt-2">+ Add More</button>
                            </div>
                        </div> 
                       <div class="form-group  row">
                            <label class="col-sm-2 col-form-label">FAQ :</label>
                            <div class="col-sm-10">
                                <textarea name="faq" id="faq" class="form-control" placeholder="Enter Here"></textarea>
                            </div>
                        </div>   

                        <div class="form-group row">
                            <div class="col-sm-12 col-sm-offset-2">
                                <button class="btn btn-white btn-sm" type="reset">Clear</button>
                                <button class="btn btn-primary btn-sm float-right" name="addForm" type="submit">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>


        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script type="text/javascript">

    window.onload = function() {
        $(document).ready(function() {
            load_editor('faq', '300');
            load_small_editor('banner_title', 100);
        });
    }

    

let featureCount = 1;

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

$(document).on("click", ".remove-feature", function () {
    $(this).closest(".feature-row").remove();
});
 
/********GLIMPLE FEATURES */
let glimplefeatureCount = 1;

$("#add-glimple_feature").on("click", function () {
    glimplefeatureCount++;
    let html = `
    <div class="row feature-row mb-2">
        <div class="col-sm-3">
            <input type="text" name="glimpe_features[${glimplefeatureCount}][icon]" class="form-control" placeholder="Enter Icon">
        </div>
        <div class="col-sm-4">
            <input type="text" name="glimpe_features[${glimplefeatureCount}][title]" class="form-control" placeholder="Enter Title">
        </div>
        <div class="col-sm-3">
            <input type="text" name="glimpe_features[${glimplefeatureCount}][description]" class="form-control" placeholder="Enter Description">
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-danger remove-glimple_feature">Remove</button>
        </div>
    </div>`;
    $("#glimpe-features-wrapper").append(html);
});

$(document).on("click", ".remove-glimple_feature", function () {
    $(this).closest(".feature-row").remove();
});


/********extra  FEATURES */
let extrafeatureCount = 1;

$("#add-extra-feature").on("click", function () {
     alert(extrafeatureCount); return 0;
    extrafeatureCount++;
    let html = `
    <div class="row extrafeature-row mb-2">
        <div class="col-sm-3">
            <input id="logo" type="file" class="custom-file-input" name="extra_features[${extrafeatureCount}][image]">
            <label for="logo" class="custom-file-label">Choose file...</label>
        </div>
        <div class="col-sm-4">
            <input type="text" name="extra_features[${extrafeatureCount}][title]" class="form-control" placeholder="Enter Title">
        </div>
        <div class="col-sm-3">
            <input type="text" name="extra_features[${extrafeatureCount}][description]" class="form-control" placeholder="Enter Description">
        </div>
        <div class="col-sm-2">
            <button type="button" class="btn btn-danger remove-extra_feature">Remove</button>
        </div>
    </div>`;
    $("#extra-features-wrapper").append(html);
});

$(document).on("click", ".remove-extra_feature", function () {
    $(this).closest(".extrafeature-row").remove();
});

/********PDF  ADD */
let pdfCount = 1;

$("#add-pdf").on("click", function () {
    pdfCount++;
    let html = `
    <div class="row pdffile-row mb-2">
        <div class="col-sm-4">
            <input type="text" name="pdffile[${pdfCount}][title]" class="form-control" placeholder="Enter Title">
        </div>
        <div class="col-sm-5">
            <input  type="file" class="custom-file-input" name="pdffile[${pdfCount}][file]"  accept="application/pdf">
            <label for="image" class="custom-file-label">Choose PDF files...</label>
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