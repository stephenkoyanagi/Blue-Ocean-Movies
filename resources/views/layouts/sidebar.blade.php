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
            
            
            @guest
            @else
                <li>
                    <a href="/configuration">
                        <i class="now-ui-icons location_map-big"></i>
                        <p>Configuration</p>
                    </a>
                </li>    
            @endguest
            
            @guest
            @else
                <li>
                    <a href="/movie">
                        <i class="now-ui-icons ui-1_bell-53"></i>
                        <p>Movies</p>
                    </a>
                </li>
            @endguest            
        </ul>
      </div>
    </div>