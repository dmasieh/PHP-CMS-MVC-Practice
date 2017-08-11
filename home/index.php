<?php
require('../model/database.php');
require('../model/quote_db.php');

if (isset($_POST['action'])) {
  $action = $_POST['action'];
} else if (isset($_GET['action'])) {
  $action = $_GET['action'];
} else {
  $action = 'view_quotes';
}

// list the quotes
if ($action == 'view_quotes'){
  $quote = get_quotes();
  include ('list_quotes.php');
  // if not listing, utilize the "D" in CRUD, Delete the quote
} else if ($action == 'delete_quote') {
  $quote_id = $_POST['quoteId'];
  delete_quote($quote_id);
  // post an action to return the listing to determine what quote was deleted

  //$quote = get_quote();
  header("Location: .?quoteid=$quote_id");
  include ('list_quotes.php');
} else if ($action == 'add_quote_form') {
  // include the page to add values and quotes, should be different to redirect  the user to the form and redirect back to the page layout
  include ('add_quote.php');
  //utilize the function that will be used in the above created page
} else if ($action == 'add_quote') {
  $quote_author = $_POST['quoteAuthor'];
  $quote_yr = $_POST['quoteYear'];
  $quote_text = $_POST['quoteText'];

  //if statement if all form input values are empty, redo form
  if(empty($quote_author) || empty($quote_yr) || empty($quote_text)) {
    $error = "Red 5 Stay On Target, Form will not work unless you fill out everything!";
  } else{
    add_quote($quote_author, $quote_yr, $quote_text);
    $quote = get_quotes();
    include ('list_quotes.php');
  }
// else if for updating the quotes and also GETting them by their primary key
} else if ($action == 'update_quote') {
  if(isset($_GET['quoteId'])) {
    $quote_id = intval($_GET['quoteId']);
  } else {
    $quote_id = 1;
  }
  $quote = get_quote_by_quoteId($quote_id);
  include ('update_quote.php');
} else if ($action == 'update_quotes') {
  if(isset($_GET['quote_id'])){
    $quote_id = intval($_GET['quoteId']);
  } else {
    $quoteId = 1;
  }
  $quote_id = $_POST['quoteId'];
  $quote_author = $_POST['quoteAuthor'];
  $quote_yr = $_POST['quoteYear'];
  $quote_text = $_POST['quoteText'];

  /*Error message that prints when there are any empty form input fields*/
  if(empty($quote_id) || empty($quote_author) || empty($quote_yr) || empty($quote_text)) {
    $error = "Red 5 Stay On Target, Form will not work unless you fill out everything!";
  } else {
    /*Update the quotes and then GET the updated list*/
    update_quote($quote_id, $quote_author, $quote_yr, $quote_text);
      $quote = get_quotes();
      include ('list_quotes.php');
  }
}

?>
