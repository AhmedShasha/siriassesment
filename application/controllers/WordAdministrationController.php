<?php

use LimeSurvey\Models\Services\CopySurveyResources;
use LimeSurvey\Models\Services\FilterImportedResources;
use LimeSurvey\Models\Services\GroupHelper;

/**
 * Class SurveyAdministrationController
 */
class WordAdministrationController extends LSBaseController
{

  /**
   * List Surveys.
   *
   * @return void
   */
  public function actionWord()
  {
    Yii::app()->loadHelper('surveytranslator');
    $aData = array();
    $aData['issuperadmin'] = false;

    if (Permission::model()->hasGlobalPermission('superadmin', 'read')) {
      $aData['issuperadmin'] = true;
    }
    $aData['model'] = new Survey('search');
    $aData['groupModel'] = new SurveysGroups('search');
    $aData['topbar']['title'] = gT('Word Export');
    $aData['topbar']['backLink'] = App()->createUrl('admin/index');

    $aData['topbar']['middleButtons'] = $this->renderPartial('partial/topbarBtns/leftSideButtons', [], true);

    $this->aData = $aData;
    $this->render('word_view', $aData);
  }
}