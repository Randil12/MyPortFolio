const myButton = document.getElementById('my-button');
const sidebar = document.getElementById('sidebar');

myButton.addEventListener('click', () => {
  sidebar.classList.toggle('open');
});

print("OUI")