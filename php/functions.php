<?php

class MyFunctions
{
    private $total_records_per_page = 5;

    public function decideWhichFunctionToCall($conn,$tags)
    {
        $searchKeyword = isset($_GET['search']) ? $_GET['search'] : '';
        $page = isset($_GET['page']) && $_GET['page'] !== "" ? $_GET['page'] : 1;
        $category_id = isset($_GET['id']) ? $_GET['id'] : null;
        $selectedTag = isset($_GET['tag_id']) ? mysqli_real_escape_string($conn, $_GET['tag_id']) : null;

        $num_pages = $this->calculateNumPages($conn, $searchKeyword, $category_id);
        if (!empty($searchKeyword)) {
            return $this->getSearchResults($conn, $page, $searchKeyword, $num_pages);
        } elseif ($category_id) {
            return $this->getCategoryResults($conn, $category_id, $page, $num_pages);
        } elseif ($selectedTag && $conn) {
            return $this->getArticlesWithTags($conn, $selectedTag, $page, $num_pages);
        } else {
            return $this->getAllResults($conn, $page, $num_pages);
        }
    }

    private function calculateNumPages($conn, $searchKeyword, $category_id)
    {
        if (!empty($searchKeyword)) {
            $count_sql = "SELECT COUNT(*) AS article_count FROM articles WHERE tittle LIKE '%$searchKeyword%'";
        } elseif ($category_id) {
            $count_sql = "SELECT COUNT(*) AS article_count FROM articles WHERE category = $category_id";
        } else {
            $count_sql = "SELECT COUNT(*) AS article_count FROM articles";
        }

        $count_result = mysqli_query($conn, $count_sql);
        if ($count_result) {
            $row = mysqli_fetch_assoc($count_result);
            $total_articles = $row["article_count"];
            $num_pages = ceil($total_articles / $this->total_records_per_page);
        } else {
            $num_pages = 0;
        }

        return $num_pages;
    }

    public function getSearchResults($conn, $page, $searchKeyword, $num_pages)
    {
        $searchKeyword = mysqli_real_escape_string($conn, $searchKeyword);


        $offset = ($page - 1) * $this->total_records_per_page;

        $searchKeyword = mysqli_real_escape_string($conn, $searchKeyword);

        $sql = "SELECT a.id, a.tittle, a.description, c.name AS category_name, a.calendar, a.img 
            FROM articles AS a 
            LEFT JOIN category AS c ON a.category = c.id
            WHERE a.title LIKE '%$searchKeyword%'
            ORDER BY a.calendar ASC
            LIMIT $offset, $this->total_records_per_page";

        $result = mysqli_query($conn, $sql);

        return array("result" => $result,  "num_pages" => $num_pages);
    }

    public function getCategoryResults($conn, $category_id, $page, $num_pages)
    {
        $category_id = mysqli_real_escape_string($conn, $category_id);


        $offset = ($page - 1) * $this->total_records_per_page;


        $category_id = mysqli_real_escape_string($conn, $category_id);
        $sql = "SELECT a.id, a.tittle, a.description, c.name AS category_name, a.calendar, a.img 
            FROM articles AS a 
            LEFT JOIN category AS c ON a.category = c.id
            WHERE c.id = $category_id
            ORDER BY a.calendar ASC
            LIMIT $offset, $this->total_records_per_page";

        $result = mysqli_query($conn, $sql);

        return array("result" => $result, "num_pages" => $num_pages);
    }

    public function getAllResults($conn, $page, $num_pages)
    {

        $offset = ($page - 1) * $this->total_records_per_page;

        $sql = "SELECT a.id, a.tittle, a.description, c.name AS category_name, a.calendar, a.img 
            FROM articles AS a 
            LEFT JOIN category AS c ON a.category = c.id
            ORDER BY a.calendar ASC
            LIMIT $offset, $this->total_records_per_page";

        $result = mysqli_query($conn, $sql);
        return array("result" => $result, "num_pages" => $num_pages);
    }

    public function getArticlesWithTags($conn, $selectedTag, $page, $num_pages)
    {

        $selectedTag = mysqli_real_escape_string($conn, $selectedTag);

        $offset = ($page - 1) * $this->total_records_per_page;
       
        $sql = "SELECT a.id, a.tittle, a.description, c.name as  category_name ,a.calendar, a.img
        FROM articles AS a
        LEFT JOIN category AS c ON a.category = c.id
        LEFT JOIN articleTag AS at ON a.id = at.id
        LEFT JOIN tag AS t ON at.id_tags = t.id_tags
        WHERE t.title = '$selectedTag'
        ORDER BY a.calendar ASC
        LIMIT $offset, $this->total_records_per_page";
    
        $result = mysqli_query($conn, $sql);
       
       
        
        $article = mysqli_fetch_assoc($result) ;
              
            
            
        
        return array("result" => $result, "num_pages" => $num_pages);
    }
} 
?>
