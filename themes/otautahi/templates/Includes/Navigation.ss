        <div class="navbar navbar-default navbar-custom">
            <div class="container">
                <!-- Mobile Navigation -->
                <div class="navbar-header">
                  <!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"     data-target="#bs-example-navbar-collapse-1"      aria-expanded="false"> -->
                  <button type="button" class="navbar-toggle collapsed">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                    <div id="overlay">
                        <div class="overlay-content">
                            <ul>
                                <li><a href="$AbsoluteBaseURL">Home</a></li>
                                <% loop $Menu(1) %>
                                    <li><a class="$LinkingMode" href="$Link" id="line-hover">$MenuTitle</a></li>
                                <% end_loop %>
                            </ul>
                        </div>
                    </div>
                  <a class="navbar-brand" href="$AbsoluteBaseURL">
                    <img class="hidden-xs" src="themes/otautahi/img/logo/Ara_Logo_primary_white_Limited_use.svg" alt="Ara logo">Otautahi House
                  </a>
                </div>
    
                <!-- Desktop Navigation -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav navbar-right">
                    <% loop $Menu(1) %>
                    <li><a class="$LinkingMode" href="$Link" id="line-hover">$MenuTitle</a></li>
                    <% end_loop %>
                    <li><a href="./booking" class="btn btn-xl nav-btn">Apply Now</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>