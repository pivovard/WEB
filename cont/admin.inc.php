<div class="container-fluid text-center">
    <div class="row content">
        <div class="col-sm-10 text-left content-odsazeni">            
                
<?php
        
$action = @$_REQUEST["action"]."";
$articleID = @$_REQUEST["articleID"]."";
$userID = @$_REQUEST["userID"]."";

$db = new db_articles();
$db->Connect();
            

if($action == "delete_article")
{
    $db->DeleteArticle($articleID);
}
            
if($action == "approve")
{
    $db->ApproveArticle($articleID);
}
            
if($action == "delete_user")
{
    $db->DeleteUser($userID);
}
            
            
?>
            
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Link</th>
                        <th>Reviewers</th>
                        <th>Score</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    
                    
<?php
            
$articles = $db->GetAllArticles();
                    
foreach($articles as $art)
{
    $user = $db->GetUser($art["author"]);
    $rev1 = $db->GetScore($art["score1"]);
    $rev1 = $db->GetUser($rev1["rev"]);
    $rev2 = $db->GetScore($art["score2"]);
    $rev2 = $db->GetUser($rev2["rev"]);
    $rev3 = $db->GetScore($art["score3"]);
    $rev3 = $db->GetUser($rev3["rev"]);
    $score = $db->GetOverallScore($art["score1"], $art["score2"], $art["score3"]);
    
    echo "<tr><td>$art[title]</td>
        <td>$user[login]</td>
        <td><a href='pdf/$art[URL]'>$art[URL]</a></td>
        <td>$rev1[login], $rev2[login], $rev3[login]</td>
        <td>$score</td>
        <td>";
    if($art["pass"] == 0) echo "<a href='index.php?page=admin&action=approve&articleID=$art[ID]' class='glyphicon glyphicon-ok' style='color:green'></a>   ";
    echo "<a href='index.php?page=admin&action=delete_article&articleID=$art[ID]' class='glyphicon glyphicon-remove' style='color:red'></a></td></tr>";
}            
            
?> 
            </tbody>
            </table>
                    
            <hr>
                    
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Right</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            
<?php
           
$users = $db->GetAllUsers();
                    
foreach($users as $user)
{
    $right = $db->GetRight($user["right"]);
    
    echo "<tr><td>$user[login]</td>
        <td>$right[right]</td>
        <td></td>
        <td><a href='index.php?page=admin&action=delete_user&userID=$user[ID]' class='glyphicon glyphicon-remove' style='color:red'></a></td></tr>";
}
                    
?>
            
                    
            </tbody>
            </table>        
        </div>        
        <?php include "nav/sidenav.php";?>
    </div>
</div>