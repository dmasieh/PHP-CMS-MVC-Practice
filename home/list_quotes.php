<?php include '../view/header.php'; ?>

<div class="container">
  <div class="row">
    <!--Single Page Tab Layout-->
    <div class="s12 m9">
      <ul class="tabs">
        <li class="tab col s6 m6"><a href="#db">Happy Database!</a></li>
        <li class="tab col s6 m6"><a href="#ajax">Happy XML/AJAX!</a></li>
      </ul>
    </div>
  </div>
  <div id="db" class="col s12">
      <table class="bordered responsive">
        <thead>
          <tr>
              <th>Author</th>
              <th>Year</th>
              <th>Quote</th>
              <th>Edit Values?</th>
              <th>Delete Values?</th>
          </tr>
        </thead>
        <tbody>
          <!--php for each loop for each item, populate each of the fields through echoing-->
          <?php foreach ($quote as $quotes): ?>
          <tr>
            <td><?php echo $quotes['quoteAuthor']; ?></td>
            <td><?php echo $quotes['quoteYear']; ?></td>
            <td><?php echo $quotes['quoteText']; ?></td>
            <td>
              <!--Edit the information corresponding to their primary key value-->
              <a class="waves-effect waves-light btn" href="?action=update_quote&quoteId=<?php echo $quotes['quoteId']; ?>">Edit Value</a> <!--put a button here-->
            </td>
            <td>
              <form action="." method="post">
                <input type="hidden" name="action" value="delete_quote" />

                <input type="hidden" name="quoteId" value="<?php echo $quotes['quoteId']; ?>" />

                <!-- fix the button here-->
                <button type="submit" name="delete" class="waves-effect waves-light btn">Delete</button>
              </form>
            </td>
          </tr>
            <!--hypertext reference link above,indicating to edit each quote by the quote ID that is tied to each value,
                  along with that, having a form right on the page, without needing a delete_item.php
                  page, with the press of a button, one can just delete an item straight off-->
          <?php endforeach; ?>
        </tbody>
      </table>
      <br />
      <div class="row">
        <div class="col s4 offset-s8">
            <a class="waves-effect waves-light btn center" href="?action=add_quote_form"><i class="material-icons right">add</i>Add Quote!</a>
        </div>
      </div>
  </div>
  <div id="ajax" class="col s12">
    <div class="row">
      <div class="col s12 m12 l9">
        <div class="card-panel">
          <div class="row">
            <div class="col s12 m4">
              <span class="white-text">
                <h5>Search Quotes By Speaker</h5>
              </span>
            </div>
            <div class="col s12 m8">
              <br />
              <span class="white-text">
            			Flip Through Happy People:
                  <a class="waves-effect waves-light btn right" id="homeButton" onclick="next()" value=">>"><i class="material-icons left">fast_forward</i></a>
                  <a class="waves-effect waves-light btn right" id="homeButton" onclick="previous()" value="<<"><i class="material-icons left">fast_rewind</i></a>
              </span>
            </div>
          </div>
          <br />
          <span class="white-text">
            <table class="bordered responsive">
              <thead>
                <tr>
                    <th>Author</th>
                    <th>Year</th>
                    <th>Quote</th>
                </tr>
              </thead>
              <tbody id="ajaxTable">
              </tbody>
            </table>
          </span>
        </div>
      </div>
      <div class="col s12 m12 l3">
        <div class="card-panel">
          <span class="white-text">
            <h5>Some of Happy Sites!</h5>
            <form>
        			Search Sites: <input type="text" onkeyup="showQuoteSite(this.value)" />
        		</form>
            <p>
        		<div id="showLink"></div>
        		</p>
          </span>
        </div>
        <a id="homeButton" href="../data/thoughts.xml" class="waves-effect waves-light btn center"><i class="material-icons right">flip_to_back</i>XSLT Transform!</a>
      </div>
    </div>
  </div>
</div>

<?php include '../view/footer.php'; ?>
