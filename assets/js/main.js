document.addEventListener("DOMContentLoaded", function () {
  const mobileMenuBtn = document.getElementById("mobileMenuBtn");
  const mainNav = document.querySelector(".main-nav");

  if (mobileMenuBtn && mainNav) {
    mobileMenuBtn.addEventListener("click", function () {
      mainNav.classList.toggle("show");
    });
  }
});

// verify otp
document.addEventListener("DOMContentLoaded", function () {
  const otpInputs = document.querySelectorAll(".otp-input");
  const timerElement = document.getElementById("otpTimer");

  if (otpInputs.length) {
    otpInputs.forEach(function (input, index) {
      input.addEventListener("input", function () {
        this.value = this.value.replace(/[^0-9]/g, "");

        if (this.value && index < otpInputs.length - 1) {
          otpInputs[index + 1].focus();
        }
      });

      input.addEventListener("keydown", function (event) {
        if (event.key === "Backspace" && !this.value && index > 0) {
          otpInputs[index - 1].focus();
        }
      });

      input.addEventListener("paste", function (event) {
        event.preventDefault();

        const pastedCode = event.clipboardData
          .getData("text")
          .replace(/[^0-9]/g, "")
          .slice(0, otpInputs.length);

        pastedCode.split("").forEach(function (number, pastedIndex) {
          otpInputs[pastedIndex].value = number;
        });

        const nextInputIndex =
          pastedCode.length < otpInputs.length
            ? pastedCode.length
            : otpInputs.length - 1;

        otpInputs[nextInputIndex].focus();
      });
    });
  }

  if (timerElement) {
    let remainingSeconds = 45;

    const otpCountdown = setInterval(function () {
      remainingSeconds--;

      const minutes = String(Math.floor(remainingSeconds / 60)).padStart(
        2,
        "0",
      );
      const seconds = String(remainingSeconds % 60).padStart(2, "0");

      timerElement.textContent = `${minutes}:${seconds}`;

      if (remainingSeconds <= 0) {
        clearInterval(otpCountdown);
        timerElement.textContent = "00:00";
      }
    }, 1000);
  }
});

// reset password js
document.addEventListener("DOMContentLoaded", function () {
  const passwordToggles = document.querySelectorAll(".reset-password-toggle");
  const newPasswordInput = document.getElementById("newPassword");
  const confirmPasswordInput = document.getElementById("confirmPassword");
  const confirmField = confirmPasswordInput
    ? confirmPasswordInput.closest(".reset-password-field")
    : null;
  const matchText = document.querySelector(".reset-match-text");

  passwordToggles.forEach(function (button) {
    button.addEventListener("click", function () {
      const targetId = this.getAttribute("data-target");
      const targetInput = document.getElementById(targetId);
      const icon = this.querySelector("i");

      if (!targetInput) {
        return;
      }

      if (targetInput.type === "password") {
        targetInput.type = "text";

        if (icon) {
          icon.classList.remove("bi-eye");
          icon.classList.add("bi-eye-slash");
        }
      } else {
        targetInput.type = "password";

        if (icon) {
          icon.classList.remove("bi-eye-slash");
          icon.classList.add("bi-eye");
        }
      }
    });
  });

  function checkPasswordMatch() {
    if (
      !newPasswordInput ||
      !confirmPasswordInput ||
      !confirmField ||
      !matchText
    ) {
      return;
    }

    const newPassword = newPasswordInput.value.trim();
    const confirmPassword = confirmPasswordInput.value.trim();

    if (confirmPassword.length === 0) {
      confirmField.classList.remove("is-matched");
      matchText.style.display = "none";
      return;
    }

    if (newPassword === confirmPassword) {
      confirmField.classList.add("is-matched");
      matchText.style.display = "flex";
      matchText.innerHTML =
        '<i class="bi bi-check-circle-fill"></i> Passwords match';
    } else {
      confirmField.classList.remove("is-matched");
      matchText.style.display = "flex";
      matchText.innerHTML =
        '<i class="bi bi-x-circle-fill"></i> Passwords do not match';
    }
  }

  if (newPasswordInput && confirmPasswordInput) {
    newPasswordInput.addEventListener("input", checkPasswordMatch);
    confirmPasswordInput.addEventListener("input", checkPasswordMatch);
    checkPasswordMatch();
  }
});

