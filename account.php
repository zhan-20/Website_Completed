<?php
//$email1=$_SESSION['email'];
//$teamname1=$_SESSION['teamname'];
//$member11=$_SESSION['member1'];
//$member21=$_SESSION['member2'];
//$member31=$_SESSION['member3'];
//$permissions1=$_SESSION['permission'];
if(isset($_POST['login_user'])) {
    session_start();
    global $email;
    $email=$_SESSION['email'];
global $teamname;
global $teamleader;
global $member1;
global $member2;
global $member3;
global $permissions;
global $member4;
global $schoolname;
global $numberofpeople;
//$email=$_POST['email'];
$schoolname=$_POST['schoolname'];
    $teamname=$_POST['teamname'];
    $teamleader=$_POST['leader'];
    $member1=$_POST['member1'];
    $numberofpeople=1;
    $member2="NONE";
    if (isset($_POST['member2'])) {
        $member2=$_POST['member2'];
        if ($_POST['member2']!=NULL)$numberofpeople++;
    }
    $member3="NONE";
    if (isset($_POST['member3'])) {
        $member3=$_POST['member3'];
        if ($_POST['member3']!=NULL) $numberofpeople++;
    }
    $member4="NONE";
    if (isset($_POST['member4'])) {
        $member4=$_POST['member4'];
        if ($_POST['member4']!=NULL)$numberofpeople++;
    }

    /*if (isset($_POST['permit'])){
      if ($_POST['permit']=="Yes")
      $permissions=0;
      else $permissions=1;
      }
   */
  $permissions=1;
///////////////////////
global $member1allergy;
global $member2allergy;
global $member3allergy;
global $member4allergy;
global $member1size;
global $member2size;
global $member3size;
global $member4size;
global $member1mac;
global $member2mac;
global $member3mac;
global $member4mac;
     $membersizes=array("", "", "", "");
     $memberallergy=array("", "", "", "");
     $membermacs=array("","","","");
    $tshirts=$_POST['t-shirts'];
    $allergies=$_POST['allergies'];
    $macbook=$_POST['macbook'];
    $allergies=substr($allergies, 0, strlen($allergies)-1);
    $tshirts=substr($tshirts, 0, strlen($tshirts)-1);
    $macs=substr($macbook, 0, strlen($macbook)-1);
    $ttt=array($tshirts,"","","","");
    $aaa=array($allergies,"","","","");
    $mmm=array($macs,"","","","");
    for ($i=1; $i<$numberofpeople+1; $i++) {
        if ($i<$numberofpeople) {
        $int=strpos($ttt[$i-1],";");
        $element=substr($ttt[$i-1], 0, $int);
        $membersizes[$i-1]=$element;
        $ttt[$i]=substr($ttt[$i-1], $int+2);
        }
        else {
          $membersizes[$i-1]=$ttt[$i-1];
        }
    }
    for ($j=1; $j<$numberofpeople+1; $j++) {
        if($j<$numberofpeople) {
        $int1=strpos($aaa[$j-1],";");
        $element1=substr($aaa[$j-1], 0, $int1);
        $memberallergy[$j-1]=$element1;
        $aaa[$j]=substr($aaa[$j-1], $int1+2);
        }
        else {
            $memberallergy[$j-1]=$aaa[$j-1];
        }
    }
    for ($v=1; $v<$numberofpeople+1; $v++) {
        if ($v<$numberofpeople) {
        $int=strpos($mmm[$v-1],";");
        $element=substr($mmm[$v-1], 0, $int);
        $membermacs[$v-1]=$element;
        $mmm[$v]=substr($mmm[$v-1], $int+2);
        }
        else {
          $membermacs[$v-1]=$mmm[$v-1];
        }
    }
    $member1size=$membersizes[0];
    $member2size=$membersizes[1];
    $member3size=$membersizes[2];
    $member4size=$membersizes[3];
    $member1allergy=$memberallergy[0];
    $member2allergy=$memberallergy[1];
    $member3allergy=$memberallergy[2];
    $member4allergy=$memberallergy[3];
    $member1mac=$membermacs[0];
    $member2mac=$membermacs[1];
    $member3mac=$membermacs[2];
    $member4mac=$membermacs[3];
///////////////////////////////
    $link2 = mysqli_connect('localhost', 'root', 'THaaa123+', 'Peddie_Hackathon');
    $query2="INSERT INTO Peddie_Hackathon(Email, TeamName, SchoolName, TeamLeader,
    TeamMember1, TeamMember2, TeamMember3, TeamMember4, PermissionsSigned) VALUES
    ('$email', '$teamname', '$schoolname', '$teamleader', '$member1', '$member2',
    '$member3', '$member4', $permissions)";
    $query3="INSERT INTO Additional_information(SchoolName, TeamName, Member1Allergy,
    Member2Allergy, Member3Allergy, Member4Allergy, Member1TShirtSize, 
    Member2TShirtSize, Member3TShirtSize, Member4TShirtSize, Member1Mac,
    Member2Mac, Member3Mac, Member4Mac) VALUES
    ('$schoolname', '$teamname', '$member1allergy','$member2allergy','$member3allergy',
    '$member4allergy','$member1size','$member2size','$member3size','$member4size', 
    '$member1mac','$member2mac','$member3mac','$member4mac')";
    if(mysqli_query($link2, $query2)){
        if(mysqli_query($link2, $query3)) {
        $message12="Record Inserted Successfully";
        echo "<script type='text/javascript'>alert('$message12');</script>";
        echo "<script type='text/javascript'>window.location.replace('./index.html');</script>";
        die();
        }
    } else {
    $message12="ERROR: Could not able to execute $query2. " . mysqli_error($link2);
    echo "<script type='text/javascript'>alert('$message12');</script>";
    }
    mysqli_close($link2);
}
?>
