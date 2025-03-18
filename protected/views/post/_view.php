<?php
/* @var $this PostController */
/* @var $data Post */
?>

<div class="bg-white p-6 rounded-lg shadow-md mb-6">

  <!-- Post ID and Title -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-2xl font-semibold text-[#b08968]">
      <i class="fas fa-file-alt mr-2"></i>
      <?php echo CHtml::encode($data->title); ?>
    </h2>
    <a href="<?php echo CHtml::normalizeUrl(array('view', 'id' => $data->id)); ?>" 
       class="text-[#8c6a52] hover:text-[#b08968]">
      <i class="fas fa-eye"></i> View Post
    </a>
  </div>

  <!-- Post Content -->
  <p class="text-gray-700 mb-4">
    <?php echo nl2br(CHtml::encode($data->content)); ?>
  </p>

  <!-- Tags -->
  <div class="mb-4">
    <span class="text-sm text-gray-600"><i class="fas fa-tags mr-1"></i> Tags:</span>
    <span class="text-sm text-[#b08968] font-medium"><?php echo CHtml::encode($data->tags); ?></span>
  </div>

  <!-- Status -->
<div class="mb-4">
    <span class="text-sm text-gray-600"><i class="fas fa-clipboard-check mr-1"></i> Status:</span>
    <span class="text-sm font-medium 
        <?php 
            echo ($data->status == 1) ? 'text-yellow-500' : 
                 (($data->status == 2) ? 'text-green-600' : 
                 (($data->status == 3) ? 'text-red-500' : 'text-gray-500'));
        ?>">
        <?php 
            $statusLabels = [
                1 => 'Draft',
                2 => 'Published',
                3 => 'Archived'
            ];
            echo isset($statusLabels[$data->status]) ? $statusLabels[$data->status] : 'Unknown Status';
        ?>
    </span>
</div>

  <!-- Timestamps -->
  <div class="text-sm text-gray-500">
    <i class="fas fa-clock mr-1"></i> Created: <?php echo date('F j, Y \a\t h:i a', $data->create_time); ?> |
    Updated: <?php echo date('F j, Y \a\t h:i a', $data->update_time); ?>
  </div>

</div>
