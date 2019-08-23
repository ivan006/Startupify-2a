<html class="mobilesdk-console-app" style="" lang="en">

<head>

  <style media="screen">
  /* ul tag
  kv-li-st-no kv-pa-le-0 kv-child-pa-le-40
  kv-list-parent */
  .kv-list-parent {
    list-style: none;
    padding-left: 0;
  }
  .kv-list-parent .kv-list-parent {padding-left: 40px;}


  /* nice border (mar-bot is used elsewhere)
  kv-bo-gr kv-bo-ra-3 kv-pad-1-4 kv-mar-bot-3 kv-bg-wh kv-wh-sp-no
  kv-item-container kv-mar-bot-3 */
  /* add kv-mar-bot-3 */

  .kv-item-container {
    border: 1px DarkGray solid;
    border-radius: 3px;
    padding: 1px 4px;
    background-color: white;
    white-space: nowrap;
    margin-bottom: 3px;
  }

  .kv-mar-bot-3 {margin-bottom: 3px;}
  .kv-di-in {display: inline-block;}



  .kv-he-20 {height: 20px;}

  /* name area
  kv-wi-150 kv-bo-si-in
  kv-name */

  .kv-name {
    width: 150px;
    box-sizing:inherit
  }

  /* cute button (kv-but-sty-res also belong with these)
  kv-fo-we-bo kv-wi-20 kv-te-al-ce kv-but-sty-res
  kv-little-button
  add(kv-di-in)*/

  .kv-little-button {
    font-weight: bold;
    width: 20px;
    text-align: center;
    font-size: 100%;
    font-family: inherit;
    border: 0 ;
    padding: 0;
    background-color: rgba(0,0,0,0);
    display: inline-block;
  }

  /* popover
  kv-po-ab kv-to-100-per kv-ri-0 kv-z-in-1
  kv-popover */
  .kv-popover {
    position: absolute;
    top: 100%;
    right: 0px;
    z-index: 1;
  }

  .kv-di-no {display:none;}
  .kv-po-re {position: relative;}

  /* turn on block
  kv-di-no kv-sibling-di-bl-sib
  kv-tog-on-bl */
  .kv-tog-on-bl{
    display:none;
  }

  /* turn on block swtich
  kv-di-no kv-sibling-di-bl
  kv-tog-on-bl-switch */

  .kv-tog-on-bl-switch:checked ~ .kv-tog-on-bl {display:block;}

  .kv-tog-on-bl-switch {
    display:none;
  }

  /* turn off
  kv-sibling-di-no-sib kv-di-in
  kv-tog-off-ib  */


  .kv-tog-off-ib-switch:checked  ~ .kv-tog-off-ib {
    display:none;
  }
  .kv-tog-off-ib {
    display: inline-block;
  }

  /* turn off swtich (add kv-di-no)
  kv-sibling-di-no
  kv-tog-off-ib-switch */

  .kv-tog-off-ib-switch {
    display:none;
  }

  /* turn on  swtich
  kv-di-no kv-sibling-di-in
  kv-tog-on-ib-switch */

  .kv-tog-on-ib-switch{
    display:none;
  }

  .kv-tog-on-ib-switch:checked ~ .kv-tog-on-ib {display:inline-block;}

  /* toggle on
  kv-sibling-di-in-sib kv-di-no
  kv-tog-on-ib */
  .kv-tog-on-ib {
    display:none;
  }



  /* nice border 2 (kv-fo-in  also belongs with these)
  kv-bo-bl kv-fo-in
  kv-field-container */
  /* add kv-pa-2 kv-wi-150 */


  .kv-field-container {
    border: 1px black solid;
    font: inherit;
    padding: 2px;
  }

  /* text area
  kv-he-200 kv-wi-100-per kv-re-ve
  kv-content-container */
  .kv-content-container {
    height: 200px;
    width: 100%;
    resize:vertical;
  }


  /* name not editable
  kv-bo-tr kv-ov-hi kv-ve-al-bo kv-te-ov-el
  kv-name-unedit */
  /* add kv-pa-2 kv-wi-150 */

  .kv-name-unedit {
    border: 1px solid transparent;
    overflow: hidden;
    vertical-align: bottom;
    text-overflow: ellipsis;
    padding: 2px;
  }





  </style>










