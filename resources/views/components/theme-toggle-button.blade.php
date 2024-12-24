<link rel="stylesheet" href="{{asset('css/theme-toggle-button.css')}}">
<label class="switch">
  <input type="checkbox" id="theme-toggle"/>
  <span class="slider">
    <span class="circle">
      <span class="shine shine-1"></span>
      <span class="shine shine-2"></span>
      <span class="shine shine-3"></span>
      <span class="shine shine-4"></span>
      <span class="shine shine-5"></span>
      <span class="shine shine-6"></span>
      <span class="shine shine-7"></span>
      <span class="shine shine-8"></span>
      <span class="moon"></span>
    </span>
  </span>
</label>
<script>
    const themeToggle = document.getElementById('theme-toggle');

// Load the user's preferred theme on page load
window.addEventListener('load', () => {
    const savedTheme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', savedTheme);
    themeToggle.checked = savedTheme === 'dark'; // Set checkbox state
});

themeToggle.addEventListener('change', function() {
    const newTheme = this.checked ? 'dark' : 'light';
    document.documentElement.setAttribute('data-theme', newTheme);
    
    // Save the user's preference in localStorage
    localStorage.setItem('theme', newTheme);
});
</script>
