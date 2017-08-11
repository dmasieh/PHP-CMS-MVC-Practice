<?php include '../view/header.php'; ?>
<!--Form to edit quotes-->
<div class="container">
  <h3 id="textHeader">Edit This Value!</h3>
  <div class="row">
    <form class="col s12" id="update_quote" method="post">
      <?php foreach ($quote as $quotes): ?>
        <input type="hidden" name="action" value="update_quotes" />
        <input type="hidden" name="quoteId" value="<?php echo $quotes['quoteId']; ?>" />
      <div class="row">
        <div class="input-field col s12 m6 l6">
          <h5>Change the Author's Name</h5>
          <input value="<?php echo $quotes['quoteAuthor']; ?>" name="quoteAuthor" type="text" class="validate">
          <label class="active" for="quote_author">Quote Author</label>
        </div>
        <div class="input-field col s12 m6 l6">
          <h5>Change the Quote's Year</h5>
          <input value="<?php echo $quotes['quoteYear']; ?>" name="quoteYear" type="text" class="validate">
          <label class="active" for="quote_yr">Quote Year</label>
        </div>
        <div class="input-field col s12 m12 l12">
          <h5>Change the Content of the Quote</h5>
          <input value="<?php echo $quotes['quoteText']; ?>" name="quoteText" type="text" class="validate">
          <label class="active" for="quote_text">Quotes</label>
        </div>
      </div>
      <?php endforeach; ?>
      <button class="waves-effect waves-light btn" type="submit" name="Submit Changes" value="update_quote">Submit</button>
    </form>
  </div>


</div>

<?php include '../view/footer.php'; ?>
