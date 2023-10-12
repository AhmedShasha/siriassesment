<?php
/**
 * This view generate all the structure needed for the ComfortUpdate.
 * If no step is requested (by url or by post), ajax will render the check buttons, else, it will show the ComfortUpdater (menus, etc.)
 *
 * @var $this AdminController
 * @var int $thisupdatecheckperiod : the current check period in days (0 => never ; 1 => everyday ; 7 => every week, etc..  )
 * @var $updatelastcheck TODO : check type
 * @var $UpdateNotificationForBranch TODO : check type
 *
 */

// DO NOT REMOVE This is for automated testing to validate we see that page
echo viewHelper::getViewTestTag('update');
?>

<!-- this view contain the input provinding to the js the inforamtion about which content to load : check buttons or comfortupdate -->
<?php
$this->renderPartial("./update/_ajaxVariables");
?>

