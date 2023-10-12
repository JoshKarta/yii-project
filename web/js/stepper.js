const countriesData = { action: "/countries/create" };
const sampliciousData = { action: "/samplicious/create" };

const bulletDivs = [...document.querySelectorAll(".bullet")];
const stepLineDivs = [...document.querySelectorAll(".step-line")];
const totalBullets = bulletDivs.length;
let currentStep = 1;

function nextButton() {
  // Get form with id
  const form = document.getElementById("countries-form");

  // Save form values in array and place it in countriesData
  countriesData.data = $(form).serializeArray();

  // Change form
  $("#form-countries").fadeOut("fast", function () {
    $("#form-samplicious").fadeIn("fast");
    $("#prevSampBtn").show();
    $("#nextBtn").hide();
    $("#submitFormBtn").show();
  });

  // Update Steps
  const currentBullet = bulletDivs[currentStep - 1];
  currentBullet.classList.add("completed");
  // currentStep++;
}

function previousButton() {
  // Display form
  $("#form-samplicious").fadeOut("fast", function () {
    $("#form-countries").fadeIn("fast");
    $("#prevSampBtn").hide();
    $("#submitFormBtn").hide();
    $("#countriesBtn").show();
  });

  // Get form values
  const form = document.getElementById("samplicious-form");
  sampliciousData.data = $(form).serializeArray();

  // Update stepper
  const currentBullet = bulletDivs[currentStep - 1];
  currentBullet.classList.remove("completed");
  // currentStep--;
}

function submitButton() {
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
