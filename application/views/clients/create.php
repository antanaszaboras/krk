<?php echo validation_errors(); ?>
<?php echo form_open('clients/create'); ?>

<div class="container-fluid">
    <div class="col-lg-3">
         <img class="card-img-top" src="<?php echo base_url('assets/images/company_group.jpg'); ?>" alt="Card image">
    </div>
    <div class="col-lg-5">  
        <form>
          <div class="form-row">
            <div class="col-md-12 mb-2">
              <label for="validationServer01">Company Name</label>
              <input type="text" name="companyname" class="form-control" id="validationServer01" placeholder="Company Inc." value="" required>
            </div>
            <div class="col-md-12 mb-2">
              <label for="validationServer02">Short Name</label>
              <input type="text" name="shortname" class="form-control" id="validationServer02" placeholder="comp" value="">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-2">
              <label for="validationServer05">State</label>
              <select class="custom-select" id="validationServer05" placeholder="Select.."name="state" required>
                  <option value="1" default>Enabled</option>
                  <option value="2">Disabled</option>
              </select>
            </div>
          </div>
          <button class="btn btn-primary" type="submit">CREATE</button>
        </form> 
    </div>
</div>
