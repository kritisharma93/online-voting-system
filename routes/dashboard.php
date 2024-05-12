<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}
$userdata=$_SESSION['userdata'];
$groupsdata=$_SESSION['groupsdata'];


if($userdata['status']==0){
    $status='<b style="color:red">Not Voted</b>';
}
else{
    $status='<b style="color:green">Voted</b>';
}
?>




<html>
    <head>
        <title>Online Voting System - Dashboard</title>
        <link rel="stylesheet" href="../css/stylesheet.css">
</head>
<body>
    <style>
#backbtn{
    padding:5px;
    border-radius:5px;
background-color:#ecf0f1;
color:black;
font-size:15px;
float:left;
}
#logoutbtn{
    padding:5px;
    border-radius:5px;
background-color:#ecf0f1;
color:black;
font-size:15px;
float:right;
}
#Profile{
    background-color: white;
    width: 30%;
    padding: 20px;
    float: left;

}
#Group{
    background-color: white;
    width: 60%;
    padding: 20px;
    float:right;


}
#votebtn{
    padding:5px;
    border-radius:5px;
background-color:#ecf0f1;
color:black;
font-size:15px; 
}
#mainsection{
    padding:10px;
}
</style>
    <div id="mainSection">
        <center>
  <div id="headersection">
    <button id="backbtn">Back</button>
    <button id="logoutbtn">Logout</button>
    <h1>Online Voting System</h1>
    </div>
        </center>
    <hr>
    <div id="Profile">
        <center><img style="float:right" src="../uploads/<? echo $userdata['photo']?> " height="100" width="100"></center><br/><br/>

        <b>Name:</b> <?php echo $userdata['name']?> <br></br>
        <b>Mobile:</b> <?php echo $userdata['mobile']?> <br></br>
        <b>Address:</b> <?php echo $userdata['address']?> <br></br>
        <b>Status:</b> <?php echo $status?> <br></br>
    </div>
    <div id ="Group">
<?php
if($_SESSION['groupsdata']){
for($i=0; $i<count($groupsdata); $i++){
    ?>

    <div>
        <img src="../uploads/<?php  echo $groupsdata[$i]['photo']  ?>" height="100" width="100">
    <b>Group Name:</b> <?php echo $groupsdata[$i]['name']?><br><br>
    <b>Votes:</b><?php echo $groupsdata[$i]['votes']?><br><br>
    <form action="#">
        <input type="hidden" name="gvotes" value="<?php $groupsdata[$i]['votes'] ?>">
        <input type="submit" name="votebtn" value="vote" id="votebtn">

    </form>



    </div>
<hr>
    <?php



?>
}
}
else{

}


?>
    </div>
    </div>
</body>
</html>