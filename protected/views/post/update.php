<?php
/* @var $this PostController */
/* @var $model Post */
?>

<div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">

  <!-- Breadcrumbs -->
  <?php if (isset($this->breadcrumbs)): ?>
    <nav class="text-sm text-[#777] mb-6">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs)); ?>
    </nav>
  <?php endif; ?>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold text-[#b08968] mb-6">Update Post #<?php echo $model->id; ?></h1>

  <!-- Action Menu -->
  <div class="flex space-x-6 mb-8 text-[#b08968]">
    <a href="<?php echo Yii::app()->createUrl('post/index'); ?>" 
       class="flex items-center space-x-2 hover:text-[#8c6a52] transition duration-300">
      <i class="fas fa-list"></i>
      <span>List Post</span>
    </a>

    <a href="<?php echo Yii::app()->createUrl('post/create'); ?>" 
       class="flex items-center space-x-2 hover:text-[#8c6a52] transition duration-300">
      <i class="fas fa-plus-circle"></i>
      <span>Create Post</span>
    </a>

    <a href="<?php echo Yii::app()->createUrl('post/view', array('id' => $model->id)); ?>" 
       class="flex items-center space-x-2 hover:text-[#8c6a52] transition duration-300">
      <i class="fas fa-eye"></i>
      <span>View Post</span>
    </a>

    <a href="<?php echo Yii::app()->createUrl('post/admin'); ?>" 
       class="flex items-center space-x-2 hover:text-[#8c6a52] transition duration-300">
      <i class="fas fa-cogs"></i>
      <span>Manage Post</span>
    </a>
  </div>

  <!-- Form Section -->
  <div>
    <?php $this->renderPartial('_form', array('model' => $model)); ?>
  </div>

</div>
