<div class="min-h-screen bg-gradient-to-r from-[#f0e6d2] to-[#b08968] flex items-center justify-center p-6">

  <div class="bg-white p-8 rounded-lg shadow-lg max-w-2xl w-full">

    <h1 class="text-3xl font-bold text-[#b08968] mb-6">Contact Us</h1>

    <?php if(Yii::app()->user->hasFlash('contact')): ?>
      <div class="bg-green-100 text-green-700 p-4 mb-6 rounded">
        <?php echo Yii::app()->user->getFlash('contact'); ?>
      </div>
    <?php else: ?>

    <p class="text-gray-600 mb-6">
      If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
    </p>

    <div class="space-y-6">

      <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'contact-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array('validateOnSubmit'=>true),
      )); ?>

      <p class="text-sm text-gray-500 mb-4">Fields with <span class="text-red-500">*</span> are required.</p>

      <?php echo $form->errorSummary($model, '', '', ['class' => 'bg-red-100 text-red-600 p-4 rounded mb-6']); ?>

      <div class="space-y-4">

        <div>
          <?php echo $form->labelEx($model,'name', ['class' => 'block text-sm font-medium text-gray-700']); ?>
          <?php echo $form->textField($model,'name', ['class' => 'w-full border rounded p-2']); ?>
          <?php echo $form->error($model,'name', ['class' => 'text-red-500 text-sm']); ?>
        </div>

        <div>
          <?php echo $form->labelEx($model,'email', ['class' => 'block text-sm font-medium text-gray-700']); ?>
          <?php echo $form->textField($model,'email', ['class' => 'w-full border rounded p-2']); ?>
          <?php echo $form->error($model,'email', ['class' => 'text-red-500 text-sm']); ?>
        </div>

        <div>
          <?php echo $form->labelEx($model,'subject', ['class' => 'block text-sm font-medium text-gray-700']); ?>
          <?php echo $form->textField($model,'subject', ['class' => 'w-full border rounded p-2']); ?>
          <?php echo $form->error($model,'subject', ['class' => 'text-red-500 text-sm']); ?>
        </div>

        <div>
          <?php echo $form->labelEx($model,'body', ['class' => 'block text-sm font-medium text-gray-700']); ?>
          <?php echo $form->textArea($model,'body', ['rows'=>6, 'class' => 'w-full border rounded p-2']); ?>
          <?php echo $form->error($model,'body', ['class' => 'text-red-500 text-sm']); ?>
        </div>

        <?php if(CCaptcha::checkRequirements()): ?>
        <div>
          <?php echo $form->labelEx($model,'verifyCode', ['class' => 'block text-sm font-medium text-gray-700']); ?>
          <div class="flex items-center space-x-4">
            <?php $this->widget('CCaptcha'); ?>
            <?php echo $form->textField($model,'verifyCode', ['class' => 'border rounded p-2']); ?>
          </div>
          <p class="text-sm text-gray-500 mt-2">Please enter the letters as shown in the image. Letters are not case-sensitive.</p>
          <?php echo $form->error($model,'verifyCode', ['class' => 'text-red-500 text-sm']); ?>
        </div>
        <?php endif; ?>

        <div>
          <?php echo CHtml::submitButton('Submit', ['class' => 'bg-[#b08968] text-white px-6 py-2 rounded hover:bg-[#8e7354] transition']); ?>
        </div>

      </div>

      <?php $this->endWidget(); ?>
    </div>
    <?php endif; ?>
  </div>
</div>
