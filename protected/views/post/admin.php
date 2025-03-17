<div class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">

  <!-- Breadcrumbs -->
  <?php if (isset($this->breadcrumbs)): ?>
    <nav class="text-sm text-[#777] mb-6">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs)); ?>
    </nav>
  <?php endif; ?>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold text-[#b08968] mb-6">Manage Posts</h1>

  <!-- Action Buttons -->
  <div class="flex space-x-6 mb-6 text-[#b08968]">
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
  </div>

  <!-- Search Section -->
  <p class="text-sm text-[#555] mb-4">
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>, or <b>=</b>)
    at the beginning of each of your search values to specify how the comparison should be done.
  </p>

  <button class="search-button bg-[#b08968] text-white px-4 py-2 rounded hover:bg-[#8c6a52] mb-4">
    Advanced Search
  </button>

  <div class="search-form hidden mb-6">
    <?php $this->renderPartial('_search', array('model' => $model)); ?>
  </div>

  <!-- Grid View -->
  <div class="overflow-x-auto">
    <?php $this->widget('zii.widgets.grid.CGridView', array(
      'itemsCssClass' => 'min-w-full table-auto border-collapse border border-gray-200 text-sm',
      'dataProvider' => $model->search(),
      'filter' => $model,
      'columns' => array(
        array(
          'name' => 'title',
          'type' => 'raw',
          'value' => 'CHtml::link(CHtml::encode($data->title), $data->url)',
          'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
          'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
        ),
        array(
          'name' => 'status',
          'value' => 'Lookup::item("PostStatus", $data->status)',
          'filter' => Lookup::items('PostStatus'),
          'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
          'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
        ),
        array(
          'name' => 'create_time',
          'type' => 'datetime',
          'filter' => false,
          'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
          'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
        ),
        array(
          'class' => 'CButtonColumn',
          'header' => 'Actions',
          'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
          'htmlOptions' => ['class' => 'p-3 border-b border-gray-200 text-center'],
          'template' => '{view} {update} {delete}',
          'buttons' => array(
            'view' => array(
              'label' => '<i class="fas fa-eye text-blue-500"></i>',
              'options' => array('title' => 'View'),
              'imageUrl' => false,
            ),
            'update' => array(
              'label' => '<i class="fas fa-edit text-green-500"></i>',
              'options' => array('title' => 'Edit'),
              'imageUrl' => false,
            ),
            'delete' => array(
              'label' => '<i class="fas fa-trash-alt text-red-500"></i>',
             'options' => array('title' => 'Delete'),
              'imageUrl' => false,
            ),
          ),
        ),
      ),
    )); ?>
  </div>

</div>

<script>
  document.querySelector('.search-button').addEventListener('click', function() {
    document.querySelector('.search-form').classList.toggle('hidden');
  });
</script>
