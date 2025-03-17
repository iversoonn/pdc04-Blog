<?php
/* @var $this PostController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs = array('Posts');
?>

<div style="font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto;">

    <h1 style="font-size: 28px; font-weight: bold; margin-bottom: 20px; color: #333;">
        <i class="fa fa-list" style="margin-right: 8px; color: #3498db;"></i> 
        Blog Posts
    </h1>

    <?php if (!empty($_GET['tag'])): ?>
        <h2 style="font-size: 20px; color: #27ae60; margin-bottom: 20px;">
            <i class="fa fa-tag" style="margin-right: 8px;"></i> 
            Posts Tagged with <i>"<?= CHtml::encode($_GET['tag']); ?>"</i>
        </h2>
    <?php endif; ?>

    <!-- Post List -->
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 20px;">
        <?php $this->widget('zii.widgets.CListView', array(
            'dataProvider' => $dataProvider,
            'itemView' => '_view',
            'template' => "{items}\n{pager}",
            'emptyText' => '<p style="color: #777; text-align: center;">No posts found.</p>',
        )); ?>
    </div>

</div>
