function Tester() {
  console.log("Button is clicked");
}

function Toast() {
  const toastTrigger = document.getElementById("liveToastBtn");
  const toastLiveExample = document.getElementById("liveToast");

  if (toastTrigger) {
    const toastBootstrap =
      bootstrap.Toast.getOrCreateInstance(toastLiveExample);
    // toastTrigger.addEventListener("click", () => {
      toastBootstrap.show();
    // });
  }
}

function OpenToast() {
  const toastLiveExample = document.getElementById("liveToast");

  const toastBootstrap =
      bootstrap.Toast.getOrCreateInstance(toastLiveExample);
      toastBootstrap.show();
}
