<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php echo $this->session->flashdata('message');?>
        </div>
    </div>
    <input class="form-control" id="searchForm" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Group</th>
            <th>Title/Desc</th>
            <th>Date Created</th>
            <th>Date Updated</th>
            <th>Created By</th>
            <th>Assigned To</th>
          </tr>
        </thead>
        <tbody id="myTable">
        <?php foreach ($jobs as $jobs_item):?>
          <tr>
            <td><?php echo $jobs_item["jobid"]; ?></td>
            <td><?php echo $jobs_item["group_title"]; ?></td>
            <td><?php echo $jobs_item["title"]; ?></td>
            <td><?php echo date("Y-m-d H:i", strtotime($jobs_item["date_created"])); ?></td>
            <td><?php echo date("Y-m-d H:i", strtotime($jobs_item["date_updated"])); ?></td>
            <td><?php echo $jobs_item["name"] . ' ' , $jobs_item["surname"]; ?></td>
            <td><?php echo $jobs_item["asigned_name"] . ' ' , $jobs_item["asigned_surname"]; ?></td>
          </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
    <div class="text-center container-fluid">
        <ul class="pagination justify-content-center">
            <?php echo $pagination; ?>
        </ul>
    </div>
</div>
<div class="modal fade" id="newUserForm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">CREATE NEW </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <?php echo validation_errors();?>
        <?php echo form_open('jobs/create'); ?>
        <div class="container-fluid">
            <div class="col-12">  
                <form>
                  <div class="form-row">
                    <div class="col-md-12 mb-2">
                      <input type="text" name="title" class="form-control" id="validationServer01" placeholder="Title.." value="" required>
                    </div>
                    <div class="col-md-12 mb-2">
                        <textarea rows="5" name="description" class="form-control" id="validationServer02" placeholder="Description.." value=""></textarea>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-2">
                      <label for="validationServer04">Client/Contact</label>
                      <select class="custom-select" id="validationServer04" placeholder="Select.." name="contact" required>
                          <?php foreach ($contacts AS $contact): ?>
                          <option value="<?php echo $contact['id']; ?>">
                              <?php echo '<b>' . $contact['company_name'] . '</b> | ' . $contact['name']; ?>
                          </option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-2">
                      <label for="validationServer04">Task Group</label>
                      <select class="custom-select" id="validationServer04" placeholder="Select.." name="group" required>
                          <?php foreach ($job_groups AS $group): ?>
                          <option value="<?php echo $group['id']; ?>"><?php echo $group['title']; ?></option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="col-md-12 mb-2">
                      <label for="validationServer05">Assigned To</label>
                      <select class="custom-select" id="validationServer05" placeholder="Select.." name="assigned_to" required>
                          <?php foreach ($users AS $user): ?>
                          <option value="<?php echo $user['id']; ?>" 
                              <?php echo ($user['id'] == $this->session->userdata['logged_in']['id']) ? "selected = 'selected'" : "" ;?>>
                              <?php echo $user['name']; ?>
                          </option>
                          <?php endforeach; ?>
                      </select>
                    </div>
                  </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" type="submit">CREATE</button>
      </div>
        </form>
    </div>
  </div>
</div>

<script>
$(document).ready(function(){
  $("#searchForm").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<?php