<?php
$base_url = 'https://callbills.com/';
?>
<header>
    <div class="message-banner">
      <div class="scroll-text">
        <h3>The area&apos;s largest and most trusted HVAC company - Serving Northern Idaho and Eastern Washington</h3>
      </div>
    </div>   
    <div class="top-bar width-limiter">
        <div class="back-button-container">
          <button class="back-button"></button>
          <div class="arrow" id="backButton">
              <span></span>
              <span></span>
              <span></span>
          </div>
        </div>
        <a href="<?php echo $base_url; ?>https://callbills.com/index.php"><img class="header-logo" alt="Bills Heating Logo" src="<?php echo $base_url; ?>images\header-logo-shadowed.webp" width="400" height="177"></a>
        <button class="schedule-service-button desktop-only" id="toggleFormButton">Schedule Service</button>
        <a href="tel:+12087775528" class="phone-number desktop-only"> 208-777-5528</a>
        <div class="burger-menu-container" id="burgerMenu">
          <input type="checkbox" role="button" aria-label="Display the menu" aria-pressed="true" class="bmenu" id="burgerCheckbox">
          <label for="burgerCheckbox" class="burger-menu"></label>
      </div>
      </div>
    <div class="mobile-service-button-div">
      <button class="mobile-service-button">Click Here To Schedule Service</button>
    </div>
   <!--  //////////////////////////DESKTOP MENU BELOW///////////////////////////////// -->
