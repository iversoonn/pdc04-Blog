<?php
Yii::import('zii.widgets.CPortlet');

class TagCloud extends CPortlet
{
    public $title = '';
    public $maxTags = 20;

    protected function renderContent()
    {
        $tags = Tag::model()->findTagWeights($this->maxTags);

        if (empty($tags)) {
            echo "<p class='text-gray-500'>No tags available.</p>";
            return;
        }

        foreach ($tags as $tag => $data) {
            $postCount = Post::model()->count([
                'condition' => 'status = :status AND tags LIKE :tag',
                'params' => [':status' => Post::STATUS_PUBLISHED, ':tag' => "%$tag%"]
            ]);

            if ($postCount > 0) {
                echo CHtml::tag('span', [
                    'class' => 'tag inline-block px-2 py-1 bg-[#b08968] text-white rounded-lg m-1 text-sm',
                    'style' => "font-size:{$data['weight']}pt"
                ], CHtml::link(CHtml::encode($tag), ['post/index', 'tag' => $tag]));
            }
        }
    }
}
?>
