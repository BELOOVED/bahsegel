$(document).ready(function () {
  $(".mdropdown .mdropdown-trigger").on("click", function () {
    $(this).closest(".mdropdown").toggleClass("active");
  });
  $(
    ".main-menu > div > ul > li > a[href='" + location.pathname + "']"
  ).addClass("active");
});

function openmodal(val) {
  if (val == "deposit-modal") {
    $("#payment_frame").css("opacity", "0");
    $("#payment_frame").attr(
      "src",
      $("#payment_frame").attr("src") + "?v=" + Math.random()
    );
  }
  closemodal();
  $(".modal#" + val).addClass("active");
}

function closemodal() {
  $(".modal").removeClass("active");
}

function openzopim() {
  $zopim.livechat.window.show();
}

$(window).on("scroll", function () {
  if (scrollY > 70) {
    $(".fixed-header").addClass("sticky");
  } else {
    $(".fixed-header").removeClass("sticky");
  }
});

function loginorpay() {
  if (logged) {
    openmodal("deposit-modal");
  } else {
    openmodal("signin-modal");
  }
}

function loginoralert() {
  if (logged) {
    Swal.fire(
      "Yetersiz Bakiye",
      "Lüften bakiyenizi yükselttikten sonra tekrar deneyin",
      "warning"
    );
  } else {
    Swal.fire("", "Lüften hesabınıza giriş yapınız", "warning");
  }
}

$(document).on("submit", 'form[action="#"]', (e) => e.preventDefault());
$(document).on("click", 'a[href="#"]', (e) => e.preventDefault());
