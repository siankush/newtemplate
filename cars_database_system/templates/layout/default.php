<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
<?php echo $this->Html->meta('csrfToken', $this->request->getAttribute('csrfToken')); ?>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet"> -->
    <!--     Fonts and icons     -->

   <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

   
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
  
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="img/favicon.png">

    <?= $this->Html->css(['assets/nucleo-icons', 'assets/nucleo-svg','assets/material-dashboard','cake']) ?>

  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>



    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

     
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <!-- <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" rel="noopener" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" rel="noopener" href="https://api.cakephp.org/">API</a>
        </div>
    </nav> -->
    <main class="main">
        <div class="container-fluid p-0">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    <?= $this->Html->script('js/core/popper.min') ?>
    <?= $this->Html->script('js/core/bootstrap.min') ?>
    <?= $this->Html->script('js/core/bootstrap.bundle.min') ?>
    <?= $this->Html->script('js/plugins/perfect-scrollbar.min') ?>
    <?= $this->Html->script('js/plugins/smooth-scrollbar.min'); ?>
    <?= $this->Html->script('js/material-dashboard.min'); ?>
    <?= $this->Html->script('js/material-dashboard'); ?>

    <!-- <script src="../assets/js/core/popper.min.js"></script> -->
  <!-- <script src="../assets/js/core/bootstrap.min.js"></script> -->
  <!-- <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script> -->
  <!-- <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script> -->
    </footer>
</body>
</html>
