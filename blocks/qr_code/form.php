<?php
$color = Core::make('helper/form/color');
?>
<div class="form-group">
    <?= $form->label('text', t('Text')) ?>
    <?= $form->text('text', $text) ?>
</div>

<div class="form-group">
    <?= $form->label('size', t('Size')) ?>
    <?= $form->number('size', $size) ?>
</div>

<div class="form-group">
    <?= $form->label('padding', t('Padding')) ?>
    <?= $form->number('padding', $padding) ?>
</div>

<div class="form-group">
    <?= $form->label('error_correction', t('Error correction')) ?>
    <?= $form->select('error_correction',
        array('low' => t('Low'), 'medium' => t('Medium'), 'quartile' => t('Quartile'), 'high' => t('High')),
        $error_correction) ?>
</div>

<div class="form-group">
    <?= $form->label('foreground_color', t('Foreground Color')) ?>
    <div>
        <?= $color->output('foreground_color', $foreground_color) ?>
    </div>
</div>

<div class="form-group">
    <?= $form->label('background_color', t('Background Color')) ?>
    <div>
        <?= $color->output('background_color', $background_color) ?>
    </div>
</div>

<div class="form-group">
    <?= $form->label('label', t('Label')) ?>
    <?= $form->text('label', $label) ?>
</div>

<div class="form-group">
    <?= $form->label('label_font_size', t('Label Font Size')) ?>
    <?= $form->number('label_font_size', $label_font_size) ?>
</div>
