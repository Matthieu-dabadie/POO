function validateForm() {
  var puissance = parseInt(document.getElementById("puissance").value);
  var endurance = parseInt(document.getElementById("endurance").value);
  var orientation = parseInt(document.getElementById("orientation").value);
  var resistance = parseInt(document.getElementById("resistance").value);

  if (puissance + endurance + orientation + resistance > 20) {
    openPopup(
      "Les pouvoirs d'acier, l'invincibilité sans faille, l'instinct infaillible et la résilience légendaire ne peuvent s'élever au-delà de 20 points!"
    );
    return false;
  }

  return true;
}

function openPopup(message) {
  var popup = document.getElementById("popup");
  var popupMessage = document.getElementById("popup-message");

  popup.style.display = "flex";
  popupMessage.textContent = message;
}

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}
