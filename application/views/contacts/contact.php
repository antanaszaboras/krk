<?php echo validation_errors(); ?>
<?php echo form_open('contacts/update', '', array('contact_id' => $contacts_item['id'])); ?>
<div class="container-fluid">
    <div class="col-lg-3">
         <img class="card-img-top" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="Card image">
    </div>
    <div class="col-lg-5 col-lg-9">  
        <form>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer01">First name</label>
              <input type="text" name="name" class="form-control" id="validationServer01" placeholder="John" value="<?php echo $contacts_item['name']; ?>" required>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Last name</label>
              <input type="text" name="surname" class="form-control" id="validationServer02" placeholder="Doe" value="<?php echo $contacts_item['surname']; ?>">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Phone</label>
              <input type="text" name="phone" class="form-control" id="validationServer02" placeholder="+37012312345" value="<?php echo $contacts_item['phone']; ?>">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServerEmail">Email</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="email" name="email" class="form-control" id="validationServerEmail" placeholder="john.doe@contoso.com" aria-describedby="inputGroupPrepend3" value="<?php echo $contacts_item['email']; ?>"required>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer04">State</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.." name="state" required>
                  <option value="1" <?php echo ($contacts_item['state'] == 1) ? "selected = 'selected'" : "" ;?>>Shown</option>
                  <option value="0" <?php echo ($contacts_item['state'] == 0) ? "selected = 'selected'" : "" ;?>>Hidden</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer04">Company</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.." name="company">
                  <?php foreach ($company AS $company_item): ?> 
                    <option value="<?php echo $company_item['id'] ?>" 
                        <?php echo ($company_item['id'] == $contacts_item['client_id']) ? "selected = 'selected'" : "" ;?>>
                        <?php echo $company_item['company_name']; ?>
                    </option>
                  <?php endforeach; ?>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="validationServer06">Date Created</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $contacts_item['date_created']; ?>">
            </div>
            <div class="col-md-4 mb-2">
              <label for="validationServer06">Date Updated</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $contacts_item['date_updated']; ?>">
            </div>
          </div>
          <button class="btn btn-primary" type="submit">UPDATE</button>
        </form> 
    </div>
</div>