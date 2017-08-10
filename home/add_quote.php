<?php include '../view/header.php'; ?>

<div class="container">
  <h3 id="textHeader">Add a Quote!</h3>
  <div class="row">
    <form class="col s12" id="add_quote_form" method="post" action="index.php">
      <input type="hidden" name="action" value="add_quote" />
        <div class="row">
          <div class="input-field col s12 m6 l6">
            <h5>Add an Author's Name</h5>
            <input value="" name="quoteAuthor" type="text" class="validate">
            <label for="quote_author">Quote Author</label>
          </div>
          <div class="input-field col s12 m6 l6">
            <h5>Add a Quote's Year</h5>
            <input value="" name="quoteYear" type="text" class="validate">
            <label for="quote_yr">Quote Year</label>
          </div>
          <div class="input-field col s12 m12 l12">
            <h5>Add the Quote's Content</h5>
            <input value="" name="quoteText" type="text" class="validate">
            <label for="quote_text">Quote</label>
          </div>
        </div>
      <button class="waves-effect waves-light btn" type="submit" name="Submit Changes" value="Add Quote"><i class="material-icons right">add</i>Submit The New Quote</button>
    </form>
  </div>
</div>

<?php include '../view/footer.php'; ?>
