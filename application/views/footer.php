<div class="grid fluid">
     <div class="row">
         <div class="span12">
            
             <div class="row">
                 <div class="span3" >
				 <div class="panel">
					<div class="panel-header">
						  <h3>Kategori Menu Utama</h3>
					</div>
					<div class="panel-content">
						..
                      
                        <nav class="sidebar dark">
                            <ul>
                                
                                <li class="active"><a href="#"><i class="icon-home"></i>Dashboard</a></li>
                                <li class="stick bg-red"><a href="#"><i class="icon-cog"></i>Layouts</a></li>
                                <li class="stick bg-yellow">
                                    <a class="dropdown-toggle" href="#"><i class="icon-tree-view"></i>Sub menu</a>
                                    <ul class="dropdown-menu" data-role="dropdown">
                                        <li><a href="">Subitem 1</a></li>
                                        <li><a href="">Subitem 2</a></li>
                                        <li><a href="">Subitem 3</a></li>
                                        <li class="divider"></li>
                                        <li><a href="">Subitem 4</a></li>
                                        <li class="disabled"><a href="">Subitem 4</a></li>
                                    </ul>
                                </li>
                                <li class="stick bg-green"><a href="#">Thread item</a></li>
                                <li class="disabled"><a href="#">Disabled item</a></li>

                               
                                <li><a href="#">Other Item 1</a></li>
                                <li><a href="#">Other item 2</a></li>
                                <li><a href="#">Other item 3</a></li>
                                <li>
                                    <a class="dropdown-toggle" href="#">Sub menu 2</a>
                                    <ul class="dropdown-menu" data-role="dropdown">
                                        <li><a href="">Subitem 1</a></li>
                                        <li><a href="">Subitem 2</a></li>
                                        <li><a href="">Subitem 3</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    
					</div>
				</div>
				 
				 
				 
				 
				 </div>
                 <div class="span6" >
					<div class="panel">
					<div class="panel-header">
						Posting Content
					</div>
					<div class="panel-content">
						...
					</div>
				</div>


				 </div>
				   <div class="span3" >
					<div class="panel">
					<div class="panel-header">
						Lowongan Kerja
					</div>
					<div class="panel-content">
						...
					</div>
				</div>
				 </div>
				 


				 </div>
				 
				 
             </div>
         </div>
     </div>
 </div>
			 
		<div class="container tertiary-text bg-dark fg-white" style="padding: 10px">
          <div class="container" style="padding: 10px 0;">
			<div class="grid fluid">
				 <div class="row">
				  <div class="span6" >
					<div class="panel">
					<div class="panel-header">
						Komentar
					</div>
					<div class="panel-content">
			<marquee scrollamount='1' direction="up">
													 <?php if(count($komentar) > 0) { ?>
							   <?php 
							   $no=1;
							foreach($komentar as $rows) {
							$id=$rows['id_komentar'];
							$listurl=$rows['url'];
							$nama_komentar=$rows['nama'];
							$mail=$rows['email'];
							$cek_pesan=$rows['pesan'];
						   ?> 
						   
						    <div class="balloon top">
								<div class="padding20"  >
								<font color="grey">	 Nama:<?php echo $nama_komentar;?></font>
								<font color="grey">	Email:<?php echo $mail;?></font>
								<font color="grey">	Komentar:<?php echo $cek_pesan;?></font>
								 <br>
								</div>
							</div>
						   
								 
							
							<?php  $no++; } ?>
							<?php }?>
							</marquee>
							<center>
							<?php echo validation_errors();?>
						<?php echo form_open('welcome/kirim_komentar');?>
						 <table width="auto" border="0" cellspacing="1" cellpadding="1" >
						  <tr bgcolor="blue">
							<td width="37">Nama</td>
							<td width="3">:</td>
							<td width="137">&nbsp;<input type="text" name="nama"data-hint="Nama  " data-hint-position="right"></td>
						  </tr>
						<tr bgcolor="blue">
							<td>Url</td>
							<td>:</td>
							<td>&nbsp;<input type="text" name="url" data-hint="url" data-hint-position="right"></td>
						  </tr>
						 <tr bgcolor="blue">
							<td>Email</td>
							<td>:</td>
							<td>&nbsp;<input type="text" name="email" data-hint="email " data-hint-position="right" ></td>
						  </tr>
						<tr bgcolor="blue">
							<td>Pesan</td>
							<td>:</td>
							<td>&nbsp;<textarea name="pesan" cols="50" rows="5"></textarea></td>
						  </tr>
						<tr bgcolor="blue">
							<td>&nbsp;</td>
							<td>&nbsp;</td>
							<td>&nbsp;<input type="submit" name="Pesan" Value="Kirim_Pesan" ></td>
						  </tr>
						</table>
						</form>
						</center>	
					</div>
				</div>
				 </div>
				  <div class="span5" >
					<div class="panel">
					<div class="panel-header">
						Twitter
					</div>
					<div class="panel-content">
						...
					</div>
				</div>
				 </div>
				 
				 
				 </div>
				 </div>
					  
		  
		  

                <div class="grid no-margin">
                    <div class="row no-margin">
                        <div class="span12 padding10">
         <footer>
            <div class="bottom-menu-wrapper" >
		<center>
                <ul class="horizontal-menu compact">
                    <li><font color="white">&copy; 2014 Metro UI CSS</font></li>
                    <li><a href="#"><font color="white">Privacy</font></a></li>
                    <li><a href="#"><font color="white">Legal</font></a></li>
                    <li><a href="#"><font color="white">Advertise</font></a></li>
                    <li><a href="#"><font color="white">Help</font></a></li>
                    <li><a href="#"><font color="white">Feedback </font></</a></li>
                </ul>
	</center>
            </div>
        </footer>  
                        </div>
                        
                        <div class="span3 padding10">
                           	
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
			 
		
	
    <script src="<?php echo base_url();?>file_assets/js/hitua.js"></script>

	</div>

</body>
	</html>