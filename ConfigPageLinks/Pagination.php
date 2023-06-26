<?php

namespace dbProject\ConfigPageLinks;

class Pagination {
    public $limit;
    public $page;
    public $date;

    public function __construct($limit = 10) {
        $this->limit = $limit;
        $this->page = isset($_GET['page']) ? intval($_GET['page']) : 1;
    }

    public function getOffSet() {
        return ($this->page - 1) * $this->limit;
    }

    public function links($data = true) {
        $prev_link = ($this->page > 1) ? '<a href="/regProj/frontend/index.php?page='.($this->page - 1).'">Previous</a>' : '';
        if ($data === true) {

            $next_link = '<a href="/regProj/frontend/index.php?page='.($this->page + 1).'">Next</a>';
            return "<div>{$prev_link} {$next_link}</div>";
        }
        return "<div>{$prev_link}</div>";
    }
}
?>