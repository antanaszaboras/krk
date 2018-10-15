<div class="container-fluid">
<?php foreach ($clients as $clients_item):?>
     <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <div class="card">
            <h5 class="card-header"><?php echo $clients_item['short_name'];?></h5>
            
            <div class="card-body">
              <h5 class="card-title"><?php echo $clients_item['company_name'];?></h5>
              
              <a href="<?php echo site_url('clients/' . $clients_item['id']); ?>" class="btn btn-primary">EDIT</a>
              <span class="float-right badge badge-success" rel="tooltip" title="Contacts"><?php echo $badges[$clients_item['id']]; ?></span>
            </div>
        </div>
   </div>
<?php endforeach; ?>
</div>
<div class="modal fade" id="newUserForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<?php