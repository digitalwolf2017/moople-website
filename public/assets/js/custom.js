/* sticky navbar */
window.addEventListener("scroll", function () {
  var header = document.querySelector("#header");
  header.classList.toggle("bg-[#283844e3]", window.scrollY > 10);
});
/* sticky navbar */
/* remove reverse from header */
document.getElementById("closeReserve").addEventListener("click", function () {
  document.getElementById("reserve").classList.add("hidden");
  document.getElementById("reserve2").classList.add("mt-[5rem]", "lg:mt-20");
});
/* remove reverse from header */
/* drawer */
const openButton = document.getElementById("openDrawer");
const closeButton = document.getElementById("closeDrawer");
const drawer = document.getElementById("drawer");
const drawerPanel = document.getElementById("drawerPanel");
const overlay = document.getElementById("drawerOverlay");

// Function to open the drawer
openButton.addEventListener("click", () => {
  drawer.classList.remove("hidden"); // Unhide the drawer
  setTimeout(() => {
    // Transition the drawer in
    drawerPanel.classList.remove("translate-x-full");
    drawerPanel.classList.add("translate-x-0");
    overlay.classList.remove("opacity-0");
    overlay.classList.add("opacity-100");
  }, 10); // Delay to allow class change to trigger transition
});

// Function to close the drawer
function closeDrawer() {
  // Transition the drawer out
  drawerPanel.classList.remove("translate-x-0");
  drawerPanel.classList.add("translate-x-full");
  overlay.classList.remove("opacity-100");
  overlay.classList.add("opacity-0");

  // After transition, hide the drawer
  setTimeout(() => {
    drawer.classList.add("hidden");
  }, 500); // Match the duration of the transition
}

// Attach closeDrawer to both the close button and the overlay
closeButton.addEventListener("click", closeDrawer);
overlay.addEventListener("click", closeDrawer);
/* end drawer */

/* course details accordion */
function toggleAccordion(index) {
  const contents = document.querySelectorAll('[id^="content-"]');
  const icons = document.querySelectorAll('[id^="icon-"]');

  // SVG for Minus icon
  const minusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path fill="white" d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    </svg>
    `;

  // SVG for Plus icon
  const plusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path fill="white" d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
    </svg>
    `;

  // Close all other accordions
  contents.forEach((content, i) => {
    if (i + 1 !== index) {
      content.style.maxHeight = "0";
      icons[i].innerHTML = plusSVG;
    }
  });

  // Toggle the clicked accordion
  const content = document.getElementById(`content-${index}`);
  const icon = document.getElementById(`icon-${index}`);

  if (content.style.maxHeight && content.style.maxHeight !== "0px") {
    content.style.maxHeight = "0";
    icon.innerHTML = plusSVG;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
    icon.innerHTML = minusSVG;
  }
}

