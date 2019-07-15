<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"> 
                <?=$titleNav;?>
            </a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="<?php echo site_url('main/profile'); ?>">
                        <i class="material-icons">person</i>
                        <p class="hidden-lg hidden-md">Profile</p>
                        <?php echo $this->session->userdata('user'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>