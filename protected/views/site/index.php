<div class="min-h-screen bg-gradient-to-r from-[#f0e6d2] to-[#b08968] flex items-center justify-center">

  <div class="bg-white p-10 rounded-lg shadow-lg max-w-3xl text-center">

    <h1 class="text-3xl font-bold text-[#b08968] mb-6">
      Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i>
    </h1>

    <p class="text-gray-700 mb-6">
      🎉 Congratulations! You have successfully created your Yii application.
    </p>

    <p class="text-gray-600 mb-4">
      You may change the content of this page by modifying the following two files:
    </p>

    <ul class="list-disc text-left text-gray-600 mb-6 ml-8">
      <li>View file: <code class="text-sm text-[#b08968]"><?php echo __FILE__; ?></code></li>
      <li>Layout file: <code class="text-sm text-[#b08968]"><?php echo $this->getLayoutFile('main'); ?></code></li>
    </ul>

    <p class="text-gray-600 mb-6">
      For more details on how to further develop this application, please read
      the <a href="https://www.yiiframework.com/doc/" class="text-[#b08968] underline">documentation</a>.
      Feel free to ask in the <a href="https://www.yiiframework.com/forum/" class="text-[#b08968] underline">forum</a>,
      should you have any questions.
    </p>

    <a href="https://www.yiiframework.com" class="px-6 py-3 bg-[#b08968] text-white rounded-lg hover:bg-[#8e7354] transition duration-300">
      Explore Yii Framework
    </a>

  </div>

</div>
