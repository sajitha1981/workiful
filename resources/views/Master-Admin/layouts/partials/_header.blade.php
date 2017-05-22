<header>
      <!--Start Header for sign up page-->  
      <div class="top-bar" style="display:none;">
        <div class="navbar navbar-static-top">
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-responsive">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('admin/images') }}/razeqeen-logo.png" alt="" title="Logo"></a>
              </div>
              <div class="navbar-collapse collapse">
                <div class="right-top pull-right">
                  <a href="#" class="clr-white">Already have an account?</a></li>
                  <a href="#" class="yellow-btn">log in</a>
                </div>
              </div>
              <!--div/.nav-collapse -->
            </div>
          </div>
        </div>
      </div>
      <!--End Header for sign up page-->  
      <!--Start Header when user login--> 
      <div class="container-responsive top-bar">
        <div class="navbar navbar-static-top">
          <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container-responsive">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="{{ url('admin/images') }}/razeqeen-logo.png" alt="" title="Logo"></a>
              </div>
              <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                  <li><a href="dashboard">Dashboard</a></li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Companies <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                      <li><a href="add-company.html"><i class="fa fa-plus"></i> Add Company</a></li>
                      <li><a href="post-a-job.html"><i class="fa fa-suitcase"></i> Post A Job</a></li>
                      <li><a href="manage-companies.html"><i class="fa fa-building"></i> Manage Companies</a></li>
					   <li><a href="post-a-job.html"><i class="fa fa-suitcase"></i> Posted Job</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Candidates <span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
                      <li><a href="add-candidate.html"><i class="fa fa-plus"></i> Add Candidate</a></li>
                      <li><a href="manage-candidates.html"><i class="fa fa-users"></i> Manage Candidates</a></li>
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Razeqeen <span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
                      <li><a href="manage-employees.html"><i class="fa fa-tasks"></i> Manage Employees</a></li>
                      <!-- <li><a href="employees.php?lang=en"><i class="glyphicon glyphicon-payment"></i>Financials</a></li> -->
                      <li><a href="financials.html"><i class="fa fa-bar-chart"></i> Financials</a></li>
                      <li><a href="recruiters.html"><i class="fa fa-user"></i> Recruiters</a></li>
                      <li><a href="helpdesk.html"><i class="fa fa-support"></i> Help Desk</a></li>
                      <li><a href="cms.html"><i class="fa fa-sitemap"></i> Content Management System</a></li>
                     
                    </ul>
                  </li>
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Add Ons <span class="caret"></span></a>
                    <ul class="dropdown-menu " role="menu">
                      <li><a href="list-education"><i class="fa fa-graduation-cap"></i> Education</a></li>
					  <li><a href="list-coupons"><i class="fa fa-graduation-cap"></i> Coupons</a></li>
                      <li><a href="list-countries"><i class="fa fa-list"></i> Countries</a></li>
                      <li><a href="list-states"><i class="fa fa-list"></i> States / Locations</a></li>
                      <li><a href="list-cities"><i class="fa fa-list"></i> Cities</a></li>
                      <li><a href="list-careers"><i class="fa fa-briefcase"></i> Career Levels</a></li>
					   <li><a href="list-industries"><i class="fa fa-briefcase"></i> Industries</a></li>
                      <li><a href="list-jobcategories"><i class="fa fa-list-alt"></i> Job Category</a></li>
                    </ul>
                  </li>
                </ul>
                <div class="nav navbar-nav navbar-right">
                  <div class="form-group search_bar">
                    <input class="form-control brd-left" type="text" placeholder="Admin Search">
                    <a href="#" class="search-btn"><i class="fa fa-search"></i></a>
                  </div>
                  <div class="bell_box">
                    <a href="new-orders.html"><i class="fa fa-bell"></i></a>
                  </div>
                  <a href="approvals.html" class="yellow-btn pull-left margintop">Approvals</a>    
                  <ul class="nav navbar-nav info-deatails">
                    <li class="dropdown info-drop pull-right">
                      <a href="#" class="dropdown-toggle thumnail" data-toggle="dropdown">
                      <img src="{{ url('admin/images') }}/thumnail.png" alt="" title=""> 
                      <span class="caret"></span>
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><i class="fa fa-star-o"></i><strong>Razeqeen</strong></a></li>
                        <li><a href="account-settings.html"><i class="fa fa-cog"></i>Account Settings</a></li>
                        <li><a href="messages.html"><i class="fa fa-envelope"></i>Messages</a></li>
                        <li><a href="packages.html"><i class="fa fa-list-ol"></i>Packages</a></li>
                        <li><a href="invoices.html"><i class="fa fa-file-text"></i>Invoices</a></li>
                        <li><a href="logout"><i class="fa fa-sign-out"></i>Signout</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <!--/.nav-collapse -->
            </div>
          </div>
        </div>
      </div>
      <!--End Header when user login--> 
    </header>
    <!-- End Header Section-->