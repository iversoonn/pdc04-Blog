<div class="bg-white p-8 rounded-lg shadow-md">

  <!-- Header Section -->
  <h2 class="text-2xl font-semibold text-[#b08968] mb-6 flex items-center">
    <i class="fas fa-edit mr-3"></i> Update Comment #<?php echo $model->id; ?>
  </h2>

  <!-- Comment Form -->
  <?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'comment-form',
    'enableAjaxValidation'=>false,
  )); ?>

  <!-- Validation Error Section -->
  <?php if($model->hasErrors()): ?>
    <div class="mb-4 text-red-600">
      <?php echo $form->errorSummary($model); ?>
    </div>
  <?php endif; ?>

  <!-- Comment Content Field -->
  <div class="mb-6">
    <?php echo $form->labelEx($model,'content', ['class' => 'block text-gray-700 font-medium mb-2']); ?>
    <?php echo $form->textArea($model,'content', ['class' => 'w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#b08968]', 'rows'=>6]); ?>
    <?php echo $form->error($model,'content', ['class' => 'text-red-500 text-sm mt-2']); ?>
  </div>

  <!-- Status Dropdown -->
  <div class="mb-6">
      <?php echo $form->labelEx($model, 'status', ['class' => 'block text-gray-700 font-medium mb-2']); ?>
      <?php echo $form->dropDownList($model, 'status', [
          1 => 'Pending Approval',
          2 => 'Approved'
      ], ['class' => 'w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#b08968] bg-white']); ?>
      <?php echo $form->error($model, 'status', ['class' => 'text-red-500 text-sm mt-2']); ?>
  </div>

  <!-- Author Field -->
  <div class="mb-6">
    <?php echo $form->labelEx($model,'author', ['class' => 'block text-gray-700 font-medium mb-2']); ?>
    <?php echo $form->textField($model,'author', ['class' => 'w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#b08968]']); ?>
    <?php echo $form->error($model,'author', ['class' => 'text-red-500 text-sm mt-2']); ?>
  </div>

  <!-- Email Field -->
  <div class="mb-6">
    <?php echo $form->labelEx($model,'email', ['class' => 'block text-gray-700 font-medium mb-2']); ?>
    <?php echo $form->textField($model,'email', ['class' => 'w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#b08968]']); ?>
    <?php echo $form->error($model,'email', ['class' => 'text-red-500 text-sm mt-2']); ?>
  </div>

  <!-- URL Field -->
  <!-- <div class="mb-6">
    <?php echo $form->labelEx($model,'url', ['class' => 'block text-gray-700 font-medium mb-2']); ?>
    <?php echo $form->textField($model,'url', ['class' => 'w-full p-3 border rounded-md focus:outline-none focus:ring-2 focus:ring-[#b08968]']); ?>
    <?php echo $form->error($model,'url', ['class' => 'text-red-500 text-sm mt-2']); ?>
  </div> -->

  <!-- Submit Button -->
  <div class="flex justify-between items-center">
    <button type="submit" class="px-6 py-2 bg-[#b08968] text-white rounded-md hover:bg-[#8c6a52]">
      <i class="fas fa-save mr-2"></i> Save Changes
    </button>
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" class="text-gray-500 hover:text-gray-700">
      <i class="fas fa-arrow-left"></i> Back to Comments
    </a>
  </div>

  <?php $this->endWidget(); ?>
</div>
