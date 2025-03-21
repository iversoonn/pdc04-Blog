<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo CHtml::encode($this->pageTitle); ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    input[type="text"],
    input[type="email"],
    input[type="password"],
    textarea {
      background-color: transparent;
      border: none;
      border-bottom: 1px solid #ccc;
      outline: none;
      width: 100%;
      color: #333;
      padding: 8px 0;
      transition: border-color 0.3s;
    }

    input:focus,
    textarea:focus {
      border-bottom-color: #b08968;
    }

    button {
      background-color: #b08968;
      color: white;
      padding: 8px 16px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #8c6a52;
    }

    a {
      color: #b08968;
      text-decoration: none;
      transition: color 0.3s;
    }

    a:hover {
      text-decoration: underline;
      color: #8c6a52;
    }
  </style>
</head>

<body class="bg-[#f5f5f5] text-[#333] font-sans">

  <!-- Header with Gradient -->
  <header class="bg-gradient-to-r from-[#b08968] to-[#8c6a52] text-white py-4 shadow-md">
    <div class="container mx-auto flex justify-between items-center">
      <h1 class="text-2xl font-bold"><?php echo CHtml::encode(Yii::app()->name); ?></h1>
      <nav>
        <?php $this->widget('zii.widgets.CMenu', array(
          'items' => array(
            array('label' => '<i class="fas fa-home"></i> Home', 'url' => array('/post/index')),
            // array('label' => '<i class="fas fa-info-circle"></i> About', 'url' => array('/site/page', 'view' => 'about')),
            array('label' => '<i class="fas fa-envelope"></i> Contact', 'url' => array('/site/contact')),
            array('label' => '<i class="fas fa-sign-in-alt"></i> Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
            array('label' => '<i class="fas fa-sign-out-alt"></i> Logout (' . Yii::app()->user->name . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
          ),
          'encodeLabel' => false,
          'htmlOptions' => array('class' => 'flex space-x-6')
        )); ?>
      </nav>
    </div>
  </header>

  <!-- Breadcrumbs -->
  <?php if (isset($this->breadcrumbs)): ?>
    <div class="container mx-auto my-4 text-sm text-[#777]">
      <?php $this->widget('zii.widgets.CBreadcrumbs', array('links' => $this->breadcrumbs)); ?>
    </div>
  <?php endif; ?>

  <!-- Main Content -->
  <main class="container mx-auto my-8 p-6 bg-white rounded-lg shadow-md">
    <?php echo $content; ?>
  </main>

  <!-- Footer with Gradient -->
  <footer class="bg-gradient-to-r from-[#b08968] to-[#8c6a52] text-white text-center py-4 mt-10">
    <p>&copy; <?php echo date('Y'); ?> by My Company. All Rights Reserved.</p>
    <p><?php echo Yii::powered(); ?></p>
  </footer>

</body>

</html>
