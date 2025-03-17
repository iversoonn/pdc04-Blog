<?php foreach ($comments as $comment) : ?>

<div class="bg-white shadow-md rounded-lg p-4 mb-4">

  <!-- Author and Timestamp -->
  <div class="flex justify-between items-center mb-2">
    <span class="text-[#b08968] font-semibold flex items-center space-x-2">
      <i class="fas fa-user-circle text-[#8c6a52]"></i>
      <span><?= $comment->authorLink; ?></span>
    </span>
    <span class="text-gray-500 text-sm"><?= date('F j, Y \a\t h:i a', $comment->create_time); ?></span>
  </div>

  <!-- Comment Content -->
  <div class="text-gray-800 leading-relaxed border-l-4 border-[#b08968] pl-4">
    <?= nl2br(CHtml::encode($comment->content)); ?>
  </div>

</div>

<?php endforeach; ?>
