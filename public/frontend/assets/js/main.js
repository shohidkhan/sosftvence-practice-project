document.addEventListener("DOMContentLoaded", function () {
  // handle mobile sidebar
  const handleMobileSidebar = () => {
    try {
      const sidebar = document.querySelector(".mobile-sidebar");
      const overlay = document.querySelector(".sidebar-overlay");
      const menuToggle = document.querySelector(".menu-toggle");
      const sidebarClose = document.querySelector(".sidebar-close");

      // Open Sidebar
      menuToggle.addEventListener("click", () => {
        sidebar.classList.add("active");
        overlay.classList.add("active");
        document.body.style.overflow = "hidden";
      });

      // Close Sidebar
      const closeSidebar = () => {
        sidebar.classList.remove("active");
        overlay.classList.remove("active");
        document.body.style.overflow = "";
      };

      sidebarClose.addEventListener("click", closeSidebar);
      overlay.addEventListener("click", closeSidebar);
    } catch (error) {
      console.error("Error in handleMobileSidebar:", error);
    }
  };

  handleMobileSidebar();

  // handle marquee home
  const handleMarquee = () => {
    try {
      function Marquee(selector, speed) {
        const parentSelector = document.querySelector(selector);
        const clone = parentSelector.innerHTML;
        const firstElement = parentSelector.children[0];
        let i = 0;
        console.log(firstElement);
        parentSelector.insertAdjacentHTML("beforeend", clone);
        parentSelector.insertAdjacentHTML("beforeend", clone);

        setInterval(function () {
          firstElement.style.marginLeft = `-${i}px`;
          if (i > firstElement.clientWidth) {
            i = 0;
          }
          i = i + speed;
        }, 0);
      }

      window.addEventListener("load", () => Marquee(".marquee", 0.2));
    } catch (error) {
      console.error("Error in handleMarquee:", error);
    }
  };

  handleMarquee();

  // handle verify
  const handleVerify = () => {
    try {
      const inputs = document.querySelectorAll(".code-input");

      inputs.forEach((input, index) => {
        // Allow only numeric input
        input.addEventListener("input", (e) => {
          e.target.value = e.target.value.replace(/[^0-9]/g, ""); // Remove non-numeric characters

          // Focus on the next input if a number is entered
          if (e.target.value !== "") {
            if (index < inputs.length - 1) {
              inputs[index + 1].focus();
            }
          }
        });

        // Move focus back to previous input when pressing backspace
        input.addEventListener("keydown", (e) => {
          if (e.key === "Backspace" && e.target.value === "" && index > 0) {
            inputs[index - 1].focus();
          }
        });

        // Handle pasting a 6-digit code
        input.addEventListener("paste", (e) => {
          const pastedData = e.clipboardData
            .getData("text")
            .replace(/[^0-9]/g, "");
          if (pastedData.length === inputs.length) {
            inputs.forEach((input, i) => {
              input.value = pastedData[i];
            });
            inputs[inputs.length - 1].focus(); // Focus on the last input after pasting
            e.preventDefault();
          }
        });
      });
    } catch (error) {
      console.error("Error in handleVerify:", error);
    }
  };

  handleVerify();

  // handle upload file
  const handleFileUpload = () => {
    try {
      document
        .getElementById("file-input")
        .addEventListener("change", function () {
          const fileName = this.files[0]?.name || "No file selected";
          document.querySelector(".upload-file-text").textContent = fileName;
          console.log("Selected file:", fileName);
        });
    } catch (error) {
      console.error("Error in handleVerify:", error);
    }
  };

  handleFileUpload();

  // handle dashboard notificatio
  const handleDashboardNotification = () => {
    try {
      const bell = document.querySelector(".dashboard-notification");
      // const dropdown = document.querySelector(".dashboard-notification-dropdown");

      const dropdown = document.querySelector(".notification-wrapper");

      bell.addEventListener("click", function (event) {
        if (event.target === bell || bell.contains(event.target)) {
          dropdown.classList.toggle("active");
          dropdown.classList.remove("top", "left");
          dropdown.style.left = "";
          dropdown.style.right = "";

          const dropdownRect = dropdown.getBoundingClientRect();
          const viewportHeight = window.innerHeight;
          const viewportWidth = window.innerWidth;

          if (dropdownRect.bottom > viewportHeight) {
            dropdown.classList.add("top");
          }

          if (dropdownRect.right > viewportWidth) {
            dropdown.classList.add("left");
          }

          const updatedRect = dropdown.getBoundingClientRect();
          if (updatedRect.left < 0) {
            dropdown.style.left = "0";
            dropdown.style.right = "auto";
          }

          if (dropdown.classList.contains("active")) {
            document.addEventListener("click", handleClickOutside);
          } else {
            document.removeEventListener("click", handleClickOutside);
          }
        } else {
          handleClickOutside(event);
        }
      });

      function handleClickOutside(event) {
        if (!dropdown.contains(event.target) && !bell.contains(event.target)) {
          dropdown.classList.remove("active");
          document.removeEventListener("click", handleClickOutside);
        }
      }
    } catch (error) {
      console.error("Error in handleVerify:", error);
    }
  };

  handleDashboardNotification();

  // handle create campaign steps
  const setActiveStep = (step) => {
    try {
      const steps = document.querySelectorAll(".step");
      steps.forEach((s, index) => {
        const circle = s.querySelector(".step-circle");
        const label = s.querySelector(".step-label");
        const line = index < steps.length - 1 ? s.nextElementSibling : null;

        if (index < step - 1) {
          circle.classList.add("active");
          label.classList.add("active");
          if (line) line.classList.add("active");
        } else if (index === step - 1) {
          // Current step
          circle.classList.add("active");
          label.classList.add("active");
          if (line) line.classList.remove("active");
        } else {
          // Future steps
          circle.classList.remove("active");
          label.classList.remove("active");
          if (line) line.classList.remove("active");
        }
      });
    } catch (error) {
      console.error("Error in handleVerify:", error);
    }
  };

  setActiveStep(1);

  // Toggle Sidebar
  (() => {
    const sidebar = document.getElementById("sidebar");
    const overlay = document.getElementById("overlay");
    const toggleButton = document.getElementById("toggle-button");

    if ((sidebar, overlay, toggleButton)) {
      function toggleSidebar(e) {
        e.stopPropagation();
        if (sidebar.classList.contains("show")) {
          sidebar.classList.remove("show");
          overlay.classList.remove("active");
          document.body.style.overflow = "";
        } else {
          document.body.style.overflow = "hidden";
          sidebar.classList.add("show");
          overlay.classList.add("active");
        }
      }

      // Event listeners
      toggleButton.addEventListener("click", toggleSidebar);
      overlay.addEventListener("click", toggleSidebar);
    }
  })();

  // Multi-step form navigation functionality
  const handleChangeSteps = () => {
    try {
      const steps = document.querySelectorAll(".form-step");
      const nextButtons = document.querySelectorAll(".change-step.next");
      const prevButtons = document.querySelectorAll(".change-step.prev");
      let currentStep = 1;
  
      console.log(currentStep)

      // Initialize steps: show the first, hide the rest
      steps.forEach((step, index) => {
        step.style.display = index === 0 ? "block" : "none";
      });
  
      // Show the current step and hide others
      const showStep = (stepIndex) => {
        steps.forEach((step, index) => {
          if (index === stepIndex) {
            step.style.display = "block";
            setTimeout(() => step.classList.add("active"), 10);
          } else {
            step.classList.remove("active");
            setTimeout(() => (step.style.display = "none"), 500);
          }
        });
      };
  
      // Event listeners for "Next" buttons
      nextButtons.forEach((button) => {
        button.addEventListener("click", () => {
          if (currentStep < steps.length) {
            currentStep++;
            showStep(currentStep - 1);
            setActiveStep(currentStep);
          }
        });
      });
  
      // Event listeners for "Previous" buttons
      prevButtons.forEach((button) => {
        button.addEventListener("click", () => {
          if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
            setActiveStep(currentStep + 1); // Update step indicator
          }
        });
      });
    } catch (error) {
      console.error("An error occurred in handleChangeSteps:", error);
    }
  };
  
  handleChangeSteps();
  

  const profileUpload = document.getElementById("profileUpload");
  const profilePreview = document.getElementById("profilePreview");

  profileUpload.addEventListener("change", (event) => {
    const file = event.target.files[0];
    if (file) {
      const reader = new FileReader();
      reader.onload = (e) => {
        profilePreview.src = e.target.result;
      };
      reader.readAsDataURL(file);
    }
  });
});

