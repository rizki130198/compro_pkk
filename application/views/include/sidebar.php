<style type="text/css">
	.caret {
		margin-top: 13px;
		position: absolute;
		right: 18px;
	} 
	.sidebar-mini{
		text-transform: uppercase;
		width: 30px;
		margin-right: 15px;
		text-align: center;
		letter-spacing: 1px;
		position: relative;
		float: left;
		display: inherit;
	}
	.sidebar-normal{
		margin: 0;
		position: relative;
		transform: translateX(0px);
		opacity: 1;
		white-space: nowrap;
		display: block;
	}
	.nav-drop li a{
		padding-left: 15px !important;
	}
	.nav-drop{
		margin-top: 10px !important;
		/*background-color: #f1f1f1;*/
	}
	.active-drop a.menu-act{
		background-color: rgba(200, 200, 200, 0.2);
		border-radius: 3px;
	}
</style> 
<div class="sidebar" data-color="purple" data-image="<?php echo base_url('admin/img/sidebar-3.jpg'); ?>"> 
	<div class="logo">
        <a href="<?php echo site_url('cp/dashboard'); ?>" class="simple-text">
            <center><img src="<?php echo base_url('assets/img/tim_80x80.png'); ?>" alt="logo" class="img-responsive" style="height:40px;"></center>
        </a>
    </div>
	<div class="sidebar-wrapper">
		<ul class="nav">
			<li class="nav-item <?=($this->uri->segment(2)=='')?'active':'' ?>  ">
				<a class="nav-link" href="<?=site_url('admincontroller')?>">
					<i class="material-icons">dashboard</i>
					<p>Dashboard</p>
				</a>
			</li>
			<li class="<?php if ($this->uri->segment(2)=="daf_pengguna"){echo "active-drop";}elseif($this->uri->segment(2)=="pengguna"){echo "active-drop";} ?>">
                <a href="#" data-toggle="collapse" data-target="#pengguna" class="collapsed menu-act">
                    <i class="material-icons">people</i> 
                    <p>Pengguna <b class="caret pull-right"></b></p> 
                </a>
                <div class="<?php if ($this->uri->segment(2)=="daftar"){echo "active-drop";}elseif($this->uri->segment(2)=="data_pengguna"){echo "active-drop";}else{echo "collapse";} ?>" id="pengguna">
                    <ul class="nav nav-drop">
                        <li class="<?php if($this->uri->segment(2)=="daf_pengguna"){echo "active";}?>">
                            <a href="<?=site_url('admincontroller/daf_pengguna');?>">
                                <span class="sidebar-mini"> TP </span>
                                <span class="sidebar-normal">Tambah Pengguna</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="pengguna"){echo "active";}?>">
                            <a href="<?=site_url('admincontroller/pengguna');?>">
                                <span class="sidebar-mini"> DP </span>
                                <span class="sidebar-normal">Data Pengguna</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </li>
            <li class="<?php if ($this->uri->segment(2)=="menu"){echo "active-drop";}elseif($this->uri->segment(2)=="berita"){echo "active-drop";}elseif($this->uri->segment(2)=="settinghome"){echo "active-drop";} ?>">
                <a href="#" data-toggle="collapse" data-target="#pengaturan" class="collapsed menu-act">
                    <i class="material-icons">settings</i> 
                    <p>Pengaturan <b class="caret pull-right"></b></p> 
                </a>
                <div class="<?php if ($this->uri->segment(2)=="daftar"){echo "active-drop";}elseif($this->uri->segment(2)=="data_pengguna"){echo "active-drop";}else{echo "collapse";} ?>" id="pengaturan">
                    <ul class="nav nav-drop">
<!--                         <li class="<?php if($this->uri->segment(2)=="menu"){echo "active";}?>">
                            <a href="<?=site_url('admincontroller/menu');?>">
                                <span class="sidebar-mini"> MN </span>
                                <span class="sidebar-normal">Menu</span>
                            </a>
                        </li> -->
                        <li class="<?php if($this->uri->segment(2)=="berita"){echo "active";}?>">
                            <a href="<?=site_url('admincontroller/berita');?>">
                                <span class="sidebar-mini"> BR </span>
                                <span class="sidebar-normal">Berita</span>
                            </a>
                        </li>
                        <li class="<?php if($this->uri->segment(2)=="settinghome"){echo "active";}?>">
                            <a href="<?=site_url('admincontroller/settinghome');?>">
                                <span class="sidebar-mini"> HM </span>
                                <span class="sidebar-normal">Home</span>
                            </a>
                        </li>                        
                    </ul>
                </div>
            </li>
			<li class="nav-item ">
				<a class="nav-link" href="<?= site_url('admincontroller/keluar') ?>">
					<i class="material-icons">power_settings_new</i>
					<p>Keluar</p>
				</a>
			</li>
        </ul>
    </div>
</div>