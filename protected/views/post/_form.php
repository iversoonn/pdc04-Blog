<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="max-w-3xl mx-auto p-6 bg-white shadow-md rounded-lg">

  <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'post-form',
    'enableAjaxValidation' => false,
  )); ?>

  <!-- Validation Note -->
  <p class="text-sm text-gray-600 mb-4">
    Fields with <span class="text-red-500">*</span> are required.
  </p>

  <!-- Error Summary -->
  <?php echo $form->errorSummary($model, null, null, array('class' => 'mb-6 text-red-500')); ?>

  <!-- Title Field -->
  <div class="mb-4">
    <?php echo $form->labelEx($model, 'title', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textField($model, 'title', array('class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'title', array('class' => 'text-red-500 text-sm mt-1')); ?>
  </div>

  <!-- Content Field -->
  <div class="mb-4">
    <?php echo $form->labelEx($model, 'content', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textArea($model, 'content', array('rows' => 6, 'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'content', array('class' => 'text-red-500 text-sm mt-1')); ?>
  </div>

  <!-- Tags Field -->
  <div class="mb-4">
    <?php echo $form->labelEx($model, 'tags', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textArea($model, 'tags', array('rows' => 4, 'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'tags', array('class' => 'text-red-500 text-sm mt-1')); ?>
  </div>

  <!-- Status Dropdown -->
  <div class="mb-4">
    <?php echo $form->labelEx($model, 'status', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->dropDownList($model, 'status', Lookup::items('PostStatus'), array('class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'status', array('class' => 'text-red-500 text-sm mt-1')); ?>
  </div>

  <!-- Hidden Fields (for admin use) -->
  <div class="hidden">
    <?php echo $form->textField($model, 'create_time'); ?>
    <?php echo $form->textField($model, 'update_time'); ?>
    <?php echo $form->textField($model, 'author_id'); ?>
  </div>

  <!-- Submit Button -->
  <div class="flex justify-end">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
      'class' => 'bg-[#b08968] text-white px-6 py-2 rounded hover:bg-[#8c6a52] transition duration-300'
    )); ?>
  </div>

  <?php $this->endWidget(); ?>

</div>
