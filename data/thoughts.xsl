<?xml version="1.0" encoding="UTF-8"?>
<!--XSLT files act almost like HTML files, and can even themselves be styled by css and javascript-->

<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<!-- xsl template match is supposed to link the below html template to the xml data file that is calling it -->
<xsl:template match="/">

  <html>
    <head>
      <title>Happy Thoughts</title>
      <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <link type="text/css" rel="stylesheet" href="../css/materialize.css"  media="screen,projection"/>
      <link type="text/css" rel="stylesheet" href="../css/style.css"  media="screen,projection"/>
    </head>
    <body>
      <nav>
        <div class="nav-wrapper">
          <a href="../home" class="brand-logo center">Happy Thoughts</a>
        </div>
      </nav>
      <main>
        <div class="container">
        <table class="bordered responsive">
          <thead>
            <tr>
              <th>Author</th>
              <th>Year</th>
              <th>Quote</th>
              <th>Associated With?</th>
            </tr>
          </thead>
          <!-- XSL for-each loop that cycles through each "thought" and for each parent value, the set of child values are printed, all from the same neighboring xml file that is callng this xsl file -->
          <tbody>
            <xsl:for-each select="Advice/thought">
            <tr>
              <td><xsl:value-of select="author"/></td>
              <td><xsl:value-of select="year"/></td>
              <td><xsl:value-of select="quote"/></td>
              <td><xsl:value-of select="franchise"/></td>
            </tr>
            </xsl:for-each>
          </tbody>
        </table>
      </div>
    </main>
    <footer class="page-footer">
      <div class="container">
        <div class="row">
          <div class="col l6 s12">
            <h5>Footer Content</h5>
            <p>Click on "CHECK IT OUT!" and get yo'self some goodness dang flabbit, or my name ain't Mr. Hello World himself!</p>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5>The Only Link On This Page!</h5>
            <ul>
              <a href="../home" class="waves-effect waves-light btn-large" id="homeButton"><i class="material-icons right">cloud</i>Check it Out!</a>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="container">
          © 2017 A Nice Person
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.js"></script>
    <script type="text/javascript" src="../js/init.js"></script>
    </body>
  </html>

</xsl:template>

</xsl:stylesheet>
