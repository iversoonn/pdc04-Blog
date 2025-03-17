<div class="bg-white p-6 rounded-lg shadow-md mb-4">

  <!-- Comment Header -->
  <div class="flex justify-between items-center mb-4">
    <h2 class="text-xl font-semibold text-[#b08968] flex items-center">
      <i class="fas fa-comment-dots mr-3"></i> Comment #<?php echo CHtml::encode($data->id); ?>
    </h2>
    <a href="<?php echo CHtml::normalizeUrl(array('view', 'id' => $data->id)); ?>" 
       class="text-sm text-gray-500 hover:text-[#b08968]">
      View Details
    </a>
  </div>

  <!-- Comment Content -->
  <p class="text-gray-800 mb-4">
    <?php echo nl2br(CHtml::encode($data->content)); ?>
  </p>

  <!-- Comment Meta Info -->
  <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
    <div>
      <span class="font-medium">Status:</span> 
      <span class="text-gray-800"><?php echo CHtml::encode($data->status); ?></span>
    </div>
    <div>
      <span class="font-medium">Created:</span> 
      <span class="text-gray-800"><?php echo date('F j, Y \a\t h:i A', $data->create_time); ?></span>
    </div>
    <div>
      <span class="font-medium">Author:</span> 
      <span class="text-gray-800"><?php echo CHtml::encode($data->author); ?></span>
    </div>
    <div>
      <span class="font-medium">Email:</span> 
      <span class="text-gray-800"><?php echo CHtml::encode($data->email); ?></span>
    </div>
    <?php if (!empty($data->url)) : ?>
      <div class="col-span-2">
        <span class="font-medium">URL:</span>
        <a href="<?php echo CHtml::encode($data->url); ?>" target="_blank" class="text-[#b08968] hover:underline">
          <?php echo CHtml::encode($data->url); ?>
        </a>
      </div>
    <?php endif; ?>
  </div>

</div>
