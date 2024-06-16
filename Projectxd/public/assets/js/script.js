
  
  //clique effet
  
  document.getElementById("myButton").addEventListener("click", function () {
    this.classList.add("effect");
    setTimeout(() => {
      this.classList.remove("effect");
    }, 600); // Durée de l'animation
  });
  
  // ajout panier
  