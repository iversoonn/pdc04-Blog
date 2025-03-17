<div class="bg-white p-8 rounded-lg shadow-md">

  <!-- Header Section -->
  <h2 class="text-2xl font-semibold text-[#b08968] mb-6 flex items-center">
    <i class="fas fa-comments mr-3"></i> Comments
  </h2>

  <!-- Action Buttons -->
  <div class="flex justify-between mb-6">
    <a href="<?php echo CHtml::normalizeUrl(array('create')); ?>" class="px-4 py-2 bg-[#b08968] text-white rounded-md hover:bg-[#00000] flex items-center">
      <i class="fas fa-plus mr-2"></i> Create Comment
    </a>
    <a href="<?php echo CHtml::normalizeUrl(array('admin')); ?>" class="text-gray-600 hover:text-gray-800 flex items-center">
      <i class="fas fa-cogs mr-2"></i> Manage Comments
    </a>
  </div>

  <!-- Comment List View -->
  <div class="space-y-4">
    <?php $this->widget('zii.widgets.CListView', array(
      'dataProvider' => $dataProvider,
      'itemView' => '_view',
      'summaryText' => '<span class="text-gray-600">Showing {start}-{end} of {count} comments</span>',
      'pager' => array(
        'header' => '',
        'htmlOptions' => array('class' => 'flex justify-center mt-4 space-x-2'),
        'selectedPageCssClass' => 'bg-[#b08968] text-white px-3 py-1 rounded-md',
        'hiddenPageCssClass' => 'hidden',
        'internalPageCssClass' => 'px-3 py-1 text-gray-600 hover:bg-gray-100 rounded-md',
      ),
    )); ?>
  </div>

</div>
