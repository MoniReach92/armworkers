<!DOCTYPE html>
<html>
<head>
    <title>codeigniter ajax request - itsolutionstuff.com</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>codeigniter ajax request - itsolutionstuff.com</h2>
        </div>
    </div>
</div>


<div class="row">
  <div class="col-lg-8">
    <strong>Title:</strong>
    <input type="text" name="name" class="form-control" placeholder="Name">
  </div>
  <div class="col-lg-8">
    <strong>Description:</strong>
    <textarea name="description" class="form-control" placeholder="Description"></textarea>
  </div>
  <div class="col-lg-8">
    <br/>
    <button class="btn btn-success">Submit</button>
  </div>
</div>


<table class="table table-bordered" style="margin-top:20px">


  <thead>
      <tr>
          <th>Title</th>
          <th>Description</th>
      </tr>
  </thead>


  <tbody>
   <?php foreach ($job_titles as $job_title) { ?>      
      <tr>
          <td><?php echo $job_title->name; ?></td>
          <td><?php echo $job_title->description; ?></td>
      </tr>
   <?php } ?>
  </tbody>


</table>
</div>


<script type="text/javascript">
    $("button").click(function(){


       var name = $("input[name='name']").val();
       var description = $("textarea[name='description']").val();


        $.ajax({
           //url: '/ajax-requestPost',ajaxRequestPost
           url: '<?php site_url('ajax-request') ?>',
           method: 'POST',
           data: {name: name, description: description},
           error: function() {
              alert('Something is wrong');
           },
           success: function(data) {
                $("tbody").append("<tr><td>"+name+"</td><td>"+description+"</td></tr>");
                alert("Record added successfully");  
           }
        });


    });


</script>


</body>
</html>