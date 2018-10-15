<div class="container-fluid">
    <div class="col-lg-3">
         <img class="card-img-top" src="<?php echo base_url('assets/images/company_group.jpg'); ?>" alt="Card image">
    </div>
    <div class="col-lg-5">  
        <form>
          <div class="form-row">
            <div class="col-md-12 mb-2">
              <label for="validationServer01">Company Name</label>
              <input type="text" class="form-control" id="validationServer01" placeholder="Company Inc." value="<?php echo $clients_item['company_name']; ?>" required>
            </div>
            <div class="col-md-12 mb-2">
              <label for="validationServer02">Short Name</label>
              <input type="text" class="form-control" id="validationServer02" placeholder="comp" value="<?php echo $clients_item['short_name']; ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-12 mb-2">
              <label for="validationServer04">State</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.."name="state" required>
                  <option value="1" default>Enabled</option>
                  <option value="2">Disabled</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer06">Date Created</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $clients_item['date_created']; ?>">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer06">Date Updated</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $clients_item['date_updated']; ?>">
            </div>
          </div>
          <button class="btn btn-primary" type="submit">UPDATE</button>
        </form> 
    </div>
</div>