        <!-- Header -->
        <% include MainHeader %>
    
        <!-- Feature Section -->
        <% loop $Features %>
            <% if Odd %>
            <section id="features">
                <div class="container feature-wrapper">
                    <div class="row feature-center">
                        <div class="col-md-6 feature-item">
                            <div class="feature-heading"><span class="deco-line">$FeatureHeading</span></div>
                            <div class="feature-description">$FeatureDescription</div>
                        </div>
                        <div class="col-md-6 feature-photo">
                            $FeaturePhoto
                        </div>
                    </div>
                </div>
            </section>
            <% end_if %>
    
            <% if Even %>
            <section id="features">
                <div class="container feature-wrapper">
                    <div class="row feature-center feature-flex">
                        <div class="col-md-6 feature-photo">
                            $FeaturePhoto
                        </div>
                        <div class="col-md-6 feature-item">
                            <div class="feature-heading"><span class="deco-line">$FeatureHeading</span></div>
                            <div class="feature-description">$FeatureDescription</div>
                        </div>
                    </div>
                </div>
            </section>
            <% end_if %>
        <% end_loop %>

        <section id="guides">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 class="section-heading">Start your new life</h1>
                    </div>
                </div>
                <div class="row guide-container">
                <% loop $GuideBooks %>
                    <div class="col-md-3 text-center guidebook">
                        <a href="#" class="guidecard">
                            <div class="media-cover" style="background-image:url($Background.Filename);"></div>
                            <h3 class="guide-heading">$Title</h3>
                        </a>
                    </div>
                <% end_loop %>
                </div>
            </div>
        </section>