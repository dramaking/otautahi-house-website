<!-- Header -->
        <div class="fixed-header" style="background-image:url($Photo.Filename);">
            <div class="container">
                <div class="teasing-wrapper">
                    <div class="teasing-title">$Heading</div>
                    <div class="teasing-text">$Teaser</div>
                    <a href="#" class="btn btn-primary nav-btn scroll-to-main">Room Options</a>
                </div>
            </div>
        </div>

        <!-- Booking options -->
        <div class="booking-options main-point">
            <div class="width-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>Explore your options</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                              <% loop $Options %>
                                  <li role="presentation" class="<% if First %>active<% end_if %>"><a href="#option$Pos" aria-controls="option$Pos" role="tab" data-toggle="tab"><h3>$OptionTab</h3></a></li>
                              <% end_loop %>
                              
                            </ul>
                            
                            <!-- Tab panes -->
                            <div class="tab-content">
                            <% loop $Options %>
                              <div role="tabpanel" class="tab-pane <% if First %>active<% end_if %>" id="option$Pos">
                                  <div class="container">
                                      <div class="row booking-brief">
                                          <div class="col-md-8">
                                              <h1 class="theme-color">$OptionBrief</h1>
                                              <div class="icon-outer">
                                                <% loop $Icons %>
                                                  <div class="icon-inner">
                                                      <i class="fa $FontAwesomeIcon"></i>
                                                      <p>$Title</p>
                                                  </div>
                                                <% end_loop %>
                                              </div>
                                          </div>
                                          <div class="col-md-4">
                                              <div class="booking-price">
                                                  <h1>$$OptionPrice NZD</h1>
                                                  <p>per week</p>
                                              </div>
                                          </div>
                                      </div>
                                      <div class="row booking-photo">
                                          <div class="col-md-12">
                                                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                                  <!-- Indicators -->
                                                  <ol class="carousel-indicators">
                                                  <% loop $Photos %>
                                                    <li data-target="#carousel-example-generic" data-slide-to="$Pos(0)" class="<% if First %>active<% end_if %>"></li>
                                                  <% end_loop %>
                                                  </ol>
                                                
                                                  <!-- Wrapper for slides -->
                                                  <div class="carousel-inner" role="listbox">
                                                  <% loop $Photos %>
                                                    <div class="item <% if First %>active<% end_if %>">
                                                      <img src="$URL" alt="...">
                                                      <div class="carousel-caption">
                                                      </div>
                                                    </div>
                                                  <% end_loop %>
                                                  </div>
                                                
                                                  <!-- Controls -->
                                                <%-- <% if ShowControls %> --%>
                                                  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                  </a>
                                                  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                  </a>
                                                <%-- <% end_if %> --%>
                                                </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                            <% end_loop %>
      
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About your apartment -->
        <% loop $AboutApartments %>
        <div class="apartment">
            <div class="width-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>About your apartment</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <p>$AboutDescription</p>
                            <a href="./contact" class="theme-color">Contact us</a>
                        </div>
                    </div>
                    <!-- Amenities -->
                    <div class="row upper-line">
                        <div class="col-md-3">
                            <h3>Amenities</h3>
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

                    <!-- Internet -->
                    <div class="row upper-line">
                        <div class="col-md-3">
                            <h3>Internet</h3>
                        </div>
                        <div class="col-md-9 apartment-detail">
                            <p>$InternetDescription</p>
                        </div>
                    </div>

                    <!-- Additional fees -->
                    <div class="row upper-line">
                        <div class="col-md-3">
                            <h3>Additional fees</h3>
                        </div>
                        <div class="col-md-9 apartment-detail">
                            <div class="container">
                              <% loop $Prices %>
                                <div class="row">
                                    <div class="col-md-3">
                                        <p>$Title:</p>
                                    </div>
                                    <div class="col-md-9">
                                        <p class="price">$Expense</p>
                                    </div>
                                </div>
                              <% end_loop %>
                            </div>
                        </div>
                    </div>

                    <!-- Payment options -->
                    <div class="row upper-line">
                        <div class="col-md-3">
                            <h3>Payment options</h3>
                        </div>
                        <div class="col-md-9 apartment-detail">
                            $PaymentDescription
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <% end_loop %>

        <!-- How to apply -->
        <div class="how-to-apply">
            <div class="width-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>How to apply</h2>
                        </div>
                    </div>
                    <!-- First Step -->
                    <% loop $Steps %>
                    <div class="row apply-step">
                        <div class="col-md-12">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <span class="circle-number">$Pos</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="step-heading">$StepTitle</div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>$StepDescription</p>
                                    </div>
                                </div>
                                <div class="row">
                                  <% loop $StepBoxs %>
                                    <div class="col-md-4">
                                        <div class="apply-detail">
                                            <i class="fa $FontAwesomeIcon"></i>
                                            <h4>$Title</h4>
                                            <p>$Description</p>
                                        </div>
                                    </div>
                                  <% end_loop %>
                                </div>
                            </div>
                        </div>
                    </div>
                    <% end_loop %>
                    
                
                </div>
            </div>
        </div>