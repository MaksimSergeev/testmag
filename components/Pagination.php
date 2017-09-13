<?php

// Class Pagination for generation page navigation
class Pagination
{
    // Number of navigation links per page
    private $max = 10;
    // Key for GET
    private $index = 'page';
    // Current page
    private $current_page;
    // Total number of entries
    private $total;
    // Page limit entries
    private $limit;

    public function __construct($total, $currentPage, $limit, $index)
    {
        $this->total = $total;
        $this->limit = $limit;
        $this->index = $index;
        // Set the number of pages
        $this->amount = $this->amount();
        // Set the current page number
        $this->setCurrentPage($currentPage);
    }
    // return HTML with navigation links
    public function get()
    {
        // To write links
        $links = null;
        // We get restrictions for the cycle
        $limits = $this->limits();

        $html = '<ul class="pagination">';
        // Generate links
        for ($page = $limits[0]; $page <= $limits[1]; $page++) {
            // If the current page is the current page, there is no link and the active class is added
            if ($page == $this->current_page) {
                $links .= '<li class="active"><a href="//">' . $page . '</a></li>';
            } else {
                // Else generate a link
                $links .= $this->generateHtml($page);
            }
        }

        // If the links were created
        if (!is_null($links)) {
            // If the current page is not the first one
            if ($this->current_page > 1)
                // Create a link to "To first"
                $links = $this->generateHtml(1, '&lt;') . $links;
            // If the current page is not the first one
            if ($this->current_page < $this->amount)
                // Create a link "To the last"
                $links .= $this->generateHtml($this->amount, '&gt;');
        }

        $html .= $links . '</ul>';

        // Return html
        return $html;
    }

    // Generate the HTML link code
    private function generateHtml($page, $text = null)
    {
        // If no link text is specified
        if (!$text)
            // Specify that the text is the number of the page
            $text = $page;

        $currentURI = rtrim($_SERVER['REQUEST_URI'], '/') . '/';
        $currentURI = preg_replace('~/page-[0-9]+~', '', $currentURI);
        // Generate HTML link code and return
        return
                '<li><a href="' . $currentURI . $this->index . $page . '">' . $text . '</a></li>';
    }

    // To get where to start.
    // Array with start and end of count
    private function limits()
    {
        // Calculate the links on the left (for the active link to be in the middle)
        $left = $this->current_page - round($this->max / 2);
        // Compute the reference point
        $start = $left > 0 ? $left : 1;
        // If there is at least $this-> max pages
        if ($start + $this->max <= $this->amount) {
            // Assign the end of the loop forward to $this-> max pages or just a minimum
            $end = $start > 1 ? $start + $this->max : $this->max;
        } else {
            // End - the total number of pages
            $end = $this->amount;
            // Start - minus $this-> max from the end
            $start = $this->amount - $this->max > 0 ? $this->amount - $this->max : 1;
        }
        return
                array($start, $end);
    }

    // To set the current page
    private function setCurrentPage($currentPage)
    {
        // Get the page number
        $this->current_page = $currentPage;
        // If the current page is greater than zero
        if ($this->current_page > 0) {
            // If the current page is less than the total number of pages
            if ($this->current_page > $this->amount)
                // Set the page to the last one
                $this->current_page = $this->amount;
        } else
            // Set the page to first
            $this->current_page = 1;
    }

    // To get the total number of pages
    private function amount()
    {
        // Divide and return
        return ceil($this->total / $this->limit);
    }
}
