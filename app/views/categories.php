<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></head>
<body>

<table class="table table-light table-striped">
    <tbody>
    <thead class="thead-dark">
        <tr>
            <th>#</th>
            <th>Category Name</th>
            <th>Categoy Parent</th>
            <th>Create Date</th>
            <th colspan="2">Action</th>
        </tr>
        </thead>
       
        <?php
         $rows=$data['categories'];
          foreach($rows as $row){
             echo "<tr> <td value=$row->cat_id>$row->cat_id</td>";
             echo"
             <td>$row->cat_name</td> ";
             echo"
             <td >$row->parrent </td> ";
             echo"
             <td >$row->create_date</td> ";
             echo
             '<td class="actions">
            <a href="delete?id="> <i  class=" btn fa fa-trash-o" style="font-size:24px" ></i></a>
             <i class="btn fa fa-pencil" style="font-size:24px"></i>
            </td>  </tr>';
                                                   }
                                                   ?>
                                                    
       
    </tbody>
</table>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>