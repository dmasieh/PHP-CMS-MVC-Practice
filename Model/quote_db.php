<?php

  function get_quotes() {
    global $db;
    $query = 'SELECT * FROM quote
      ORDER BY quoteId';
    $quotes = $db->query($query);
    return $quotes;
  }

  function get_quote_by_quoteId($quote_id) {
		global $db;
		$query = "SELECT * FROM quote
					WHERE quoteId = '$quote_id'";
		$quotes = $db->query($query);
		return $quotes;
	}

  function add_quote($quote_author, $quote_yr, $quote_text) {
		global $db;
		$query = "INSERT INTO quote(quoteAuthor, quoteYear, quoteText) VALUES ('$quote_author', '$quote_yr', '$quote_text')";
		$db->exec($query);
	}

  function delete_quote($quote_id) {
		global $db;
		$query = "DELETE FROM quote
					WHERE quoteId = '$quote_id'";
		$db->exec($query);
	}

  function update_quote($quote_id, $quote_author, $quote_yr, $quote_text) {
    global $db;
    $query = "UPDATE quote
      SET quoteAuthor = '$quote_author', quoteYear = '$quote_yr', quoteText = '$quote_text' WHERE quoteId = '$quote_id'";
    $db->exec($query);
  }

?>
