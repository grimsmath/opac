<!-- EBSCOhost Custom Search Box Begins -->
<script src="http://support.ebscohost.com/eit/scripts/ebscohostsearch.js" type="text/javascript"></script>
<style type="text/css">
    .choose-db-list{ list-style-type:none;padding:0;margin:10px 0 0 0;font-family:Verdana,Arial,Helvetica,sans-serif;font-size:9pt;width:{{selectedInterface().layout.width()}}px; }
    .choose-db-check{ width:20px;float:left;padding-left:5px;padding-top:5px; }
    .choose-db-detail{ margin-left:30px;border-left:solid 1px #E7E7E7;padding:5px 11px 7px 11px;line-height:1.4em; }
    .summary { background-color:#1D5DA7;color:#FFFFFF;border:solid 1px #1D5DA7; }
    .one { background-color: #FFFFFF;border:solid 1px #E7E7E7;border-top:solid 1px #FFFFFF; }
    .two { background-color: #F5F5F5;border:solid 1px #E7E7E7;border-top:solid 1px #FFFFFF; }
    .selected { background-color: #E0EFF7;border:solid 1px #E7E7E7;border-top:solid 1px #FFFFFF; }
    #ebscohostCustomSearchBox #disciplineBlock { width:auto; }
    #ebscohostCustomSearchBox .limiter { float:left;margin:0;padding:0;width:50%; }
</style>
<form id="ebscohostCustomSearchBox" action="" onsubmit="return ebscoHostSearchGo(this);" method="post" style="width:375px; overflow:auto;">
  <input id="ebscohostwindow" name="ebscohostwindow" type="hidden" value="1" />
  <input id="ebscohosturl" name="ebscohosturl" type="hidden" value="http://search.ebscohost.com/login.aspx?direct=true&site=eds-live&scope=site&type=0&custid=s6281220&groupid=main&profid=unflib&mode=bool&lang=en&authtype=cookie,ip,guest" />
  <input id="ebscohostsearchsrc" name="ebscohostsearchsrc" type="hidden" value="db" />
  <input id="ebscohostsearchmode" name="ebscohostsearchmode" type="hidden" value="+" />
  <input id="ebscohostkeywords" name="ebscohostkeywords" type="hidden" value="" />
  <div style="background-image:url(''); background-repeat:no-repeat; height:66px; width:375px; font-family:Verdana,Arial,Helvetica,sans-serif;font-size:9pt; color:#353535;">
    <div style="padding-top:5px;padding-left:150px;">
      <span style="font-weight:bold;">Research databases</span>

      <div>
        <input id="ebscohostsearchtext" name="ebscohostsearchtext" type="text" size="23" style="font-size:9pt;padding-left:5px;margin-left:0px;" />
        <input type="submit" value="Search" style="font-size:9pt;padding-left:5px;" />

        <div id="guidedFieldSelectors">
          <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_0" value="" checked="checked" />
          <label class="label" for="guidedField_0"> Keyword</label>
          <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_1" value="TI" />
          <label class="label" for="guidedField_1"> Title</label>
          <input class="radio" type="radio" name="searchFieldSelector" id="guidedField_2" value="AU" />
          <label class="label" for="guidedField_2"> Author</label>
        </div>

      </div>
    </div>
  </div>
  <div id="limiterblock" style="margin-left:-px; overflow: auto;">
    <div id="limitertitle" style="font-weight:bold;padding-top:25px;padding-bottom:5px;">Limit Your Results</div>

    <div class="limiter" >
      <input type="checkbox" id="chkFullText" name="chkFullText"  />
      <label for="chkFullText">Full Text</label>
    </div>

    <div class="limiter" >
      <input type="checkbox" id="chkLibraryCollection" name="chkLibraryCollection" checked="checked" />
      <label for="chkLibraryCollection">Available in Library Collection</label>
    </div>

    <div class="limiter" >
      <input type="checkbox" id="chkPeerReviewed" name="chkPeerReviewed"  />
      <label for="chkPeerReviewed">Peer Reviewed</label>
    </div>

    <div class="limiter" >
      <input type="checkbox" id="chkCatalogOnly" name="chkCatalogOnly"  />
      <label for="chkCatalogOnly">Catalog Only</label>
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
      <label for="">Earth & Atmospheric Sciences</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="GEOL"  />
      <label for="">Geology</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="LITE"  />
      <label for="">Literature & Writing</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="MATH"  />
      <label for="">Mathematics</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="POWE"  />
      <label for="">Power & Energy</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="SSHU"  />
      <label for="">Social Sciences & Humanities</label>
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
      <label for="">Communication & Mass Media</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="DRAM"  />
      <label for="">Drama & Theater Arts</label>
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
      <label for="">Military History & Science</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="NURS"  />
      <label for="">Nursing & Allied Health</label>
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
      <label for="">Agriculture & Agribusiness</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="BIOG"  />
      <label for="">Biography</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="DIPL"  />
      <label for="">Diplomacy & International Relations</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="GEOG"  />
      <label for="">Geography & Cartography</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="HEAL"  />
      <label for="">Health & Medicine</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="VISU"  />
      <label for="">Visual Arts</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="ARTS"  />
      <label for="">Arts & Entertainment</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="BIOL"  />
      <label for="">Biology</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="BUSI"  />
      <label for="">Business & Management</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="ENGI"  />
      <label for="">Engineering</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="LANG"  />
      <label for="">Language & Linguistics</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="LIBR"  />
      <label for="">Library & Information Science</label>
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
      <label for="">Sports & Leisure</label>
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
      <label for="">Forests & Forestry</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="INFO"  />
      <label for="">Information Technology</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="MINI"  />
      <label for="">Mining & Mineral Resources</label>
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
      <label for="">Pharmacy & Pharmacology</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="PHYS"  />
      <label for="">Physics</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="POGV"  />
      <label for="">Politics & Government</label>
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
      <label for="">Complementary & Alternative Medicine</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="CHEM"  />
      <label for="">Chemistry</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="CONS"  />
      <label for="">Construction & Building</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="DANC"  />
      <label for="">Dance</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="ETHN"  />
      <label for="">Ethnic & Cultural Studies</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="NUTR"  />
      <label for="">Nutrition & Dietetics</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="RELI"  />
      <label for="">Religion & Philosophy</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="SCIE"  />
      <label for="">Science</label>
    </div>
    <div style="display:none;">
      <input type="checkbox" id="" name="" value="WOFE"  />
      <label for="">Women's Studies & Feminism</label>
    </div>
  </div>
</form>
<!-- EBSCOhost Custom Search Box Ends -->
