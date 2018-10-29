<style>
.login-body {
  height: 100vh;
}

.login-body {
  display: -ms-flexbox;
  display: flex;
  -ms-flex-align: center;
  align-items: center;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: #f5f5f5;
  background: url(https://picsum.photos/1920/1080?random);
  background-repeat: no-repeat;
  background-size: cover;
}

.form-signin {
  width: 100%;
  max-width: 330px;
  padding: 15px;
  margin: auto;
}
.form-signin .checkbox {
  font-weight: 400;
}
.form-signin .form-control {
  position: relative;
  box-sizing: border-box;
  height: auto;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
.middle{
    margin-top:auto;
    margin-bottom: auto;
}
</style>

<div class="login-body text-center container-fluid">


                     <div class="form-signin middle">
                           <?php echo form_open('login');?>
                        <img class="mb-4" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="login-avatar">
                        <label for="inputEmail" class="sr-only">Email address</label>
                        <input type="email" name="user" id="inputEmail" class="form-control" placeholder="username" required="" autofocus="">
                        <label for="inputPassword" class="sr-only">Password</label>
                        <input type="password" id="inputPassword" class="form-control" name="pass" value="" placeholder="password" required="">
                        <input class="btn btn-lg btn-primary btn-block" type="submit" name="login" value="LOGIN" />
                         <?php echo form_close();?>
                      </div> 
                        </div>
                    </div>
                </div>
			
	</div>
</div>

<!--
      
                    <?php if($this->session->flashdata('message_required')) { ?>
				<div class="msg"> <strong><?php echo $this->session->flashdata('message_required') ?> </strong></div>
			<?php } ?>
	
			<?php if($this->session->flashdata('message_failed')) { ?>
				<div class="msg"> <strong><?php echo $this->session->flashdata('message_failed') ?> </strong></div>
			<?php } ?>
-->