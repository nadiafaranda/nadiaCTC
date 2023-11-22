document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
  
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const rememberMe = document.getElementById('rememberMe').checked;
  
    // Here you would handle the login logic, like sending a request to your server
    // For now, we'll just log to the console and clear the form if "Remember me" is not checked
  
    console.log('Attempt to log in with username:', username, 'and password:', password);
  
    if (!rememberMe) {
      event.target.reset();
    }
    //hamburger icon
    const navToggle = document.getElementById('nav-toggle');
    const navLinks = document.querySelector('.nav-links');

    navToggle.addEventListener('click', () => {
        navLinks.classList.toggle('show');
    });
  });
  