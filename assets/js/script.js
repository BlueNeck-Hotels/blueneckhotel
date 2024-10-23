"use strict";
// import Swal from "sweetalert2";
var startDate = null;
var endDate = null;
document.addEventListener("DOMContentLoaded", function () {
    var _a, _b, _c, _d;
    const today = new Date(); // Get today's date
    const tomorrow = new Date(today.getTime() + 24 * 60 * 60 * 1000); // Get tomorrow's date
    startDate = today;
    endDate = tomorrow;
    // Initialize the first Flatpickr (check-in)
    const checkInPicker = flatpickr("#datepickerOne", {
        dateFormat: "d/m/Y", // Set date format
        minDate: today, // Set minimum date to today
        defaultDate: today, // Set default date to today
        onChange: function (selectedDates) {
            startDate = selectedDates[0];
            if (startDate) {
                // Set the minimum date for check-out picker to one day after check-in
                checkOutPicker.set("minDate", new Date(startDate).fp_incr(1));
            }
            calculateNights(); // Call function to calculate nights
        },
    });
    // Initialize the second Flatpickr (check-out)
    const checkOutPicker = flatpickr("#datepickerTwo", {
        dateFormat: "d/m/Y", // Set date format
        minDate: today, // Set minimum date to today
        defaultDate: tomorrow, // Set default date to tomorrow
        onChange: function (selectedDates) {
            endDate = selectedDates[0];
            if (endDate) {
                // Set the maximum date for check-in picker to one day before check-out
                checkInPicker.set("maxDate", new Date(endDate).fp_incr(-1));
            }
            calculateNights(); // Call function to calculate nights
        },
    });
    // Open check-in datepicker when the icon is clicked
    (_a = document.getElementById("datepickerIcon")) === null || _a === void 0 ? void 0 : _a.addEventListener("click", function () {
        checkInPicker.open();
    });
    // Open check-out datepicker when the icon is clicked
    (_b = document.getElementById("datepickerIconSecond")) === null || _b === void 0 ? void 0 : _b.addEventListener("click", function () {
        checkOutPicker.open();
    });
    // Counter functionality
    let count = 1;
    const countChange = document.getElementById("count");
    // Function to calculate the difference in days (nights)
    function calculateNights() {
        if (startDate && endDate) {
            const timeDifference = endDate.getTime() - startDate.getTime();
            const nightCount = Math.ceil(timeDifference / (1000 * 60 * 60 * 24)); // Convert milliseconds to days
            count = nightCount;
            if (countChange) {
                countChange.innerHTML = nightCount.toString();
            }
        }
    }
    // Function to update the check-out date based on the current count of nights
    function updateCheckoutDate() {
        if (startDate && count > 0) {
            const newEndDate = new Date(startDate).fp_incr(count); // Calculate new check-out date based on nights
            checkOutPicker.setDate(newEndDate); // Update the check-out date picker
        }
    }
    // Function to manually decrement nights
    function minus() {
        if (count > 1) {
            count--;
            if (countChange) {
                countChange.innerHTML = count.toString();
            }
            updateCheckoutDate(); // Update check-out date when nights decrease
        }
    }
    // Function to manually increment nights
    function plus() {
        count++;
        if (countChange) {
            countChange.innerHTML = count.toString();
        }
        updateCheckoutDate(); // Update check-out date when nights increase
    }
    // Attach event listeners to minus and plus buttons
    (_c = document.querySelector('.carsour-pointer.minus')) === null || _c === void 0 ? void 0 : _c.addEventListener("click", minus);
    (_d = document.querySelector('.carsour-pointer.plus')) === null || _d === void 0 ? void 0 : _d.addEventListener("click", plus);
    // Set default nights count and update
    calculateNights();
});
// // Add event listener to "Proceed" button
// document.getElementById("Book")?.addEventListener("click", function () {
//   if (!startDate || !endDate) {
//     // Alert the user if check-in or check-out dates are not filled
//     alert("Please fill in both the check-in and check-out dates.");
//     return;  // Stop further execution if dates are not provided
//   }
//   // If dates are filled, apply the CSS changes
//   if (formOne && formTwo && check && vertical && textOne) {
//     formOne.style.display = "none";
//     formTwo.style.display = "block";
//     check.style.display = "inherit";
//     vertical.style.border = "2px solid var(--main_color)";
//     textOne.style.color = "var(--main_color)";
//   }
// });
const formOne = document.getElementById("form1");
const formTwo = document.getElementById("form2");
const formThree = document.getElementById("form3");
const formFour = document.getElementById("form4");
const formFive = document.getElementById("form5");
const book = document.getElementById("Book");
const bookingDetails = document.getElementById("bookingdetails");
//   const roomratebook = document.getElementById("roomratebook");
const backPayment = document.getElementById("back-payment");
const check = document.getElementById("check-box");
const checkSecond = document.getElementById("check-box-second");
const vertical = document.getElementById("vertical");
const verticalSecond = document.getElementById("vertical-second");
const textOne = document.getElementById("text-one");
const textTwo = document.getElementById("text-two");
const textThree = document.getElementById("text-three");
const checkBoxThree = document.getElementById("check-box-three");
const textColor = document.getElementById("text-color");
book === null || book === void 0 ? void 0 : book.addEventListener("click", () => {
    if (!startDate || !endDate) {
        alert("Please fill in both the check-in and check-out dates.");
        return;
    }
    if (formOne && formTwo && check && vertical && textOne) {
        formOne.style.display = "none";
        formTwo.style.display = "block";
        check.style.display = "inherit";
        vertical.style.border = "2px solid var(--main_color)";
        textOne.style.color = "var(--main_color)";
        // Update URL for formTwo
        history.pushState(null, "", "?step=2");
        formTwo.scrollIntoView({ behavior: "smooth", block: "center" });
    }
});
textOne === null || textOne === void 0 ? void 0 : textOne.addEventListener("click", () => {
    if (formOne && formTwo && formThree && check && vertical && textOne && formFive && formFour && checkSecond && verticalSecond && textTwo && checkBoxThree && textColor) {
        formOne.style.display = "block";
        formTwo.style.display = "none";
        formThree.style.display = "none";
        formFour.style.display = "none";
        formFive.style.display = "none";
        check.style.display = "none";
        vertical.style.border = "2px solid #A1A5A4";
        textOne.style.color = "#A1A5A4";
        checkSecond.style.display = "none";
        verticalSecond.style.border = "2px solid #A1A5A4";
        textTwo.style.color = "#A1A5A4";
        checkBoxThree.style.display = "none";
        textColor.style.color = "#A1A5A4";
        // Update URL for formOne
        history.pushState(null, "", "?step=1");
        formOne.scrollIntoView({ behavior: "smooth", block: "center" });
    }
});
bookingDetails === null || bookingDetails === void 0 ? void 0 : bookingDetails.addEventListener("click", () => {
    if (formTwo && formThree && textTwo) {
        formTwo.style.display = "none";
        formThree.style.display = "block";
        console.log("testing");
        // Update URL for formThree
        history.pushState(null, "", "?step=3");
        formThree.scrollIntoView({ behavior: "smooth", block: "center" });
    }
});
//   roomratebook?.addEventListener("click", () => {
//     if (formThree && formFour && checkSecond && verticalSecond && textTwo) {
//       formThree.style.display = "none";
//       formFour.style.display = "inherit";
//       checkSecond.style.display = "inherit";
//       verticalSecond.style.border = "2px solid var(--main_color)";
//       textTwo.style.color = "var(--main_color)";
//       // Update URL for formFour
//       history.pushState(null, "", "?step=4");
//       formFour.scrollIntoView({ behavior: "smooth", block: "center" });
//     }
//   });
{
    if (formThree && formFour && checkSecond && verticalSecond && textTwo) {
        formThree.style.display = "inherit";
        formFour.style.display = "none";
        checkSecond.style.display = "none";
        verticalSecond.style.border = "2px solid #A1A5A4";
        textTwo.style.color = "#A1A5A4";
        // Update URL for formThree
        history.pushState(null, "", "?step=3");
        formThree.scrollIntoView({ behavior: "smooth", block: "center" });
    }
}
;
// Tabs functionality
const tabs = [
    { tab: "block-simple-text-1-tab", content: "block-simple-text-1" },
    { tab: "block-simple-text-2-tab", content: "block-simple-text-2" },
    { tab: "block-simple-text-3-tab", content: "block-simple-text-3" },
    { tab: "block-simple-text-4-tab", content: "block-simple-text-4" },
];
tabs.forEach(({ tab, content }) => {
    const tabElement = document.getElementById(tab);
    const contentElement = document.getElementById(content);
    tabElement === null || tabElement === void 0 ? void 0 : tabElement.addEventListener("click", () => {
        tabs.forEach(({ content }) => {
            const contentTab = document.getElementById(content);
            if (contentTab) {
                contentTab.style.display = "none";
            }
        });
        if (contentElement) {
            contentElement.style.display = "block";
        }
    });
});
const roomCroses = document.getElementById("crose-btn");
roomCroses === null || roomCroses === void 0 ? void 0 : roomCroses.addEventListener("click", () => {
    if (formThree && formTwo) {
        formThree.style.display = "none";
        formTwo.style.display = "block";
        console.log("header");
    }
});
$(document).ready(function () {
    $(".nav-link:first").addClass("active");
    // When any nav-link is clicked
    $(".nav-link").click(function () {
        // Remove 'active' class from all nav-links
        $(".nav-link").removeClass("active");
        // Add 'active' class to the clicked nav-link
        $(this).addClass("active");
    });
});
// ==============radio============
// $(function(){
//   $('input[name="rad"]')``.click(function(){
//       var $radio = $(this);
//       // if this was previously checked
//       if ($radio.data('waschecked') == true)
//       {
//           $radio.prop('checked', false);
//           $radio.data('waschecked', false);
//       }
//       else
//           $radio.data('waschecked', true);
//       // remove was checked from other radios
//       $radio.siblings('input[type`="radio"]').data('waschecked', false);
//   });
// });
// ==============formvalidation============
function validateForm() {
    const firstNameInput = document.getElementById('firstName');
    const lastNameInput = document.getElementById('lastName');
    const emailInput = document.getElementById('emailAddress');
    const mobileNumberInput = document.getElementById('NumberValidata');
    const termsCheckbox = document.getElementById('termsCheckbox');
    const paymentSelect = document.getElementById('floatingSelect');
    const formFour = document.getElementById("form4");
    const formFive = document.getElementById("form5");
    const checkBoxThree = document.getElementById("check-box-three");
    const textColor = document.getElementById("text-color");
    let isValid = true;
    if (firstNameInput.value.trim() === '') {
        firstNameInput.style.border = '1px solid red';
        isValid = false;
    }
    else {
        firstNameInput.style.border = '1px solid green';
    }
    if (lastNameInput.value.trim() === '') {
        lastNameInput.style.border = '1px solid red';
        isValid = false;
    }
    else {
        lastNameInput.style.border = '1px solid green';
    }
    if (!validateEmail(emailInput.value.trim())) {
        emailInput.style.border = '1px solid red';
        isValid = false;
    }
    else {
        emailInput.style.border = '1px solid green';
    }
    if (mobileNumberInput.value.trim() === '' || isNaN(Number(mobileNumberInput.value.trim()))) {
        mobileNumberInput.style.border = '1px solid red';
        isValid = false;
    }
    else {
        mobileNumberInput.style.border = '1px solid green';
    }
    if (paymentSelect.value === 'Selec Payment Mode') {
        paymentSelect.style.border = '1px solid red';
        isValid = false;
    }
    else {
        paymentSelect.style.border = '1px solid green';
    }
    if (!termsCheckbox.checked) {
        alert('Please agree to the terms and conditions');
        isValid = false;
    }
    if (isValid) {
        if (checkBoxThree && formFour && formFive && textColor) {
            formFour.style.display = "none";
            formFive.style.display = "inherit";
            checkBoxThree.style.display = "inherit";
            textColor.style.color = "var(--main_color)";
        }
        firstNameInput.value = '';
        lastNameInput.value = '';
        emailInput.value = '';
        mobileNumberInput.value = '';
        paymentSelect.selectedIndex = 0;
        termsCheckbox.checked = false;
    }
}
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}
// =======getdatevalue=================
const getDateValue = document.getElementById('datepickerOne');
