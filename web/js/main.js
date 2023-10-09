function Tester() {
  console.log("Button is clicked");
}

function Toast() {
  const toastTrigger = document.getElementById("liveToastBtn");
  const toastLiveExample = document.getElementById("liveToast");

  if (toastTrigger) {
    const toastBootstrap =
      bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    toastTrigger.addEventListener("click", () => {
      toastBootstrap.show();
    });
  }
}

function OpenToast() {
  const toastLiveExample = document.getElementById("liveToast");

  const toastBootstrap = bootstrap.Toast.getOrCreateInstance(toastLiveExample);
  toastBootstrap.show();
}

function Stepper() {
    $(document).ready(function() {
        $('#nextBtn').click(function() {
            $('#form-a').fadeOut('fast', function() {
                $('#form-b').fadeIn('fast');
                $('#prevBtn').show()
                $('#nextBtn').hide()
                $('#submitBtn').show()
            });
        });

        $('#prevBtn').click(function() {
          $('#form-b').fadeOut('fast', function() {
              $('#form-a').fadeIn('fast');
              $('#prevBtn').hide();
              $('#submitBtn').hide();
              $('#nextBtn').show();
          });
      });
    });
}