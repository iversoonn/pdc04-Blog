<div class="flex justify-center items-center h-screen bg-gradient-to-r from-[#f0e6d2] to-[#b08968]">

  <div class="bg-white p-8 rounded-lg shadow-lg w-96">

    <h2 class="text-2xl font-semibold text-center text-[#b08968] mb-6">Login</h2>

    <p class="text-sm text-gray-600 mb-6 text-center">Please fill out the following form with your login credentials:</p>

    <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'login-form',
      'enableClientValidation'=>true,
      'clientOptions'=>array(
        'validateOnSubmit'=>true,
      ),
    )); ?>

    <p class="text-sm text-gray-500 mb-4">Fields with <span class="text-red-500">*</span> are required.</p>

    <!-- Username Field -->
    <div class="mb-6">
      <?php echo $form->labelEx($model,'username', array('class' => 'block text-gray-700 mb-2')); ?>
      <?php echo $form->textField($model,'username', array('class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
      <?php echo $form->error($model,'username', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Password Field -->
    <div class="mb-6">
      <?php echo $form->labelEx($model,'password', array('class' => 'block text-gray-700 mb-2')); ?>
      <?php echo $form->passwordField($model,'password', array('class' => 'w-full p-3 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
      <?php echo $form->error($model,'password', array('class' => 'text-red-500 text-sm')); ?>
      <p class="text-sm text-gray-500 mt-2">Hint: You may login with <kbd>demo</kbd>/<kbd>demo</kbd> or <kbd>admin</kbd>/<kbd>admin</kbd>.</p>
    </div>

    <!-- Remember Me Checkbox -->
    <div class="flex items-center mb-6">
      <?php echo $form->checkBox($model,'rememberMe', array('class' => 'mr-2')); ?>
      <?php echo $form->label($model,'rememberMe', array('class' => 'text-gray-700')); ?>
      <?php echo $form->error($model,'rememberMe', array('class' => 'text-red-500 text-sm')); ?>
    </div>

    <!-- Login Button -->
    <div class="text-center">
      <?php echo CHtml::submitButton('Login', array(
        'class' => 'bg-[#b08968] text-white px-6 py-3 rounded-lg hover:bg-[#8e7354] transition duration-300 ease-in-out w-full'
      )); ?>
    </div>

    <?php $this->endWidget(); ?>

  </div>

</div>
