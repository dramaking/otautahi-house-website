    
        <!-- Header -->
        <% include GuideHeader %>

        <!-- Main -->
        <main class="main-point survivor-main">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="guide-heading">$Heading</h2>
                <div class="tabbable tabs-left">
                  <!-- Guide Navigation -->
                  <div class="guide-nav-container">
                      <ul class="nav nav-tabs">
                      <% loop $GuideItems %>
                        <li class="<% if First %>active<% end_if %>"><a href="#$Pos" data-toggle="tab">$Title</a></li>
                      <% end_loop %>
                      </ul>
                  </div>
                  <div class="guide-nav-trigger">
                      <span>Contents</span>
                  </div>
        
                  <div class="guide-nav-mobile"></div>
                  
                  <!-- Content -->
                  <div class="tab-content">
                  <% loop $GuideItems %>
                   <div class="tab-pane <% if First %>active<% end_if %>" id="$Pos">
                      <div class="feature-heading"><span class="deco-line">$Title</span></div>
                      $Content
                   </div>
                  <% end_loop %>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </main>