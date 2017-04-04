        <!-- Header -->
        <% include GuideHeader %>

        <!-- Main -->
        <main class="main-point move-in-main">
          <section class="container" id="what-to-bring">
            <div class="row">
              <div class="col-md-12">
                <div class="feature-heading theme-color"><span class="deco-line">What to bring</span></div>
              </div>
            </div>
            <% loop $BringItems %>
            <div class="row upper-line">
              <div class="col-md-3">
                  <h3>$Title</h3>
              </div>
              <div class="col-md-9 apartment-detail">
                  <% loop $Icons %>
                    <div class="apartment-item">
                        <i class="fa $FontAwesomeIcon"></i>
                        <p>$Title</p>
                    </div>
                  <% end_loop %>
              </div>
            </div>
            <% end_loop %>
            </div>
          </section>

          <section class="container" id="what-not-to-bring">
            <div class="row">
              <div class="col-md-12">
                <div class="feature-heading theme-color"><span class="deco-line">What NOT to bring</span></div>
              </div>
            </div>
            <div class="row upper-line no-top-border">
              <div class="col-md-3">
                  
              </div>
              <% loop $NotToBringItems %>
              <div class="col-md-9 apartment-detail">
                  <% loop $Icons %>
                    <div class="apartment-item">
                        <i class="fa $FontAwesomeIcon"></i>
                        <p>$Title</p>
                    </div>
                  <% end_loop %>
              </div>
              <% end_loop %>
            </div>
          </section>

          <% loop $Sections %>
          <section class="container" id="move-in-day">
            <div class="row">
              <div class="col-md-12">
                <div class="feature-heading theme-color"><span class="deco-line">$Title</span></div>
              </div>
            </div>
            <div class="row upper-line no-top-border">
              <div class="col-md-12">
                <p>$Content</p>
              </div>
            </div>
          </section>
          <% end_loop %>
        </main>