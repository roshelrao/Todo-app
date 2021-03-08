
<?php
session_start();

$mysql= new mysqli ("localhost","root","","list") or die (mysqli_connect_error());
$id = $_SESSION['id'];
$result=mysqli_query($mysql,"Select * from todo WHERE uid = '$id'");

if(isset($_GET['delete'])){
    $query = "delete from todo where tid=" . $_GET['delete'];
    $del1= mysqli_query($mysql, $query);
    header("Location: /todo/add.php");
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Addlist</title>
    <style>

    .add-table{
        background-color:#DEFAF4;
        color:black;
        width:100%;
    }
    .delete-button{
        background-color:red;
        color:white;
        padding:2px;
        text-decoration:none;
        border-radius:15%;
    }

    .form{
        display: flex;
        flex-direction: column;
        padding: 2em;
        /*align-items: center;
        align-content: center;*/
    }
    .form>div{
        padding:4px;
        height: 5vh;
        width: 50%;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
    }
    .form>div>input{
        width: 200px;
        border-style: double;
        border-color:#77DD66 ;
    }
    .btn{
        background-color:#77DD66;
        border-style: none;
        border-radius: 50px;
    }
    #newTodo{
        background-color:#96B9D0;
        color:white;
        padding:5px;
        border-style:none;
        border-radius:5%;
    }
    </style>
</head>
<body>
<?php include 'navbar.php';?>
<table class="add-table">
<th align="left">Description</th>
<th align="left">Added date</th>
<th align="left">End date</th>
<th align="left">Status</th>
<?php
while($row = mysqli_fetch_array($result))
{   
    echo "<tr><td>" . $row['description'] . "</td><td>" . $row['addeddate'] ."</td><td>" .$row['expire']."</td><td><input type='checkbox' value='done'></td><td><a class='delete-button' href='/todo/add.php?delete=".$row['tid']."'>Delete</a></td></tr>";  

}    
?>
</table>
<br>
<button type="button" id="newTodo">New Todo</button>

<div id="open" style="display: none;">
    <form class="form" name="form2" method="post" action="adb.php">
        <div>
        Description : <input type="text" name="des">
        </div>
        <div>
        Date : <input type="date" name="adate">
        </div>
        <div>
        Expire : <input type="date" name="expire">
        </div>
        <div>
        <input class="btn" type="submit" name="add" id="add" value="Add">
    </div>
    </form>
</div>


<script>
    let modal = document.getElementById("open");
    let add = document.getElementById("add");
    let newTodoBtn = document.getElementById("newTodo");

    newTodoBtn.addEventListener('click', () => {
        modal.style.display = "block";
    })

    add.addEventListener('click', () => {
        modal.style.display = "none";
    })

</script>
</body>
</html>




