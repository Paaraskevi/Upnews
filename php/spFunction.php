<?php

class spFunction
{
    public function getSingleArticle($conn)
    {
        if (isset($_GET['article_id'])) {
            $article_id = $_GET['article_id'];
            $sql = "SELECT a.id, a.tittle, a.description, a.paragraph, c.name AS category_name, a.calendar, a.img 
            FROM articles as a 
            LEFT JOIN category as c ON a.category = c.id
            WHERE a.id = $article_id";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                $article = mysqli_fetch_assoc($result);
                return $article;
            }
        }
    }

    public function getTagsForArticle($conn, $article_id) {
     
           $sql=" SELECT t.title
           FROM testdb.tag as t
           LEFT JOIN testdb.articleTag as at ON at.id_tags = t.id_tags
           WHERE at.id = $article_id";
        $result = mysqli_query($conn, $sql);
       
        
        if ($result && mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $tags[] = $row['title'];
            }
        }
        
        return $tags; 
    }
}
