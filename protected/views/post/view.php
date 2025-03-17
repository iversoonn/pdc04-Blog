<?php
/* @var $this PostController */
/* @var $model Post */

$this->breadcrumbs = array(
    'Posts' => array('index'),
    $model->title,
);
?>

<div style="font-family: Arial, sans-serif; max-width: 800px; margin: 20px auto; padding: 20px; background-color: #fff; border-radius: 12px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">

    <!-- Post Header -->
    <h1 style="font-size: 24px; font-weight: bold; margin-bottom: 10px; color: #333;">
        <i class="fa fa-file-alt" style="margin-right: 8px; color: #f39c12;"></i>
        <?= CHtml::encode($model->title); ?>
    </h1>

    <!-- Metadata -->
    <p style="font-size: 14px; color: #777; margin-bottom: 20px;">
        <i class="fa fa-user"></i> Author ID: <?= $model->author_id; ?> |
        <i class="fa fa-clock"></i> Created: <?= date('F j, Y \a\t h:i A', $model->create_time); ?> |
        <i class="fa fa-sync-alt"></i> Updated: <?= date('F j, Y \a\t h:i A', $model->update_time); ?>
    </p>

    <!-- Post Content -->
    <div style="font-size: 16px; line-height: 1.6; margin-bottom: 20px; color: #555;">
        <?= nl2br(CHtml::encode($model->content)); ?>
    </div>

    <!-- Tags -->
    <div style="margin-bottom: 20px;">
        <i class="fa fa-tags" style="margin-right: 8px; color: #27ae60;"></i>
        <?= CHtml::encode($model->tags); ?>
    </div>

    <!-- Post Status -->
<p style="font-size: 14px; color: 
    <?php 
        if ($model->status == 2) {
            echo '#27ae60'; // Green for Published
        } elseif ($model->status == 3) {
            echo '#f39c12'; // Orange for Archived
        } else {
            echo '#e74c3c'; // Red for Unpublished
        }
    ?>">
    <i class="fa 
        <?php 
            if ($model->status == 2) {
                echo 'fa-check-circle'; // Icon for Published
            } elseif ($model->status == 3) {
                echo 'fa-archive'; // Icon for Archived
            } else {
                echo 'fa-times-circle'; // Icon for Unpublished
            }
        ?>"></i>
    <?php 
        if ($model->status == 2) {
            echo 'Published';
        } elseif ($model->status == 3) {
            echo 'Archived';
        } else {
            echo 'Draft';
        }
    ?>
</p>


    <!-- Comments Section -->
    <div id="comments" style="margin-top: 30px;">
        <?php if ($model->commentCount >= 1): ?>
            <h3 style="margin-bottom: 10px; color: #333;">
                <i class="fa fa-comments" style="margin-right: 8px; color: #3498db;"></i>
                <?= $model->commentCount; ?> Comment(s)
            </h3>
            <?php $this->renderPartial('_comments', array('post' => $model, 'comments' => $model->comments)); ?>
        <?php endif; ?>

        <!-- Leave a Comment -->
        <h3 style="margin-top: 20px; color: #333;">Leave a Comment</h3>
        <?php if (Yii::app()->user->hasFlash('commentSubmitted')): ?>
            <div style="padding: 10px; background-color: #d4edda; color: #155724; border-radius: 8px; margin-bottom: 20px;">
                <?= Yii::app()->user->getFlash('commentSubmitted'); ?>
            </div>
        <?php else: ?>
            <?php $this->renderPartial('/comment/_form', array('model' => $comment)); ?>
        <?php endif; ?>
    </div>

</div>
