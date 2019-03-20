<div style="font-family: 'Arvo', serif;" class="sidebar" data-color="blue">
      
    <div class="logo">
        <h4 style="font-family: 'Arvo', serif;">Blue Ocean Movies</h4>
    </div>
    <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
            <li class="active ">
                <a href="#">
                  <i class="now-ui-icons design_app"></i>
                  <p>Dashboard</p>
                </a>
            </li>
            
            <!-- <li>
                <a href="/configuration">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Configuration</p>
                </a>
            </li> -->

            @guest
            @else
                <li>
                    <a href="/configuration">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Configuration</p>
                    </a>
                </li>    
            @endguest
            
            
            <li>
                <a href="./notifications.html">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Notifications</p>
                </a>
            </li>
            <li>
                <a href="./user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="./tables.html">
                    <i class="now-ui-icons design_bullet-list-67"></i>
                    <p>Table List</p>
                </a>
            </li>
            <li>
                <a href="./typography.html">
                    <i class="now-ui-icons text_caps-small"></i>
                    <p>Typography</p>
                </a>
            </li>
            <li class="active-pro">
                <a href="./upgrade.html">
                    <i class="now-ui-icons arrows-1_cloud-download-93"></i>
                    <p>Upgrade to PRO</p>
                </a>
            </li>
        </ul>
      </div>
    </div>