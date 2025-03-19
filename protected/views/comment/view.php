<?php
/* @var $this CommentController */
/* @var $model Comment */
?>

<div class="bg-white p-6 rounded-lg shadow-md mb-6">

  <!-- Comment Header -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold text-[#b08968]">
      <i class="fas fa-comment-alt mr-2"></i>
      Comment #<?php echo $model->id; ?>
    </h2>
    <?php echo CHtml::link(
    '<i class="fas fa-trash-alt text-red-500"></i> Delete',
    '#',
    array(
        'submit' => array('delete', 'id' => $model->id),
        'confirm' => 'Are you sure you want to delete this item?',
        'class' => 'text-red-500 hover:text-red-700',
    )
); ?>
  </div>

  <!-- Comment Content -->
  <p class="text-gray-700 mb-4">
    <i class="fas fa-quote-left mr-2"></i>
    <?php echo nl2br(CHtml::encode($model->content)); ?>
    <i class="fas fa-quote-right ml-2"></i>
  </p>

  <!-- Comment Metadata -->
  <div class="mb-4">
    <p class="text-sm text-gray-600">
      <i class="fas fa-user mr-1"></i> Author: 
      <span class="text-[#8c6a52] font-medium"><?php echo CHtml::encode($model->author); ?></span>
    </p>
    <p class="text-sm text-gray-600">
      <i class="fas fa-envelope mr-1"></i> Email: 
      <a href="mailto:<?php echo CHtml::encode($model->email); ?>" class="text-[#b08968] hover:underline">
        <?php echo CHtml::encode($model->email); ?>
      </a>
    </p>
    <p class="text-sm text-gray-600">
      <i class="fas fa-link mr-1"></i> URL: 
      <a href="<?php echo CHtml::encode($model->url); ?>" target="_blank" class="text-[#b08968] hover:underline">
        <?php echo CHtml::encode($model->url); ?>
      </a>
    </p>
    <p class="text-sm text-gray-600">
      <i class="fas fa-clock mr-1"></i> Posted on: 
      <?php echo date('F j, Y \a\t h:i a', $model->create_time); ?>
    </p>
    <p class="text-sm text-gray-600">
    <i class="fas fa-clipboard-check mr-1"></i> Status: 
    <span class="
        <?php 
            echo ($model->status == 1) ? 'text-yellow-500' : 
                 (($model->status == 2) ? 'text-green-600' : 'text-gray-500'); 
        ?> font-medium">
        <?php 
            $statusLabels = [
                1 => 'Pending Approval',
                2 => 'Approved'
            ];
            echo isset($statusLabels[$model->status]) ? $statusLabels[$model->status] : 'Unknown Status';
        ?>
    </span>
    </p>
    <p class="text-sm text-gray-600">
      <i class="fas fa-file-alt mr-1"></i> Post ID: 
      <?php echo CHtml::link($model->post_id, array('post/view', 'id' => $model->post_id), ['class' => 'text-[#b08968] hover:underline']); ?>
    </p>
  </div>

  <!-- Action Buttons -->
  <div class="flex space-x-4 mt-6">
    <a href="<?php echo CHtml::normalizeUrl(array('update', 'id' => $model->id)); ?>" 
       class="px-4 py-2 bg-[#b08968] text-white rounded-md hover:bg-[#8c6a52]">
      <i class="fas fa-edit"></i> Update
    </a>
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" 
       class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">
      <i class="fas fa-arrow-left"></i> Back to Comments
    </a>
  </div>

</div>
