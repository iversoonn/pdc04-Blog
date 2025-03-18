<div class="bg-white p-8 rounded-lg shadow-md">

  <!-- Page Header -->
  <h2 class="text-2xl font-semibold text-[#b08968] mb-6 flex items-center">
    <i class="fas fa-comments mr-3"></i> Manage Comments
  </h2>

  <!-- Breadcrumb Navigation -->
  <nav class="text-sm text-gray-600 mb-4">
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" class="hover:text-[#b08968]">Comments</a>
    <span class="mx-2">/</span>
    <span class="text-gray-500">Manage</span>
  </nav>

  <!-- Filter & Advanced Search -->
  
  <button class="search-button bg-[#b08968] text-white py-2 px-4 rounded-md hover:bg-[#8b6b54] transition mb-4">
    <i class="fas fa-search mr-2"></i> Advanced Search
  </button>

  <div class="search-form hidden mb-6">
    <?php $this->renderPartial('_search', array('model' => $model)); ?>
  </div>

  <!-- Comments Grid -->
<div class="overflow-x-auto">
  <?php $this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'comment-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'itemsCssClass' => 'min-w-full table-auto border-collapse border border-gray-200 text-sm',
    'htmlOptions' => array('class' => 'mt-4'),
    'columns' => array(
      array(
        'name' => 'id',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'name' => 'content',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'name' => 'status',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'name' => 'create_time',
        'type' => 'datetime',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'name' => 'author',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'name' => 'email',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200'],
      ),
      array(
        'class' => 'CButtonColumn',
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
        'header' => 'Actions',
        'headerHtmlOptions' => ['class' => 'bg-[#b08968] text-white p-3'],
        'htmlOptions' => ['class' => 'p-3 border-b border-gray-200 text-center'],
      ),
    ),
  )); ?>
</div>


  <!-- Navigation Links -->
  <div class="flex justify-between mt-6 text-gray-600">
    <a href="<?php echo CHtml::normalizeUrl(array('index')); ?>" class="flex items-center hover:text-[#b08968]">
      <i class="fas fa-list mr-2"></i> List Comments
    </a>
    <a href="<?php echo CHtml::normalizeUrl(array('create')); ?>" class="flex items-center hover:text-[#b08968]">
      <i class="fas fa-plus-circle mr-2"></i> Create Comment
    </a>
  </div>

</div>
