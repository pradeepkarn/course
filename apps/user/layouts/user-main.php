  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - <?php echo SITE_NAME; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/img/favicon.png" rel="icon">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="/<?php echo STATIC_URL; ?>/admin/assets/css/style.css" rel="stylesheet">


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>

    <link href='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css" />
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.9.1/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <!-- select 2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/css/select2.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.1.0-beta.0/js/select2.min.js"></script>
    <style>
      .select2-selection--single {
        height: 40px !important;
        /* width: 100% !important; */
      }
    </style>
    <!-- select 2 end -->
    <script>
      function commonCallbackHandler(res) {
        if (res.success === true) {
          swalert({
            title: 'Success',
            msg: res.msg,
            icon: 'success'
          });
          if (res.reload) {
            location.reload();
          }
        } else if (res.success === false) {
          swalert({
            title: 'Failed',
            msg: res.msg,
            icon: 'error'
          });
        } else {
          swalert({
            title: 'Failed',
            msg: 'Something went wrong',
            icon: 'error'
          });
        }
      }
    </script>
    <script>
      function swalert(obj) {
        Swal.fire(
          obj.title,
          obj.msg,
          obj.icon
        ).then(() => {
          if (obj.gotoLink) {
            window.location.href = obj.gotoLink;
          }
        })
      }
    </script>
    <style>
      .hide {
        display: none !important;
      }
    </style>
  </head>

  <body>

    <div id="global-progress-bar" style="height: 5px;" class="progress fixed-top" role="progressbar" aria-label="Animated striped example" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
      <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 0%"></div>
    </div>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

      <div class="d-flex align-items-center justify-content-between">
        <a href="/<?php echo home; ?>/user" class="logo d-flex align-items-center">
          <!-- <img src="/<?php //echo STATIC_URL; 
                          ?>/admin/assets/img/logo.png" alt=""> -->
          <span class="d-none d-lg-block"><?php echo SITE_NAME; ?></span>
        </a>

        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>
      <a href="/<?php echo home; ?>/" target="_blank" class="ps-5 logo d-flex align-items-center">
        <i style="font-size:20px;" class="ri-external-link-fill"></i>
      </a>
      <!-- End Logo -->

      <!-- <div class="search-bar">
        <form class="search-form d-flex align-items-center" method="POST" action="#">
          <input type="text" name="query" placeholder="Search" title="Enter search keyword">
          <button type="submit" title="Search"><i class="bi bi-search"></i></button>
        </form>
      </div> -->
      <!-- End Search Bar -->

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">

          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->

          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a><!-- End Notification Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-exclamation-circle text-warning"></i>
                <div>
                  <h4>Lorem Ipsum</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>30 min. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-x-circle text-danger"></i>
                <div>
                  <h4>Atque rerum nesciunt</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>1 hr. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-check-circle text-success"></i>
                <div>
                  <h4>Sit rerum fuga</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>2 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="notification-item">
                <i class="bi bi-info-circle text-primary"></i>
                <div>
                  <h4>Dicta reprehenderit</h4>
                  <p>Quae dolorem earum veritatis oditseno</p>
                  <p>4 hrs. ago</p>
                </div>
              </li>

              <li>
                <hr class="dropdown-divider">
              </li>
              <li class="dropdown-footer">
                <a href="#">Show all notifications</a>
              </li>

            </ul><!-- End Notification Dropdown Items -->

          </li><!-- End Notification Nav -->

          <li class="nav-item dropdown">

            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-chat-left-text"></i>
              <span class="badge bg-success badge-number">3</span>
            </a><!-- End Messages Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
              <li class="dropdown-header">
                You have 3 new messages
                <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="/<?php echo STATIC_URL; ?>/admin/assets/img/messages-1.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Maria Hudson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>4 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="/<?php echo STATIC_URL; ?>/admin/assets/img/messages-2.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>Anna Nelson</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>6 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="message-item">
                <a href="#">
                  <img src="/<?php echo STATIC_URL; ?>/admin/assets/img/messages-3.jpg" alt="" class="rounded-circle">
                  <div>
                    <h4>David Muldon</h4>
                    <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                    <p>8 hrs. ago</p>
                  </div>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li class="dropdown-footer">
                <a href="#">Show all messages</a>
              </li>

            </ul><!-- End Messages Dropdown Items -->

          </li><!-- End Messages Nav -->

          <li class="nav-item dropdown pe-3">

            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="/<?php echo MEDIA_URL; ?>/images/profiles/<?php echo USER['image']; ?>" alt="Profile" class="rounded-circle">
              <span class="d-none d-md-block dropdown-toggle ps-2"><?php echo USER['username']; ?></span>
            </a><!-- End Profile Iamge Icon -->

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header">
                <h6><?php echo USER['first_name']; ?> <?php echo USER['last_name']; ?></h6>
                <span><?php echo USER['user_group']; ?></span>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="/<?php echo home . route('userEdit', ['id' => USER['id'], 'ug' => USER['user_group']]); ?>">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider">
              </li>

              <!-- <li>
                <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                  <i class="bi bi-gear"></i>
                  <span>Account Settings</span>
                </a>
              </li> -->
              <li>
                <hr class="dropdown-divider">
              </li>

              <!-- <li>
                <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                  <i class="bi bi-question-circle"></i>
                  <span>Need Help?</span>
                </a>
              </li> -->
              <li>
                <hr class="dropdown-divider">
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="/<?php echo home . route('logout'); ?>">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>

            </ul><!-- End Profile Dropdown Items -->
          </li><!-- End Profile Nav -->

        </ul>
      </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->

    <?php import("apps/user/layouts/sidebar.php"); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">
      <?php
      // The $context variable defiend as parameteres of import function and its value is set on root level index.php 
      // import("apps/admin/pages/{$context}.php");
      import("apps/user/pages/{$context->page}", $context->data);
      ?>


    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
      <div class="copyright">
        &copy; Copyright <strong><span><?php echo SITE_NAME; ?></span></strong>. All Rights Reserved
      </div>
      <!-- <div class="credits">
        Developed by <a href="https://webartvision.com/">Webartvision.com</a>
      </div> -->
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/quill/quill.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/js/main.js"></script>
    <?php
    if (MY_DOMAIN != "localhost") {
      $link = "https://" . MY_DOMAIN . "/media/images/pages/";
    } else {
      $link = "http://localhost/" . home . "/media/images/pages/";
    }
    ?>
    <script>
      /**
       * Initiate TinyMCE Editor
       */
      const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
      const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

      tinymce.init({
        selector: 'textarea.tinymce-editor',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons',
        editimage_cors_hosts: ['picsum.photos'],
        menubar: 'file edit view insert format tools table help',
        toolbar: 'code | undo redo | bold italic underline strikethrough | fontfamily fontsize blocks | alignleft aligncenter alignright alignjustify | outdent indent |  numlist bullist | forecolor backcolor removeformat | pagebreak | charmap emoticons | fullscreen  preview save print | insertfile image media template link anchor codesample | ltr rtl',
        toolbar_sticky: false,
        toolbar_sticky_offset: isSmallScreen ? 102 : 108,
        autosave_ask_before_unload: true,
        autosave_interval: '30s',
        autosave_prefix: '{path}{query}-{id}-',
        autosave_restore_when_empty: false,
        autosave_retention: '2m',
        image_advtab: true,
        link_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
          },
          {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
          }
        ],
        image_list: [{
            title: 'My page 1',
            value: 'https://www.tiny.cloud'
          },
          {
            title: 'My page 2',
            value: 'http://www.moxiecode.com'
          }
        ],
        image_class_list: [{
            title: 'None',
            value: ''
          },
          {
            title: 'Some class',
            value: 'class-name'
          }
        ],
        importcss_append: true,
        file_picker_callback: (callback, value, meta) => {
          /* Provide file and text for the link dialog */
          if (meta.filetype === 'file') {
            callback('https://www.google.com/logos/google.jpg', {
              text: 'My text'
            });
          }

          /* Provide image and alt text for the image dialog */
          if (meta.filetype === 'image') {
            callback('https://www.google.com/logos/google.jpg', {
              alt: 'My alt text'
            });
          }

          /* Provide alternative source and posted for the media dialog */
          if (meta.filetype === 'media') {
            callback('movie.mp4', {
              source2: 'alt.ogg',
              poster: 'https://www.google.com/logos/google.jpg'
            });
          }
        },
        templates: [{
            title: 'New Table',
            description: 'creates a new table',
            content: '<div class="mceTmpl"><table width="98%%"  border="0" cellspacing="0" cellpadding="0"><tr><th scope="col"> </th><th scope="col"> </th></tr><tr><td> </td><td> </td></tr></table></div>'
          },
          {
            title: 'Starting my story',
            description: 'A cure for writers block',
            content: 'Once upon a time...'
          },
          {
            title: 'New list with dates',
            description: 'New List with dates',
            content: '<div class="mceTmpl"><span class="cdate">cdate</span><br><span class="mdate">mdate</span><h2>My List</h2><ul><li></li><li></li></ul></div>'
          }
        ],
        template_cdate_format: '[Date Created (CDATE): %m/%d/%Y : %H:%M:%S]',
        template_mdate_format: '[Date Modified (MDATE): %m/%d/%Y : %H:%M:%S]',
        height: 600,
        image_caption: true,
        quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
        noneditable_class: 'mceNonEditable',
        toolbar_mode: 'sliding',
        contextmenu: 'link image table',
        // skin: useDarkMode ? 'oxide-dark' : 'oxide',
        // content_css: useDarkMode ? 'dark' : 'default',
        extended_valid_elements: 'script[src|async|defer|type|charset]',
        allow_html_in_named_anchor: true,
        content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }',
        relative_urls: false,
        remove_script_host: false,
        document_base_url: `<?php echo $link; ?>`,
        image_list: [
          <?php
          $md = new Media_ctrl;
          $gallery  = $md->gallery();
          foreach ($gallery as $gl) { ?> {
              title: `<?php echo $gl; ?>`,
              value: `<?php echo $gl; ?>`
            },

          <?php  } ?>

        ],
      });
    </script>
    <script src="/<?php echo STATIC_URL; ?>/admin/assets/js/helper.js"></script>
    <?php
    ajaxActive("#global-progress-bar");
    ?>

    <script>
      // Function to update the progress bar
      // function updateProgressBar(progress) {
      //   $("#global-progress-bar .progress-bar").css("width", progress + "%");
      //   $("#global-progress-bar").attr("aria-valuenow", progress);
      // }

      // // Initialize the progress bar
      // updateProgressBar(0);

      // // Listen for all AJAX requests globally
      // $(document).ajaxStart(function() {
      //   // Start of an AJAX request - set progress to 0
      //   updateProgressBar(0);
      // }).ajaxStop(function() {
      //   // End of all AJAX requests - set progress to 100
      //   updateProgressBar(100);
      // });

      // // Intercept AJAX requests globally to update the progress bar
      // $(document).ajaxSend(function(event, jqXHR, settings) {
      //   // Before sending an AJAX request, set progress to a lower value (e.g., 10%)
      //   updateProgressBar(10);
      // });

      // $(document).ajaxComplete(function(event, jqXHR, settings) {
      //   // After an AJAX request is complete, set progress to a higher value (e.g., 90%)
      //   updateProgressBar(90);
      // });



      $.ajaxSetup({
        xhr: function() {
          var xhr = new XMLHttpRequest();
          xhr.upload.addEventListener('progress', function(evt) {
            if (evt.lengthComputable) {
              var percentComplete = Math.round((evt.loaded / evt.total) * 100);
              // Update the width of the progress bar inside #global-progress-bar
              $('#global-progress-bar .progress-bar').css('width', percentComplete + '%');
              // Update the text inside the progress bar (if needed)
              // $('#global-progress-bar .progress-bar').html(percentComplete + '%');
            }
          }, false);
          return xhr;
        }
      });
    </script>

    <script>
      // // Check if the collapse state is stored in local storage
      // const menuOpened = localStorage.getItem('menuOpened');

      // // If it's not null and 'true', collapse the element
      // if (menuOpened === true) {
      //     $('#components-pages').removeClass('show');
      // }

      // // Add an event listener to save the collapse state when it changes
      // $('#components-pages').on('click', function () {
      //   if ( $('#components-pages').hasClass('show')) {
      //     localStorage.setItem('menuOpened', true);
      //   }else{
      //     localStorage.setItem('menuOpened', false);
      //   }
      // });
    </script>
  </body>

  </html>