<?php
/**
 * This view generate the 'security' tab inside global settings.
 *
 */
?>
<?php $thissurveyPreview_require_Auth=getGlobalSetting('surveyPreview_require_Auth'); ?>
<div class="form-group">

	<label class="col-sm-5 control-label"  for='surveyPreview_require_Auth'><?php eT("Survey preview only for administration users:"); ?></label>
            <div class="col-sm-6">

<select class="form-control"  id='surveyPreview_require_Auth' name='surveyPreview_require_Auth'>
        <option value='1'
            <?php if ($thissurveyPreview_require_Auth == true) { echo " selected='selected'";}?>
            ><?php eT("Yes"); ?></option>
        <option value='0'
            <?php if ($thissurveyPreview_require_Auth == false) { echo " selected='selected'";}?>
            ><?php eT("No"); ?></option>
    </select>
        </div>
    </div>


<?php $thisfilterxsshtml=getGlobalSetting('filterxsshtml'); ?>
<div class="form-group">
            <label class="col-sm-5 control-label"  for='filterxsshtml'><?php eT("Filter HTML for XSS:"); echo ((Yii::app()->getConfig("demoMode")==true)?'*':''); ?></label>
            <div class="col-sm-6">
                <select class="form-control"  id='filterxsshtml' name='filterxsshtml'>
        <option value='1'
            <?php if ( $thisfilterxsshtml == true) { echo " selected='selected'";}?>
            ><?php eT("Yes"); ?></option>
        <option value='0'
            <?php if ( $thisfilterxsshtml == false) { echo " selected='selected'";}?>
            ><?php eT("No"); ?></option>
</select>&nbsp;<span class='hint'><?php eT("(XSS filtering is always disabled for the superadministrator.)"); ?></span>
        </div>
    </div>


<?php $thisusercontrolSameGroupPolicy=getGlobalSetting('usercontrolSameGroupPolicy'); ?>
<div class="form-group">
            <label class="col-sm-5 control-label"  for='usercontrolSameGroupPolicy'><?php eT("Group member can only see own group:"); ?></label>
            <div class="col-sm-6">
                <select class="form-control"  id='usercontrolSameGroupPolicy' name='usercontrolSameGroupPolicy'>
        <option value='1'
            <?php if ( $thisusercontrolSameGroupPolicy == true) { echo " selected='selected'";}?>
            ><?php eT("Yes"); ?></option>
        <option value='0'
            <?php if ( $thisusercontrolSameGroupPolicy == false) { echo " selected='selected'";}?>
            ><?php eT("No"); ?></option>
    </select>
        </div>
    </div>


<?php $thisforce_ssl = getGlobalSetting('force_ssl');
    $opt_force_ssl_on = $opt_force_ssl_off = $opt_force_ssl_neither = '';
    $warning_force_ssl = sprintf(gT('Warning: Before turning on HTTPS,%s check if this link works.%s'),'<a href="https://'.$_SERVER['HTTP_HOST'].$this->createUrl("admin/globalsettings/sa").'" title="'. gT('Test if your server has SSL enabled by clicking on this link.').'">','</a>')
    .'<br/> '
    . gT("If the link does not work and you turn on HTTPS, LimeSurvey will break and you won't be able to access it.");
    switch($thisforce_ssl)
    {
        case 'on':
            $warning_force_ssl = '&nbsp;';
            break;
        case 'off':
        case 'neither':
            break;
        default:
            $thisforce_ssl = 'neither';
    };
    $this_opt = 'opt_force_ssl_'.$thisforce_ssl;
    $$this_opt = ' selected="selected"';
?><div class="form-group">
            <label class="col-sm-5 control-label"  for="force_ssl"><?php eT('Force HTTPS:'); ?></label>
            <div class="col-sm-6">
                <select class="form-control"  name="force_ssl" id="force_ssl">
        <option value="on" <?php echo $opt_force_ssl_on; ?>><?php eT('On'); ?></option>
        <option value="off" <?php echo $opt_force_ssl_off; ?>><?php eT('Off'); ?></option>
        <option value="neither" <?php echo $opt_force_ssl_neither; ?>><?php eT("Don't force on or off"); ?></option>
    </select>
        </div>
    </div>

<div class="form-group">
            <span style='font-size:0.7em;'><?php echo $warning_force_ssl; ?></span>
    </div>

<?php unset($thisforce_ssl,$opt_force_ssl_on,$opt_force_ssl_off,$opt_force_ssl_neither,$warning_force_ssl,$this_opt); ?>

<?php if (Yii::app()->getConfig("demoMode")==true):?>
    <p><?php eT("Note: Demo mode is activated. Marked (*) settings can't be changed."); ?></p>
<?php endif; ?>