</head>
<?php $CurrentIdentifier=0; $value2=0; ?>
<body>
  <div class="">
    <ul class="kv-list-parent">
      <li>
        <div class="kv-item-container  kv-di-in ">
          <div class="kv-di-in">📁</div>
          <label style="">
            <input class="kv-tog-on-ib-switch kv-tog-off-ib-switch" type="checkbox" name="checkbox" value="value">
            <input class="kv-field-container kv-name kv-tog-on-ib" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[0]; ?>]" value="<?php echo $value2[$Attr[0]]; ?>">
            <a href="#" class="kv-name-unedit kv-name kv-tog-off-ib ">php<?php echo $value2[$Attr[0]]; ?></a>
            <span class="kv-little-button ">⚙</span>
          </label>
          <input class="kv-di-no" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[1]; ?>]" value="<?php echo $value2[$Attr[1]]; ?>">
          <input class="kv-di-no" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[4]; ?>]" value="<?php echo $value2[$Attr[4]]; ?>">
          <button type="submit" class="kv-little-button" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[3]; ?>]" value="update">✓</button>
          <button type="submit" class="kv-little-button" name="Destroy" value="1">×</button>
          <label class="kv-po-re">
            <span class="kv-little-button ">+</span>
            <input class="kv-tog-on-bl-switch" type="checkbox" name="checkbox" value="value">
            <div class="kv-popover kv-tog-on-bl " style="">
              <div class="kv-item-container  kv-di-in   ">

                <div class="kv-mar-bot-3" >
                  <span>📁</span>
                  <input class="kv-field-container kv-name kv-di-in "  type="text"   name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[6]; ?>][folder]" >
                  <button type="submit" class="kv-little-button" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[3]; ?>]" value="create_folder">+</button>
                </div>
                <div class="">
                  <span>📃</span>
                  <input class="kv-field-container kv-name kv-di-in"  type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[6]; ?>][file]">
                  <button type="submit" class="kv-little-button" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[3]; ?>]" value="create_folder">+</button>
                </div>
              </div>
            </div>
          </label>
        </div>
        <ul class="kv-list-parent">
          <li>
            <div class="kv-item-container  kv-di-in  ">
              <div class="kv-di-in">📃</div>
              <label style="">
                <input class="kv-tog-on-ib-switch kv-tog-off-ib-switch" type="checkbox" name="checkbox" value="value">
                <input class="kv-field-container kv-name kv-tog-on-ib" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[0]; ?>]" value="<?php echo $value2[$Attr[0]]; ?>">
                <a href="#" class="kv-name-unedit kv-name kv-tog-off-ib ">phpdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd<?php echo $value2[$Attr[0]]; ?></a>
                <span class="kv-little-button ">⚙</span>
              </label>

              <input class="kv-di-no" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[1]; ?>]" value="<?php echo $value2[$Attr[1]]; ?>">
              <input class="kv-di-no" type="text" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[4]; ?>]" value="<?php echo $value2[$Attr[4]]; ?>">
              <button type="submit" class="kv-little-button" type="submit" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[3]; ?>]" value="update">✓</button>
              <button type="submit" class="kv-little-button" type="submit" name="Destroy" value="1">×</button>
            </div>
            <ul class="kv-list-parent">
              <li>
                <div class="kv-item-container ">
                  <textarea class="kv-field-container kv-content-container kv-di-in" name="<?php echo $CurrentIdentifier; ?>[<?php echo $Attr[2]; ?>]" rows="8" ><?php echo $value2[$Attr[2]]; ?></textarea>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </li>
    </ul>
  </div>



</body>

</html>