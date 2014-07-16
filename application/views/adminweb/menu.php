<body class="metro" style="background: url(<?php echo base_url();?>file_assets/images/tiles-bg-2.jpg)">
<div class="container">	
<header class="bg-dark" >
<div class="navigation-bar dark">
    <div class="navigation-bar-content container">
        <a href="<?php echo base_url();?>dashbord/home" class="element" data-hint="Portal New Administrator"
				data-hint-position="bottom"><span class="icon-dashboard"></span> Dashboard</a>
        <span class="element-divider"></span>
        <ul class="element-menu">
            <li>
                <a class="dropdown-toggle" href="#" data-hint="Informasi Pengembang"
				data-hint-position="bottom"><span class="icon-info"></span>Informasi Pengembang</a>
                <ul class="dropdown-menu dark" data-role="dropdown">
                    <li><a href="<?php echo base_url();?>dashbord/software?about"data-hint="Software" data-hint-position="left">Software</a></li>
                    <li><a href="<?php echo base_url();?>dashbord/software?about=programmer" data-hint="Programmer" data-hint-position="left">Programmer</a></li>
					<li><a href="<?php echo base_url();?>dashbord/software?about=lincensi" data-hint="lincensi" data-hint-position="left">Lincensi</a></li>
					<li><a href="<?php echo base_url();?>dashbord/software?about=project"data-hint="Project" data-hint-position="left">Riwayat Project</a></li>
                </ul>
            </li>
			     <span class="element-divider"></span>
			 <li> <a class="dropdown-toggle" href="#" data-hint="Useradminweb"
				data-hint-position="bottom"><span class="icon-user-3"></span><?php echo $username;?></a>
				<ul class="dropdown-menu dark" data-role="dropdown">
					<li><a href="<?php echo base_url();?>dashbord/home/profil_admin?id=" data-hint="Profil Admin" data-hint-position="right">Profil Admin</li>
					<li><a href="#" data-hint="Pesan Email" data-hint-position="right">Pesan Email</li>
					<li><a href="#" data-hint=" User Admin web" data-hint-position="right">user admin</a></li>
					<li><a  href="<?php echo base_url();?>dashbord/login/logout?notice=user_is_not_login" data-hint="Keluar/Logout"
				data-hint-position="right"><span class="icon-key"></span>logout</a></li>
			</ul>
			</li>
        
						<li><a href="#" data-hint="Master Halaman statis" data-hint-position="left" class="dropdown-toggle">Master Data </a>
                        <ul class="dropdown-menu dark" data-role="dropdown">
							<li><a href="#" data-hint="Menu Manager" data-hint-position="right" class="dropdown-toggle">Menu Manager</a>
							<ul class="dropdown-menu dark" data-role="dropdown">
							<li><a href="#" data-hint="Tag " data-hint-position="right">Tag</a></li>
							<li><a href="#"data-hint="Kategori" data-hint-position="right">Kategori</a></li>
                            <li><a href="#" data-hint="Pengalihan Halaman" data-hint-position="right">Pengalihan</a></li>
							 <li><a href="#" data-hint="Partner link" data-hint-position="right">Partner Link URL</a></li>
							</ul>
							</li>
							 <li><a href="#" data-hint="Site Content" data-hint-position="right" class="dropdown-toggle">site content</a>
							 <ul class="dropdown-menu dark" data-role="dropdown">
							<li><a href="#" data-hint="Profil Perusahaan" data-hint-position="right">Profil</a></li>
							<li><a href="#" data-hint="Sejarah Perusahaan" data-hint-position="right">Sejarah</a></li>
                            <li><a href="#"data-hint="Laporan Data Perusahaan" data-hint-position="right">Laporan Data Perusahaan</li>
							<li><a href="#" data-hint="ihat Data Pengunjung web" data-hint-position="right">Lihat Daftar Pengunjung</a></li>
							<li><a href="<?php echo base_url();?>dashbord/berita/index" data-hint="Laporan Data Berita" data-hint-position="right">Berita</li>
							</ul></li>  
                        </ul></li>
						  
						
          </ul> 
		
        <div class="no-tablet-portrait no-phone">
			
		  <a class="element  place-right" href="#" data-hint="Call Center"
				data-hint-position="bottom"><span class="icon-phone"></span>call center</a>
				     <span class="element-divider"></span>
		 <a class="element  place-right" href="<?php echo base_url();?>dashbord/maintance" data-hint="Maintance"
				data-hint-position="bottom"><span class="icon-key"></span>Maintance</a>
				     <span class="element-divider"></span>
		<a class="element  place-right" href="<?php echo base_url();?>dashbord/upload" data-hint="Upload"
				data-hint-position="bottom"><span class="icon-upload-3"></span> Upload </a>
				     <span class="element-divider"></span>
		<a class="element  place-right" href="<?php echo base_url();?>dashbord/player?music" data-hint="Music Player"
				data-hint-position="bottom"><span class="icon-upload-3"></span> Music Player </a>
   
			<a title="Lihat Halaman User" target="new"href="<?php echo base_url();?>" class="element place-right"><span class="icon-switch"></span></a>
            <span class="element-divider place-right"></span>
            
    </div>
</div>
</header>
