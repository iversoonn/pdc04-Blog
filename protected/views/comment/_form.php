<div class="bg-white p-8 rounded-lg shadow-md max-w-2xl mx-auto">

  <?php $form = $this->beginWidget('CActiveForm', array(
    'id' => 'comment-form',
    'enableAjaxValidation' => true,
  )); ?>

  <h2 class="text-2xl font-semibold text-[#b08968] mb-6">Comment Form</h2>

  <p class="text-sm text-gray-600 mb-4">Fields with <span class="text-red-500">*</span> are required.</p>

  <?php echo $form->errorSummary($model, null, null, array('class' => 'text-red-500 mb-4')); ?>

  <!-- Content Field -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'content', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textArea($model, 'content', array('rows' => 4, 'class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'content', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Status Field -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'status', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'status', array('class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'status', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Create Time -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'create_time', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'create_time', array('class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'create_time', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Author -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'author', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'author', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'author', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Email -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'email', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'email', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- URL -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'url', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'url', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Post ID -->
  <div class="mb-6">
    <?php echo $form->labelEx($model, 'post_id', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
    <?php echo $form->textField($model, 'post_id', array('class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    <?php echo $form->error($model, 'post_id', array('class' => 'text-red-500 text-sm')); ?>
  </div>

  <!-- Submit Button -->
  <div class="text-center">
    <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array(
      'class' => 'bg-[#b08968] text-white px-6 py-3 rounded-lg hover:bg-[#8e7354] transition duration-300 ease-in-out'
    )); ?>
  </div>

  <?php $this->endWidget(); ?>

</div>
