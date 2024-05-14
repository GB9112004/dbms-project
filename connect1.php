<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "This is a POST request.";
} else {
    echo "This is not a POST request.";
}
?>