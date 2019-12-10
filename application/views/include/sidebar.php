<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <span class="brand-text font-weight-light">Company Profile PKK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex"> 
            <div class="image">
                <img src="<?php echo base_url('assets/img/team/man1.png'); ?>" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?php echo $this->session->userdata('nama'); ?></a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="<?=site_url('admincontroller')?>" class="nav-link <?=($this->uri->segment(1)=='admincontroller')?'active':'' ?>">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?=site_url('event')?>" class="nav-link <?=($this->uri->segment(1)=='event')?'active':'' ?>">
                        <i class="nav-icon fas fa-calendar-alt"></i>
                        <p>Kalender Acara</p>
                    </a>
                </li>
                <li class="nav-item has-treeview <?php if ($this->uri->segment(2)=="pengurus"){echo "menu-open";}elseif($this->uri->segment(2)=="berita"){echo "menu-open";}elseif($this->uri->segment(2)=="settinghome"){echo "menu-open";} ?>">
                    <a href="#" class="nav-link <?php if ($this->uri->segment(2)=="pengurus"){echo "active";}elseif($this->uri->segment(2)=="berita"){echo "active";}elseif($this->uri->segment(2)=="settinghome"){echo "active";} ?>">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                            Settings
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="<?=site_url('admincontroller/berita');?>" class="nav-link <?php if($this->uri->segment(2)=="berita"){echo "active";}?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Berita</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('admincontroller/pengurus');?>" class="nav-link <?php if($this->uri->segment(2)=="pengurus"){echo "active";}?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Pengurus</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?=site_url('admincontroller/settinghome');?>" class="nav-link <?php if($this->uri->segment(2)=="settinghome"){echo "active";}?>">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Home</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item <?=($this->uri->segment(2)=='')?'active':'' ?>">
                    <a href="<?= site_url('admincontroller/keluar') ?>" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Keluar</p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>