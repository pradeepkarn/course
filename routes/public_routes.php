<?php
$public_routes = [
    "" => "Home_ctrl@index@name.home",
    "/" => "Home_ctrl@index@name.homeSlash",
    "/courses" => "Course_ctrl@index@name.courses",
    "/contact" => "Contact_ctrl@index@name.contact",
    "/about" => "About_ctrl@index@name.about",
    "/instructor" => "Instructor_ctrl@index@name.instructor",
    "/live-stream" => "LiveStream_ctrl@index@name.liveStream",
    "/register-as-instructor" => "Instructor_ctrl@reg@name.instructorReg",
    "/fetch-packages-by-cat-id-ajax" => "Travel_home_ctrl@fetch_packages_by_catid@name.fetchPkgAjax",
];
