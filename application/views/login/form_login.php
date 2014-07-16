
<div  class="container" align="center"style="margin-top:300px; margin-bottom:100px; padding:20px;">
<div class="span7" >
<h1><span class="icon-key"></span><?php echo $judul;?></h1>
<?php echo validation_errors();?>
<?php echo form_open('dashbord/login/proses_login');?>
<div class="input-control text">
    <input type="text" value="" placeholder="Masukan Username" name="username" data-hint="Tidak Boleh Kosong !!!!"
				data-hint-position="bottom"/>
    <button class="btn-clear"></button>
</div>
<div class="input-control password">
    <input type="password" value="" placeholder="Masukan password" name="password" data-hint="Tidak Boleh Kosong"
				data-hint-position="bottom"/>
    <button class="btn-reveal"></button>
</div>
<div class="input-control text">
    <input type="submit"  value="Login"/>
   </form> 
</div>
</div>
</div>