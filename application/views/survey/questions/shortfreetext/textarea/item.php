<?php
/**
 * Shortfreetext, textarea style, item Html
 *
 * @var $freeTextId                 answer{$ia[1]}
 * @var $extraclass
 * @var $labelText                  gT('Your answer')
 * @var $name                       $ia[1]
 * @var $drows
 * @var $tiwidth
 * @var $checkconditionFunction      $checkconditionFunction.'(this.value, this.name, this.type)
 * @var $dispVal
 */
?>

<p class='question answer-item text-item <?php echo $extraclass;?>'>
    <label for='<?php echo $freeTextId;?>' class='hide label'>
        <?php echo $labelText;?>
    </label>

<textarea
    class="form-control  textarea '.$kpclass.'"
    name="<?php echo $name;?>"
    id="<?php echo $freeTextId;?>"
    rows="<?php echo $drows; ?>"
    cols="<?php echo $tiwidth; ?>"
    <?php echo $maxlength; ?>
    onkeyup="<?php echo $checkconditionFunction; ?>"
>
<?php echo $dispVal; ?>
</textarea>
</p>
