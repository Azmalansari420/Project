<!-- <meta content="<?php echo e(env("APP_NAME")); ?>" name="description" /> -->
<meta content="<?php echo e(env("APP_NAME")); ?>" name="author" />


<meta name="_token" content="<?php echo e(csrf_token()); ?>">


<link rel="shortcut icon" href="<?php echo e(url('public/')); ?>/assetsadmin/images/favicon.png">
<!-- jsvectormap css -->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
<!--Swiper slider css-->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css" />
<!-- Layout config Js -->
<!-- <script src="<?php echo e(url('public/')); ?>/assetsadmin/js/layout.js"></script> -->
<!-- Bootstrap Css -->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/css/icons.min.css" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/css/app.min.css" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/css/custom.min.css" rel="stylesheet" type="text/css" />
<!-- Plugins css -->
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/dropzone/dropzone.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
<link href="<?php echo e(url('public/')); ?>/assetsadmin/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />







<link rel="stylesheet" href="<?php echo e(url('public')); ?>/toast/saber-toast.css">
<link rel="stylesheet" href="<?php echo e(url('public')); ?>/toast/style.css">
<link rel="stylesheet" href="<?php echo e(url('public')); ?>/front_css.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="<?php echo e(url('public')); ?>/front_script.js"></script>
<link rel="stylesheet" href="<?php echo e(url('public')); ?>/upload-multiple/style.css">
<script src="<?php echo e(url('public')); ?>/upload-multiple/script.js"></script>
<link rel="stylesheet" href="<?php echo e(url('public/')); ?>/assetsadmin/select2/css/select2.min.css">




<script src="https://cdn.ckeditor.com/4.18.0/full/ckeditor.js"></script>


<style>
.pagination svg {
    width: 10px;
}
.pagination .flex.justify-between.flex-1.sm\:hidden {
    display: none;
}
.pagination .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between > div {
    width: auto;
    display: inline-block;
}
.pagination .hidden.sm\:flex-1.sm\:flex.sm\:items-center.sm\:justify-between {
    display: flex;
    justify-content: space-between;
}
span.relative.z-0.inline-flex.shadow-sm.rounded-md > span > span, span.relative.z-0.inline-flex.shadow-sm.rounded-md > a {
    padding: 3px 10px !important;
    display: inline-block;
}
.pagination {
    padding: 10px 12px !important;
    padding-bottom: 0 !important;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice {
  background-color: #71519d;
  border: 1px solid #71519d;
}
.select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
  color: white;
}
.select2-container .select2-selection--single
{
  height: calc(2.25rem + 2px);
}
.select2-container--default .select2-selection--single {
    padding: 5px 5px;
    padding-top: 6px;
}
.select2-container--default .select2-selection--single .select2-selection__arrow b {
  top: 70%;
}
.select2-container--default .select2-selection--single {
  border: 1px solid #ced4da;
}
#data-list {
    position: relative;
    min-height: 250px;
}
.my-loader2 {
    position: absolute;
}
.hide
{
    display: none;
}


.detail-popup {
    position: absolute;
    z-index: 999;
    width: 200px;
    background: white;
    padding: 5px 5px;
    top: 50%;
    left: 99%;
    border-radius: 5px;
     display: none; 
}
.person:hover .detail-popup {
    display: block;
}
.detail-popup p {
    font-size: 12px;
    margin: 0;
    color: #3BAA9D !important;
}
.person {
    position: relative;
}
.table>:not(caption)>*>* a {
    font-weight: 800;
    text-decoration: underline;
}
td .btn {
    text-decoration: none !important;
}
.earningboard {
    background-image: linear-gradient(to right, #7bf1fd, #0753b1);
    padding: 17px;
    border-radius: 10px;
    display: flex;
    justify-content: space-around;
    align-items: center;
    margin-bottom: 10px;
}
.hovercard:hover {
    background: linear-gradient(45deg, #69390e, #a3721e) !important;
    transition: 0.25s;
}
.secondcolor {
    background-image: linear-gradient(to right, #10879b, #0557ab) !important;
}
.thirdcolor {
    background-image: linear-gradient(to right, #1a4253, #04489c) !important;
}
.fourthcolor {
    background-image: linear-gradient(to right, #38184a, #0545a6) !important;
}
.innerboard span {
    font-size: 64px;
    color: white;
}
.hovercard:hover h2 {
    color: white !important;
}

.innercontent h2 {
    color: white;
    /* text-align: right; */
    font-size: 32px;
    font-weight: 800;
}
.innercontent h3 {
    color: white;
}
.user-d-img {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    border: 3px solid white;
}
.modal.show {
    opacity: 1;
    display: block;
    background: rgba(0, 0, 0, 0.5);
}
span.logo-lg img {
    width: 100px;
}
span.logo-sm img {
    width: 25px;
}
.cke_notifications_area {
    display: none;
}
</style><?php /**PATH C:\xamp\htdocs\projects\hindibible\resources\views/admin/headers/maincss.blade.php ENDPATH**/ ?>