// Set first accordion to be open by default
document.addEventListener("DOMContentLoaded", () => {
  const firstContent = document.getElementById(`content-${index}`);
  const firstIcon = document.getElementById(`icon-${index}`);

  firstContent.style.maxHeight = firstContent.scrollHeight + "px";
  firstIcon.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path fill="white" d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    </svg>
    `;
});
/* end */
/* Faq accordion */
function faqAccordion(index) {
  const contents = document.querySelectorAll('[id^="faqContent-"]');
  const icons = document.querySelectorAll('[id^="faqIcon-"]');

  // SVG for Minus icon
  const minusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path fill="white" d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
      </svg>
    `;

  // SVG for Plus icon
  const plusSVG = `
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path fill="white" d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
      </svg>
    `;

  // Close all other accordions
  contents.forEach((content, i) => {
    if (i + 1 !== index) {
      content.style.maxHeight = "0";
      icons[i].innerHTML = plusSVG;
    }
  });

  // Toggle the clicked accordion
  const content = document.getElementById(`faqContent-${index}`);
  const icon = document.getElementById(`faqIcon-${index}`);

  if (content.style.maxHeight && content.style.maxHeight !== "0px") {
    content.style.maxHeight = "0";
    icon.innerHTML = plusSVG;
  } else {
    content.style.maxHeight = content.scrollHeight + "px";
    icon.innerHTML = minusSVG;
  }
}
/* end */

/* Tab content */
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll('[role="tab"]');
  const tabContents = document.querySelectorAll('[role="tabpanel"]');

  tabs.forEach((tab) => {
    tab.addEventListener("click", () => {
      // Remove active state from all tabs
      tabs.forEach((t) => {
        t.setAttribute("aria-selected", "false");
        t.classList.remove("text-slate-100", "bg-[#353535]");
        t.classList.add("text-slate-300");
      });

      // Hide all tab panels
      tabContents.forEach((content) => {
        content.classList.add("hidden", "opacity-0");
      });

      // Add active state to clicked tab
      tab.setAttribute("aria-selected", "true");
      tab.classList.remove("text-slate-300");
      tab.classList.add("text-slate-100", "bg-[#353535]");

      // Show the corresponding tab panel
      const target = tab.getAttribute("aria-controls");
      const activeContent = document.getElementById(target);
      activeContent.classList.remove("hidden", "opacity-0");
    });
  });
});
/* end */
/* dropdown menu */
document.querySelectorAll(".dropdown-button").forEach((dropdownBtn, index) => {
  dropdownBtn.addEventListener("click", () => {
    const dropdownMenu = dropdownBtn.nextElementSibling; // Get the next sibling (menu)
    const icon = dropdownBtn.querySelector(".dropdown-icon");

    // SVG for Minus icon
    const minusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M3.75 7.25a.75.75 0 0 0 0 1.5h8.5a.75.75 0 0 0 0-1.5h-8.5Z" />
    </svg>
`;

    // SVG for Plus icon
    const plusSVG = `
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="w-4 h-4">
        <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
    </svg>
`;

    // Toggle max-height for the transition
    if (dropdownMenu.style.maxHeight) {
      dropdownMenu.style.maxHeight = null; // Collapse the menu
      icon.innerHTML = plusSVG;
    } else {
      dropdownMenu.style.maxHeight = dropdownMenu.scrollHeight + "px"; // Expand the menu
      icon.innerHTML = minusSVG;
    }
  });
});
/* end */
/* scroll bar in course page */
function courseDetails() {
  document
    .getElementById("course-details")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function payment() {
  document
    .getElementById("payment")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function scholarship() {
  document
    .getElementById("scholarship")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function faculties() {
  document
    .getElementById("faculties")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function career() {
  document
    .getElementById("career")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function recruiters() {
  document
    .getElementById("recruiters")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function testimonial() {
  document
    .getElementById("testimonial")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}
function faq() {
  document
    .getElementById("faq")
    .scrollIntoView({ behavior: "smooth", block: "center" });
}

/* end */

/* modal */
// Function to open the modal
function openModal(modal) {
    modal.classList.remove('opacity-0', 'pointer-events-none');
    modal.classList.add('opacity-100', 'pointer-events-auto');
  }
  
  // Function to close the modal
  function closeModal(modal) {
    modal.classList.remove('opacity-100', 'pointer-events-auto');
    modal.classList.add('opacity-0', 'pointer-events-none');
  }
  
  // Select all buttons that open modals
  const openModalButtons = document.querySelectorAll('[data-modal-target]');
  // Select all modals
  const modals = document.querySelectorAll('.modal');
  // Select all buttons that close modals
  const closeModalButtons = document.querySelectorAll('.close-modal');
  
  // Attach event listeners to open buttons
  openModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modalId = button.getAttribute('data-modal-target');
      const modal = document.getElementById(modalId);
      openModal(modal);
    });
  });
  
  // Attach event listeners to close buttons
  closeModalButtons.forEach(button => {
    button.addEventListener('click', () => {
      const modal = button.closest('.modal');
      closeModal(modal);
    });
  });
  
  // Close modal when clicking on the backdrop (overlay)
  modals.forEach(modal => {
    modal.addEventListener('click', (event) => {
      if (event.target === modal) {
        closeModal(modal);
      }
    });
  });
/* end */
