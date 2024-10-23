
  fetch('./assets/js/product.json')
  .then(response => response.json())
  .then(data => {
    const container = document.getElementById('rooms-container');

    // Generate HTML for each room and add it to the container
    data.forEach((room, index) => {
      const isLastCard = index === data.length - 1; // Check if it's the last room
      const isFirstCard = index === 0; // Check if it's the first room

      const cardHTML = `
        <div class="row room-card ${isFirstCard ? 'pt-4' : ''}"> <!-- Add padding to first card -->
          <div class="col-12 col-md-3 col-lg-3 p-0 pt-0 pt-md-0 pt-lg-1">
            <img src="${room.image}" alt="${room.roomName}" class="img-fluid self-check-in-images" />
          </div>
          <div class="price-flex col-12 col-md-3 col-lg-3 pt-4 pt-md-3 pt-lg-3">
            <div>
              <h2 class="font_size_25 blue roomName pt-2 font_weight_600">${room.roomName}</h2>
              <p class="price m-0 pt-0 pt-md-3 pt-lg-4 night"><del>${room.originalPrice}</del></p>
              <p class="taxes m-0">${room.taxes}</p>
            </div>
            <div>
              <h3 class="pt-5 font_size_23 font_weight_700 price-for-mobile">/${room.pricePerNight}<span class="night"></span></h3>
            </div>
          </div>
          <div class="col-12 col-md-3 col-lg-3 pt-2 pt-md-2 pt-md-3">
            <h3 class="pt-5 font_size_23 price-for-desktop">${room.pricePerNight}</h3>
          </div>
          <div class="col-12 col-md-3 col-lg-3 pt-3 pt-md-4 pt-lg-5">
            <button type="button" class="procced-btn" data-room-id="${index}">
              ${room.buttonText}
            </button>
          </div>
        </div>
        ${!isLastCard ? '<hr>' : ''}
      `;

      // Append the card HTML to the container
      container.innerHTML += cardHTML;
    });
     // Attach a single event listener to the container for delegation
     container.addEventListener('click', function (event) {
          // Check if the clicked element is a button with the class 'procced-btn'
          if (event.target.matches('.procced-btn')) {
            const roomId = event.target.getAttribute('data-room-id');
            const selectedRoom = data[roomId];

            // Perform actions with the selected room's data (if needed)
            console.log('Booking details for room:', selectedRoom);

            // Get the forms
            const formTwo = document.getElementById('form2'); // Replace with your actual form ID
            const formThree = document.getElementById('form3'); // Replace with your actual form ID

            // Check if the forms exist before attempting to change their display properties
            if (formTwo && formThree) {
              // Update data in formThree with selected room information
              const summaryRoomName = formThree.querySelector('#summaryRoomName');
              const brekfastElements = formThree.querySelectorAll('#brekfast, #desktopprice');
              const brekfastdiscount = formThree.querySelectorAll('#brekfastdiscount, #desktopdiscount');
              const brekfastElementTwo = formThree.querySelectorAll('#brekfasttwo, #desktoppricetwo');
              const brekfastdiscountTwo = formThree.querySelectorAll('#brekfastdiscounttwo, #desktopdiscounttwo');
              const brekfastElementsThree = formThree.querySelectorAll('#brekfastthree, #desktoppricethree');
              const brekfastdiscountThree = formThree.querySelectorAll('#brekfastdiscountthree, #desktopdiscountthree');
              const brekfastElementsFour = formThree.querySelectorAll('#brekfastfour, #desktoppricefour');
              const brekfastdiscountFour = formThree.querySelectorAll('#brekfastdiscountfour, #desktopdiscountfour');
             
              summaryRoomName.textContent = selectedRoom.roomName || 'No Room Name Available';
              brekfastElements.forEach(el => {
                // Do something with each element (if multiple exist) 
                el.textContent = selectedRoom.roomonly.foodprice;
              });

              brekfastdiscount.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.roomonly.discountprice;
              });
              
              brekfastElementTwo.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfast.foodprice;
              });
              
              brekfastdiscountTwo.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfast.discountprice ;
              });
              
              brekfastElementsThree.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfastandlunch.foodprice;
              });
              
              
              brekfastdiscountThree.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfastandlunch.discountprice ;
              });
              
              
              brekfastElementsFour.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfastandlunchdinner.foodprice;
              });
              
              
              brekfastdiscountFour.forEach(el => {
                // Do something with each element (if multiple exist)
                el.textContent = selectedRoom.brekfastandlunchdinner.discountprice;
              });
              
              // Hide formTwo
              formTwo.style.display = 'none';
              // Show formThree
              formThree.style.display = 'block';

              // Update URL for formThree
              history.pushState(null, '', '?step=booking');

              // Smoothly scroll to formThree
              formThree.scrollIntoView({ behavior: 'smooth', block: 'center' });
            } else {
              console.error('Form elements not found');
            }
          }
        });
  })
  .catch(error => console.error('Error fetching room data:', error));


