<div class="container-fluid">
     <div class="row">
        <div class="col-12">
            <?php echo $this->session->flashdata('message');?>
        </div>
    </div>
<?php foreach ($contacts as $contacts_item):?>
     <div class="col-sm-6 col-md-4 col-lg-4 col-xl-2 p-2">
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
                <a href="<?php echo site_url('contacts/delete/' . $contacts_item['id']); ?>" class="btn btn-danger" onclick="return confirm('Are you sure to DELETE <?php echo $contacts_item['name'] . ' ' . $contacts_item['surname'];?> ?');"><i class="fa fa-trash"></i></a>
            </div>
            <div class="card-footer">
                <span class="text-muted"><small><?php echo $contacts_item['company_name'];?></small></span>
            </div>
        </div>
   </div>
<?php endforeach; ?>
</div>
<?php
