$(function () {
  $(".vl").focus(function () {
    $(this).siblings().addClass("onp");
    $(this).blur(function () {
      if ($(this).val() == "") {
        $(this).siblings().removeClass("onp");
      }
    });
  });

  var pg = 0,
    sg = $(".sg"),
    ln = sg.length;

  function msd() {
    var dp = $(".sg").eq(pg);
    sg.hide();
    dp.show();
  }

  $(".nx").click(function (e) {
    pg += 1;
    if (pg > ln - 1) {
      pg = 0;
    }
    msd();
  });

  $(".pv").click(function () {
    pg -= 1;
    if (pg < 0) {
      pg = ln - 1;
    }
    msd();
  });

  $(".snx").keydown(function (e) {
    if (e.keyCode == 13) {
      pg += 1;
      if (pg > ln - 1) {
        pg = 0;
      }
      msd();
      var nm = $("#dnm").val(),
        ml = $("#dml").val(),
        ps = $("#dps").val();
      $(".nm").text(nm);
      $(".px2,.lr1").addClass("ys");
      $("#lml").focus();
    }
  });

  $(".lnx").keydown(function (e) {
    if (e.keyCode == 13) {
      pg += 1;
      if (pg > ln - 1) {
        pg = 0;
      }
      msd();
      var lml = $("#lml").val(),
        lps = $("#lps").val();
      $(".yml").text(lml);
      $(".yps").text(lps);
      $(".px3,.lr2").addClass("ys");
    }
  });

  $(".sp").click(function () {
    $(".px2,.lr1").addClass("ys");
    var nm = $("#dnm").val(),
      ml = $("#dml").val(),
      ps = $("#dps").val();
    $(".nm").text(nm);
    if (nm == "") {
      $(".nm").text("Engineer");
    }
  });

  $(".lg").click(function () {
    var lml = $("#lml").val(),
      lps = $("#lps").val();
    $(".yml").text(lml);
    $(".yps").text(lps);
    $(".px3,.lr2").addClass("ys");
    if (lml == "") {
      $(".yml").text("engineer@google.com");
      $(".yps").text("$#DDSD234234");
    }
  });

  $(".pv:eq(1)").click(function () {
    $(".px3,.lr2").removeClass("ys");
  });

  $(".pv:eq(0)").click(function () {
    $(".px2,.lr1").removeClass("ys");
  });
});
