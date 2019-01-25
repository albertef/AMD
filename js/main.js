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
    autoplayTimeout: 3000,
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



  $(".tab-list-cont li").on("click", function () {
    var id = $(this).attr("id");
    $(".tab-list-cont li").removeClass("active");
    $(this).addClass("active");
    $(".tab-content").hide();
    $("#" + id + "-content").fadeIn();
  });

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
