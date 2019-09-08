<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.1/bootstrap3-editable/js/bootstrap-editable.js"></script>

  <title>TODOLIST</title>
</head>
<body>

<div class="container" style="margin-top:35px">
<h3 align="center">Unsucess Table </h3>
  <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="80%">Task</th>
      <td align="center" width="20%"><a href="#" class="btn btn-sm btn-primary btn_add"><span class="glyphicon glyphicon-plus"></span> ADD</a></td>
     </tr>
    </thead>
    <tbody id="todolist_data">
    </tbody>
   </table>

   <script type="text/javascript" language="javascript" >
      $(document).ready(function(){
     
      function fetch_todolist_data()
      {
        $.ajax(
        {
          url:"fetch.php",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
            console.log('coming from fetch.php', data);

            for(var count=0; count<data.length; count++)
            {
            var html_data = '<tr>';
            html_data += '<td data-name="todo" class="todo" data-type="text"  data-pk="'+data[count].td_id+'">'+data[count].td_todo+'</td>';
            html_data += '<td align="center"><a href="#" class="btn btn-sm btn-danger btn_rec_delete" data-pk="'+data[count].td_id+'"><span class="glyphicon glyphicon-trash"></span> Trash</a>';
            html_data += '  <a href="#" class="btn btn-sm btn-success btn_rec_success" data-t="'+data[count].td_todo+'" data-pk="'+data[count].td_id+'"><span class="glyphicon glyphicon-bookmark"></span> Success</a></<a></td></tr>';
            $('#todolist_data').append(html_data);
            }
          }
        });
      }
     
      fetch_todolist_data();

      $(document).on('click', '.btn_add', function(event)
      {
        event.preventDefault();
        $.ajax({
                url: 'add.php',
              });
        document.location.reload(true);    
      }); 

      $(document).on('click', '.btn_rec_delete', function(event)
      {
        event.preventDefault();
        var td_id = $(this).attr('data-pk');
        $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { id:td_id },
              });
        document.location.reload(true);    
      });      

      $(document).on('click', '.btn_rec_success', function(event)
      {
        event.preventDefault();
        var td_id = $(this).attr('data-pk');
        var td_todo = $(this).attr('data-t');
        $.ajax({
                url: 'sucess.php',
                type: 'POST',
                data: { todo:td_todo ,td_id:td_id },
              });
        document.location.reload(true);    
  

      });      

      $('#todolist_data').editable({
        container: 'body',
        selector: 'td.todo',
        url: "update.php",
        title: 'Task Edit',
        type: "POST",

        validate: function(value){
        if($.trim(value) == '')
        {
          return 'This field is required';
        }
        }
      });
    });
    </script>
</div>

<div class="container" style="margin-top:35px">
<h3 align="center">Sucess Table </h3>
  <table class="table table-bordered table-striped">
    <thead>
     <tr>
      <th width="80%">Task</th>
      <th> </th>
     </tr>
    </thead>
    <tbody id="suc_data">
    </tbody>
   </table>

   <script type="text/javascript" language="javascript" >
      $(document).ready(function(){
     
      function fetch_suc_data()
      {
        $.ajax(
        {
          url:"sucfetch.php",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
            console.log('coming from fetch.php', data);

            for(var count=0; count<data.length; count++)
            {
            var html_data = '<tr>';
            html_data += '<td data-name="todo" class="todo" data-type="text"  data-pk="'+data[count].id+'">'+data[count].suc+'</td>';
            html_data += '<td align="center"><a href="#" class="btn btn-sm btn-danger btn_rec_delete" data-pk="'+data[count].id+'"><span class="glyphicon glyphicon-trash"></span> Trash</a></tr>';
            $('#suc_data').append(html_data);
            }
          }
        });
      }
     
      fetch_suc_data();

      $(document).on('click', '.btn_rec_delete', function(event)
      {
        event.preventDefault();
        var td_id = $(this).attr('data-pk');
        $.ajax({
                url: 'sucdel.php',
                type: 'POST',
                data: { id:td_id },
              });
        document.location.reload(true);    
      });      

    });
    </script>
</div>
</body>
</html>
