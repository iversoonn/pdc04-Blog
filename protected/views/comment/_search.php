<div class="bg-white p-6 rounded-lg shadow-md">

  <?php $form = $this->beginWidget('CActiveForm', array(
    'action' => Yii::app()->createUrl($this->route),
    'method' => 'get',
  )); ?>

  <h2 class="text-2xl font-semibold text-[#b08968] mb-6">Search Comments</h2>

  <div class="grid grid-cols-2 gap-6">

    <!-- ID Field -->
    <div>
      <?php echo $form->label($model, 'id', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'id', array('class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Content Field -->
    <div>
      <?php echo $form->label($model, 'content', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textArea($model, 'content', array('rows' => 4, 'class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Status Field -->
    <div>
      <?php echo $form->label($model, 'status', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'status', array('class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Create Time -->
    <div>
      <?php echo $form->label($model, 'create_time', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'create_time', array('class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Author -->
    <div>
      <?php echo $form->label($model, 'author', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'author', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Email -->
    <div>
      <?php echo $form->label($model, 'email', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- URL -->
    <div>
      <?php echo $form->label($model, 'url', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'url', array('size' => 60, 'maxlength' => 128, 'class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

    <!-- Post ID -->
    <div>
      <?php echo $form->label($model, 'post_id', array('class' => 'block text-gray-700 font-medium mb-2')); ?>
      <?php echo $form->textField($model, 'post_id', array('class' => 'w-full p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-[#b08968]')); ?>
    </div>

  </div>

  <!-- Search Button -->
  <div class="mt-6 text-center">
    <?php echo CHtml::submitButton('Search', array('class' => 'bg-[#b08968] text-white px-6 py-2 rounded-lg hover:bg-[#8e7354] transition ease-in-out')); ?>
  </div>

  <?php $this->endWidget(); ?>

</div>
