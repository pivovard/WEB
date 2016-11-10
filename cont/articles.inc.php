<div class="container-fluid text-center">
    <div class="row content">
                
        <div class="col-sm-10 text-left content-odsazeni">
            <table class="table table-hover ">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Link</th>
                        <th>Score</th>
                    </tr>
                </thead>
                <tbody>
                    
<?php
                    
$db = new db_articles();
$db->Connect();
                    
$articles = $db->GetAllArticles();
                    
foreach($articles as $art)
{
    $user = $db->GetUser($art["author"]);
    $score = $db->GetOverallScore($art["score"]);
    
    echo "<tr><td>$art[title]</td>
        <td>$user[login]</td>
        <td><a href='pdf/$art[URL]'>$art[URL]</a></td>
        <td>$score</td></tr>";
}
                    
                    
?>
               
                </tbody>
            </table>
        </div>
                
        <?php include "nav/sidenav.php";?>
    </div>
</div>