@extends('admin.layouts.default')
@section('content')
    <!-- ########## START: LEFT PANEL ########## -->

        @include('admin.layouts.sidebar')


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
        <div class="pd-30">
          <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
        </div><!-- d-flex -->

        <div class="br-pagebody mg-t-5 pd-x-30">
          <div class="row row-sm">
            <div class="col-sm-6 col-xl-4">
              <div class="bg-teal rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-earth tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Today's User</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">1,975,224</p>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-sm-t-0">
              <div class="bg-danger rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-bag tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">Monthly Users</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">$329,291</p>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->
            <div class="col-sm-6 col-xl-4 mg-t-20 mg-xl-t-0">
              <div class="bg-primary rounded overflow-hidden">
                <div class="pd-25 d-flex align-items-center">
                  <i class="ion ion-monitor tx-60 lh-0 tx-white op-7"></i>
                  <div class="mg-l-20">
                    <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">% Unique Visits</p>
                    <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">54.45%</p>
                  </div>
                </div>
              </div>
            </div><!-- col-3 -->

          </div><!-- row -->

          <div class="row row-sm mg-t-20">
                <div class="col-8">

                <div class="card bd-0 shadow-base pd-30 mg-t-20">
                    <div class="d-flex align-items-center justify-content-between mg-b-30">
                    <div>
                        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">Newly Registered Users</h6>
                        <p class="mg-b-0"><i class="icon ion-calendar mg-r-5"></i> From October 2017 - December 2021</p>
                    </div>
                    <a href="" class="btn btn-outline-info btn-oblong tx-11 tx-uppercase tx-mont tx-medium tx-spacing-1 pd-x-30 bd-2">See more</a>
                    </div><!-- d-flex -->

                    <table class="table table-valign-middle mg-b-0">
                    <tbody>
                        <tr>
                        <td class="pd-l-0-force">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                        </td>
                        <td>
                            <h6 class="tx-inverse tx-14 mg-b-0">Deborah Miner</h6>
                            <span class="tx-12">@deborah.miner</span>
                        </td>
                        <td>Nov 01, 2017</td>
                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                        </tr>
                        <tr>
                        <td class="pd-l-0-force">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                        </td>
                        <td>
                            <h6 class="tx-inverse tx-14 mg-b-0">Belinda Connor</h6>
                            <span class="tx-12">@belinda.connor</span>
                        </td>
                        <td>Oct 28, 2017</td>
                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                        </tr>
                        <tr>
                        <td class="pd-l-0-force">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                        </td>
                        <td>
                            <h6 class="tx-inverse tx-14 mg-b-0">Andrew Wiggins</h6>
                            <span class="tx-12">@andrew.wiggins</span>
                        </td>
                        <td>Oct 27, 2017</td>
                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                        </tr>
                        <tr>
                        <td class="pd-l-0-force">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                        </td>
                        <td>
                            <h6 class="tx-inverse tx-14 mg-b-0">Brandon Lawrence</h6>
                            <span class="tx-12">@brandon.lawrence</span>
                        </td>
                        <td>Oct 27, 2017</td>
                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                        </tr>
                        <tr>
                        <td class="pd-l-0-force">
                            <img src="http://via.placeholder.com/280x280" class="wd-40 rounded-circle" alt="">
                        </td>
                        <td>
                            <h6 class="tx-inverse tx-14 mg-b-0">Marilyn Tarter</h6>
                            <span class="tx-12">@marilyn.tarter</span>
                        </td>
                        <td>Oct 27, 2017</td>
                        <td class="pd-r-0-force tx-center"><a href="" class="tx-gray-600"><i class="icon ion-more tx-18 lh-0"></i></a></td>
                        </tr>
                    </tbody>
                    </table>
                </div><!-- card -->


                </div><!-- col-9 -->
                <div class="col-4">


                <div class="card bg-transparent shadow-base bd-0 mg-t-20">
                    <div class="bg-primary rounded-top">
                    <div class="pd-x-30 pd-t-30">
                        <h6 class="tx-13 tx-uppercase tx-white tx-semibold tx-spacing-1">User Status</h6>
                        <p class="mg-b-20 tx-white-6">As of October 10 - 17, 2017</p>
                        <h3 class="tx-lato tx-white mg-b-0">$12, 201 <i class="icon ion-android-arrow-up tx-white-5"></i></h3>
                    </div>
                    <div id="chartLine1" class="wd-100p ht-150"></div>
                    </div>
                    <div class="bg-white pd-20 rounded-bottom d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-start">
                        <div><span id="sparkline6">5,4,7,5,9,7,4</span></div>
                        <div class="mg-l-15">
                        <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Average User</label>
                        <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$603, 201</h6>
                        </div>
                    </div><!-- d-flex -->
                    <div class="d-flex align-items-center">
                        <div><span id="sparkline7">4,7,5,9,4,7,5</span></div>
                        <div class="mg-l-15">
                        <label class="tx-uppercase tx-10 tx-medium tx-spacing-1 mg-b-0">Total User</label>
                        <h6 class="tx-inverse mg-b-0 tx-lato tx-bold">$822, 677</h6>
                        </div>
                    </div><!-- d-flex -->
                    </div><!-- d-flex -->
                </div><!-- card -->

                <div class="card bd-0 mg-t-20">
                    <div id="carousel2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel2" data-slide-to="1"></li>
                        <li data-target="#carousel2" data-slide-to="2"></li>
                    </ol>

                    </div><!-- carousel -->
                </div><!-- card -->

                </div><!-- col-3 -->
          </div><!-- row -->

        </div><!-- br-pagebody -->
    @include('admin.layouts.footer')
      </div><!-- br-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->


@endsection
