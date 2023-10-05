<?php
/**
 * This file render the list of surveys
 * It use the Survey model search method to build the data provider.
 *
 * @var $model  Survey
 */

// DO NOT REMOVE This is for automated testing to validate we see that page
echo viewHelper::getViewTestTag('listSurveys');

?>
<div class="ls-space list-surveys">

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">DownLoud Word</div>

          <div class="card-body">
            <form action="{{ route('send.notification') }}" method="POST">

              <div class="form-group">
                <label>Company Name</label>
                <input type="text" class="form-control" name="company_name">
              </div>
              <!-- <div class="form-group">
                <label>Body</label>
                <textarea class="form-control" name="body"></textarea>
              </div> -->
              <button type="submit" class="btn btn-primary">DownLoud</button>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>

</div>
<script type="text/javascript">
$('#surveysystem a').on('shown.bs.tab', function() {
  var tabId = $(this).attr('href');
  $('.tab-dependent-button:not([data-tab="' + tabId + '"])').toggleClass("d-none");
  $('.tab-dependent-button[data-tab="' + tabId + '"]').toggleClass("d-none");
});
$(document).on('ready pjax:scriptcomplete', function() {
  if (window.location.hash) {
    $('#surveysystem').find('a[href=' + window.location.hash + ']').trigger('click');
  }
})
</script>
<!-- To update rows per page via ajax -->
<script type="text/javascript">
jQuery(function($) {
  jQuery(document).on("change", '#surveygroups--pageSize', function() {
    $.fn.yiiGridView.update('surveygroups--gridview', {
      data: {
        pageSize: $(this).val()
      }
    });
  });
});
//show tooltip for gridview icons
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})
</script>