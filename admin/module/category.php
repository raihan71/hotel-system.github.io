<section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Input <i class="fa fa-angle-right"></i> Category</h3>
            <div class="row mt">
              <div class="col-lg-12">
             	 <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> List Categories | <a title="Add Room" href="#myModal" data-toggle="modal" class="btn btn-primary"><i class="fa fa-plus"></i></a></h4>
	                  	  	  <hr>
                              <thead>
                             <tr>
                             	<th>No</th>
                              <th>Pic</th>
                             	<th>Category</th>
                             	<th>Act</th>
                             </tr>
                             </thead>
                             <tbody>
                             	<?php
                             	$no=1;
                             	$query=mysql_query("select id, img, name_cat from category");
                             	while ($row=mysql_fetch_array($query)) {
                             		?>
                             		<tr>
                             			<td><?php echo $no++; ?></th>
                             			<td><img width="100" src="../images/kategori/<?php echo $row['img']; ?>"></td>
                             			<td><?php echo $row['name_cat']; ?></td>
                             			<td>
                             				<a href="media.php?modul=detail_view_category&id=<?php echo $row['id']; ?>" title="Detail" class="btn btn-success btn-xs"><i class="fa fa-eye"></i></a>
                             				<a href="media.php?modul=edit_category&id=<?php echo $row['id']; ?>" title="Edit" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                             				<button onclick="if(confirm('Yakin Hapus ?')){ location.href='media.php?modul=delete_category&id=<?php echo $row['id']; ?>'}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i></button>
                             			</td>
                             		</tr>
                             		<tr>
                             			<?php } if (intval(mysql_num_rows($query))==0) {
                             				?>
                             				<td colspan="4" align="center">Empty</td>
                             		</tr>
                             </tbody>
                             <?php
                         }
                         ?>
                          </table>
                      </div><!-- /content-panel -->
              </div>
            </div>
      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!-- Modal -->
                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                  <h4 class="modal-title">Add Category</h4>
                              </div>
                              <form action="media.php?modul=add_category" method="post" enctype="multipart/form-data">
                              <div class="modal-body">
                                  <label for="category">Category</label>
                                  <input type="text" required="" name="name_cat" placeholder="ex.PALACE011" autocomplete="off" class="form-control placeholder-no-fix">
                                  <br />
                                  <label>Pic</label>
                                  <input id="img" type="file" name="img" class="btn btn-default" autocomplete="off"><br />
        
                              </div>
                              <div class="modal-footer">
                                  <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                                  <button class="btn btn-theme" type="submit">Add</button>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal -->
        
              </form>       
        
        </div>
      </div>