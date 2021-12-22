@extends('admin.layouts.default')
@section('content')
<style>
    .br-pagebody {
    margin-top: 83px;
}
</style>
    <!-- ########## START: LEFT PANEL ########## -->

        @include('admin.layouts.sidebar')


    viewUser
    <!-- ########## END: LEFT PANEL ########## -->

    <!-- ########## START: HEAD PANEL ########## -->
    @include('admin.layouts.header')
    <!-- ########## END: HEAD PANEL ########## -->

    <!-- ########## START: RIGHT PANEL ########## -->
    <div class="br-sideright">
        <ul class="nav nav-tabs sidebar-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" role="tab" href="#contacts"><i
                        class="icon ion-ios-contact-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#attachments"><i
                        class="icon ion-ios-folder-outline tx-22"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#calendar"><i
                        class="icon ion-ios-calendar-outline tx-24"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" role="tab" href="#settings"><i
                        class="icon ion-ios-gear-outline tx-24"></i></a>
            </li>
        </ul><!-- sidebar-tabs -->

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto active" id="contacts" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Online Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0 ">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 3 new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link new">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                            <span class="tx-info tx-12"><span class="square-8 bg-info rounded-circle"></span> 1 new</span>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-success bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div><!-- contact-list -->


                <label class="sidebar-label pd-x-25 mg-t-25">Offline Contacts</label>
                <div class="contact-list pd-x-10">
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Marilyn Tarter</p>
                                <span class="tx-12 op-5 d-inline-block">Clemson, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="mg-l-10">
                                <p class="mg-b-0">Belinda Connor</p>
                                <span class="tx-12 op-5 d-inline-block">Fort Kent, ME</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Britanny Cevallos</p>
                                <span class="tx-12 op-5 d-inline-block">Shiboygan Falls, WI</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Brandon Lawrence</p>
                                <span class="tx-12 op-5 d-inline-block">Snohomish, WA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Andrew Wiggins</p>
                                <span class="tx-12 op-5 d-inline-block">Springfield, MA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Theodore Gristen</p>
                                <span class="tx-12 op-5 d-inline-block">Nashville, TN</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                    <a href="" class="contact-list-link">
                        <div class="d-flex">
                            <div class="pos-relative">
                                <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                                <div class="contact-status-indicator bg-gray-500 bd-br-primary"></div>
                            </div>
                            <div class="contact-person">
                                <p class="mg-b-0">Deborah Miner</p>
                                <span class="tx-12 op-5 d-inline-block">North Shore, CA</span>
                            </div>
                        </div><!-- d-flex -->
                    </a><!-- contact-list-link -->
                </div><!-- contact-list -->

            </div><!-- #contacts -->


            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="attachments" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Recent Attachments</label>
                <div class="media-file-list">
                    <div class="media">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43445</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">1.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6543</p>
                            <p class="mg-b-0 tx-12 op-5">MP4 Video</p>
                            <p class="mg-b-0 tx-12 op-5">24.8mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Tax_Form</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">5.5mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Getting_Started</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">12.7mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-warning wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-pdf-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Introduction</p>
                            <p class="mg-b-0 tx-12 op-5">PDF Document</p>
                            <p class="mg-b-0 tx-12 op-5">7.7mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43420</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">2.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-primary wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-image-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">IMG_43447</p>
                            <p class="mg-b-0 tx-12 op-5">JPG Image</p>
                            <p class="mg-b-0 tx-12 op-5">3.2mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-purple wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-video-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">VID_6545</p>
                            <p class="mg-b-0 tx-12 op-5">AVI Video</p>
                            <p class="mg-b-0 tx-12 op-5">14.8mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                    <div class="media mg-t-20">
                        <div
                            class="pd-10 bg-success wd-50 ht-60 tx-center d-flex align-items-center justify-content-center">
                            <i class="fa fa-file-word-o tx-28 tx-white"></i>
                        </div>
                        <div class="media-body">
                            <p class="mg-b-0 tx-13">Secret_Document</p>
                            <p class="mg-b-0 tx-12 op-5">Word Document</p>
                            <p class="mg-b-0 tx-12 op-5">4.5mb</p>
                        </div><!-- media-body -->
                        <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                    </div><!-- media -->
                </div><!-- media-list -->
            </div><!-- #history -->
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="calendar" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Time &amp; Date</label>
                <div class="pd-x-25">
                    <h2 id="brTime" class="tx-white tx-lato mg-b-5"></h2>
                    <h6 id="brDate" class="tx-white tx-light op-3"></h6>
                </div>

                <label class="sidebar-label pd-x-25 mg-t-25">Events Calendar</label>
                <div class="datepicker sidebar-datepicker"></div>


                <label class="sidebar-label pd-x-25 mg-t-25">Event Today</label>
                <div class="pd-x-25">
                    <div class="list-group sidebar-event-list mg-b-20">
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Roven's 32th Birthday</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">2:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                        <div class="list-group-item">
                            <div>
                                <h6 class="tx-white tx-13 mg-b-5 tx-normal">Regular Workout Schedule</h6>
                                <p class="mg-b-0 tx-white tx-12 op-2">7:30PM</p>
                            </div>
                            <a href="" class="more"><i class="icon ion-android-more-vertical tx-18"></i></a>
                        </div><!-- list-group-item -->
                    </div><!-- list-group -->

                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">+ Add Event</a>
                    <br>
                </div>

            </div>
            <div class="tab-pane pos-absolute a-0 mg-t-60 overflow-y-auto" id="settings" role="tabpanel">
                <label class="sidebar-label pd-x-25 mg-t-25">Quick Settings</label>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Sound Notification</h6>
                    <p class="op-5 tx-13">Play an alert sound everytime there is a new notification.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">2 Steps Verification</h6>
                    <p class="op-5 tx-13">Sign in using a two step verification by sending a verification code to your
                        phone.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox2" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Location Services</h6>
                    <p class="op-5 tx-13">Allowing us to access your location</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox3" class="switch-button">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Newsletter Subscription</h6>
                    <p class="op-5 tx-13">Enables you to send us news and updates send straight to your email.</p>
                    <div class="pos-relative">
                        <input type="checkbox" name="checkbox4" class="switch-button" checked>
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25 tx-white">
                    <h6 class="tx-13 tx-normal">Your email</h6>
                    <div class="pos-relative">
                        <input type="email" name="email" class="form-control form-control-inverse transition pd-y-10"
                            value="janedoe@domain.com">
                    </div>
                </div>

                <div class="pd-y-20 pd-x-25">
                    <h6 class="tx-13 tx-normal tx-white mg-b-20">More Settings</h6>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Account
                        Settings</a>
                    <a href="" class="btn btn-block btn-outline-secondary tx-uppercase tx-11 tx-spacing-2">Privacy
                        Settings</a>
                </div>

            </div>
        </div><!-- tab-content -->

    </div><!-- br-sideright -->
    <!-- ########## END: RIGHT PANEL ########## --->

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="br-mainpanel">


        <div class="br-pagebody">
          <div class="br-section-wrapper">
            <h6 class="tx-gray-800 tx-uppercase tx-bold tx-14 mg-b-10">View Admin</h6>

            <div class="table-wrapper">
              <table id="datatable1" class="table display responsive nowrap">
                <thead>
                  <tr>
                    <th class="wd-15p">First name</th>
                    <th class="wd-15p">Last name</th>
                    <th class="wd-20p">Position</th>
                    <th class="wd-15p">Start date</th>
                    <th class="wd-10p">Salary</th>
                    <th class="wd-25p">E-mail</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger</td>
                    <td>Nixon</td>
                    <td>System Architect</td>
                    <td>2011/04/25</td>
                    <td>$320,800</td>
                    <td>t.nixon@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Garrett</td>
                    <td>Winters</td>
                    <td>Accountant</td>
                    <td>2011/07/25</td>
                    <td>$170,750</td>
                    <td>g.winters@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Ashton</td>
                    <td>Cox</td>
                    <td>Junior Technical Author</td>
                    <td>2009/01/12</td>
                    <td>$86,000</td>
                    <td>a.cox@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Cedric</td>
                    <td>Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>2012/03/29</td>
                    <td>$433,060</td>
                    <td>c.kelly@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Airi</td>
                    <td>Satou</td>
                    <td>Accountant</td>
                    <td>2008/11/28</td>
                    <td>$162,700</td>
                    <td>a.satou@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Brielle</td>
                    <td>Williamson</td>
                    <td>Integration Specialist</td>
                    <td>2012/12/02</td>
                    <td>$372,000</td>
                    <td>b.williamson@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Herrod</td>
                    <td>Chandler</td>
                    <td>Sales Assistant</td>
                    <td>2012/08/06</td>
                    <td>$137,500</td>
                    <td>h.chandler@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Rhona</td>
                    <td>Davidson</td>
                    <td>Integration Specialist</td>
                    <td>2010/10/14</td>
                    <td>$327,900</td>
                    <td>r.davidson@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Colleen</td>
                    <td>Hurst</td>
                    <td>Javascript Developer</td>
                    <td>2009/09/15</td>
                    <td>$205,500</td>
                    <td>c.hurst@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Sonya</td>
                    <td>Frost</td>
                    <td>Software Engineer</td>
                    <td>2008/12/13</td>
                    <td>$103,600</td>
                    <td>s.frost@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jena</td>
                    <td>Gaines</td>
                    <td>Office Manager</td>
                    <td>2008/12/19</td>
                    <td>$90,560</td>
                    <td>j.gaines@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Quinn</td>
                    <td>Flynn</td>
                    <td>Support Lead</td>
                    <td>2013/03/03</td>
                    <td>$342,000</td>
                    <td>q.flynn@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Charde</td>
                    <td>Marshall</td>
                    <td>Regional Director</td>
                    <td>2008/10/16</td>
                    <td>$470,600</td>
                    <td>c.marshall@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Haley</td>
                    <td>Kennedy</td>
                    <td>Senior Marketing Designer</td>
                    <td>2012/12/18</td>
                    <td>$313,500</td>
                    <td>h.kennedy@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Tatyana</td>
                    <td>Fitzpatrick</td>
                    <td>Regional Director</td>
                    <td>2010/03/17</td>
                    <td>$385,750</td>
                    <td>t.fitzpatrick@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Michael</td>
                    <td>Silva</td>
                    <td>Marketing Designer</td>
                    <td>2012/11/27</td>
                    <td>$198,500</td>
                    <td>m.silva@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Paul</td>
                    <td>Byrd</td>
                    <td>Chief Financial Officer</td>
                    <td>2010/06/09</td>
                    <td>$725,000</td>
                    <td>p.byrd@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Gloria</td>
                    <td>Little</td>
                    <td>Systems Administrator</td>
                    <td>2009/04/10</td>
                    <td>$237,500</td>
                    <td>g.little@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Bradley</td>
                    <td>Greer</td>
                    <td>Software Engineer</td>
                    <td>2012/10/13</td>
                    <td>$132,000</td>
                    <td>b.greer@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Dai</td>
                    <td>Rios</td>
                    <td>Personnel Lead</td>
                    <td>2012/09/26</td>
                    <td>$217,500</td>
                    <td>d.rios@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jenette</td>
                    <td>Caldwell</td>
                    <td>Development Lead</td>
                    <td>2011/09/03</td>
                    <td>$345,000</td>
                    <td>j.caldwell@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Yuri</td>
                    <td>Berry</td>
                    <td>Chief Marketing Officer</td>
                    <td>2009/06/25</td>
                    <td>$675,000</td>
                    <td>y.berry@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Caesar</td>
                    <td>Vance</td>
                    <td>Pre-Sales Support</td>
                    <td>2011/12/12</td>
                    <td>$106,450</td>
                    <td>c.vance@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Doris</td>
                    <td>Wilder</td>
                    <td>Sales Assistant</td>
                    <td>2010/09/20</td>
                    <td>$85,600</td>
                    <td>d.wilder@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Angelica</td>
                    <td>Ramos</td>
                    <td>Chief Executive Officer</td>
                    <td>2009/10/09</td>
                    <td>$1,200,000</td>
                    <td>a.ramos@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Gavin</td>
                    <td>Joyce</td>
                    <td>Developer</td>
                    <td>2010/12/22</td>
                    <td>$92,575</td>
                    <td>g.joyce@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jennifer</td>
                    <td>Chang</td>
                    <td>Regional Director</td>
                    <td>2010/11/14</td>
                    <td>$357,650</td>
                    <td>j.chang@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Brenden</td>
                    <td>Wagner</td>
                    <td>Software Engineer</td>
                    <td>2011/06/07</td>
                    <td>$206,850</td>
                    <td>b.wagner@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Fiona</td>
                    <td>Green</td>
                    <td>Chief Operating Officer</td>
                    <td>2010/03/11</td>
                    <td>$850,000</td>
                    <td>f.green@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Shou</td>
                    <td>Itou</td>
                    <td>Regional Marketing</td>
                    <td>2011/08/14</td>
                    <td>$163,000</td>
                    <td>s.itou@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Michelle</td>
                    <td>House</td>
                    <td>Integration Specialist</td>
                    <td>2011/06/02</td>
                    <td>$95,400</td>
                    <td>m.house@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Suki</td>
                    <td>Burks</td>
                    <td>Developer</td>
                    <td>2009/10/22</td>
                    <td>$114,500</td>
                    <td>s.burks@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Prescott</td>
                    <td>Bartlett</td>
                    <td>Technical Author</td>
                    <td>2011/05/07</td>
                    <td>$145,000</td>
                    <td>p.bartlett@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Gavin</td>
                    <td>Cortez</td>
                    <td>Team Leader</td>
                    <td>2008/10/26</td>
                    <td>$235,500</td>
                    <td>g.cortez@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Martena</td>
                    <td>Mccray</td>
                    <td>Post-Sales support</td>
                    <td>2011/03/09</td>
                    <td>$324,050</td>
                    <td>m.mccray@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Unity</td>
                    <td>Butler</td>
                    <td>Marketing Designer</td>
                    <td>2009/12/09</td>
                    <td>$85,675</td>
                    <td>u.butler@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Howard</td>
                    <td>Hatfield</td>
                    <td>Office Manager</td>
                    <td>2008/12/16</td>
                    <td>$164,500</td>
                    <td>h.hatfield@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Hope</td>
                    <td>Fuentes</td>
                    <td>Secretary</td>
                    <td>2010/02/12</td>
                    <td>$109,850</td>
                    <td>h.fuentes@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Vivian</td>
                    <td>Harrell</td>
                    <td>Financial Controller</td>
                    <td>2009/02/14</td>
                    <td>$452,500</td>
                    <td>v.harrell@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Timothy</td>
                    <td>Mooney</td>
                    <td>Office Manager</td>
                    <td>2008/12/11</td>
                    <td>$136,200</td>
                    <td>t.mooney@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jackson</td>
                    <td>Bradshaw</td>
                    <td>Director</td>
                    <td>2008/09/26</td>
                    <td>$645,750</td>
                    <td>j.bradshaw@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Olivia</td>
                    <td>Liang</td>
                    <td>Support Engineer</td>
                    <td>2011/02/03</td>
                    <td>$234,500</td>
                    <td>o.liang@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Bruno</td>
                    <td>Nash</td>
                    <td>Software Engineer</td>
                    <td>2011/05/03</td>
                    <td>$163,500</td>
                    <td>b.nash@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Sakura</td>
                    <td>Yamamoto</td>
                    <td>Support Engineer</td>
                    <td>2009/08/19</td>
                    <td>$139,575</td>
                    <td>s.yamamoto@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Thor</td>
                    <td>Walton</td>
                    <td>Developer</td>
                    <td>2013/08/11</td>
                    <td>$98,540</td>
                    <td>t.walton@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Finn</td>
                    <td>Camacho</td>
                    <td>Support Engineer</td>
                    <td>2009/07/07</td>
                    <td>$87,500</td>
                    <td>f.camacho@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Serge</td>
                    <td>Baldwin</td>
                    <td>Data Coordinator</td>
                    <td>2012/04/09</td>
                    <td>$138,575</td>
                    <td>s.baldwin@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Zenaida</td>
                    <td>Frank</td>
                    <td>Software Engineer</td>
                    <td>2010/01/04</td>
                    <td>$125,250</td>
                    <td>z.frank@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Zorita</td>
                    <td>Serrano</td>
                    <td>Software Engineer</td>
                    <td>2012/06/01</td>
                    <td>$115,000</td>
                    <td>z.serrano@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jennifer</td>
                    <td>Acosta</td>
                    <td>Junior Javascript Developer</td>
                    <td>2013/02/01</td>
                    <td>$75,650</td>
                    <td>j.acosta@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Cara</td>
                    <td>Stevens</td>
                    <td>Sales Assistant</td>
                    <td>2011/12/06</td>
                    <td>$145,600</td>
                    <td>c.stevens@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Hermione</td>
                    <td>Butler</td>
                    <td>Regional Director</td>
                    <td>2011/03/21</td>
                    <td>$356,250</td>
                    <td>h.butler@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Lael</td>
                    <td>Greer</td>
                    <td>Systems Administrator</td>
                    <td>2009/02/27</td>
                    <td>$103,500</td>
                    <td>l.greer@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Jonas</td>
                    <td>Alexander</td>
                    <td>Developer</td>
                    <td>2010/07/14</td>
                    <td>$86,500</td>
                    <td>j.alexander@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Shad</td>
                    <td>Decker</td>
                    <td>Regional Director</td>
                    <td>2008/11/13</td>
                    <td>$183,000</td>
                    <td>s.decker@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Michael</td>
                    <td>Bruce</td>
                    <td>Javascript Developer</td>
                    <td>2011/06/27</td>
                    <td>$183,000</td>
                    <td>m.bruce@datatables.net</td>
                  </tr>
                  <tr>
                    <td>Donna</td>
                    <td>Snider</td>
                    <td>Customer Support</td>
                    <td>2011/01/25</td>
                    <td>$112,000</td>
                    <td>d.snider@datatables.net</td>
                  </tr>
                </tbody>
              </table>
            </div><!-- table-wrapper -->





          </div><!-- br-section-wrapper -->
        </div><!-- br-pagebody -->
      @include('admin.layouts.footer')
      </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "http://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" defer ></script>

    <script>
        $(function(){
          'use strict';

          $('#datatable1').DataTable({
            responsive: true,
            language: {
              searchPlaceholder: 'Search...',
              sSearch: '',
              lengthMenu: '_MENU_ items/page',
            }
          });

          $('#datatable2').DataTable({
            bLengthChange: false,
            searching: false,
            responsive: true
          });

          // Select2
          $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

        });
      </script>
@endsection