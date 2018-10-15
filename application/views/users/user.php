<div class="container-fluid">
    <div class="col-lg-3">
         <img class="card-img-top" src="<?php echo base_url('assets/images/avatar3.png'); ?>" alt="Card image">
    </div>
    <div class="col-lg-5">  
        <form>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer01">First name</label>
              <input type="text" class="form-control" id="validationServer01" placeholder="John" value="<?php echo $users_item['name']; ?>" required>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Last name</label>
              <input type="text" class="form-control" id="validationServer02" placeholder="Doe" value="<?php echo $users_item['surname']; ?>">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">Phone</label>
              <input type="text" class="form-control" id="validationServer02" placeholder="+37012312345" value="<?php echo $users_item['phone']; ?>">
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer02">STATS</label>
              <input type="text" class="form-control" id="validationServer02" placeholder="#" value="<?php echo $users_item['surname']; ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServerUsername">Username</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="inputGroupPrepend3">@</span>
                </div>
                <input type="email" class="form-control" id="validationServerUsername" placeholder="john.doe@contoso.com" aria-describedby="inputGroupPrepend3" value="<?php echo $users_item['username']; ?>"required>
              </div>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer03">Password</label>
              <input type="password" class="form-control" id="validationServer03" placeholder="P@ssword" value="<?php echo $users_item['password']; ?>" required>
              <div class="invalid-feedback">
                Please provide a valid city.
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="col-md-6 mb-2">
              <label for="validationServer04">State</label>
              <select class="custom-select" id="validationServer04" placeholder="Select.."name="state" required>
                  <option value="1" default>Enabled</option>
                  <option value="2">Disabled</option>
              </select>
            </div>
            <div class="col-md-6 mb-2">
              <label for="validationServer05">Role</label>
              <select class="custom-select" id="validationServer05" placeholder="Select.."name="role" required>
                  <option value="1">Administrator</option>
                  <option value="2" default>User</option>
              </select>
            </div>
            <div class="col-md-4 mb-2">
              <label for="validationServer06">Date Created</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $users_item['date_created']; ?>">
            </div>
            <div class="col-md-4 mb-2">
              <label for="validationServer06">Date Updated</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $users_item['date_updated']; ?>">
            </div>
              <div class="col-md-4 mb-2">
              <label for="validationServer06">Last Login</label>
              <input type="text" class="form-control" id="validationServer06" disabled value="<?php echo $users_item['date_last_login']; ?>">
            </div>
          </div>
          <button class="btn btn-primary" type="submit">UPDATE</button>
        </form> 
    </div>
</div>