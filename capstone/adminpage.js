document.addEventListener('DOMContentLoaded', function() {
  const homeButton = document.getElementById('logobtn');
  const adminBtn = document.getElementById('adminbtn-id');
  const popup = document.getElementById('popup-id');
  const logoutBtn = document.getElementById('logout-popup-id');

  homeButton.addEventListener('click', function() {
      window.location.href = 'index.html';
  });

  adminBtn.addEventListener('click', function() {
      if (popup.style.display === 'block') {
          popup.style.display = 'none';
      } else {
          popup.style.display = 'block';
      }
  });

  logoutBtn.addEventListener('click', function() {
      // Make an AJAX request to end the session or redirect to a PHP script that handles logout
      fetch('logout.php')
          .then(response => response.text())
          .then(data => {
              window.location.href = 'index.html';
          })
          .catch(error => console.error('Error:', error));
  });
});
