<div class="container-fluid">
    <input class="form-control" id="searchForm" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>ID</th>
            <th>Group</th>
            <th>Title/Desc</th>
            <th>Date Creted</th>
            <th>Date Updated</th>
            <th>Created By</th>
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
            <td><?php //echo $jobs_item["asigned_name"] . ' ' , $jobs_item["asigned_surname"]; ?></td>
          </tr>
    <?php endforeach; ?>
        </tbody>
    </table>
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