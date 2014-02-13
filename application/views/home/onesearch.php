<div class="container" style="margin-top: 70px">
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h3 class="panel-title">Find articles, books, and other library items</h3>
    </div>

    <div class="panel-body">
      <!-- EBSCOhost Custom Search Box Begins -->
      <script src="http://support.ebscohost.com/eit/scripts/ebscohostsearch.js" type="text/javascript"></script>
      <form id="ebscohostCustomSearchBox" action="" onsubmit="return ebscoHostSearchGo(this);" method="post">
        <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1" />
        <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s6281220&groupid=main&profid=unflib&mode=bool&lang=en&authtype=cookie,ip,guest" />
        <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" />
        <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+" />
        <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />

        <div class="container">
          <div class="input-group">
            <input type="text" id="ebscohostsearchtext" name="ebscohostsearchtext" class="form-control" placeholder="Enter your search terms here..." />
            <span class="input-group-btn">
              <input type="submit" value="Search" class="btn btn-primary" />
            </span>
          </div>

          <div class="radio-inline">
            <label for="guidedField_0">
              <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_0" value="" checked="checked" />
              &nbsp;Keyword
            </label>
          </div>

          <div class="radio-inline">
            <label for="guidedField_1">
              <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_1" value="TI" />
              &nbsp;Title
            </label>
          </div>

          <div class="radio-inline">
            <label for="guidedField_2">
              <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_2" value="AU" />
              &nbsp;Author
            </label>
          </div>

          <div id="limiterblock">
            <h5 class="text-muted">LIMIT YOUR RESULTS</h5>

            <div class="checkbox-inline">
              <input type="checkbox" id="chkFullText" name="chkFullText" checked="checked" />
              <label for="chkFullText">Full Text</label>
            </div>

            <div class="checkbox-inline">
              <input type="checkbox" id="chkLibraryCollection" name="chkLibraryCollection" />
              <label for="chkLibraryCollection">Available in Library Collection</label>
            </div>

            <div class="checkbox-inline">
              <input type="checkbox" id="chkPeerReviewed" name="chkPeerReviewed"  />
              <label for="chkPeerReviewed">Peer Reviewed</label>
            </div>

            <div class="checkbox-inline">
              <input type="checkbox" id="chkCatalogOnly" name="chkCatalogOnly"  />
              <label for="chkCatalogOnly">Catalog Only</label>
            </div>
          </div>
        </div>

        <div id="disciplineBlock" style="margin-left:-px; overflow: auto;">
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="APPL"  />
            <label for="">Applied Sciences</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="COMP"  />
            <label for="">Computer Science</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="EART"  />
            <label for="">Earth &amp; Atmospheric Sciences</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="GEOL"  />
            <label for="">Geology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="LITE"  />
            <label for="">Literature &amp; Writing</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="MATH"  />
            <label for="">Mathematics</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="POWE"  />
            <label for="">Power &amp; Energy</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SSHU"  />
            <label for="">Social Sciences &amp; Humanities</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="AERO"  />
            <label for="">Aerospace Sciences</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="COHE"  />
            <label for="">Consumer Health</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="COMM"  />
            <label for="">Communication &amp; Mass Media</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="DRAM"  />
            <label for="">Drama &amp; Theater Arts</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="FILM"  />
            <label for="">Film</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="HIST"  />
            <label for="">History</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="LIFE"  />
            <label for="">Life Sciences</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="MARK"  />
            <label for="">Marketing</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="MILI"  />
            <label for="">Military History &amp; Science</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="NURS"  />
            <label for="">Nursing &amp; Allied Health</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="PHYT"  />
            <label for="">Physical Therapy</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SOCY"  />
            <label for="">Sociology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ZOOL"  />
            <label for="">Zoology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="EDUC"  />
            <label for="">Education</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="AGRI"  />
            <label for="">Agriculture &amp; Agribusiness</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="BIOG"  />
            <label for="">Biography</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="DIPL"  />
            <label for="">Diplomacy &amp; International Relations</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="GEOG"  />
            <label for="">Geography &amp; Cartography</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="HEAL"  />
            <label for="">Health &amp; Medicine</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="VISU"  />
            <label for="">Visual Arts</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ARTS"  />
            <label for="">Arts &amp; Entertainment</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="BIOL"  />
            <label for="">Biology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="BUSI"  />
            <label for="">Business &amp; Management</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ENGI"  />
            <label for="">Engineering</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="LANG"  />
            <label for="">Language &amp; Linguistics</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="LIBR"  />
            <label for="">Library &amp; Information Science</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="MUSI"  />
            <label for="">Music</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="OCEA"  />
            <label for="">Oceanography</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SPLS"  />
            <label for="">Sports &amp; Leisure</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="TECH"  />
            <label for="">Technology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ANTH"  />
            <label for="">Anthropology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="DENT"  />
            <label for="">Dentistry</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ECON"  />
            <label for="">Economics</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ENVI"  />
            <label for="">Environmental Sciences</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="FORE"  />
            <label for="">Forests &amp; Forestry</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="INFO"  />
            <label for="">Information Technology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="MINI"  />
            <label for="">Mining &amp; Mineral Resources</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="PSYC"  />
            <label for="">Psychology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SOWO"  />
            <label for="">Social Work</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SPME"  />
            <label for="">Sports Medicine</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="BIOT"  />
            <label for="">Biotechnology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="BOTA"  />
            <label for="">Botany</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="LAWX"  />
            <label for="">Law</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="PHAR"  />
            <label for="">Pharmacy &amp; Pharmacology</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="PHYS"  />
            <label for="">Physics</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="POGV"  />
            <label for="">Politics &amp; Government</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="PUBL"  />
            <label for="">Public Health</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="VETM"  />
            <label for="">Veterinary Medicine</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ARCH"  />
            <label for="">Architecture</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="CALM"  />
            <label for="">Complementary &amp; Alternative Medicine</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="CHEM"  />
            <label for="">Chemistry</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="CONS"  />
            <label for="">Construction &amp; Building</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="DANC"  />
            <label for="">Dance</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="ETHN"  />
            <label for="">Ethnic &amp; Cultural Studies</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="NUTR"  />
            <label for="">Nutrition &amp; Dietetics</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="RELI"  />
            <label for="">Religion &amp; Philosophy</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="SCIE"  />
            <label for="">Science</label>
          </div>
          <div style="display:none;">
            <input type="checkbox" id="" name="" value="WOFE"  />
            <label for="">Women's Studies &amp; Feminism</label>
          </div>
        </div>
      </form> <!-- // EBSCOhost Custom Search Box Ends -->
    </div>

    <div class="panel-footer">
      <small class="text-muted">Copyright &copy; <?php echo date('Y', time()); ?> University of North Florida</small>
    </div>
  </div>
</div>
