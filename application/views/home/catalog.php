<div class="container" style="margin-top: 70px">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Find articles, books, and other library items</h3>
    </div>

    <div class="panel-body">
      <ul class="nav nav-tabs" id="myTab">
        <li class="active"><a href="#books">Books and More</a></li>
        <li><a href="#articles">Quick Articles</a></li>
        <li><a href="#other">Other Collections</a></li>
        <li><a href="#reserves">Course Reserves</a></li>
      </ul> <!-- // .nav nav-tabs -->

      <div class="tab-content" style="margin-top: 20px;">
        <div class="tab-pane active" id="books">
          <form role="form" id="searchbox" name="searchBox">

            <div class="panel panel-primary">
              <div class="panel-heading">
                <div class="panel-heading">Panel heading</div>
              </div>

              <ul class="list-group">
                <li class="list-group-item">
                  <label class="radio-inline">
                    <input type="radio" name="optionsRadios">Basic Search
                  </label>

                  <label class="radio-inline">
                    <input type="radio" name="optionsRadios">Search begins with (browse)
                  </label>

                  <label class="radio-inline">
                    <input type="radio" name="optionsRadios">Advanced Search
                  </label>
                </li>

                <li class="list-group-item">
                  <input id="box" type="text" name="st" class="form-control" placeholder="Enter your search terms here...">
                </li>

                <li class="list-group-item">
                  <select id="catsearchix" name="ix" class="form-control input-sm">
                    <option value="kw"selected>Anywhere</option>
                    <option value="ti">Title</option>
                    <option value="jt">Journal Title</option>
                    <option value="au">Author</option>
                    <option value="su">Subject Heading</option>
                    <option value="si">Series</option>
                    <option value="nu">ISBN, ISSN, OCLC, etc.</option>
                    <option value="cn">Call Number</option>
                  </select> <!-- // .select -->
                </li>
              </ul>

              <div class="panel-footer">
                <input type="submit" class="btn btn-primary" value="Search">
                <input type="hidden" name="S" value="2491377868729387" />
                <input type="hidden" name="fl" value="bo" />
              </div>
            </div>
          </form> <!-- // form -->
        </div>

        <div class="tab-pane" id="articles">...</div> <!-- // .tab-pane #articles -->
        <div class="tab-pane" id="other">...</div> <!-- // .tab-pane  #other -->
        <div class="tab-pane" id="reserves">...</div> <!-- // .tab-pane #reserves -->
      </div> <!-- // .tab-pane #books -->
    </div> <!-- // .tab-content -->
    <div class="panel-footer">
      <small class="text-muted">Copyright &copy; <?php echo date('Y', time()); ?> University of North Florida</small>
    </div>
  </div>
</div>
