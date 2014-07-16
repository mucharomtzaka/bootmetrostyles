<?php echo form_open('dashbord/berita/update_berita');?>
	<table class="table " >
	<input type="hidden" name="id_berita" value="<?php echo $id_berita;?>" ></td>
	<tr><td>Judul Berita</td>
	<td>
	<input type="text" name="judul_berita" value="<?php echo $judul;?>"  data-hint="judul_berita" data-hint-position="right"></td>
	</tr>
	<tr>
		<td>Penulis</td>
	<td>
			<input type="text" name="Penulis"  value="<?php echo $penulis;?>"data-hint="Penulis" data-hint-position="right">
	</td>
	
	</tr>
	<tr><td>Tanggal </td>
	<td>
			<div class="input-control text" id="tgl_berita"   size="5">
			<input type="text" data-hint="tanggal" value="<?php echo $tgl_berita;?>" data-hint-position="right"  name="tgl_berita">
			<button class="btn-date"></button>
			</div>
		 
		<script>
			$("#tgl_berita").datepicker();
		</script>
	</td>
	<td></td>
	</tr>
	<tr>
	<td> Deskripsi </td>
	<td><textarea class="ckeditor" name="isi_berita"><?php echo $text;?></textarea></td>
	
	</tr>
	<tr>
	<td>Tag</td>
	<td>
			<input type="text" name="tag"  value="<?php echo $tag;?>"data-hint="tag" data-hint-position="right">
	</td>
			</tr><tr>
	<td> Kategori</td>
	<td><div class="input-control text" >
			<select name="kategori" data-hint="kategori" data-hint-position="right">
			<option value="Artikel">Artikel</option>
			<option value="Tips">Tips</option>
			<option value="Cerita">Cerita</option>
			<option value="Lirik Lagu">Lirik Lagu</option>
			
			</select>
			</div></<td>
	
	</tr>
	<tr>
	<td></td>
	<td>
	<div class="botton" name="simpan">
	<input type="submit" value="Simpan">
	</div>
	</td>
	<td><div class="botton" name="reset">
	<input type="reset" value="reset">
	</div></td>
	</tr>
	</table>
	</form>
	
	</div>	