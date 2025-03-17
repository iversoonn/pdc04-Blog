<div class="bg-white p-8 rounded-lg shadow-md">

  <!-- Page Header -->
  <h2 class="text-2xl font-semibold text-[#b08968] mb-6 flex items-center">
    <i class="fas fa-edit mr-3"></i> Create Comment
  </h2>

  <!-- Breadcrumbs -->
  <nav class="text-sm text-gray-600 mb-4">
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" class="hover:text-[#b08968]">Comments</a>
    <span class="mx-2">/</span>
    <span class="text-gray-500">Create</span>
  </nav>

  <!-- Form Section -->
  <div class="space-y-6">
    <?php $this->renderPartial('_form', array('model' => $model)); ?>
  </div>

  <!-- Navigation Links -->
  <div class="flex justify-between mt-6 text-gray-600">
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" class="flex items-center hover:text-[#b08968]">
      <i class="fas fa-list mr-2"></i> List Comments
    </a>
    <a href="<?php echo CHtml::normalizeUrl(array('admin')); ?>" class="flex items-center hover:text-[#b08968]">
      <i class="fas fa-cogs mr-2"></i> Manage Comments
    </a>
  </div>

</div>
