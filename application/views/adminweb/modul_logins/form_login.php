<div  class="container" align="center"style="margin-top:50px; margin-bottom:100px; padding:20px;">
<div class="panel">
<?php echo validation_errors();?>
<div class="span7" >
<div class="panel-header">
<h1><span class="icon-user-2"></span><font color="white"><?php echo $judul;?></font></h1></div>
 <div class="panel-content">
<?php echo form_open('dashbord/login/proses_login/');?>
<div class="input-control text">
    <input type="text" value="" placeholder="username" name="username" data-hint="Masukan Username Tidak Boleh Kosong !!!!"
				data-hint-position="right"/>
    <button class="btn-clear"></button>
</div>
<div class="input-control password">
    <input type="password" value="" placeholder="password" name="password" data-hint="Masukan password Tidak Boleh Kosong"
				data-hint-position="right"/>
				<br>
    <button class="btn-reveal"></button>
</div>
    <button class="icon-key-2"> Login</button>
         <a href="<?php echo base_url();?>dashbord/login/forget_password?" class="icon-unlocked">Lupa Password</a>
		 </div>
    </div>
	</div>
    </form>
</div>