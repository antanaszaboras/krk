<?php echo validation_errors(); ?>
<?php echo form_open('contacts/create'); ?>
<div class="container-fluid">
    <div class="col-lg-3">
         <img class="card-img-top" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="Card image">
    </div>
    <div class="col-xl-5 col-lg-9">  
        <form>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer01">First name</label>
              <input type="text" name="name" class="form-control" id="validationServer01" placeholder="John" value="" required>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Last name</label>
              <input type="text" name="surname" class="form-control" id="validationServer02" placeholder="Doe" value="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Phone</label>
              <input type="text" name="phone" class="form-control" id="validationServer02" placeholder="+37012312345" value="">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServerEmail">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="email" name="email" class="form-control" id="validationServerEmail" placeholder="john.doe@contoso.com" aria-describedby="inputGroupPrepend3" value="" required>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer04">State</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.." name="state" required>
                  <option value="1" default>Shown</option>
                  <option value="0">Hidden</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer04">Company</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.." name="company">
                  <?php foreach ($company AS $company_item): ?> 
                    <option value="<?php echo $company_item['id'] ?>">
                        <?php echo $company_item['company_name']; ?>
                    </option>
                  <?php endforeach; ?>
              </select>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">CREATE</button>
        </form> 
    </div>
</div>