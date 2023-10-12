const countriesData = { action: "/countries/create" };
const sampliciousData = { action: "/samplicious/create" };

function stepOne() {
  const form = document.getElementById("countries-form");
  countriesData.data = $(form).serializeArray();
  $("#form-countries").fadeOut("fast", function () {
    $("#form-samplicious").fadeIn("fast");
    $("#prevSampBtn").show();
    $("#nextBtn").hide();
    $("#submitFormBtn").show();
  });

  // Prev Step
  prevButton();
}

function prevButton() {
  $("#prevSampBtn").click(function () {
    $("#form-samplicious").fadeOut("fast", function () {
      $("#form-countries").fadeIn("fast");
      $("#prevSampBtn").hide();
      $("#submitFormBtn").hide();
      $("#countriesBtn").show();
    });
  });
}

function sendBtn() {
  const form = document.getElementById("samplicious-form");
  sampliciousData.data = $(form).serializeArray();

  ajaxCall(sampliciousData.action, sampliciousData.data);
  ajaxCall(countriesData.action, countriesData.data);
}

function ajaxCall(url, data) {
  $.ajax({
    url: url,
    type: "post",
    dataType: "json",
    data: data,
  })
    .done(function (response) {
      if (response.data.success == true) {
        alert("success");
        console.log(response.data.data);
      }
    })
    .fail(function (jqXHR, textStatus, errorThrown) {
      console.error("AJAX error:", textStatus, errorThrown);

      // Log more details from jqXHR
      console.log("Status:", jqXHR.status);
      console.log("Response Text:", jqXHR.responseText);
    });
}
