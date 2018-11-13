<div class="container-fluid">
<?php foreach ($clients as $clients_item):?>
     <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
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

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});
</script>

<?php