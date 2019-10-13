<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Integrasi Bootstap Dengan CodeIgniter 3</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" media="all" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
    <script src="<?php echo base_url()?>assets/css/bootstrap.min.js" type="text/javascript"></script>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="<?php echo base_url('/')?>">Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item <?php if ($menu_active == 'home'){ echo 'active';} ?>">
                    <a class="nav-link" href="<?php echo base_url('home');?>">Home</a>
                </li>
                <li class="nav-item <?php if ($menu_active == 'about'){ echo 'active';} ?>">
                    <a class="nav-link" href="<?php echo base_url('about');?>">About</a>
                </li>
                <li class="nav-item <?php if ($menu_active == 'contact'){ echo 'active';} ?>">
                    <a class="nav-link" href="<?php echo base_url('contact');?>">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <br><br><br>
 
 
    <!-- INI ADALAH TAMPILAN MENU UTAMA -->
    <div class="container">
        <div class="jumbotron">
            <h4><?php echo ucfirst($menu_active); ?></h4>
            <h1>Integrasi Bootstap Dengan CodeIgniter 3</h1>
            <h5>Ini adalah halaman <?php echo ucfirst($menu_active); ?></h5>
            <br>
            
            <div id="body">
                <p>The page you are looking at is being generated dynamically by CodeIgniter.</p>

                <p>If you would like to edit this page you'll find it located at:</p>
                <code>application/views/v_<?php echo $menu_active; ?>.php</code>

                <p>The corresponding controller for this page is found at:</p>
                <code>application/controllers/Bootstrap.php</code>

                <p>If you are exploring CodeIgniter for the very first time, you should start by reading the <a href="user_guide/">User Guide</a>.</p>
            </div>

            <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'CodeIgniter Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
        </div>
 
    </div>
</body>
</html>
