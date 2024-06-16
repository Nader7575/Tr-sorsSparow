// // Get the modal
// var modal = document.getElementById("myModal");

// // Get the <span> element that closes the modal
// var span = document.getElementsByClassName("close")[0];

// // Get all images with the class "modal-trigger"
// var images = document.querySelectorAll(".modal-trigger");

// // Loop through each image and add a click event listener
// images.forEach(function (image) {
//   image.addEventListener("click", function () {
//     // Get the source of the image that was clicked
//     var src = this.getAttribute("data-modal-img");

//     // Set the source of the image in the modal
//     document.getElementById("modal-img").src = src;

//     // Show the modal
//     modal.style.display = "block";
//   });
// });

// // When the user clicks on <span> (x), close the modal
// span.onclick = function () {
//   modal.style.display = "none";
// };

// // When the user clicks anywhere outside of the modal, close it
// window.onclick = function (event) {
//   if (event.target == modal) {
//     modal.style.display = "none";
//   }
// };

$(document).ready(function () {
    // Initialize Slick slider
    $(".product-grid").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      prevArrow: $(".left-arrow"),
      nextArrow: $(".right-arrow"),
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
    });
  
    // Open modal on image click
    $(".modal-trigger").click(function () {
      var imgSrc = $(this).data("modal-img");
      $("#modal-img").attr("src", imgSrc);
      $("#myModal").show();
    });
  
    // Close modal on close button click
    $(".close").click(function () {
      $("#myModal").hide();
    });
  });
  