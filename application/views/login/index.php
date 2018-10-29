<div class="login-body text-center container-fluid">
    <div class="form-signin middle">
         <?php if($this->session->flashdata('message_required')) { ?>
            <div class="alert alert-danger" role="alert"> <strong><?php echo $this->session->flashdata('message_required') ?> </strong></div>
	<?php } ?>
	<?php if($this->session->flashdata('message_failed')) { ?>
            <div class="alert alert-danger" role="alert"><strong><?php echo $this->session->flashdata('message_failed') ?> </strong></div>
	<?php } ?>
         <?php echo form_open('login');?>
        <img class="mb-4" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="login-avatar">
        <label for="inputEmail" class="sr-only">Email address</label>
         <input type="text" name="user" id="inputEmail" class="form-control" placeholder="username" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="pass" value="" placeholder="password" required="">
        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="LOGIN" />
        <?php echo form_close();?>
    </div> 
</div>              