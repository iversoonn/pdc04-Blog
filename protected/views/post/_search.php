<?php
/* @var $this PostController */
/* @var $model Post */
/* @var $form CActiveForm */
?>

<div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg">

  <?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
  )); ?>

  <!-- ID Field -->
  <div class="mb-4">
    <?php echo $form->label($model, 'id', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <input type="text" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]" 
           value="<?php echo CHtml::encode($model->id); ?>" />
  </div>

  <!-- Title Field -->
  <div class="mb-4">
    <?php echo $form->label($model, 'title', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textField($model, 'title', array(
      'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]'
    )); ?>
  </div>

  <!-- Content Field -->
  <div class="mb-4">
    <?php echo $form->label($model, 'content', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textArea($model, 'content', array(
      'rows' => 4, 
      'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]'
    )); ?>
  </div>

  <!-- Tags Field -->
  <div class="mb-4">
    <?php echo $form->label($model, 'tags', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textArea($model, 'tags', array(
      'rows' => 2, 
      'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]'
    )); ?>
  </div>

  <!-- Status Field -->
  <div class="mb-4">
    <?php echo $form->label($model, 'status', array('class' => 'block text-[#b08968] font-medium mb-1')); ?>
    <?php echo $form->textField($model, 'status', array(
      'class' => 'w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-[#b08968]'
    )); ?>
  </div>

  <!-- Hidden Fields for Admin Use -->
  <div class="hidden">
    <?php echo $form->textField($model, 'create_time'); ?>
    <?php echo $form->textField($model, 'update_time'); ?>
    <?php echo $form->textField($model, 'author_id'); ?>
  </div>

  <!-- Submit Button -->
  <div class="flex justify-end">
    <?php echo CHtml::submitButton('<i class="fas fa-search"></i> Search', array(
      'class' => 'bg-[#b08968] text-white px-6 py-2 rounded hover:bg-[#8c6a52] transition duration-300 flex items-center space-x-2'
    )); ?>
  </div>

  <?php $this->endWidget(); ?>

</div>