<nav class="width-limiter main-nav desktop-only">
    <ul class="menu-list" role="menu">
        <li class="menu-item" role="menuitem"><a href="<?php echo $base_url; ?>index.php"><span class="menu-text">Home</span></a></li>
        <li class="menu-item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false"><a href="<?php echo $base_url; ?>services.php" class="icon-menu-item has-dropdown"><span class="menu-text">Services</span><svg class="dropdown-arrow" id="dropdown-arrow-2" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="main-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
            <ul class="submenu" role="menu">
                <li class="submenu-item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false">
                  <a href="<?php echo $base_url; ?>furnace.php"><svg class="furnace-icon icon-common-elements" id="furnace-icon" data-name="Furnace Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 211.5 283.5" aria-hidden="true"><g>
                            <path class="icon-stroke" d="m6.75,186.75c0,49.75,40.25,90,90,90"/>
                            <path class="icon-stroke" d="m204.75,186.75c0,49.75-40.25,90-90,90"/>
                            <path class="icon-stroke" d="m60.75,222.75c0,29.85,18,54,45,54"/>
                            <path class="icon-stroke" d="m60.75,222.75c0-39.8,32.2-72,72-72"/>
                            <path class="icon-stroke" d="m150.75,240.75c0,19.9-18,36-45,36"/>
                            <path class="icon-stroke" d="m132.75,150.75c-18,54,18,54,18,90"/>
                            <line class="icon-stroke" x1="96.75" y1="276.75" x2="114.75" y2="276.75"/>
                            <path class="icon-stroke" d="m6.75,186.75C6.75,114.75,96.75,96.75,60.75,6.75"/>
                            <path class="icon-stroke" d="m132.75,114.75c0-59.7-32.2-108-72-108"/>
                            <path class="icon-stroke" d="m204.75,186.75c0-54-36-54-36-108"/>
                            <path class="icon-stroke" d="m168.75,78.75c-18,0-18,36-36,36"/>
                            <line class="icon-stroke" x1="96.75" y1="276.75" x2="114.75" y2="276.75"/></g></svg>
                    <span class="submenu-text">Furnace</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                    <div class="equipment-submenu-container">
                        <ul class="equipment-submenu" role="menu">
                            <li class="equipment-submenu-item" role="menuitem">
                              <a href="<?php echo $base_url; ?>furnaceinstall.php"><span class="equipment-submenu-text">Furnace Install</span></a>
                            </li>
                            <li class="equipment-submenu-item" role="menuitem">
                              <a href="<?php echo $base_url; ?>furnacetune.php"><span class="equipment-submenu-text">Furnace Maintenance</span></a>
                            </li>
                            <li class="equipment-submenu-item" role="menuitem">
                              <a href="<?php echo $base_url; ?>furnacediag.php"><span class="equipment-submenu-text">Furnace Diagnostics</span></a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="submenu-item has-submenu" role="menuitem">
                  <a href="<?php echo $base_url; ?>ac.php"><svg class="ac-icon icon-common-elements" id="careers-icon-1" data-name="Careers Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 272.84 283.5" aria-hidden="true"><g>
                            <line class="icon-stroke" x1="136.42" y1="276.75" x2="136.42" y2="6.75"/>
                            <line class="icon-stroke" x1="91.42" y1="18" x2="136.42" y2="63"/>
                            <line class="icon-stroke" x1="181.42" y1="18" x2="136.42" y2="63"/>
                            <line class="icon-stroke" x1="91.42" y1="265.5" x2="136.42" y2="220.5"/>
                            <line class="icon-stroke" x1="181.42" y1="265.5" x2="136.42" y2="220.5"/>
                            <line class="icon-stroke" x1="253.33" y1="209.25" x2="19.51" y2="74.25"/>
                            <line class="icon-stroke" x1="6.75" y1="118.85" x2="68.22" y2="102.38"/>
                            <line class="icon-stroke" x1="51.75" y1="40.9" x2="68.22" y2="102.38"/>
                            <line class="icon-stroke" x1="221.09" y1="242.6" x2="204.62" y2="181.13"/>
                            <line class="icon-stroke" x1="266.09" y1="164.65" x2="204.62" y2="181.13"/>
                            <line class="icon-stroke" x1="19.51" y1="209.25" x2="253.33" y2="74.25"/>
                            <line class="icon-stroke" x1="221.09" y1="40.9" x2="204.62" y2="102.38"/>
                            <line class="icon-stroke" x1="266.09" y1="118.85" x2="204.62" y2="102.38"/>
                            <line class="icon-stroke" x1="6.75" y1="164.65" x2="68.22" y2="181.13"/>
                            <line class="icon-stroke" x1="51.75" y1="242.6" x2="68.22" y2="181.13"/></g></svg>
                  <span class="submenu-text">Air Conditioning</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                  <div class="equipment-submenu-container">
                    <ul class="equipment-submenu" role="menu">
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>acinstall.php"><span class="equipment-submenu-text">Air Conditioning Install</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>actune.php"><span class="equipment-submenu-text">Air Conditioning Maintenance</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>acdiag.php"><span class="equipment-submenu-text">Air Conditioning Diagnostics</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <li class="submenu-item has-submenu" role="menuitem">
                  <a href="<?php echo $base_url; ?>hp.php"><svg class="heatpump-icon icon-common-elements" id="heatpump-icon" data-name="Heat Pump Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 278.17 283.5" aria-hidden="true"><g>
                            <path class="icon-stroke" d="m141.75,204.75c-34.79,0-63-28.21-63-63s28.21-63,63-63"/>
                            <line class="icon-stroke" x1="6.75" y1="141.75" x2="42.75" y2="141.75"/>
                            <line class="icon-stroke" x1="46.29" y1="237.21" x2="71.75" y2="211.75"/>
                            <line class="icon-stroke" x1="46.29" y1="46.29" x2="71.75" y2="71.75"/>
                            <line class="icon-stroke" x1="141.75" y1="276.75" x2="141.75" y2="6.75"/>
                            <line class="icon-stroke" x1="186.75" y1="18" x2="141.75" y2="63"/>
                            <line class="icon-stroke" x1="186.75" y1="265.5" x2="141.75" y2="220.5"/>
                            <line class="icon-stroke" x1="258.66" y1="209.25" x2="141.75" y2="141.75"/>
                            <line class="icon-stroke" x1="226.42" y1="242.6" x2="209.95" y2="181.13"/>
                            <line class="icon-stroke" x1="271.42" y1="164.65" x2="209.95" y2="181.13"/>
                            <line class="icon-stroke" x1="141.75" y1="141.75" x2="258.66" y2="74.25"/>
                            <line class="icon-stroke" x1="226.42" y1="40.9" x2="209.95" y2="102.38"/>
                            <line class="icon-stroke" x1="271.42" y1="118.85" x2="209.95" y2="102.38"/></g></svg>
                  <span class="submenu-text">Heat Pump</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                  <div class="equipment-submenu-container">
                    <ul class="equipment-submenu" role="menu">
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>hpinstall.php"><span class="equipment-submenu-text">Heat Pump Install</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>hptune.php"><span class="equipment-submenu-text">Heat Pump Maintenance</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>hpdiag.php"><span class="equipment-submenu-text">Heat Pump Diagnostics</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <li class="submenu-item has-submenu" role="menuitem">
                  <a href="<?php echo $base_url; ?>ductless.php"><svg class="ductless-icon icon-common-elements" id="ductless-icon" data-name="Ductless Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 283.5 211.5" aria-hidden="true"><g>
                            <path class="icon-stroke" d="m6.75,24.75C6.75,14.8,14.8,6.75,24.75,6.75"/>
                            <path class="icon-stroke" d="m276.75,24.75c0-9.95-8.05-18-18-18"/>
                            <path class="icon-stroke" d="m6.75,96.75c0,19.9,16.1,36,36,36"/>
                            <path class="icon-stroke" d="m276.75,96.75c0,19.9-16.1,36-36,36"/>
                            <line class="icon-stroke" x1="24.75" y1="6.75" x2="258.75" y2="6.75"/>
                            <line class="icon-stroke" x1="276.75" y1="24.75" x2="276.75" y2="96.75"/>
                            <line class="icon-stroke" x1="6.75" y1="24.75" x2="6.75" y2="96.75"/>
                            <line class="icon-stroke" x1="42.75" y1="132.75" x2="240.75" y2="132.75"/>
                            <line class="icon-stroke" x1="240.75" y1="96.75" x2="240.75" y2="132.75"/>
                            <line class="icon-stroke" x1="42.75" y1="96.75" x2="42.75" y2="132.75"/>
                            <line class="icon-stroke" x1="240.75" y1="96.75" x2="42.75" y2="96.75"/>
                            <line class="icon-stroke" x1="43.75" y1="28.75" x2="61.75" y2="28.75"/>
                            <line class="icon-stroke" x1="141.75" y1="168.75" x2="141.75" y2="204.75"/>
                            <path class="icon-stroke" d="m69.75,168.75c0,19.9-16.1,36-36,36"/>
                            <path class="icon-stroke" d="m213.75,168.75c0,19.9,16.1,36,36,36"/>
                            <path class="icon-stroke" d="m105.75,168.75c0,19.9-1.59,27.79-9,36"/>
                            <path class="icon-stroke" d="m177.75,168.75c0,19.9,1.59,27.79,9,36"/></g></svg>
                  <span class="submenu-text">Ductless</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                  <div class="equipment-submenu-container">
                    <ul class="equipment-submenu" role="menu">
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>ductlessinstall.php"><span class="equipment-submenu-text">Ductless Install</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>ductlesstune.php"><span class="equipment-submenu-text">Ductless Maintenance</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>ductlessdiag.php"><span class="equipment-submenu-text">Ductless Diagnostics</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <li class="submenu-item has-submenu" role="menuitem">
                  <a href="<?php echo $base_url; ?>tankless.php"><svg class="tankless-icon icon-common-elements" id="Ltankless-icon" data-name="Tankless Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 46 50" aria-hidden="true"><g>
                            <path class="icon-stroke" d="m32,27.42c3.42-1.36,6-4.92,6-8.86,0-7.44-7.75-10.37-9-17.55h0c-.73,4.2-3.69,6.95-6.02,10"/>
                            <path class="icon-stroke" d="m15,2.9h0C13.06,13.29,1,17.53,1,28.31c0,7.29,6.54,13.69,14,13.69s14-6.39,14-13.69c0-10.78-12.05-15.02-14-25.42ZM5,27c0,5.86,5.14,11,11,11"/></g></svg>
                  <span class="submenu-text">Tankless</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                  <div class="equipment-submenu-container">
                    <ul class="equipment-submenu" role="menu">
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>tanklessinstall.php"><span class="equipment-submenu-text">Tankless Install</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>tanklesstune.php"><span class="equipment-submenu-text">Tankless Maintenance</span></a>
                        </li>
                        <li class="equipment-submenu-item" role="menuitem">
                          <a href="<?php echo $base_url; ?>tanklessdiag.php"><span class="equipment-submenu-text">Tankless Diagnostics</span></a>
                        </li>
                    </ul>
                </div>
                </li>
                <li class="submenu-item" role="menuitem">
                  <a href="<?php echo $base_url; ?>generator.php"><svg class="generator-icon icon-common-elements" id="generator-icon" data-name="Generator Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.28 43.5" aria-hidden="true"><polygon class="icon-stroke" points="22.28 1 12.23 1 2.62 25 6.96 25 1 42.5 18.62 18 12.62 18 22.28 1"/></svg>
                  <span class="submenu-text">Generator</span></a>
                </li>
                <li class="submenu-item" role="menuitem">
                  <a href="<?php echo $base_url; ?>evcharger.php"><svg class="charger-icon icon-common-elements" id="charger-icon" data-name="Charger Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 247.5 283.5" aria-hidden="true"><g>
                            <path class="icon-stroke" d="m6.75,24.75C6.75,14.8,14.8,6.75,24.75,6.75"/>
                            <path class="icon-stroke" d="m168.75,24.75c0-9.95-8.05-18-18-18"/>
                            <line class="icon-stroke" x1="24.75" y1="6.75" x2="150.75" y2="6.75"/>
                            <path class="icon-stroke" d="m168.75,222.75c0,9.95-8.05,18-18,18"/>
                            <path class="icon-stroke" d="m6.75,222.75c0,9.95,8.05,18,18,18"/>
                            <line class="icon-stroke" x1="150.75" y1="240.75" x2="24.75" y2="240.75"/>
                            <line class="icon-stroke" x1="6.75" y1="24.75" x2="6.75" y2="222.75"/>
                            <line class="icon-stroke" x1="168.75" y1="24.75" x2="168.75" y2="222.75"/>
                            <line class="icon-stroke" x1="60.75" y1="240.75" x2="60.75" y2="276.75"/>
                            <line class="icon-stroke" x1="114.75" y1="240.75" x2="114.75" y2="276.75"/>
                            <path class="icon-stroke" d="m51.75,186.75c0-9.95,8.05-18,18-18"/>
                            <path class="icon-stroke" d="m123.75,186.75c0-9.95-8.05-18-18-18"/>
                            <line class="icon-stroke" x1="51.75" y1="186.75" x2="51.75" y2="240.75"/>
                            <line class="icon-stroke" x1="123.75" y1="186.75" x2="123.75" y2="240.75"/>
                            <line class="icon-stroke" x1="69.75" y1="168.75" x2="105.75" y2="168.75"/>
                            <line class="icon-stroke" x1="78.75" y1="195.75" x2="96.75" y2="195.75"/>
                            <line class="icon-stroke" x1="87.75" y1="51.75" x2="69.75" y2="87.75"/>
                            <line class="icon-stroke" x1="105.75" y1="87.75" x2="69.75" y2="87.75"/>
                            <line class="icon-stroke" x1="87.75" y1="123.75" x2="105.75" y2="87.75"/>
                            <path class="icon-stroke" d="m204.75,78.75c0,4.97,4.03,9,9,9"/>
                            <line class="icon-stroke" x1="204.75" y1="78.75" x2="204.75" y2="60.75"/>
                            <line class="icon-stroke" x1="240.75" y1="78.75" x2="240.75" y2="60.75"/>
                            <line class="icon-stroke" x1="204.75" y1="60.75" x2="240.75" y2="60.75"/>
                            <line class="icon-stroke" x1="211.5" y1="42.75" x2="211.5" y2="60.75"/>
                            <line class="icon-stroke" x1="234" y1="42.75" x2="234" y2="60.75"/>
                            <line class="icon-stroke" x1="213.75" y1="87.75" x2="231.75" y2="87.75"/>
                            <path class="icon-stroke" d="m240.75,78.75c0,4.97-4.03,9-9,9"/>
                            <line class="icon-stroke" x1="168.75" y1="204.75" x2="204.75" y2="204.75"/>
                            <path class="icon-stroke" d="m222.75,186.75c0,9.95-8.05,18-18,18"/>
                            <line class="icon-stroke" x1="222.75" y1="186.75" x2="222.75" y2="87.75"/></g></svg>
                  <span class="submenu-text">EV Charger</span></a>
                </li>
                <li class="submenu-item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false">
                  <a href="<?php echo $base_url; ?>areas.php" class="icon-menu-item">
                    <svg id="location-icon3" class="location-icon icon-common-elements" data-name="location-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 91.42 135"><g>
                      <path class="icon-stroke" d="m45.71,114.37c-.55,0-1.08-.24-1.44-.67L10.48,73.47C3.72,65.43,0,55.22,0,44.71,0,20.06,20.06,0,44.71,0h1.99c24.66,0,44.71,20.06,44.71,44.71,0,10.5-3.72,20.72-10.48,28.76h0l-33.8,40.23c-.36.42-.88.67-1.44.67Zm-.99-110.62C22.13,3.75,3.75,22.13,3.75,44.71c0,9.62,3.41,18.98,9.6,26.35l32.36,38.52,32.36-38.52c6.19-7.37,9.6-16.72,9.6-26.35,0-22.59-18.38-40.96-40.96-40.96h-1.99Zm34.79,68.51h.01-.01Z"/>
                      <path class="icon-stroke" d="m45.71,71.59c-14.82,0-26.88-12.06-26.88-26.88s12.06-26.88,26.88-26.88,26.88,12.06,26.88,26.88-12.06,26.88-26.88,26.88Zm0-50c-12.75,0-23.13,10.37-23.13,23.13s10.37,23.13,23.13,23.13,23.13-10.37,23.13-23.13-10.37-23.13-23.13-23.13Z"/></g></svg>
                  <span class="submenu-text">Service Areas</span><svg class="master-icon rotated-icon icon-common-elements" id="dropdown-arrow-3" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="sub-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
                    <div class="service-submenu-container">
                      <div class="service-area-titles">
                        <Span>Idaho</Span>
                        <Span>Washington</Span>
                      </div>
                        <ul class="service-submenu" role="menu">
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>cda.php"><span class="service-submenu-text">Coeur D&apos;Alene</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>pf.php"><span class="service-submenu-text">Post Falls</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>hayden.php"><span class="service-submenu-text">Hayden</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>rathdrum.php"><span class="service-submenu-text">Rathdrum</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>athol.php"><span class="service-submenu-text">Athol</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>sandpoint.php"><span class="service-submenu-text">Sandpoint</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>pr.php"><span class="service-submenu-text">Priest River</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>sl.php"><span class="service-submenu-text">Spirit Lake</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>moscow.php"><span class="service-submenu-text">Moscow</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>lewiston.php"><span class="service-submenu-text">Lewiston</span></a>
                          </li>
                        </ul>
                        <ul class="service-submenu" role="menu">
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>hauser.php"><span class="service-submenu-text">Hauser</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>dg.php"><span class="service-submenu-text">Dalton Gardens</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>blanchard.php"><span class="service-submenu-text">Blanchard</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>bayview.php"><span class="service-submenu-text">Bayview</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>cocolalla.php"><span class="service-submenu-text">Cocolalla</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>sagle.php"><span class="service-submenu-text">Sagle</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>lapwai.php"><span class="service-submenu-text">Lapwai</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>genesee.php"><span class="service-submenu-text">Genesee</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>kendrick.php"><span class="service-submenu-text">Kendrick</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>troy.php"><span class="service-submenu-text">Troy</span></a>
                          </li>
                        </ul>
                        <ul class="service-submenu">
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>spokane.php"><span class="service-submenu-text">Spokane</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>sv.php"><span class="service-submenu-text">Spokane Valley</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>ll.php"><span class="service-submenu-text">Liberty Lake</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>ml.php"><span class="service-submenu-text">Medical Lake</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>ah.php"><span class="service-submenu-text">Airway Heights</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>cheney.php"><span class="service-submenu-text">Cheney</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>dp.php"><span class="service-submenu-text">Deer Park</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>newport.php"><span class="service-submenu-text">Newport</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>pullman.php"><span class="service-submenu-text">Pullman</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>clarkston.php"><span class="service-submenu-text">Clarkston</span></a>
                          </li>
                        </ul>
                        <ul class="service-submenu" role="menu">
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>oo.php"><span class="service-submenu-text">Otis Orchards</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>nl.php"><span class="service-submenu-text">Newman Lake</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>mead.php"><span class="service-submenu-text">Mead</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>spangle.php"><span class="service-submenu-text">Spangle</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>nmf.php"><span class="service-submenu-text">Nine Mile Falls</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>asotin.php"><span class="service-submenu-text">Asotin</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>uniontown.php"><span class="service-submenu-text">Uniontown</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>pomeroy.php"><span class="service-submenu-text">Pomeroy</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>chattaroy.php"><span class="service-submenu-text">Chattaroy</span></a>
                          </li>
                          <li class="service-submenu-item" role="menuitem">
                            <a href="<?php echo $base_url; ?>colton.php"><span class="service-submenu-text">Colton</span></a>
                          </li>
                        </ul>
                    </div>
                </li>
          </ul>
        </li>
        <li class="menu-item" role="menuitem"><a href="<?php echo $base_url; ?>products.php"><span class="menu-text">Products</span></a></li>
        <li class="menu-item" role="menuitem"><a href="<?php echo $base_url; ?>learninghub.php"><span class="menu-text">Learning Hub</span></a></li>
        <li class="menu-item" role="menuitem"><a href="<?php echo $base_url; ?>financing.php"><span class="menu-text">Financing</span></a></li>
        <li class="menu-item" role="menuitem"><a href="<?php echo $base_url; ?>savings.php"><span class="menu-text">Savings</span></a></li>
        <li class="menu-item has-submenu" role="menuitem" aria-haspopup="true" aria-expanded="false"><a href="<?php echo $base_url; ?>story.php" class="icon-menu-item has-dropdown"><span class="menu-text">About Us</span><svg class="dropdown-arrow" id="dropdown-arrow-1" data-name="Dropdown Arrow" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 23.62 14.18"><polyline  class="main-icon-stroke" points="1.06 1.56 11.56 12.06 22.56 1.06"/></svg></a>
            <ul class="about-us-submenu submenu" role="menu">
                <li class="submenu-item" role="menuitem">
                  <a href="<?php echo $base_url; ?>story.php"><svg class="story-icon icon-common-elements" id="story-icon" data-name="Story Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 93.65 123.43" aria-hidden="true"><g>
                        <path class="icon-stroke" d="m23.18,25.05H1.88c-.76,0-1.44-.46-1.73-1.16-.29-.7-.13-1.51.41-2.04L21.85.55c.54-.54,1.34-.7,2.04-.41.7.29,1.16.97,1.16,1.73v21.3c0,1.04-.84,1.88-1.88,1.88Zm-16.77-3.75h14.9V6.4l-14.9,14.9Z"/>
                        <path class="icon-stroke" d="m91.78,123.43H1.88C.84,123.43,0,122.59,0,121.55V23.18c0-.5.2-.97.55-1.33L21.85.55C22.2.2,22.68,0,23.18,0h68.6c1.04,0,1.88.84,1.88,1.88v119.68c0,1.04-.84,1.88-1.88,1.88Zm-88.03-3.75h86.15V3.75H23.95L3.75,23.96v95.72Z"/></g><g>
                        <path class="icon-stroke" d="m75.51,39.8h-40.43c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h40.43c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/>
                        <path class="icon-stroke" d="m75.51,61.12H18.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h57.38c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/>
                        <path class="icon-stroke" d="m75.51,82.43H18.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h57.38c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/>
                        <path class="icon-stroke" d="m54.69,103.75H18.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h36.55c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/></g></svg>
                  <span class="submenu-text">Our Story</span></a>
                </li>
                <li class="submenu-item" role="menuitem">
                  <a href="<?php echo $base_url; ?>careers.php"><svg class="careers-icon icon-common-elements" id="careers-icon-2" data-name="Careers Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 154.63 112.05" aria-hidden="true"><g>
                    <g>
                      <g>
                        <g>
                          <path class="icon-stroke" d="m120.01,112.05H1.88c-.53,0-1.03-.22-1.39-.61-.36-.39-.53-.91-.48-1.44l3.13-33.65c.49-5.26,4.06-9.68,9.1-11.26l27.75-8.71c.99-.31,2.04.24,2.35,1.23.31.99-.24,2.04-1.23,2.35l-27.75,8.71c-3.59,1.13-6.14,4.28-6.49,8.03l-2.94,31.6h114.02l-2.94-31.6c-.35-3.75-2.9-6.9-6.49-8.03l-27.75-8.71c-.99-.31-1.54-1.36-1.23-2.35.31-.99,1.36-1.54,2.35-1.23l27.75,8.71c5.04,1.58,8.61,6,9.1,11.26l3.13,33.65c.05.53-.13,1.05-.48,1.44-.36.39-.86.61-1.39.61Z"/>
                          <path class="icon-stroke" d="m60.94,72.1c-.33,0-.66-.09-.95-.26l-20.37-12.02c-.89-.53-1.19-1.68-.66-2.57.53-.89,1.68-1.19,2.57-.66l19.42,11.46,19.42-11.46c.89-.53,2.04-.23,2.57.66.53.89.23,2.04-.66,2.57l-20.37,12.02c-.29.17-.62.26-.95.26Z"/>
                        </g>
                        <path class="icon-stroke" d="m60.94,57.96c-14.18,0-25.6-17.87-25.6-32.66S46.35,0,60.94,0s25.6,10.88,25.6,25.3-11.42,32.66-25.6,32.66Zm0-54.21c-12.45,0-21.85,9.26-21.85,21.55,0,13.01,10.08,28.9,21.85,28.9s21.85-15.89,21.85-28.9c0-12.29-9.39-21.55-21.85-21.55Z"/>
                      </g>
                      <g>
                        <path class="icon-stroke" d="m64.65,81.06h-7.41c-.77,0-1.46-.47-1.75-1.19l-5.4-13.73c-.38-.96.09-2.05,1.06-2.43.96-.38,2.05.1,2.43,1.06l4.93,12.54h4.85l4.93-12.54c.38-.96,1.47-1.44,2.43-1.06.96.38,1.44,1.47,1.06,2.43l-5.4,13.73c-.28.72-.97,1.19-1.75,1.19Z"/>
                        <path class="icon-stroke" d="m51.84,112.05c-.11,0-.22,0-.32-.03-1.02-.18-1.7-1.15-1.53-2.17l5.4-30.99c.16-.9.94-1.55,1.85-1.55h7.41c.91,0,1.69.66,1.85,1.55l5.4,30.99c.18,1.02-.51,1.99-1.53,2.17-1.02.18-1.99-.51-2.17-1.53l-5.13-29.44h-4.25l-5.13,29.44c-.16.91-.95,1.55-1.85,1.55Z"/>
                      </g>
                    </g>
                    <g>
                      <path class="icon-stroke" d="m23.55,112.05c-.07,0-.13,0-.2-.01-1.03-.11-1.78-1.03-1.67-2.06l2.27-21.64c.11-1.03,1.03-1.78,2.06-1.67,1.03.11,1.78,1.03,1.67,2.06l-2.27,21.64c-.1.96-.92,1.68-1.86,1.68Z"/>
                      <path class="icon-stroke" d="m98.34,112.05c-.95,0-1.76-.72-1.86-1.68l-2.27-21.64c-.11-1.03.64-1.95,1.67-2.06,1.03-.11,1.95.64,2.06,1.67l2.27,21.64c.11,1.03-.64,1.95-1.67,2.06-.07,0-.13.01-.2.01Z"/>
                    </g>
                  </g>
                  <g class="careers-icon-plus">
                  <line class="icon-stroke" x1="133.7" y1="8.44" x2="133.7" y2="45.55"/>
                  <line class="icon-stroke" x1="154.63" y1="26.98" x2="112.33" y2="26.98"/></g></svg>
                  <span class="submenu-text">Careers</span></a>
                </li>
                <li class="submenu-item" role="menuitem">
                  <a href="<?php echo $base_url; ?>reviews.php"><svg class="review-icon icon-common-elements" id="review-icon" data-name="Review Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 129.45 113.99" aria-hidden="true">
                      <g>
                        <g>
                          <path class="icon-stroke" d="m109.34,113.99s-.08,0-.13,0l-46.68-.57c-2.73-.03-5.39-1.06-7.69-2.97-.61-.51-1.43-.89-2.44-1.15-2.47-.63-4.19-2.82-4.19-5.32v-50.16c0-.95.25-1.89.72-2.72l12.25-21.46c2.79-4.89,4.72-10.18,5.73-15.73l1.14-6.27c.1-.81.93-5.99,5.88-7.34.76-.21,1.58-.3,2.44-.3,4.75.06,8.56,5.73,11.32,16.84.9,3.63,1.03,7.34.39,11.03l-3.2,18.35,34.26.42c5.58.07,10.2,4.51,10.29,9.89.05,2.75-.99,5.34-2.93,7.29-.85.85-1.82,1.53-2.87,2.03,1.58,1.82,2.48,4.2,2.45,6.72-.05,3.99-2.42,7.41-5.81,9,1.58,1.83,2.49,4.2,2.46,6.73-.05,3.99-2.42,7.41-5.81,9,1.58,1.83,2.49,4.2,2.46,6.73-.07,5.51-4.57,9.95-10.07,9.95ZM76.26,3.75c-.48,0-.93.06-1.33.17-2.78.76-3.14,4.14-3.14,4.17,0,.05-.01.11-.02.16l-1.15,6.33c-1.09,5.96-3.16,11.65-6.16,16.92l-12.25,21.46c-.15.26-.23.56-.23.86v50.16c0,.79.56,1.48,1.37,1.69,1.55.4,2.86,1.04,3.9,1.9,1.64,1.36,3.48,2.09,5.34,2.11l46.68.57c3.48.04,6.36-2.76,6.4-6.25.03-2.56-1.47-4.87-3.82-5.89-.82-.35-1.28-1.24-1.09-2.11.19-.87.97-1.49,1.86-1.49,3.49.04,6.36-2.76,6.4-6.24.03-2.56-1.47-4.87-3.82-5.89-.82-.35-1.28-1.24-1.09-2.11.19-.87.96-1.51,1.86-1.48,3.49.04,6.36-2.76,6.4-6.25.03-2.56-1.47-4.87-3.82-5.89-.82-.35-1.28-1.24-1.09-2.11.19-.87.97-1.51,1.86-1.48,1.72.02,3.34-.64,4.56-1.87,1.22-1.22,1.87-2.85,1.84-4.58-.06-3.38-3.02-6.16-6.59-6.21l-36.3-.45c-.55,0-1.07-.25-1.42-.68-.35-.42-.63-1.14-.54-1.68l3.55-20.37c.55-3.17.44-6.36-.34-9.48-2.14-8.6-5.1-13.97-7.73-14-.03,0-.05,0-.08,0Z"/>
                          <path class="icon-stroke" d="m5.53,112.53c-1.43,0-2.78-.55-3.8-1.54-1.03-1.01-1.61-2.35-1.61-3.78L0,51.37c0-1.43.56-2.78,1.59-3.79,1.02-1,2.37-1.55,3.81-1.56l30.69-.06h0c1.43-.02,2.79.54,3.82,1.54,1.03,1.01,1.61,2.35,1.61,3.78l.11,55.84c0,1.43-.56,2.78-1.59,3.79-1.02,1-2.37,1.55-3.81,1.56l-30.69.06h-.01Zm30.57-62.82l-30.69.06c-.45,0-.87.17-1.19.48-.3.3-.47.69-.47,1.11l.11,55.84c0,.41.17.81.48,1.1.32.31.71.5,1.19.48l30.69-.06c.45,0,.87-.17,1.19-.48.3-.3.47-.69.47-1.11l-.11-55.84c0-.41-.17-.81-.48-1.1-.32-.31-.75-.48-1.19-.48h0Z"/>
                        </g>
                        <path class="icon-stroke" d="m119.28,66.8h-16.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h16.14c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/>
                        <path class="icon-stroke" d="m115.94,82.52h-16.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h16.14c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/>
                        <path class="icon-stroke" d="m112.58,98.26h-16.14c-1.04,0-1.88-.84-1.88-1.88s.84-1.88,1.88-1.88h16.14c1.04,0,1.88.84,1.88,1.88s-.84,1.88-1.88,1.88Z"/></g></svg>
                  <span class="submenu-text">Reviews</span></a>
                </li>
                <li class="submenu-item" role="menuitem"><a href="<?php echo $base_url; ?>news.php" class="news-container"><svg class="news-icon icon-common-elements" id="news-icon" data-name="News Icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.72 93.08" aria-hidden="true"><g>
                        <path class="icon-stroke" d="m52.9,65.37h-31.82c-11.62,0-21.08-9.46-21.08-21.08s9.46-21.08,21.08-21.08h31.82c1.04,0,1.88.84,1.88,1.88v38.41c0,1.04-.84,1.88-1.88,1.88ZM21.08,26.97c-9.55,0-17.33,7.77-17.33,17.33s7.77,17.33,17.33,17.33h29.95V26.97h-29.95Z"/>
                        <path class="icon-stroke" d="m110.5,88.59c-.42,0-.84-.14-1.18-.42l-6.38-5.14c-14.13-11.39-31.9-17.66-50.05-17.66-1.04,0-1.88-.84-1.88-1.88V25.09c0-1.04.84-1.88,1.88-1.88,18.15,0,35.92-6.27,50.05-17.66l6.38-5.14c.56-.45,1.33-.54,1.99-.23.65.31,1.07.97,1.07,1.69v84.83c0,.72-.42,1.38-1.07,1.69-.26.12-.53.18-.81.18Zm-55.72-26.94c18.35.42,36.22,6.94,50.53,18.47l3.32,2.68V5.8l-3.32,2.68c-14.31,11.53-32.18,18.05-50.53,18.47v34.7Z"/>
                        <path class="icon-stroke" d="m27.89,93.08c-2.76,0-5.33-1.37-6.86-3.67-1.54-2.3-1.82-5.19-.76-7.74l7.82-18.89c.29-.7.97-1.16,1.73-1.16h13.81c.63,0,1.21.31,1.56.83.35.52.41,1.18.17,1.76l-9.84,23.77c-1.28,3.1-4.27,5.1-7.63,5.1Zm3.18-27.71l-7.34,17.74c-.58,1.41-.43,2.95.42,4.22.85,1.27,2.21,2,3.74,2,1.83,0,3.46-1.09,4.16-2.78l8.77-21.18h-9.75Z"/>
                        <path class="icon-stroke" d="m110.5,60.3c-1.04,0-1.88-.84-1.88-1.88v-28.27c0-1.04.84-1.88,1.88-1.88,8.35,0,15.15,6.79,15.15,15.14v1.73c0,8.35-6.79,15.14-15.15,15.14Zm1.88-28.11v24.2c5.39-.9,9.52-5.6,9.52-11.24v-1.73c0-5.64-4.12-10.34-9.52-11.24Z"/></g>
                        <line class="icon-stroke" x1="135.19" y1="30.09" x2="177.06" y2="9.59"/>
                        <line class="icon-stroke" x1="137.23" y1="41.62" x2="177.06" y2="41.62"/>
                        <line class="icon-stroke" x1="137.23" y1="55.49" x2="177.06" y2="67.61"/></svg>
                  <span class="submenu-text news-text">News</span></a>
                </li>
            </ul>
        </li>
    </ul>
