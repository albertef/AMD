(function () {
  //OWL CAROUSEL INITIATION
  $("#owl-banner, #owl-banner1").owlCarousel({
    pagination: true,
    paginationNumbers: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    autoPlaySpeed: 1000,
    autoplayHoverPause: true,
    loop: true,
    animateOut: "fadeOut"
  });

  $("#owl-powerhouse").owlCarousel({
    pagination: true,
    paginationNumbers: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 5000,
    autoPlaySpeed: 1000,
    autoplayHoverPause: true,
    loop: true,
    animateOut: "fadeOut",
    nav: true,
    navText: ["&larr;", "&rarr;"]
  });

  $("#owl-campus").owlCarousel({
    pagination: true,
    paginationNumbers: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 4000,
    autoPlaySpeed: 1000,
    autoplayHoverPause: true,
    loop: true,
    animateOut: "fadeOut",
    nav: true,
    navText: ["&larr;", "&rarr;"]
  });

  $("#owl-campus-inner").owlCarousel({
    pagination: true,
    paginationNumbers: false,
    items: 1,
    autoplay: true,
    autoplayTimeout: 6000,
    autoPlaySpeed: 1000,
    autoplayHoverPause: true,
    loop: true,
    animateOut: "fadeOut",
    nav: true,
    navText: ["&larr;", "&rarr;"]
  });


  $("#owl-clients").owlCarousel({
    nav: true,
    pagination: false,
    navText: [
      '<i class="fa fa-chevron-left" aria-hidden="true"></i>',
      '<i class="fa fa-chevron-right" aria-hidden="true"></i>'
    ],
    items: 5,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true,
    loop: true,
    responsive: {
      0: {
        items: 2
      },
      600: {
        items: 3
      },
      1000: {
        items: 5
      }
    }
  });



  $(".fa-bars").on("click", function () {
    $(".main-nav").toggleClass("active");
    $(".overlay").toggleClass("active");
    $(this).toggleClass("open");
    if ($(".overlay").hasClass("active")) {
      $("body").addClass("no-scroll");
    }
    else {
      $("body").removeClass("no-scroll");
    }
  });

  $(".modal-header .close").on("click", function () {
    $(".modal").removeClass("in");
    $(".modal").fadeOut(500);
    if ($(this).hasClass("registration-close")) {
      window.location.assign("http://www.amd.edu.in/");
    }
    else {
      window.location.assign(window.location.pathname);
    }
  });

  $(".dropdown li a").on("click", function () {
    $(this).parents("ul").siblings("button")[0].innerHTML = $(this)[0].innerText + ' <span class="caret"></span>';
    var dropdownValue = $(this).attr("title");
    $(this).parents("ul").siblings("input")[0].value = dropdownValue;
  });

  $(':input[type=number]').on('mousewheel', function (e) {
    $(this).blur();
  });

  $('.selectpicker').selectpicker();

  $(".panel-body a").on("click", function () {
    $(this)
      .parent(".panel-body")
      .toggleClass("more");
    if (
      $(this)
        .parent(".panel-body")
        .hasClass("more")
    ) {
      $(this)
        .parent(".panel-body")
        .find("img")
        .addClass("full-image");
      $(this).html("View Less");
    } else {
      $(this)
        .parent(".panel-body")
        .find("img")
        .removeClass("full-image");
      $(this).html("View More");
    }
  });

  $("#myTabs a").click(function (e) {
    e.preventDefault();
    $(this).tab("show");
  });

  $(".bg-success, .bg-danger").hide(10000);
})();

function validateDropdown() {
  var courseVal = $('#joinForm').find('#courseHidden').val();
  if (courseVal == "") {
    $('.courseError').fadeIn().fadeOut(5000);
    return false;
  }
}

function seminarValidation() {
  var nameVal = $('#seminarForm').find('#name').val();
  var emailVal = $('#seminarForm').find('#email').val();

  if (/^[a-zA-Z ]*$/.test(nameVal) == false) {
    $('#seminarForm').find('#name').siblings('.courseError').fadeIn().fadeOut(5000);
    return false;
  }
  else if (/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/.test(emailVal) == false) {
    $('#seminarForm').find('#email').siblings('.courseError').fadeIn().fadeOut(5000);
    return false;
  }
}
