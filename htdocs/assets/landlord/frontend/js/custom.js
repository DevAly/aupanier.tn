
    let lastScrollPosition = 0;
    const navbar = document.querySelector('.navbar-area');
    lastScrollPosition = window.scrollY;
    if (lastScrollPosition > 75)
  { 
      navbar.classList.add('navbar-dark');}
    else
    {
      
      navbar.classList.remove('navbar-dark');
  }
    window.addEventListener('scroll', function(e) {
      lastScrollPosition = window.scrollY;
      if (lastScrollPosition > 75)
    { 
        navbar.classList.add('navbar-dark');}
      else
      {
        
        navbar.classList.remove('navbar-dark');
    }
    });