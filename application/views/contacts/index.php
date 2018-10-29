<div class="container-fluid">
<?php foreach ($contacts as $contacts_item):?>
     <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2">
        <div class="card">
            <img class="card-img-top" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="Card image">
            <div class="card-body">
                <h6 class="card-title"><?php echo $contacts_item['name'] . ' ' . $contacts_item['surname']; ?></h6>
                <p class="card-text">
                    <div class="container-fluid p-0">
                        <span class="col-4 p-2"><i class="fa fa-phone"></i></span>
                        <span class="col-8 p-2"><?php echo $contacts_item['phone']; ?> </span>
                    </div>
                    <div class="container-fluid p-0">
                        <span class="col-4 p-2"><i class="fa fa-envelope"></i></span>
                        <span class="col-8 p-2"><small><?php echo $contacts_item['email']; ?></small></span>
                    </div>
                </p>
                <a href="<?php echo site_url('contacts/' . $contacts_item['id']); ?>" class="btn btn-primary">EDIT</a>
            </div>
            <div class="card-footer">
                <span class="text-muted"><small><?php echo $contacts_item['company_name'];?></small></span>
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



<?php