</nav>
  <!--  ///////////////////////MOBILE MENU BELOW////////////////////////////////////////////   -->
  <nav class="menu-content" id="menuContent" aria-label="Main navigation">
    <ul class="bm-main-menu" role="menu">
      <a href="<?php echo $base_url; ?>index.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Home</span></li></a>
      <a role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Services</span></li></a>
      <a href="<?php echo $base_url; ?>areas.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Service Areas</span></li></a>
      <a href="<?php echo $base_url; ?>products.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Products</span></li></a>
      <a href="<?php echo $base_url; ?>learninghub.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Learning Hub</span></li></a>
      <a href="<?php echo $base_url; ?>financing.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Financing</span></li></a>
      <a href="<?php echo $base_url; ?>savings.php" role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">Savings</span></li></a>
      <a role="menuitem"><li class="bm-main-menu-item"><span class="bm-main-menu-text">About Us</span></li></a>
    </ul>
    <ul class="bm-service-menu" role="menu">
      <a href="<?php echo $base_url; ?>furnace.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">Furnace</span></li></a>
      <a href="<?php echo $base_url; ?>ac.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">A/C</span></li></a>
      <a href="<?php echo $base_url; ?>hp.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">Heat Pump</span></li></a>
      <a href="<?php echo $base_url; ?>ductless.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">Ductless</span></li></a>
      <a href="<?php echo $base_url; ?>tankless.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">Tankless</span></li></a>
      <a href="<?php echo $base_url; ?>generator.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">Generator</span></li></a>
      <a href="<?php echo $base_url; ?>evcharger.php" role="menuitem"><li class="bm-service-menu-item"><span class="bm-service-menu-text">EV Charger</span></li></a>
    </ul>
    <ul class="bm-about-menu" role="menu">
      <a href="<?php echo $base_url; ?>story.php" role="menuitem"><li class="bm-about-menu-item"><span class="bm-about-menu-text">Our Story</span></li></a>
      <a href="<?php echo $base_url; ?>careers.php" role="menuitem"><li class="bm-about-menu-item"><span class="bm-about-menu-text">Careers</span></li></a>
      <a href="<?php echo $base_url; ?>reviews.php" role="menuitem"><li class="bm-about-menu-item"><span class="bm-about-menu-text">Reviews</span></li></a>
      <a href="<?php echo $base_url; ?>news.php" role="menuitem"><li class="bm-about-menu-item"><span class="bm-about-menu-text">News</span></li></a>
    </ul>
  </nav> 
    <!-- ////////////////////////////// SEARCH BAR ////////////////////////////////////////////////// -->
    <div class="search-container" role="search">
            <button class="search-icon-button" id="searchIconbutton" aria-label="Open search">&#128269;</button>
            <input class="search-bar" type="search" id="searchBar" name="q" placeholder="Search..." aria-label="Search field">
            <button class="search-bar-button" type="submit" aria-label="Submit search">Search</button>
            <div id="search-suggestions" class="search-suggestions"></div>
            <div id="search-results"></div>
            <div class="search-overlay"></div>
          </div>
     <!-- ///////////////////////////REQUEST FORM BELOW///////////////////////////////////////////////// -->
     <div class="page-overlay"></div>
    <div class="form-overlay" id="serviceForm">
        <div class="request-form-sidebar desktop-only">
          <h2>We look forward to helping you!</h2>
          <img src="<?php echo $base_url; ?>images/receptionist.webp" alt="A smiling receptionist" loading="lazy" width="300" height="196">
          <p>A customer service representive will reach out to you within 24 hours to schedule your apointment.</p>
          <h2 class="sidebar-special">Our Current Special</h2>
          <img class="sidebar-special" src="<?php echo $base_url; ?>images/feb-financing-offer-small.webp" alt="an advertisement for a 0% financing for 5 years" loading="lazy" width="400" height="400">
        </div>
      <form class="form-container ajax-form" method="post">
        <div class="request-form-headline"><h3>Schedule Your FREE Estimate!</h3></div>
        <label for="name">Full Name: <input id="name" type="text" autocomplete="name" placeholder="Enter Full Name" name="name" required></label>
        <label for="email">Email: <input id="email" type="email" autocomplete="email" placeholder="Enter Email" name="email" required></label>
        <label for="phone">Phone: <input id="phone" type="tel" autocomplete="tel" placeholder="123-456-7890" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="phone" required></label>
        <label for="street">Street: <input id="street" type="text" autocomplete="address-line1" placeholder="Street" name="street" required></label>
        <label for="city">City: <input type="text" id="city" autocomplete="address-level2" placeholder="City" name="city" required></label>
        <label for="state">State: <input type="text" id="state" autocomplete="address-level1" placeholder="State" name="state" required></label>
        <label for="message">Message: <textarea id="message" name="message" autocomplete="on" placeholder="Enter message here" rows="4" required></textarea></label>
        <div class="recaptcha-placeholder"></div>
        <button type="submit" class="btn">Submit</button>
        <button type="button" class="btn cancel">Close</button>
      </form>
    </div> 
    <div class="modal">
    <div class="modal-content">
        <span class="close-button">&times;</span>
        <p>Thank you for your submission!</p>
    </div>
</header>