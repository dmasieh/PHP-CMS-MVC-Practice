<?php
	function get_quotes() {
		global $db;
		$query = 'SELECT * FROM Quotes
					ORDER BY QuoteID';
		$quotes = $db->query($query);
		return $quotes;
		}


	function get_quote($quote_id) {
		global $db;
		$query = "SELECT * FROM Quotes
					WHERE QuoteID = '$quote_id'";
		$quote = $db->query($query);
		$quote = $quote->fetch();
		return $quote;
	}

	function get_quote_name($quote_id) {
		global $db;
		$query = "SELECT * FROM Quotes
					WHERE QuoteID = '$Quote_id'";
		$quote = $db->query($query);
		$quote = $quote->fetch();
		$quote_name = $quote['Quote'];
		return $quote_name;
	}
	?>