// Profilejs
document.addEventListener("DOMContentLoaded", function () {
  const profilePage = document.querySelector(".profile-page-section");
  const editBtn = document.getElementById("profileEditBtn");
  const backBtn = document.getElementById("profileBackBtn");
  const cancelBtn = document.getElementById("profileCancelBtn");
  const profileForm = document.getElementById("profileForm");
  const profileFields = document.querySelectorAll("[data-profile-field]");
  const photoInput = document.getElementById("profilePhotoInput");
  const previewImage = document.getElementById("profilePreviewImage");
  const removePhotoBtn = document.getElementById("profileRemovePhotoBtn");

  if (!profilePage) {
    return;
  }

  const originalValues = {};

  profileFields.forEach(function (field) {
    if (field.type === "checkbox") {
      originalValues[field.name || field.id] = field.checked;
    } else {
      originalValues[field.name || field.id] = field.value;
    }
  });

  function enableEditMode() {
    profilePage.classList.add("is-editing");

    profileFields.forEach(function (field) {
      if (field.tagName === "SELECT" || field.type === "checkbox") {
        field.disabled = false;
      } else {
        field.readOnly = false;
      }
    });

    window.scrollTo({
      top: profilePage.offsetTop,
      behavior: "smooth",
    });
  }

  function disableEditMode(restoreValues = false) {
    if (restoreValues) {
      profileFields.forEach(function (field) {
        const key = field.name || field.id;

        if (field.type === "checkbox") {
          field.checked = originalValues[key];
        } else {
          field.value = originalValues[key];
        }
      });
    }

    profileFields.forEach(function (field) {
      if (field.tagName === "SELECT" || field.type === "checkbox") {
        field.disabled = true;
      } else {
        field.readOnly = true;
      }
    });

    profilePage.classList.remove("is-editing");

    window.scrollTo({
      top: profilePage.offsetTop,
      behavior: "smooth",
    });
  }

  if (editBtn) {
    editBtn.addEventListener("click", enableEditMode);
  }

  if (backBtn) {
    backBtn.addEventListener("click", function () {
      disableEditMode(true);
    });
  }

  if (cancelBtn) {
    cancelBtn.addEventListener("click", function () {
      disableEditMode(true);
    });
  }

  if (profileForm) {
    profileForm.addEventListener("submit", function (event) {
      if (profileForm.getAttribute("action") === "#") {
        event.preventDefault();
        disableEditMode(false);
      }
    });
  }

  if (photoInput && previewImage) {
    photoInput.addEventListener("change", function () {
      const file = this.files[0];

      if (!file) {
        return;
      }

      const imageUrl = URL.createObjectURL(file);
      previewImage.src = imageUrl;
    });
  }

  if (removePhotoBtn && previewImage) {
    removePhotoBtn.addEventListener("click", function () {
      previewImage.src = "";
    });
  }
});

// bookings page js
document.addEventListener("DOMContentLoaded", function () {
  const tripsAlert = document.getElementById("tripsAlert");
  const tripsAlertClose = document.getElementById("tripsAlertClose");

  if (tripsAlert && tripsAlertClose) {
    tripsAlertClose.addEventListener("click", function () {
      tripsAlert.style.display = "none";
    });
  }
});

// trip details tabs
document.addEventListener("DOMContentLoaded", function () {
  const tripTabs = document.querySelectorAll(".trip-tab");
  const tripPanels = document.querySelectorAll(".trip-tab-panel");

  if (!tripTabs.length) {
    return;
  }

  tripTabs.forEach(function (tab) {
    tab.addEventListener("click", function () {
      const targetKey = this.getAttribute("data-trip-tab");

      tripTabs.forEach(function (t) {
        t.classList.remove("is-active");
      });

      tripPanels.forEach(function (p) {
        p.classList.remove("is-active");
      });

      this.classList.add("is-active");

      const targetPanel = document.querySelector(
        '[data-trip-panel="' + targetKey + '"]'
      );

      if (targetPanel) {
        targetPanel.classList.add("is-active");
      }
    });
  });
});

// Trips sidebar popup toggle (<=1024px)
document.addEventListener("DOMContentLoaded", function () {
  const sidebarToggle = document.getElementById("sidebarToggle");
  const tripsSidebar = document.getElementById("tripsSidebar");
  const sidebarBackdrop = document.getElementById("sidebarBackdrop");

  if (!sidebarToggle) {
    return;
  }

  if (!tripsSidebar) {
    sidebarToggle.style.display = "none";
    return;
  }

  function openSidebar() {
    sidebarToggle.classList.add("is-active");
    sidebarToggle.setAttribute("aria-expanded", "true");
    sidebarToggle.setAttribute("aria-label", "Close menu");
    tripsSidebar.classList.add("is-active");

    if (sidebarBackdrop) {
      sidebarBackdrop.classList.add("is-active");
    }

    document.body.classList.add("sidebar-open");
  }

  function closeSidebar() {
    sidebarToggle.classList.remove("is-active");
    sidebarToggle.setAttribute("aria-expanded", "false");
    sidebarToggle.setAttribute("aria-label", "Open menu");
    tripsSidebar.classList.remove("is-active");

    if (sidebarBackdrop) {
      sidebarBackdrop.classList.remove("is-active");
    }

    document.body.classList.remove("sidebar-open");
  }

  sidebarToggle.addEventListener("click", function () {
    if (tripsSidebar.classList.contains("is-active")) {
      closeSidebar();
    } else {
      openSidebar();
    }
  });

  if (sidebarBackdrop) {
    sidebarBackdrop.addEventListener("click", closeSidebar);
  }

  document.addEventListener("keydown", function (event) {
    if (event.key === "Escape" && tripsSidebar.classList.contains("is-active")) {
      closeSidebar();
    }
  });

  window.addEventListener("resize", function () {
    if (window.innerWidth > 1024 && tripsSidebar.classList.contains("is-active")) {
      closeSidebar();
    }
  });
});
