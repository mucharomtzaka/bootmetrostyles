<br><hr size="3" noshade>

<div class="tab-control" data-role="tab-control">
    <ul class="tabs">
        <li class="active"><a href="#_page_1">Laporan Data</a></li>
        <li><a href="#_page_2"><i class="icon-box-add"></i>New Data</a></li> 
    </ul>

    <div class="frames">
        <div class="frame" id="_page_1">	
<?php echo $notice;?>		
<hr size="3" noshade>
<div class="grid">
<div class="element input-element">
            <?php echo form_open('dashbord/berita/index/');?>
                <div class="input-control text">
                    <input type="text" placeholder="Search..." data-hint="Searching" size="20" name="cari"
				data-hint-position="bottom">
                    <button class="btn-search"></button>
                </div>
            </form>
        </div>
		  <table class="table striped hovered dataTable" id="dataTables-1">
                <thead>
                <tr>
					<th class="text-left"><span class='icon-menu'></span>No</th>
                    <th class="text-left"><span class='icon-menu'></span>Judul</th>
                    <th class="text-left"><span class='icon-menu'></span>Kategori</th>
                    <th class="text-left"><span class='icon-menu'></span>Tag</th>
					<th class="text-left"><span class='icon-menu'></span>Tanggal</th>
                    <th class="text-left"><span class='icon-menu'></span>isi </th>
                    <th class="text-left"><span class='icon-menu'></span>Penulis</th>
					<th class="text-left"><span class='icon-tools'> Aksi</span></th>
                </tr>
                </thead>

                <tbody>
				<tr>
				 <?php if(count($detail) > 0) { ?>
        
                <?php $no=1; 
                foreach($detail as $rows) {
  
               ?> 
     
                  <td><?php echo $no; ?></td>
                  <td><?php echo $rows['judul_berita']; ?></td> 
                  <td><?php echo $rows['kategori']; ?></td>
                  <td><?php echo $rows['tag']; ?></td>
				  <td><?php echo $rows['tgl_berita']; ?></td>
                  <td><?php echo $rows['isi_berita'] ;
				  ?></td>
                  <td><?php echo $rows['Penulis']; ?></td>
                 <td><span class="icon-arrow-left"><a href="<?php echo base_url();?>dashbord/berita/edit_berita?id_berita=<?php echo $rows['id_berita'];?>">Edit</a></span> |<span class="icon-remove"><a href="<?php echo base_url();?>dashbord/berita/delete_berita/<?php echo $rows['id_berita'];?>">Hapus</a></span></td>
                  </tr>
                  <tr>
                  
                  </tr>
                  <?php 
                  
                  $no++;
                }
               
                $endforeach;
                
                  ?>                  
<?php } else{
                 echo "<div class='notice marker-on-top bg-amber fg-white'><strong><font color='red'>Hasil pencarian tidak ditemukan.</font></strong></div>"; 
                 
             } ?>
				
				</tr>
                </tbody>
			
                <tfoot>
                <tr>
				
                </tr>
                </tfoot>
            </table>
			<script type="text/javascript">
			$(function() {
				$("table")
					.tablesorter({widthFixed: true, widgets: ['zebra']})
					.tablesorterPager({container: $("#pager")});
			});
	</script>
					
        </div>
		</div>
	
	<div class="frame" id="_page_2">
	 <?php echo validation_errors();?>
	<?php echo form_open('dashbord/berita/insert/');?>
	<table class="table " >
	<tr><td>Judul Berita</td>
	<td>
	<input type="text" name="judul_berita"  data-hint="judul_berita" data-hint-position="right"></td>
	</tr>
	<tr>
		<td>Penulis</td>
	<td>
			<input type="text" name="Penulis" data-hint="Penulis" data-hint-position="right">
	</td>
	
	</tr>
	<tr><td>Tanggal </td>
	<td>
			<div class="input-control text" id="tgl_berita"   size="5">
			<input type="text" data-hint="tanggal" data-hint-position="right"  name="tgl_berita">
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
	<td><textarea class="ckeditor" name="isi_berita"></textarea></td>
	
	</tr>
	<tr>
	<td>Tag</td>
	<td>
			<input type="text" name="tag" data-hint="tag" data-hint-position="right">
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
      

    </div>
</div>





