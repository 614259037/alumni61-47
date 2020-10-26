   <?php if ($this->session->userdata('chk') == TRUE) {
    ?>

       <nav class="navbar navbar-expand-lg navbar-light ">
           <a class="navbar-brand" href="<?php echo site_url(); ?>">Home</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item">

                       <a class="nav-link " href=""> <?php echo $this->session->userdata('cname'); ?></a>
                   </li>
                   <li class="nav-item">

                       <a class="nav-link " href=" <?php echo site_url('Control/show_edit') . "/edit?user_id=" . $this->session->userdata('p_id') . "" ?>">เเก้ไข</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link" <?php echo anchor('Control/logout', "Logout"); ?> </li> </ul> <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo site_url('Control/keyword') ?>">
                           <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                           <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                           </form>
           </div>
       </nav><?php
            } else {
                ?>
       <nav class="navbar navbar-expand-lg navbar-light ">
           <a class="navbar-brand" href="<?php echo site_url(); ?>">Home</a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-auto">
                   <li class="nav-item">
                       <a class="nav-link" href="<?php echo site_url('Control/login'); ?>/">Login</a>
                   </li>
                   <li class="nav-item">
                       <a class="nav-link " href="<?php echo site_url('Control/regis'); ?>/">Register</a>
                   </li>
               </ul>
               <form class="form-inline my-2 my-lg-0" method="post" action="<?php echo site_url('Control/keyword') ?>">
                   <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" name="search">
                   <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
               </form>
           </div>
       </nav>
   <?php
            }
